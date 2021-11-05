$(document).ready(function() {
    const mainUrl = "/index.php?route=extension/module/selection_disks_tires";
    function deleteOptions(select) {
        $("#"+select+" option").each(function() {
            $(this).remove();
        });
    }

    let modelSelect = $('#modelSelect');
    let yearSelect = $('#yearSelect');
    let modificationSelect = $('#modificationSelect');
    let buttonSelection = $("#button-selection")

    $("#brandSelect").change(function() {
        deleteOptions('modelSelect');
        deleteOptions('yearSelect');
        deleteOptions('modificationSelect');
        modelSelect.prop( "disabled", true );
        yearSelect.prop( "disabled", true );
        modificationSelect.prop( "disabled", true );
        buttonSelection.prop( "disabled", true );
        $.getJSON(`${mainUrl}/models&brand=${$(this).val()}`, function(data) {
            modelSelect.append($('<option>', {
                value: null,
                text: 'Выберите Модель'
            }));
            data.forEach(function(item) {
                modelSelect.append($('<option>', {
                    value: item['name_short'],
                    text: item['name']
                }));
            });
            modelSelect.prop( "disabled", false );
        })
    })

    modelSelect.change(function() {
        deleteOptions('yearSelect');
        deleteOptions('modificationSelect');
        yearSelect.prop( "disabled", true );
        modificationSelect.prop( "disabled", true );
        buttonSelection.prop( "disabled", true );
        let brand = $("#brandSelect option:selected").val();
        $.getJSON(`${mainUrl}/years&brand=${brand}&model=${$(this).val()}`, function(data) {
            yearSelect.append($('<option>', {
                value: null,
                text: 'Выберите Год выпуска'
            }));
            data.forEach(function(item) {
                yearSelect.append($('<option>', {
                    value: item['value'],
                    text: item['value']
                }));
            });
            yearSelect.prop( "disabled", false );
        })
    })

    yearSelect.change(function() {
        deleteOptions('modificationSelect');
        modificationSelect.prop( "disabled", true );
        buttonSelection.prop( "disabled", true );
        let brand = $("#brandSelect option:selected").val();
        let model = $("#modelSelect option:selected").val();
        $.getJSON(`${mainUrl}/modifications&brand=${brand}&model=${model}&year=${$(this).val()}`, function(data) {
            modificationSelect.append($('<option>', {
                value: null,
                text: 'Выберите Модификацию'
            }));
            data.forEach(function(item) {
                modificationSelect.append($('<option>', {
                    value: item['name_short'],
                    text: item['name']
                }));
            });
            modificationSelect.prop( "disabled", false );
        })
    })

    modificationSelect.change(function() {
        buttonSelection.prop( "disabled", false );
    })

    buttonSelection.click(function() {
        let brand = $("#brandSelect option:selected").val();
        let model = $("#modelSelect option:selected").val();
        let year = $("#yearSelect option:selected").val();
        let modification = $("#modificationSelect option:selected").val();

        if (!brand || !model || !year || !modification) {
            return;
        }
        $("#variant_tires_factory").html('')
        $("#variant_tires_replacement").html('')
        $.getJSON(`${mainUrl}/variants&brand=${brand}&model=${model}&year=${year}&modification=${modification}`, function (data) {
            if (data.factory) {
                let list = document.createElement("ul");
                data.factory.forEach(function (item) {
                    if (item.tire_marking) {
                        let tire = JSON.parse(item.tire_marking)
                        let li = document.createElement("li");
                        li.appendChild(document.createTextNode(tire.width+"/"+tire.proportionality+" R"+tire.diameter));
                        list.appendChild(li);
                    }
                    if (item.tire_marking_front_axle && item.tire_marking_rear_axle) {
                        let tireFront = JSON.parse(item.tire_marking_front_axle)
                        let tireRear = JSON.parse(item.tire_marking_rear_axle)
                        let li = document.createElement("li");
                        li.appendChild(document.createTextNode("Передняя ось "+tireFront.width+"/"+tireFront.proportionality+" R"+tireFront.diameter+". Задняя ось "+tireRear.width+"/"+tireRear.proportionality+" R"+tireRear.diameter));
                        list.appendChild(li);
                    }
                })
                $("#variant_tires_factory").append(list)
            }
            if (data.replacement) {
                let list = document.createElement("ul");
                data.replacement.forEach(function (item) {
                    if (item.tire_marking) {
                        let tire = JSON.parse(item.tire_marking)
                        let li = document.createElement("li");
                        li.appendChild(document.createTextNode(tire.width+"/"+tire.proportionality+" R"+tire.diameter));
                        list.appendChild(li);
                    }
                    if (item.tire_marking_front_axle && item.tire_marking_rear_axle) {
                        let tireFront = JSON.parse(item.tire_marking_front_axle)
                        let tireRear = JSON.parse(item.tire_marking_rear_axle)
                        let li = document.createElement("li");
                        li.appendChild(document.createTextNode("Передняя ось "+tireFront.width+"/"+tireFront.proportionality+" R"+tireFront.diameter+". Задняя ось "+tireRear.width+"/"+tireRear.proportionality+" R"+tireRear.diameter));
                        list.appendChild(li);
                    }
                })
                $("#variant_tires_replacement").append(list)
            }
        })
    });
})

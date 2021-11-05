FROM webdevops/php:7.4
LABEL maintainer="iioe"

ENV PHP_DISMOD=ioncube,redis,mongodb,pdo_pgsql,pgsql,posix,soap,mpdo
ENV PHP_MEMORY_LIMIT=512M
ENV PHP_DATE_TIMEZONE=Europe/Moscow
ENV PHP_MAX_EXECUTION_TIME=2000
ENV PHP_DISPLAY_ERRORS=off
ENV php.upload_tmp_dir=var/tmp

COPY ./ /app
WORKDIR /app
RUN composer install

RUN chmod 0755 storage/cache/ \
    && chmod 0755 storage/logs/ \
    && chmod 0755 storage/modification/ \
    && chmod 0755 storage/session/ \
    && chmod 0755 storage/upload/ \
    && chmod 0755 upload/image/ \
    && chmod 0755 upload/image/cache/ \
    && chmod 0755 upload/image/catalog/ \

EXPOSE 9000

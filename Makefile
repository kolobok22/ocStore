.PHONY: up down stop restart build-prod

up: docker-up
down: docker-down
restart: docker-down docker-up

phpstan:
	docker-compose exec php composer phpstan

test:
	docker-compose exec php composer test

stop:
	docker-compose stop

docker-up:
	docker-compose up -d

docker-down:
	docker-compose down --remove-orphans

build-prod:
	echo argument is $(version)
	docker build -f .docker/prod/php/Dockerfile -t shop_php:$(version) -t shop_php:latest .
	docker build -f .docker/prod/nginx/Dockerfile -t shop_nginx:$(version) -t shop_nginx:latest .

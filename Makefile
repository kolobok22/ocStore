.PHONY: up down stop restart phpstan test build-stage build-prod

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

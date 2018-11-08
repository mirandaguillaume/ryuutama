-include .env

DC_WWW_DATA=docker-compose exec --user www-data

.PHONY: up-all
up-all: up update-hosts

.PHONY: up
up:
	@docker-compose up -d
	@printf "\t%-30s\t%-20s\n" "Name" "IP"
	@for id in $(shell docker ps -f "name=$(COMPOSE_PROJECT_NAME)" -q); do \
		docker inspect -f '{{printf "\t%-30s\t%-20s" .Name .NetworkSettings.Networks.$(COMPOSE_PROJECT_NAME)_default.IPAddress}}' $$id; \
	done

.PHONY: down
down:
	@docker-compose down

.PHONY: restart
restart:
	@docker-compose restart

.PHONY: stop
stop:
	@docker-compose stop

.PHONY: build
build:
	@docker-compose build

build-pull:
	@docker-compose build --pull

.PHONY: logs
logs:
	docker-compose logs -f

.PHONY: sh-php
sh-php:
	$(DC_WWW_DATA) php sh

.PHONY: sh-nginx
sh-nginx:
	$(DC_WWW_DATA) nginx sh

.PHONY: install
install:
	$(DC_WWW_DATA) php composer install && $(DC_WWW_DATA) php bin/console d:s:u --force

.PHONY: update
update:
	$(DC_WWW_DATA) php composer update

.PHONY: outdated
outdated:
	$(DC_WWW_DATA) php composer outdated

.PHONY: test
test:
	$(DC_WWW_DATA) php bin/phpunit

.PHONY: test-functional
test-functional:
	$(DC_WWW_DATA) php bin/behat --suite=local

.PHONY: update-hosts
update-hosts:
	@echo "Adding IP to /etc/hosts (required sudo)"
	@echo "Hosts: ryuutama.local"
	@sudo sed -i '/ryuutama.local/d' /etc/hosts
	@sudo /bin/sh -c 'echo `docker inspect -f {{.NetworkSettings.Networks.$(COMPOSE_PROJECT_NAME)_default.IPAddress}} $(COMPOSE_PROJECT_NAME)_nginx_1`	"$(COMPOSE_PROJECT_NAME) ryuutama.local" >> /etc/hosts'

.PHONY: phpcs
phpcs:
	$(DC_WWW_DATA) php bin/php-cs-fixer fix --config=.php_cs ./src

.PHONY: phpcs-dry
phpcs-dry:
	$(DC_WWW_DATA) php bin/php-cs-fixer fix --config=.php_cs --dry-run ./src

.PHONY: cache-clear
cache-clear:
	$(DC_WWW_DATA) php rm -rf app/cache/* var/cache/*

.PHONY: schema-update
schema-update:
	$(DC_WWW_DATA) php php bin/console doctrine:schema:update --force

run:
	docker-compose up -d

build:
	docker-compose -f docker-compose.yml up -d

# Stop all containers related to the app
stop:
	docker-compose stop

clean:
	docker-compose down
	docker rmi nginx
	docker rmi php

app-dev:
	docker-compose exec app yarn dev

app-bash:
	docker-compose exec app ash
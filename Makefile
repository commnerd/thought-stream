.PHONY: help run run-docker clean

help:
	@echo ""
	@echo "Usage: make [BUILD_TARGET]"
	@echo "Make elements of this project"
	@echo ""
	@echo "BUILD_TARGET:"
	@echo "help       - This text (default)"
	@echo "up         - Runs the application using default setup"
	@echo "down       - Kills the application"
	@echo "run        - Alias for `make up`"
	@echo "run-docker - Run the application in leveraging docker-compose"
	@echo "clean      - Cleans up project"

up:
	@if [ "$$(which docker-compose)" ];\
	       	then $(MAKE) docker-up;\
	fi;
down:
	@if [ "$$(which docker-compose)" ];\
	       	then $(MAKE) docker-down;\
	fi;
	
docker-up:
	docker-compose -f docker-compose.yml -f web/docker-compose.yml up -d

docker-down:
	docker-compose -f docker-compose.yml -f web/docker-compose.yml down


clean:
	@echo "Clean to be implemented."

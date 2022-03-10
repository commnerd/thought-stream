.PHONY: help run run-docker clean

help:
	@echo ""
	@echo "Usage: make [BUILD_TARGET]"
	@echo "Make elements of this project"
	@echo ""
	@echo "BUILD_TARGET:"
	@echo "help       - This text (default)"
	@echo "run        - Runs the application using default setup"
	@echo "run-docker - Run the application in leveraging docker-compose"
	@echo "clean      - Cleans up project"

run:
	@if [ "$$(which docker-compose)" ];\
	       	then $(MAKE) run-docker;\
	fi;

run-docker:
	docker-compose up -d

clean:
	@echo "Clean to be implemented."

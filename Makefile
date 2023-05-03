init:
	docker-compose up -d --build
down:
	@docker-compose down -v
.PHONY: clean test code-sniff init

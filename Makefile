.PHONY: all
all: cs-fix test

.PHONY: cs-fix
cs-fix:
	composer run cs:fix

.PHONY: test
test:
	composer run test

test : test-7 test-8

test-% : docker/php%.image
	mkdir -p work/$*
	cd work/$* && find . -not \( -path ./vendor -prune \) -type f -print0 | xargs -0r rm -f
	bin/package --php $* | tar x -C work/$*
	docker run --rm \
		-v $(CURDIR)/work/$*:/work \
		-v ~/.composer/auth.json:/root/.composer/auth.json \
		$(shell cat docker/php$*.image) \
		sh -c 'cd /work && composer install && vendor/bin/phpunit test'

docker/php%.image :
	docker build --pull --iidfile $@ ./docker/php$*

.DEFAULT_GOAL := testenv

.PHONY: testenv
testenv:
	docker run \
		--rm -it \
		-v $(PWD):/sdk \
		-w /sdk \
		composer:1.8 \
		/bin/bash -c "composer i; /bin/bash"

.PHONY: test
test:
	docker run \
		--rm -it \
		-v $(PWD):/sdk \
		-w /sdk \
		composer:1.8 \
		/bin/bash -c "composer i; chmod +x test/run.sh && IAPI_KEY=$(IAPI_KEY) MAPI_KEY=$(MAPI_KEY) ./test/run.sh"
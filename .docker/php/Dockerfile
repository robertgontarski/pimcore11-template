FROM pimcore/pimcore:php8.2-debug-latest

ENV SHELL /bin/bash

RUN apt-get update && apt-get install -y curl && \
    curl -sL https://deb.nodesource.com/setup_20.x | bash - && \
    apt-get install -y nodejs
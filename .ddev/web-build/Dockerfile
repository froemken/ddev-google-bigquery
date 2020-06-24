# You can copy this Dockerfile.example to Dockerfile to add configuration
# or packages or anything else to your webimage
ARG BASE_IMAGE
FROM $BASE_IMAGE
ENV PHP_VERSION=7.3
RUN apt-get update
# It will find the PHP FPM config of DDev. Do not override it. So use special DPKG configuration to keep old config file
RUN DEBIAN_FRONTEND=noninteractive apt-get install -y -o Dpkg::Options::=--force-confdef -o Dpkg::Options::=--force-confold --no-install-recommends --no-install-suggests gcc g++ make autoconf zlib1g-dev php${PHP_VERSION}-dev php-pear
RUN pecl install grpc

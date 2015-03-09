FROM phusion/baseimage

RUN apt-get update

RUN apt-get install -y nginx php5-fpm

RUN apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

ADD files /

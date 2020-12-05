FROM docker.io/centos/httpd
MAINTAINER Joe Sørensen <joe.sorensen@flug.dk>

RUN yum -y install git
RUN yum -y install php

#RUN git clone --single-branch --branch Temp https://github.com/Diblo/flug.dk.git /var/www/html
COPY . /var/www/html

ADD httpd/conf.d/flug.dk.conf /etc/httpd/conf.d/

RUN yum -y update
RUN rm -rf /var/cache/yum && yum clean all

RUN ln -sf /dev/stdout /var/log/httpd/access_log && ln -sf /dev/stderr /var/log/httpd/error_log


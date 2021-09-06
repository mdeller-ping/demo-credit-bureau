FROM php:7.0-apache
EXPOSE 80
RUN apt-get update
RUN apt-get install -y git
RUN git clone https://github.com/mdeller-ping/demo-home
RUN cp demo-home/dist/* /var/www/html
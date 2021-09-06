FROM php:7.0-apache
EXPOSE 80
RUN apt-get update
RUN apt-get install -y git
RUN git clone https://github.com/mdeller-ping/demo-credit-bureau
RUN cp -r demo-credit-bureau/dist /var/www/html
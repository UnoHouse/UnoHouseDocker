FROM ubuntu:16.04

MAINTAINER unohouse.com.pl

# ADD REPOSITORIES
RUN apt-get update -y

# INSTALL Apache
RUN apt-get update && \
    apt-get dist-upgrade -y && \
    apt-get install -y \
    apache2

# ENABLE MODULES
RUN a2enmod rewrite expires headers deflate proxy proxy_http proxy_balancer lbmethod_byrequests proxy_html
RUN service apache2 restart

# APACHE
RUN a2enmod rewrite
RUN chown -R www-data:www-data /var/www
ENV APACHE_RUN_USER www-data
ENV APACHE_RUN_GROUP www-data
ENV APACHE_LOG_DIR /var/log/apache2

# PREPARE VHOST
RUN rm -f /etc/apache2/sites-enabled/*
ADD vhost.conf /etc/apache2/sites-enabled

COPY apache2-foreground /usr/local/bin/
RUN chmod 777 /usr/local/bin/apache2-foreground

EXPOSE 80 8080

CMD ["/usr/local/bin/apache2-foreground"]

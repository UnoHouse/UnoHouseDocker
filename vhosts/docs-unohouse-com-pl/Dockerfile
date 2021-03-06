FROM ubuntu:16.04

MAINTAINER unohouse.com.pl

# ADD REPOSITORIES
RUN apt-get update -y

# INSTALL PHP 7 & Apache
RUN apt-get update && \
    apt-get dist-upgrade -y && \
    apt-get install -y \
      apache2 \
      php7.1 \
      php7.1-cli \
      libapache2-mod-php7.1 \
      php7.1-gd \
      php7.1-json \
      php7.1-ldap \
      php7.1-mbstring \
      php7.1-mysql \
      php7.1-pgsql \
      php7.1-sqlite3 \
      php7.1-xml \
      php7.1-xsl \
      php7.1-zip \
      php7.1-soap

# ENABLE MODULES
RUN a2enmod rewrite expires headers deflate
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

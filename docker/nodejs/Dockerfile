FROM ubuntu:16.04

RUN apt-get update --fix-missing
RUN apt-get install -qy curl vim

# Install Ruby, Compass & SASS
RUN apt-get install -qy ruby ruby-dev make build-essential
RUN apt-get install -qy git
RUN gem install compass
RUN gem install sass

# Install nodeJS
RUN curl -sL https://deb.nodesource.com/setup_6.x | bash - \
&& apt-get install -y nodejs \
&& npm install \
&& npm install -global gulp \
&& npm install -global gulp-cli \
&& npm install -g @angular/cli

# add user docker
RUN groupadd -g 1000 docker
RUN useradd -u 1000 -g 1000 docker
RUN usermod -a -G www-data docker
RUN mkdir -p /home/docker
RUN mkdir -p /home/docker/.ssh
# rights in home folder
RUN chown -R docker:docker /home/docker

#####################################
# User Aliases
#####################################
USER root
RUN echo "" >> ~/.bashrc && \
echo 'export NVM_DIR="$HOME/.nvm"' >> ~/.bashrc && \
echo '[ -s "$NVM_DIR/nvm.sh" ] && . "$NVM_DIR/nvm.sh"  # This loads nvm' >> ~/.bashrc

EXPOSE 1520
EXPOSE 4200

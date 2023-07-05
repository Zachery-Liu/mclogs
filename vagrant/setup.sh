#!/bin/bash
sudo apt-get update
sudo apt-get upgrade -y

sudo add-apt-repository -y ppa:ondrej/php
sudo apt-get update

sudo apt-get install php8.1-fpm php8.1-mongodb php8.1-xml php8.1-redis php8.1-curl nginx mongodb redis-server -y

bash /web/mclogs/vagrant/setup-composer.sh

sudo composer install

cp /web/mclogs/vagrant/nginx/* /etc/nginx/sites-enabled/
sudo service nginx restart
sudo service php8.1-fpm restart

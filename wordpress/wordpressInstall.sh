#!/bin/bash

echo "Setting up the environment"
myIps="$(hostname -I)"
IFS=' ' read -ra myIps <<< "$myIps"
aux=0
for i in "${myIps[@]}"; do
    if [ $aux -eq 0 ]
    then
        export MYIP="$i"
    fi
    aux+=1
done

echo "Starting Wordpress Installation"

echo "Adding user ${USER} to group"
sudo groupadd xamppusers
sudo usermod -a -G xamppusers $USER
sudo chown root.xamppusers /opt/lampp/htdocs
sudo chmod 755 /opt/lampp/htdocs/teysu

echo "Adding wordpress files"
cp .htaccess wordpress/.htaccess
cp wp-config.php wordpress/wp-config.php
sudo cp -a wordpress/. /opt/lampp/htdocs/teysu

echo "Setting permissions"
sudo find /opt/lampp/htdocs/teysu -type d -exec chmod 755 {} \;
sudo find /opt/lampp/htdocs/teysu -type f -exec chmod 644 {} \;

echo "Adding db data"
sudo /opt/lampp/bin/mysql --user=root --password="" -e "CREATE DATABASE IF NOT EXISTS teysu"
sudo /opt/lampp/bin/mysql --user=root --password="" --database=teysu < teysu.sql

echo "Setting network"
sudo /opt/lampp/bin/mysql --user=root --password="" -e "CREATE DATABASE IF NOT EXISTS teysu"

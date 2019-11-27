#!/bin/bash

echo "Removing db data"
sudo /opt/lampp/bin/mysql --user=root --password="" -e "DROP DATABASE teysu"

echo "Stopping and uninstalling XAMPP"
sudo /opt/lampp/lampp stop
sudo /opt/lampp/uninstall

echo "Removing some extra files"
sudo rm -r /opt/lampp

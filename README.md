photo moments
========

Purpose
------------

- Upload images to a server
- Display images in slideshow
- Automatically read the images from folder

Introduction
------------

This slideshow is very useful to use in parties or events

Features
------------

- Simple web page to upload the images
- PHP/JS to automatically read the photos from folder

Requirements
------------
- Apache server and PHP

- Debian/Ubuntu packages:
> apt-get install apache2 php5 php-pear php5-mysql 

Installation
------------

- Download the source code
- Unzip
- Move all files to /var/www/

Changing upload_max_filesize on PHP:

- Open file /etc/php5/apache2/php.ini
- Find upload_max_filesize = 2M (default is set to 2MB)
- Change 2M to 10M
- Restart Apache service

Changing folder permissions:

- cd /var/www
- chown www-data.www-data * -R

Usage
-----

To upload:
http://YourDnsOrIp/

To show the slideshow:
http://YourDnsOrIp/slide.htm

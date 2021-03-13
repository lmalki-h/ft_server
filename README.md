# Ft\_server@42 - Your first web server with Docker

Ft\_server is the first system administration project at 42. It consists in building a web server using Docker, Wordpress, phpMyAdmin and an SQL database. 


## Table of Content:
* [What's ft\_server?](#what's-ft_server?)
* [How do I run this server?](#how-do-I-run-this-server?)
* [Project status](#project-status)


## What's Ft\_server?

Disclaimer: The project asks for the webserver and its multiple services to run in one Docker container. The use of docker compose was not allowed.

In this project you:
- connect a SQL database to a Wordpress site and to a phpMyAdmin dashboard
- create a self-signed SSL certificate for your server
- redirects any http requests to https
- allow to turn on and off the autoindexing of the multiple services



## How do I run this server?

In order to run this server you will need to have Docker up and running on your computer.


To get help with Docker commands, run: `docker --help`

Clone this repository into your computer:
```bash
git clone https://github.com/lmalki-h/ft_server
cd ft_server/
```

Before you run the webserver be sure to add yourself as the maintainer (line 3) and your information when creating your SSL key (line 37) in the Dockerfile.


Run the two following commands inside the "ft\_server" repository.
```bash
docker build -t ft_server .
```

Once the image is successfully built, run the following command in order to start your server.
```bash
docker run -it -p 80:80 -p 443:443 ft_server .
```
The option `-it` allows you to access the machine, and the option `-p 80:80` and ` -p 443:443` binds the ports 80 and 443 of your Docker machine with the ports 80 and 443 of the host computer.



You now have access to the webserver terminal, and you can access your Wordpress site as well as manage your database by opening your browser to http://localhost.



## Project status

This project was not submitted yet.

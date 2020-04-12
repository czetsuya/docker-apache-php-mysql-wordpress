[![patreon](https://c5.patreon.com/external/logo/become_a_patron_button.png)](https://www.patreon.com/bePatron?u=12280211)
[![License: GPL v3](https://img.shields.io/badge/License-GPLv3-blue.svg)](https://www.gnu.org/licenses/gpl-3.0)

# Docker Apache, PHP, MySQL and Wordpress

This project is a demonstration of how docker works. It's actually composed of 3 sets of services:

 - MariaDB, Phpmyadmin, Adminer
 - MariaDB, Apache, PHP
 - MariaDB, Wordpress

MariaDB instance is the same for the 3 sets.

## Requirements:

- Ubuntu with Docker installed

## MariaDB, Phpmyadmin, Adminer

MariaDB database is created and Phpmyadmin and adminer connects to it.

## MariaDB, Apache, PHP

MariaDB database is created and a Php script hosted on Apache server will connect to the database and return whether the connection is successful or not.

## MariaDB, Wordpress

Running Wordpress using the MariaDB instance.

## How to run?

Once you have docker and docker-compose installed, go to the root of this project and execute:

```sh
// start the services
docker-compose up -d --build

// stop the services
docker-compose down

// if you want to run the services again, there is no need for the --build parameter
docker-compose up -d
```

And the following URLs should be available:

 - Adminer - http://localhost:8001
 - Phpmyadmin - http://localhost:8002
 - Apache - http://localhost:8000
 - Wordpress - http://localhost:8080

## Authors

 * **Edward P. Legaspi** - *Java Architect* - [czetsuya](https://github.com/czetsuya)

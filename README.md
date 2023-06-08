### Getting Started

The repo is using Laravel Sail and has been developed on Unbuntu but as Laravel Sail uses docker technology the repo should work on all operating systems. 


1. Install Docker
2. Clone Repo
3. Cd in repo
4. Execute script

``docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php82-composer:latest \
    composer install --ignore-platform-reqs``
    
    
### Operations

1. ```./vendor/bin/sail up```
2. ``` ./vendor/bin/sail composer install```
3. ``` ./vendor/bin/sail artisan migrate```
4. ``` ./vendor/bin/sail artisan db:seed```

    
### Troubleshooting
 
 Stop all containers, other containers may be sharing same port not allowing the application to run
 
 1. ``docker stop $(docker ps -aq)``
 
**Error : service "laravel.test" is not running container #1**

1. Run ```docker ps -a```
2. Get container id of ``sail-8.2/app``
3. run ```docker start <CONTAINER_ID HERE>```

### Overview

To be completed.

### Tests
![image](https://github.com/S-J-Dickson/quotes/assets/44926352/d34fa4d5-bb2c-4c03-a56f-a3174b5fb9c6)


### Designs
See brief.


### Improvements

To be completed.


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
The Laravel app uses Laravel Breeze to provide a simple login and authentication.

Upon logging in, the user can navigate to the quotes page to generate a quote.

The quote can be generated in its current form, and it will store it in the database with the request naming structure. It will also keep the client as a separate database entity (model, table) so the data won't be repeated in future developments, as the user can select existing clients or make a new one.


The spec is well-designed and can allow much development in the front and backend.

With the time limitation, I didn't create issues for each feature and pull requests. Furthermore, my approach was to show basic usage of laravel controllers, composers, blades and tests to validate my technical skills in all those areas.


### Tests
![image](https://github.com/S-J-Dickson/quotes/assets/44926352/d34fa4d5-bb2c-4c03-a56f-a3174b5fb9c6)


### Designs
See brief.


### Improvements
 - Use js datatable for server side rending
 - Improve test case for controller and service by adding more tests in the dataprovider and providing pass and failing paths
 - Use auto gen doc blocks 



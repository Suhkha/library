## Commands to install ##

- `composer install` 
- `vagrant up`
- `vagrant ssh`
- Go to `cd /code` folder


## Vars for mysql connection in local: .env mysql ##

- DB_CONNECTION=mysql
- DB_HOST=127.0.0.1
- DB_PORT=3306
- DB_DATABASE=homestead
- DB_USERNAME=homestead
- DB_PASSWORD=secret

## COMMANDS TO EXECUTE AT THE END ##
- `php artisan key:generate` Generate an encryption key
- `php artisan migrate` Create the database structure
- `php artisan db:seed` Insert test data for testing
- `php artisan vendor:publish` Copy configuration files
- `npm install` To install dependencies to get a visual panel

## COMMANDS TO EXECUTE SOME TESTS ##
- `./vendor/bin/phpunit --filter testLoginFalse`
- `./vendor/bin/phpunit --filter testRouteAuthor`
- `./vendor/bin/phpunit --filter testRouteBook`
- `./vendor/bin/phpunit --filter testRouteBorrowBook`
- `./vendor/bin/phpunit --filter testRouteCategory`
- `./vendor/bin/phpunit --filter testRouteHome`
- `./vendor/bin/phpunit --filter testRouteUser`
- `./vendor/bin/phpunit --filter testSaveBook`

## Access to panel ##
- URL: http://tranquil-yellowstone-23740.herokuapp.com
- URL LOGIN: http://tranquil-yellowstone-23740.herokuapp.com/login
- EMAIL: admin@maniak.co
- PASSWORD: iwantmybook
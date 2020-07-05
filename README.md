## Commands to install ##

- `composer install` 
- `vagrant up`
- `vagrant ssh`
- Go to `cd /code` folder


## Vars for mysql connection in local: .env mysql ##

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret

## COMMANDS TO EXECUTE AT THE END ##
- `php artisan key:generate` Generate an encryption key
- `php artisan migrate` Create the database structure
- `php artisan vendor:publish` Copy configuration files
- `php artisan db:seed` Insert test data for testing
- `npm install` To install dependencies to get a visual panel

## COMMANDS TO EXECUTE SOME TESTS ##
- `php artisan key:generate` Generate an encryption key

## Access to panel ##
- URL: /login
- EMAIL: admin@maniak.co
- PASSWORD: iwantmybook
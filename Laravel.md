#Laravel 10.x

### Links
> https://laravel.com/docs/10.x
> https://documentacionlaravel.com/ [9.x]
> https://livewire.laravel.com/docs
> https://inertiajs.com/
> https://artisan.page/



### Requirements
- **PHP 8.1**
`sudo apt-get install php8.1-fpm`
    *Extensioak: php8.1-intl php8.1-bcmath php8.1-common php8.1-mbstring openssl php8.1-xml*
- **Composer**
`php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"`
`php composer-setup.php`
`php -r "unlink('composer-setup.php');"`
`sudo mv composer.phar /usr/bin/composer`
- **Node** [NVM]
`curl https://raw.githubusercontent.com/creationix/nvm/master/install.sh | bash `
`source ~/.bashrc   `

### Install & Run
- **Sail** [Docker]
`curl -s https://laravel.build/example-app | bash`
`./vendor/bin/sail up`
- **Composer**
`composer create-project laravel/laravel example-app`
- **Github**
`git clone https://github.com/laravel/laravel.git`
`composer install`
`npm install`
`npm run [dev|build]`
- **MacOS**
    > https://herd.laravel.com/
    > https://dbngin.com/
- **Güindous**
    > https://laragon.org/download/  [click, click, click...]


### Packages
- ** Breeze [Login] **
`composer require laravel/breeze --dev`
`php artisan breeze:install` 
- ** Laravel lang **
    > https://laravel-lang.com/
`composer require --dev laravel-lang/common`
`php artisan lang:add eu`

### Artisan commands
- View routes
`php artisan route:list`
- Migrate 
`php artisan migrate`
- Rollback migration
`php artisan migrate:rollback [--step=n]`
- Create model with controller
`php artisan make:model ModelName -mrc`
- Create resource controller
`php arstisan make:controller ControllerName -r`

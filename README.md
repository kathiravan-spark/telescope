<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>



Laravel-Telescope is used to monitoring whole project and display it new dashboard. To get this in your project we need to do few steps listed below:


- First use 'composer require laravel/telescope' for installing Telescope-package.
- Publish it's assets using the telescope:install Artisan command.
- After installing Telescope, you should also run the migrate command in order to create the tables needed to store Telescope's data.
- Do the following changes in App/providers/AppServicePrvider.
- if ($this->app->environment('local')) {
        $this->app->register(\Laravel\Telescope\TelescopeServiceProvider::class);
        $this->app->register(TelescopeServiceProvider::class);
    }
- Make these changes in composer.json to prevent the Telescope package from being auto-discovered 
- "extra": {
    "laravel": {
        "dont-discover": [
            "laravel/telescope"
        ]
    }
},
- 'enabled' => env('TELESCOPE_ENABLED', true),
These code inside your config/telescope.php.
   
 - 'telescope:clear' command will delete all records created .
 - You will able to see the  report in that dashboard.

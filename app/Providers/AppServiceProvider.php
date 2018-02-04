<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('br', function($content){
            return "<?php echo nl2br($content); ?>";
        });
        Blade::directive('guestdisable', function(){
            return "<?php if(auth()->guest()){ echo 'disabled'; } ?>";
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

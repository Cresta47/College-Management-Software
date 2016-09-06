<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Product\Service\ClassService;

class ClassServiceProvider extends ServiceProvider {

    public function register(){
        $this->app->singleton('classService', function()
        {
            return new ClassService();
        });
    }

}
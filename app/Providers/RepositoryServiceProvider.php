<?php 

namespace App\Providers;

use App\Repository\Todo\TodoInterface;
use App\Repository\Todo\EloquentTodo;
use App\Repository\Takenote\TakenoteInterface;
use App\Repository\Takenote\EloquentTakenote;

use Illuminate\Support\ServiceProvider; 

/** 
* Class RepositoryServiceProvider 
* @package App\Providers 
*/ 
class RepositoryServiceProvider extends ServiceProvider 
{ 
    /** 
        * Register services.
        * 
        * @return void  
        */ 
    public function register() 
    { 
        $this->app->bind(TodoInterface::class, EloquentTodo::class);
        $this->app->bind(TakenoteInterface::class, EloquentTakenote::class);
    }
}
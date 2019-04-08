<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Category;
use App\Store;
use App\Banner;
use App\Food;
use Cart;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {   
        $category = Category::all();
        view()->share('category', $category);
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(CategoryRepository::class);
        $this->app->bind(PromotionRepository::class);
        $this->app->bind(FoodRepository::class);
        $this->app->bind(StoreRepository::class);
        $this->app->bind(UserRepository::class);
        $this->app->bind(BannerRepository::class);
        $this->app->bind(FoodImageRepository::class);
        $this->app->bind(PromotionRepository::class);
        $this->app->bind(NewsRepository::class);
    }
}

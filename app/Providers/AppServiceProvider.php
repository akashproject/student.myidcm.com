<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use App\Models\Media;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
 
        View::composer('*', function($view)
        {

            // Category Menu
            $media = Media::orderBy('created_at', 'desc')->get();
            $view->with('media', $media);

            //Ad Menu
            $adHeaderMenu = array(
                '#about' => "About Us",
                '#recruiters' => "Recruiters",
                '#course' => "Courses",
                '#certificate' => 'Certificates',
                '#galleries' => "Gallery",
                '#alumni' => "Testimonial",
                '#faq' => "FAQs",
            );
            $view->with('adHeaderMenu', $adHeaderMenu);

            $user = Auth::user();
            $view->with('user', $user);
        });
    }
}

<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use App\View\Components\AuthCard;
use App\View\Components\Label;
use App\View\Components\ActionSection;
use App\View\Components\SectionTitle;
use App\View\Components\FormSection;
use App\View\Components\NavLink;
use App\View\Components\Dropdown;
use App\View\Components\DropdownLink;
use App\View\Components\AuthCardLogo;
use App\View\Components\ApplicationMark;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerBladeComponents();
    }

    protected function registerBladeComponents()
    {
        Blade::component('authentication-card', AuthCard::class);
        Blade::component('label', Label::class);
        Blade::component('action-section', ActionSection::class);
        Blade::component('section-title', SectionTitle::class);
        Blade::component('form-section', FormSection::class);
        Blade::component('nav-link', NavLink::class);
        Blade::component('dropdown', Dropdown::class);
        Blade::component('dropdown-link', DropdownLink::class);
        Blade::component('authentication-card-logo', AuthCardLogo::class);
        Blade::component('application-mark', ApplicationMark::class);
    }
}

<?php

namespace App\Providers;

use App\Models\General;
use App\Models\Page;
use App\Models\Service;
use App\Models\Team\Team;
use App\Policies\GeneralPolicy;
use App\Policies\PagePolicy;
use App\Policies\ServicePolicy;
use App\Policies\TeamPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;


class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // Product::class          => ProductPolicy::class,
        Page::class     => PagePolicy::class,
        Service::class  => ServicePolicy::class,
        Team::class     => TeamPolicy::class,
        General::class  => GeneralPolicy::class

    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('page-list',[PagePolicy::class,'view']);
        Gate::define('page-create',[PagePolicy::class,'create']);
        Gate::define('page-update',[PagePolicy::class,'update']);
        Gate::define('page-delete',[PagePolicy::class,'delete']);
        Gate::define('page-delete',[PagePolicy::class,'restore']);

        Gate::define('service-list',[ServicePolicy::class,'view']);
        Gate::define('service-create',[ServicePolicy::class,'create']);
        Gate::define('service-update',[ServicePolicy::class,'update']);
        Gate::define('service-delete',[ServicePolicy::class,'delete']);
        Gate::define('service-delete',[ServicePolicy::class,'restore']);

        Gate::define('team-list',[TeamPolicy::class,'view']);
        Gate::define('team-create',[TeamPolicy::class,'create']);
        Gate::define('team-update',[TeamPolicy::class,'update']);
        Gate::define('team-delete',[TeamPolicy::class,'delete']);
        Gate::define('team-delete',[TeamPolicy::class,'restore']);

        Gate::define('general-list',[GeneralPolicy::class,'view']);
        Gate::define('general-create',[GeneralPolicy::class,'create']);
        Gate::define('general-update',[GeneralPolicy::class,'update']);
        Gate::define('general-delete',[GeneralPolicy::class,'delete']);
        Gate::define('general-delete',[GeneralPolicy::class,'restore']);
    }
}

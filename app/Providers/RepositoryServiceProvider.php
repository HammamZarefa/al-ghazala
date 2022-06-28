<?php

namespace App\Providers;

use App\Repositories\Interfaces\BannerRepositoryInterface;
use App\Repositories\Interfaces\CategoryRepositoryInterface;
use App\Repositories\Interfaces\FaqRepositoryInterface;
use App\Repositories\Interfaces\FrontRepositoryInterface;
use App\Repositories\Interfaces\LinkRepositoryInterface;
use App\Repositories\Interfaces\PageRepositoryInterface;
use App\Repositories\Interfaces\PartnerRepositoryInterface;
use App\Repositories\Interfaces\PostRepositoryInterface;
use App\Repositories\Interfaces\ProductRepositoryInterface;
use App\Repositories\Interfaces\ServiceRepositoryInterface;
use App\Repositories\Interfaces\TagRepositoryInterface;
use App\Repositories\Interfaces\TeamRepositoryInterface;
use App\Repositories\Interfaces\PcategoryRepositoryInterface;
use App\Repositories\Interfaces\PortfolioRepositoryInterface;
use App\Repositories\Interfaces\TestimonialRepositoryInterface;
use App\Repositories\Interfaces\GeneralRepositoryInterface;
use App\Repositories\Interfaces\UserRepositoryInterface;

use App\Repositories\BannerRepository;
use App\Repositories\CategoryRepository;
use App\Repositories\FaqRepository;
use App\Repositories\FrontRepository;
use App\Repositories\GeneralRepository;
use App\Repositories\LinkRepository;
use App\Repositories\PageRepository;
use App\Repositories\PartnerRepository;
use App\Repositories\PcategoryRepository;
use App\Repositories\PortfolioRepository;
use App\Repositories\PostRepository;
use App\Repositories\ProductRepository;
use App\Repositories\ServiceRepository;
use App\Repositories\TagRepository;
use App\Repositories\TeamRepository;
use App\Repositories\TestimonialRepository;
use App\Repositories\UserRepository;
use Illuminate\Support\ServiceProvider;


class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(FrontRepositoryInterface::class, FrontRepository::class);
        $this->app->bind(TeamRepositoryInterface::class, TeamRepository::class);
        $this->app->bind(BannerRepositoryInterface::class, BannerRepository::class);
        $this->app->bind(CategoryRepositoryInterface::class, CategoryRepository::class);
        $this->app->bind(FaqRepositoryInterface::class, FaqRepository::class);
        $this->app->bind(PageRepositoryInterface::class, PageRepository::class);
        $this->app->bind(PostRepositoryInterface::class, PostRepository::class);
        $this->app->bind(LinkRepositoryInterface::class, LinkRepository::class);
        $this->app->bind(TagRepositoryInterface::class, TagRepository::class);
        $this->app->bind(PartnerRepositoryInterface::class, PartnerRepository::class);
        $this->app->bind(ServiceRepositoryInterface::class, ServiceRepository::class);
        $this->app->bind(PcategoryRepositoryInterface::class, PcategoryRepository::class);
        $this->app->bind(PortfolioRepositoryInterface::class, PortfolioRepository::class);
        $this->app->bind(TestimonialRepositoryInterface::class, TestimonialRepository::class);
        $this->app->bind(GeneralRepositoryInterface::class, GeneralRepository::class);
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(ProductRepositoryInterface::class, ProductRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

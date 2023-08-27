<?php
namespace Webflax\Portfolio\App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Webflax\Portfolio\App\services\PortfolioService;
use Webflax\Shop\App\Models\ProductModel;
use Webflax\Shop\App\Services\Cart\CartService;
use Webflax\Shop\App\Services\Coupon\CouponService;

class PortfolioServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton('portfolio', function ($app) {
            return new PortfolioService();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $migrationPath = '/../../database/migrations/';
        $this->loadMigrationsFrom([
            __DIR__ . $migrationPath . "2023_08_26_080933_create_socials_table.php",
            __DIR__ . $migrationPath . "2023_08_26_081324_create_skills_table.php",
            __DIR__ . $migrationPath . "2023_08_26_081345_create_expriences_table.php",
            __DIR__ . $migrationPath . "2023_08_26_081353_create_projects_table.php",
            __DIR__ . $migrationPath . "2023_08_26_081405_create_education_table.php",
            __DIR__ . $migrationPath . "2023_08_26_093547_create_assets_table.php",
        ]);

        $this->publishes([
            // __DIR__ . "/../../database/Seeder/ShopSeeder.php" => database_path('seeders/ShopSeeder.php'),
            __DIR__ . "/../../../vendor/cviebrock/eloquent-sluggable/resources/config/sluggable.php" => config_path('sluggable.php'),
        ]);
    }
}

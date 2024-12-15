<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Faker\Factory as FakerFactory;
use Faker\Generator as FakerGenerator;
use App\Faker\BrazilianProvider;

class AppServiceProvider extends ServiceProvider {
  /**
   * Register any application services.
   */
  public function register(): void {
    //
  }

  /**
   * Bootstrap any application services.
   */
  public function boot(): void {
    $this->app->singleton(FakerGenerator::class, function () {
      $faker = FakerFactory::create('pt_BR'); // Configurar locale do Faker (opcional)
      $faker->addProvider(new BrazilianProvider($faker));
      return $faker;
    });
  }
}

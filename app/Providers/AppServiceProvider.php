<?php

namespace App\Providers;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\ParallelTesting;
use Illuminate\Support\ServiceProvider;
use PHPUnit\Framework\TestCase;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Configuración para pruebas paralelas
        ParallelTesting::setUpProcess(function (int $token) {
            // Configuración para cada proceso de prueba paralela
            // Puedes agregar aquí configuraciones específicas
        });

        ParallelTesting::setUpTestCase(function (int $token, TestCase $testCase) {
            // Configuración específica antes de cada test case
        });

        ParallelTesting::setUpTestDatabase(function (string $database, int $token) {
            // Ejecutado cuando se crea una base de datos de prueba
            Artisan::call('db:seed');
        });

        ParallelTesting::tearDownTestCase(function (int $token, TestCase $testCase) {
            // Limpieza después de cada test case
        });

        ParallelTesting::tearDownProcess(function (int $token) {
            // Limpieza después de cada proceso
        });
    }
}


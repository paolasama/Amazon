<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * Los middlewares globales que se ejecutan en cada solicitud al servidor.
     *
     * @var array
     */
    protected $middleware = [
        // Verifica que la aplicación esté detrás de un proxy de confianza
        \App\Http\Middleware\TrustProxies::class,
        // Maneja mantenimiento (modo "down")
        \Illuminate\Http\Middleware\HandleMaintenanceMode::class,
        // Valida el tamaño máximo del contenido
        \Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,
        // Encripta las cookies
        \App\Http\Middleware\EncryptCookies::class,
        // Añade las cookies a la respuesta
        \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
        // Inicia la sesión (si se requiere)
        \Illuminate\Session\Middleware\StartSession::class,
        // Verifica los tokens CSRF en formularios
        \App\Http\Middleware\VerifyCsrfToken::class,
        // Ruteo automático
        \Illuminate\Routing\Middleware\SubstituteBindings::class,
    ];

    /**
     * Los grupos de middleware predefinidos.
     *
     * @var array
     */
    protected $middlewareGroups = [
        'web' => [
            \App\Http\Middleware\EncryptCookies::class,
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Illuminate\Session\Middleware\StartSession::class,
            // Si necesitas soporte para sesiones compartidas con APIs:
            // \Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            \App\Http\Middleware\VerifyCsrfToken::class,
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],

        'api' => [
            // Middleware opcional para frontend y backend unificados con Sanctum
            \Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful::class,
            'throttle:api', // Límite de solicitudes por minuto
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],
    ];

    /**
     * Los middlewares de ruta individuales.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'auth' => \App\Http\Middleware\Authenticate::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'cache.headers' => \Illuminate\Http\Middleware\SetCacheHeaders::class,
        'can' => \Illuminate\Auth\Middleware\Authorize::class,
        'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
        'password.confirm' => \Illuminate\Auth\Middleware\RequirePassword::class,
        'signed' => \Illuminate\Routing\Middleware\ValidateSignature::class,
        'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
        'verified' => \Illuminate\Auth\Middleware\EnsureEmailIsVerified::class,
    ];
}

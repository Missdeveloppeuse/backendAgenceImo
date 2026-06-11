<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {

        // Enregistrement des middlewares alias (très important !)
        $middleware->alias([
        'admin' => \App\Http\Middleware\AdminMiddleware::class,
        ]);

        // Optionnel : tu peux aussi prioriser ou grouper des middlewares
        // $middleware->web(append: [
        //     \App\Http\Middleware\Something::class,
        // ]);

    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })
    ->create();
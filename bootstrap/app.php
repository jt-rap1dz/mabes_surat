<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // pada laravel 10 kebawah menggunakan file kernel.php
        // kernel.php adalah file inti yang dapat mengakses seluruh file 
        // tanpa menggunakan compact ke file tertentu
        // pada laravel 11 keatas menggunakan file app.php
        // sekarang file kernel.php diganti bootstrap/app.php
        $middleware->alias([
            'role' => App\Http\Middleware\Role::class,
            'checkActive' => App\Http\Middleware\CheckActive::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
    

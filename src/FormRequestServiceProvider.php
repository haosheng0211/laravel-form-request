<?php

namespace Haosheng\FormRequest;

use Illuminate\Support\ServiceProvider;

class FormRequestServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->app->afterResolving(FormRequest::class, function ($resolved) {
            $resolved->validateResolved();
        });

        $this->app->resolving(FormRequest::class, function ($request, $app) {
            $request = FormRequest::createFrom($app['request'], $request);
            $request->setContainer($app);
        });
    }
}

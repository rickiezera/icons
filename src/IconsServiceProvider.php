<?php

namespace RickieZera\Icons;

use Illuminate\Support\ServiceProvider;
use BladeUI\Icons\Factory;

class IconsServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot(Factory $factory)
    {
        // Registra os ícones diretamente do pacote
        $factory->add('icons', [
            'path' => __DIR__ . '/../resources/svg',
            'prefix' => 'icon',
        ]);

        // Permite publicar os SVGs no projeto consumidor, se quiser sobrescrever
        $this->publishes([
            __DIR__ . '/../resources/svg' => resource_path('vendor/icons/svg'),
        ], 'icons');
    }
}
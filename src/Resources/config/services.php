<?php

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use Atournayre\Bundle\DoctrineTypes\Contracts\DoctrineType;
use Atournayre\Bundle\DoctrineTypes\DependencyInjection\CompilerPass\DoctrineTypePass;

return static function (ContainerConfigurator $container) {
    $container->services()
        ->defaults()
        ->instanceof(DoctrineType::class)->tag(DoctrineTypePass::TAG);
};

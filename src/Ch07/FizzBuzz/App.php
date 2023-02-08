<?php

namespace Chozetsu\Ch07\FizzBuzz;

use Chozetsu\Ch07\FizzBuzz\App\FizzBuzzSequencePrinter;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

class App
{
    public static function main(): void
    {
        $containerBuilder = new ContainerBuilder();
        $loader = new YamlFileLoader(
            $containerBuilder,
            new FileLocator(__DIR__ . '/../../../config/ch07')
        );
        $loader->load('services.yaml');
        $containerBuilder->compile();

        $containerBuilder
            ->get(FizzBuzzSequencePrinter::class)
            ->printRange(1, 100);
    }
}

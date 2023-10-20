<?php

namespace Braceyourself\AiSolution;

use Braceyourself\AiSolution\Commands\AiSolutionCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class AiSolutionServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-ai-solutions')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-ai-solutions_table')
            ->hasCommand(AiSolutionCommand::class);
    }
}

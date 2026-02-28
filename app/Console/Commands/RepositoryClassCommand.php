<?php

namespace App\Console\Commands;

use Illuminate\Console\GeneratorCommand;

class RepositoryClassCommand extends GeneratorCommand
{
    protected $signature = 'make:repository {name}';

    protected $type = 'RepositoryClass';

    protected $description = 'create a new repository class';

    protected function getStub(): string
    {
        return __DIR__.'/../../../stubs/service.stub';
    }

    protected function getDefaultNamespace($rootNamespace): string
    {
        return $rootNamespace.'\Repositories';
    }
}

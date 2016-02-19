<?php
namespace LaraTemplate\Console\Commands;

use Illuminate\Foundation\Console\ModelMakeCommand;

class CustomModelMakeCommand extends ModelMakeCommand
{
    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return __DIR__ . '/stubs/model.stub';
    }
}
<?php
namespace Database\Environment;

use Dotenv\Dotenv;

abstract class EnvironmentVariable
{
    public function runEnvironment()
    {
        $dotenv = Dotenv::createUnsafeImmutable(dirname(__FILE__, 3));
        $dotenv->load();
    }
}
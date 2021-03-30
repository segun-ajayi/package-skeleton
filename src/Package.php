<?php

namespace Spatie\Skeleton;

class Package
{
    public string $name;

    public ?string $configFileName = null;

    public bool $publishViews = false;

    public array $migrationFileNames = [];

    public array $commands = [];

    public function name(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function hasConfigFile(string $configFileName = null): self
    {
        $this->configFileName = $configFileName ?? $this->name;

        return $this;
    }

    public function hasViews(): self
    {
        $this->publishViews = true;

        return $this;
    }

    public function hasMigration(string $migrationFileName): self
    {
        $this->migrationFileNames[] = $migrationFileName;

        return $this;
    }

    public function hasCommand(string $commandClassName): self
    {
        $this->commands[] = $commandClassName;

        return $this;
    }
}

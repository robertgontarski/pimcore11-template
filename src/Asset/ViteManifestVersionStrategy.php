<?php

declare(strict_types=1);

namespace App\Asset;

use RuntimeException;
use Symfony\Component\Asset\VersionStrategy\VersionStrategyInterface;

class ViteManifestVersionStrategy implements VersionStrategyInterface
{
    private array $manifest;

    public function __construct(string $manifestPath)
    {
        $this->manifest = json_decode(file_get_contents($manifestPath), true);
    }

    public function getVersion(string $path): string
    {
        return $this->processPath($path);
    }

    public function applyVersion(string $path): string
    {
        return $this->processPath($path);
    }

    private function processPath(string $path): string
    {
        if (false === isset($this->manifest[$path])) {
            return $path;
        }

        return sprintf("dist/%s", $this->manifest[$path]['file']);
    }
}

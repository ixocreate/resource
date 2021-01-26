<?php
/**
 * @link https://github.com/ixocreate
 * @copyright IXOLIT GmbH
 * @license MIT License
 */

declare(strict_types=1);

namespace Ixocreate\Resource;

use Ixocreate\Application\Package\PackageInterface;

final class Package implements PackageInterface
{
    /**
     * @return array
     */
    public function getBootstrapItems(): array
    {
        return [
            ResourceBootstrapItem::class,
        ];
    }

    /**
     * @return string|null
     */
    public function getBootstrapDirectory(): ?string
    {
        return __DIR__ . '/../bootstrap/';
    }

    /**
     * @return array
     */
    public function getDependencies(): array
    {
        return [];
    }
}

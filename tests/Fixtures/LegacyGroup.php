<?php

/*
 * This file is part of the FOSUserBundlePolyfill package.
 *
 * (c) Christian Gripp <mail@core23.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Nucleos\UserBundlePolyfill\Tests\Fixtures;

use FOS\UserBundle\Model\GroupInterface;

class LegacyGroup implements GroupInterface
{
    public function addRole(string $role): void
    {
    }

    public function getId()
    {
    }

    public function getName(): string
    {
    }

    public function hasRole(string $role): bool
    {
    }

    public function getRoles(): array
    {
    }

    public function removeRole(string $role): void
    {
    }

    public function setName(string $name): void
    {
    }

    public function setRoles(array $roles): void
    {
    }
}

<?php

/*
 * This file is part of the FOSUserBundlePolyfill package.
 *
 * (c) Christian Gripp <mail@core23.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Nucleos\UserBundlePolyfill\Tests;

use Nucleos\UserBundle\Model\Group;
use Nucleos\UserBundle\Model\GroupableInterface;
use Nucleos\UserBundle\Model\GroupInterface;
use Nucleos\UserBundle\Model\User;
use Nucleos\UserBundle\Model\UserInterface;
use Nucleos\UserBundlePolyfill\Tests\Fixtures\LegacyGroup;
use Nucleos\UserBundlePolyfill\Tests\Fixtures\LegacyUser;
use PHPUnit\Framework\TestCase;

class FOSAliasTest extends TestCase
{
    public function testUserAlias(): void
    {
        $user = new class() extends User {
        };

        static::assertInstanceOf(UserInterface::class, $user);
        static::assertInstanceOf('FOS\UserBundle\Model\UserInterface', $user);
    }

    public function testGroupableAlias(): void
    {
        $user = new class() extends User {
        };

        static::assertInstanceOf(GroupableInterface::class, $user);
        static::assertInstanceOf('FOS\UserBundle\Model\GroupableInterface', $user);
    }

    public function testGroupAlias(): void
    {
        $group = new class('Group A') extends Group {
        };

        static::assertInstanceOf(GroupInterface::class, $group);
        static::assertInstanceOf('FOS\UserBundle\Model\GroupInterface', $group);
    }

    public function testLegacyUserAlias(): void
    {
        $user = new LegacyUser();

        static::assertInstanceOf(UserInterface::class, $user);
        static::assertInstanceOf('FOS\UserBundle\Model\UserInterface', $user);
    }

    public function testLegacyGroupableAlias(): void
    {
        $user = new LegacyUser();

        static::assertInstanceOf(GroupableInterface::class, $user);
        static::assertInstanceOf('FOS\UserBundle\Model\GroupableInterface', $user);
    }

    public function testLegacyGroupAlias(): void
    {
        $group = new LegacyGroup();

        static::assertInstanceOf(GroupInterface::class, $group);
        static::assertInstanceOf('FOS\UserBundle\Model\GroupInterface', $group);
    }
}

<?php

/*
 * This file is part of the FOSUserBundlePolyfill package.
 *
 * (c) Christian Gripp <mail@core23.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Nucleos\UserBundle\Model\GroupableInterface;
use Nucleos\UserBundle\Model\GroupInterface;
use Nucleos\UserBundle\Model\UserInterface;

class_alias(UserInterface::class, '\FOS\UserBundle\Model\UserInterface');
class_alias(GroupableInterface::class, '\FOS\UserBundle\Model\GroupableInterface');
class_alias(GroupInterface::class, '\FOS\UserBundle\Model\GroupInterface');

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

use DateTime;
use Doctrine\Common\Collections\Collection;
use FOS\UserBundle\Model\GroupableInterface;
use FOS\UserBundle\Model\GroupInterface;
use FOS\UserBundle\Model\UserInterface;
use Symfony\Component\Security\Core\User\UserInterface as SymfonyUserInterface;

class LegacyUser implements UserInterface, GroupableInterface
{
    public function serialize()
    {
    }

    public function unserialize($serialized)
    {
    }

    public function isEqualTo(SymfonyUserInterface $user)
    {
    }

    public function getGroups(): Collection
    {
    }

    public function getGroupNames(): array
    {
    }

    public function hasGroup(string $name): bool
    {
    }

    public function addGroup(GroupInterface $group): void
    {
    }

    public function removeGroup(GroupInterface $group): void
    {
    }

    public function getId()
    {
    }

    public function setSalt(?string $salt): void
    {
    }

    public function setPlainPassword(?string $password): void
    {
    }

    public function setPassword(string $password): void
    {
    }

    public function getConfirmationToken(): ?string
    {
    }

    public function setPasswordRequestedAt(DateTime $date = null): void
    {
    }

    public function setLastLogin(DateTime $time = null): void
    {
    }

    public function getRoles()
    {
    }

    public function getSalt()
    {
    }

    public function isSuperAdmin(): bool
    {
    }

    public function getUsername()
    {
    }

    public function setUsername(string $username): void
    {
    }

    public function getUsernameCanonical(): string
    {
    }

    public function setUsernameCanonical(string $usernameCanonical): void
    {
    }

    public function getEmail(): string
    {
    }

    public function setEmail(string $email): void
    {
    }

    public function getEmailCanonical(): string
    {
    }

    public function setEmailCanonical(string $emailCanonical): void
    {
    }

    public function setEnabled(bool $boolean): void
    {
    }

    public function setConfirmationToken(?string $confirmationToken): void
    {
    }

    public function isAccountNonExpired(): bool
    {
    }

    public function isAccountNonLocked(): bool
    {
    }

    public function getPassword()
    {
    }

    public function eraseCredentials()
    {
    }

    public function getPlainPassword(): ?string
    {
    }

    public function setSuperAdmin(bool $boolean): void
    {
    }

    public function isPasswordRequestNonExpired(int $ttl): bool
    {
    }

    public function hasRole(string $role): bool
    {
    }

    public function setRoles(array $roles): void
    {
    }

    public function addRole(string $role): void
    {
    }

    public function removeRole(string $role): void
    {
    }

    public function isCredentialsNonExpired(): bool
    {
    }

    public function isEnabled(): bool
    {
    }
}

<?php

/*
 * This file is part of the FOSUserBundlePolyfill package.
 *
 * (c) Christian Gripp <mail@core23.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

class_alias(Nucleos\UserBundle\NucleosUserEvents::class, '\FOS\UserBundle\FOSUserEvents');

$classes = [
    'Command\\ActivateUserCommand',
    'Command\\ChangePasswordCommand',
    'Command\\CreateUserCommand',
    'Command\\DeactivateUserCommand',
    'Command\\DemoteUserCommand',
    'Command\\PromoteUserCommand',
    'Command\\RoleCommand',
    'Doctrine\\GroupManager',
    'Doctrine\\UserListener',
    'Doctrine\\UserManager',
    'Event\\FilterGroupResponseEvent',
    'Event\\FilterUserResponseEvent',
    'Event\\FormEvent',
    'Event\\GetResponseNullableUserEvent',
    'Event\\GetResponseUserEvent',
    'Event\\GroupEvent',
    'Event\\UserEvent',
    'EventListener\\AuthenticationListener',
    'EventListener\\FlashListener',
    'EventListener\\LastLoginListener',
    'EventListener\\ResettingListener',
    'Form\\DataTransformer\\UserToUsernameTransformer',
    'Form\\Type\\ChangePasswordFormType',
    'Form\\Type\\ResettingFormType',
    'Form\\Type\\UsernameFormType',
    'Mailer\\Mailer',
    'Mailer\\MailerInterface',
    'Mailer\\NoopMailer',
    'Model\\Group',
    'Model\\GroupableInterface',
    'Model\\GroupInterface',
    'Model\\GroupManager',
    'Model\\GroupManagerInterface',
    'Model\\User',
    'Model\\UserInterface',
    'Model\\UserManager',
    'Model\\UserManagerInterface',
    'Security\\EmailProvider',
    'Security\\EmailUserProvider',
    'Security\\LoginManager',
    'Security\\LoginManagerInterface',
    'Security\\UserChecker',
    'Security\\UserProvider',
    'Util\\CanonicalFieldsUpdater',
    'Util\\Canonicalizer',
    'Util\\CanonicalizerInterface',
    'Util\\PasswordUpdater',
    'Util\\PasswordUpdaterInterface',
    'Util\\TokenGenerator',
    'Util\\TokenGeneratorInterface',
    'Util\\UserManipulator',
    'Validator\\Initializer',
];

foreach ($classes as $class) {
    class_alias('Nucleos\\UserBundle\\'.$class, '\\FOS\\UserBundle\\'.$class);
}

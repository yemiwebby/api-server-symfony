<?php

namespace App\Security\User;

use Auth0\JWTAuthBundle\Security\Core\JWTUserProviderInterface;
use Symfony\Component\Intl\Exception\NotImplementedException;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\User\UserInterface;

class WebServiceUserProvider implements JWTUserProviderInterface {

    public function loadUserByJWT($jwt)
    : WebServiceUser {
        $data = ['sub' => $jwt->sub];
        $roles = [];
        $roles[] = 'ROLE_OAUTH_AUTHENTICATED';

        return new WebServiceUser($data, $roles);
    }

    public function getAnonymousUser()
    : WebServiceAnonymousUser {

        return new WebServiceAnonymousUser();
    }

    public function loadUserByUsername($username) {

        throw new NotImplementedException('method not implemented');
    }

    public function refreshUser(UserInterface $user) {

        if (!$user instanceof WebServiceUser) {
            throw new UnsupportedUserException(
                sprintf('Instances of "%s" are not supported.', get_class($user))
            );
        }

        return $this->loadUserByUsername($user->getUsername());
    }

    public function supportsClass($class)
    : bool {

        return $class === 'App\Security\User\WebServiceUser';
    }

}
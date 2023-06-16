<?php

namespace exercice06;

class UserManager
{
    public function createUser(array $userInformations): array
    {
        if (!isset($userInformations['username'])) {
            throw new \InvalidArgumentException("username is not set");
        }

        if (!isset($userInformations['password'])) {
            throw new \InvalidArgumentException("password is not set");
        }

        return $userInformations;
    }
}
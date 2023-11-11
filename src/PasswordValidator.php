<?php
declare(strict_types=1);

namespace PhpKataSetup;

class PasswordValidator
{
    public function validate(string $password): bool
    {
        if (mb_strlen($password) < 9) {
            return false;
        }

        if (mb_strtolower($password) === $password) {
            return false;
        }

        if (mb_strtoupper($password) === $password) {
            return false;
        }

        if (preg_match('/[0-9]/', $password) !== 1) {
            return false;
        }

        if (!str_contains($password,'_')) {
            return false;
        }

        return true;
    }
}
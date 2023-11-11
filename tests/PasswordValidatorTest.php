<?php
declare(strict_types=1);

namespace Tests;

use PhpKataSetup\PasswordValidator;
use PHPUnit\Framework\TestCase;

class PasswordValidatorTest extends TestCase
{
    function test_returns_true_when_valid_password_given(): void {
        $validator = new PasswordValidator();

        self::assertTrue($validator->validate('Contras_1'));
    }
}

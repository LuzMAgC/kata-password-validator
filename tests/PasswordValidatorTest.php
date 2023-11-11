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

    function test_returns_false_when_given_password_has_less_than_9_characters(): void {
        $validator = new PasswordValidator();

        self::assertFalse($validator->validate('Contra_1'));
    }

    function test_returns_false_when_given_password_without_upper_character(): void {
        $validator = new PasswordValidator();

        self::assertFalse($validator->validate('contras_1'));
    }
}

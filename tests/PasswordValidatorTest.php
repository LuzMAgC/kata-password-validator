<?php
declare(strict_types=1);

namespace Tests;

use PhpKataSetup\PasswordValidator;
use PHPUnit\Framework\TestCase;

class PasswordValidatorTest extends TestCase
{
    private PasswordValidator $validator;

    protected function setUp(): void
    {
        $this->validator = new PasswordValidator();
    }

    function test_returns_true_when_valid_password_given(): void
    {
        self::assertTrue($this->validator->validate('Contras_1'));
    }

    function test_returns_false_when_given_password_has_less_than_9_characters(): void
    {
        self::assertFalse($this->validator->validate('Contra_1'));
    }

    function test_returns_false_when_given_password_without_upper_character(): void
    {
        self::assertFalse($this->validator->validate('contras_1'));
    }
}

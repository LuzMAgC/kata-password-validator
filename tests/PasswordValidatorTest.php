<?php
declare(strict_types=1);

namespace Tests;

use PhpKataSetup\PasswordValidator;
use PHPUnit\Framework\TestCase;

class PasswordValidatorTest extends TestCase
{
    function testChangeMe() {
        $validator = new PasswordValidator();
        self::assertSame(true, $validator->validate());
    }
}

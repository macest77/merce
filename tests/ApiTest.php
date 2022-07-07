<?php

namespace Tests\Merce;

use Merce\Models\User;
use PHPUnit\Framework\TestCase;

class ApiTest extends TestCase
{
    public function test_correct_login()
    {
        $user = new User();
        $this->assertTrue($user->basicAuth('admin', 'AbCd1@3$'));
    }
}
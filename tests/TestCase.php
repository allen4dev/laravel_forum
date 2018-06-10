<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    public function signin($user = null)
    {
        $user = $user ?: create(\App\User::class);

        $this->actingAs($user);

        return $this;
    }
}

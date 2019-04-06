<?php declare(strict_types=1);

namespace WyriHaximus\Tests;

use WyriHaximus\Annotations\Thread;

final class ToThreadMethod
{
    /**
     * @Thread()
     */
    public function method(): void
    {
    }
}

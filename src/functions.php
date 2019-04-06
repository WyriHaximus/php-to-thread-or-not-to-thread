<?php declare(strict_types=1);

namespace WyriHaximus;

use Doctrine\Common\Annotations\Reader;
use WyriHaximus\Annotations\Thread;

function toThreadOrNotToThread(string $callable, Reader $annotationReader = null): bool
{
    return toXOrNotToX(Thread::class, $callable, $annotationReader);
}

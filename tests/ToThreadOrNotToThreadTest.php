<?php declare(strict_types=1);

namespace WyriHaximus\Tests;

use ApiClients\Tools\TestUtilities\TestCase;
use function WyriHaximus\toThreadOrNotToThread;

/**
 * @internal
 */
final class ToThreadOrNotToThreadTest extends TestCase
{
    public function provideTestsAndExpectedResults(): iterable
    {
        yield [
            ToThreadMethod::class . '::method',
            true,
        ];

        yield [
            ToNotThreadMethod::class . '::method',
            false,
        ];
    }

    /**
     * @dataProvider provideTestsAndExpectedResults
     */
    public function tests(string $callable, bool $expectedResult): void
    {
        self::assertSame($expectedResult, toThreadOrNotToThread($callable));
    }
}

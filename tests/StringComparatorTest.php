<?php

/*
 * This file is part of Vivarium
 * SPDX-License-Identifier: MIT
 * Copyright (c) 2021 Luca Cantoreggi
 */

declare(strict_types=1);

namespace Vivarium\Comparator\Test;

use PHPUnit\Framework\TestCase;
use Vivarium\Comparator\StringComparator;

/**
 * @coversDefaultClass \Vivarium\Comparator\StringComparator
 */
class StringComparatorTest extends TestCase
{
    /**
     * @covers ::compare()
     * @covers ::__invoke()
     */
    public function testCompare(): void
    {
        $comparator = new StringComparator();

        static::assertLessThan(0, $comparator->compare('a', 'z'));
        static::assertGreaterThan(0, $comparator->compare('z', 'a'));
        static::assertEquals(0, $comparator->compare('a', 'a'));
        static::assertEquals(0, $comparator('a', 'a'));
    }
}

<?php

/*
 * This file is part of Vivarium
 * SPDX-License-Identifier: MIT
 * Copyright (c) 2021 Luca Cantoreggi
 */

declare(strict_types=1);

namespace Vivarium\Comparator\Test;

use PHPUnit\Framework\TestCase;
use Vivarium\Comparator\IntegerComparator;

/**
 * @coversDefaultClass \Vivarium\Comparator\IntegerComparator
 */
class IntegerComparatorTest extends TestCase
{
    /**
     * @covers ::compare()
     * @covers ::__invoke()
     */
    public function testCompare(): void
    {
        $comparator = new IntegerComparator();

        static::assertEquals(-1, $comparator->compare(1, 2));
        static::assertEquals(1, $comparator->compare(2, 1));
        static::assertEquals(0, $comparator->compare(1, 1));
        static::assertEquals(0, $comparator(1, 1));
    }
}

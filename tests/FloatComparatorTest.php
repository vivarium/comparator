<?php

/*
 * This file is part of Vivarium
 * SPDX-License-Identifier: MIT
 * Copyright (c) 2021 Luca Cantoreggi
 */

declare(strict_types=1);

namespace Vivarium\Comparator\Test;

use PHPUnit\Framework\TestCase;
use Vivarium\Comparator\FloatComparator;

/**
 * @coversDefaultClass \Vivarium\Comparator\FloatComparator
 */
class FloatComparatorTest extends TestCase
{
    /**
     * @covers ::__construct()
     * @covers ::compare()
     * @covers ::__invoke()
     */
    public function testCompare(): void
    {
        $comparator = new FloatComparator(0.00001);

        static::assertEquals(-1, $comparator->compare(0.24578, 2.24579));
        static::assertEquals(1, $comparator->compare(0.24579, 0.24578));
        static::assertEquals(0, $comparator->compare(0.245788, 0.245789));
        static::assertEquals(0, $comparator->compare(0.245788, 0.245788));

        $comparator = new FloatComparator(0.0000001);
        static::assertEquals(-1, $comparator->compare(0.245788, 0.245789));
        static::assertEquals(-1, $comparator(0.245788, 0.245789));
    }
}

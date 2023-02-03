<?php

namespace Tests\Ch06;

use Chozetsu\Ch06\Math;
use Chozetsu\Ch06\MathUtil;
use PHPUnit\Framework\TestCase;

class MathUtilTest extends TestCase
{
    public function testSaturate(): void
    {
        $mathUtil = new MathUtil(new Math());

        // 範囲内ならそのまま
        $this->assertEquals(2, $mathUtil->saturate(2, 1, 3));

        // 範囲外なら上限値／下限値になる
        $this->assertEquals(1, $mathUtil->saturate(0, 1, 3));
        $this->assertEquals(3, $mathUtil->saturate(4, 1, 3));

        // 上限値／下限値と同じ値は範囲内である
        $this->assertEquals(1, $mathUtil->saturate(1, 1, 3));
        $this->assertEquals(3, $mathUtil->saturate(3, 1, 3));
    }
    public function testSaturateUseStub(): void
    {
        $mathStub = $this->createStub(Math::class);
        $mathUtil = new MathUtil($mathStub);

        $mathStub->method('max')->willReturn(2);
        $mathStub->method('min')->willReturn(2);
        $result = $mathUtil->saturate(2, 1, 3);

        $this->assertEquals(2, $result);
    }

    public function testSaturateUseMock(): void
    {
        $math = $this->createMock(Math::class);
        $mathUtil = new MathUtil($math);

        $math->expects($this->atLeastOnce())
            ->method('max')
            ->with($this->equalTo(2), $this->equalTo(1))
            ->willReturn(2);

        $math->expects($this->atLeastOnce())
            ->method('min')
            ->with($this->equalTo(2), $this->equalTo(3))
            ->willReturn(2);

        $result = $mathUtil->saturate(2, 1, 3);

        $this->assertEquals(2, $result);
    }
}

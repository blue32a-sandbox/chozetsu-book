<?php

namespace Tests\Ch08\State;

use Chozetsu\Ch08\State\SpeedMeter;
use PHPUnit\Framework\TestCase;

class SpeedMeterTest extends TestCase
{
    public function testDisplay(): void
    {
        $speedMeter = new SpeedMeter();
        $this->assertSame('0.00km/h green', $speedMeter->display());

        $speedMeter->setSpeed(90.0);
        $this->assertSame('90.00km/h green', $speedMeter->display());

        $speedMeter->setSpeed(101.0);
        $this->assertSame('101.00km/h red', $speedMeter->display());

        $speedMeter->setSpeed(90.0);
        $this->assertSame('90.00km/h red', $speedMeter->display());

        $speedMeter->setSpeed(80.0);
        $this->assertSame('80.00km/h green', $speedMeter->display());
    }
}

<?php

namespace Tests\Ch06\FizzBuzz\Core;

use Chozetsu\Ch06\FizzBuzz\Core\PassThroughRule;
use PHPUnit\Framework\TestCase;

class PassThroughRuleTest extends TestCase
{
    public function testReplace(): void
    {
        $rule = new PassThroughRule([]);
        $this->assertEquals("1", $rule->replace(1));
    }
}

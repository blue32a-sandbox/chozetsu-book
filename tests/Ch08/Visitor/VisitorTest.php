<?php

namespace Tests\Ch08\Visitor;

use Chozetsu\Ch08\Visitor\Branch;
use Chozetsu\Ch08\Visitor\Node;
use PHPUnit\Framework\TestCase;

class VisitorTest extends TestCase
{
    public function testVisitor(): void
    {
        $this->expectOutputString("root\nhoge\nfuga\n");

        $root = new Branch('root');
        $root->addChild(new Node('hoge'));
        $root->addChild(new Node('fuga'));
        $visitor = function (Node $node) {
            echo $node->name . "\n";
        };

        $root->accept($visitor);
    }
}

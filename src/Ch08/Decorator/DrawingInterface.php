<?php

namespace Chozetsu\Ch08\Decorator;

interface DrawingInterface
{
    public function startAt(Point $p): void;
    public function lineTo(Point $p): void;
}

<?php

namespace Chozetsu\Ch08\Adapter;

interface DrawingInterface
{
    public function startAt(Point $p): void;
    public function lineTo(Point $p): void;
}

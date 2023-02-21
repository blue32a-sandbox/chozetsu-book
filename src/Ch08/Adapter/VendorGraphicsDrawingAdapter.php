<?php

namespace Chozetsu\Ch08\Adapter;

use LogicException;

class VendorGraphicsDrawingAdapter implements DrawingInterface
{
    private ?Point $current;

    public function __construct(
        protected VendorGraphicsInterface $target
    ) {
        $this->current = null;
    }

    public function startAt(Point $p): void
    {
        $this->current = $p;
    }

    public function lineTo(Point $p): void
    {
        if ($this->current == null) {
            throw new LogicException();
        }

        $p0 = $this->current;
        $this->target->line($p0->x, $p0->y, $p->x, $p->y);
        $this->current = $p;
    }
}

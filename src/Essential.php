<?php

namespace Unetway\AirCrm;

abstract class Essential
{
    /** @var AirCrm */
    protected $aircrm;

    public function __construct(AirCrm $aircrm)
    {
        $this->aircrm = $aircrm;
    }
}

<?php

namespace PHPExiftool\Driver\Tag\CanonCustom;

class SensorCleaning extends \PHPExiftool\Driver\Tag
{

    protected $Id = 13;

    protected $Name = 'SensorCleaning';

    protected $FullName = 'CanonCustom::FunctionsD30';

    protected $GroupName = 'CanonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'CanonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Sensor Cleaning';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Disable',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Enable',
        ),
    );

}
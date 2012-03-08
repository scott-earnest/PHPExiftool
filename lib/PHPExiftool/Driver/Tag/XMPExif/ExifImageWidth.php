<?php

namespace PHPExiftool\Driver\Tag\XMPExif;

class ExifImageWidth extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'PixelXDimension';

    protected $Name = 'ExifImageWidth';

    protected $FullName = 'XMP::exif';

    protected $GroupName = 'XMP-exif';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-exif';

    protected $g2 = 'Image';

    protected $Type = 'integer';

    protected $Writable = true;

    protected $Description = 'Exif Image Width';

}
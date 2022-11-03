<?php

namespace CommandApp\Cinema\Commands\Shared\Model\ValueObject;

use Exception;

enum PlotEnum : string
{
    case Full = 'full';
    case Short = 'short';
}

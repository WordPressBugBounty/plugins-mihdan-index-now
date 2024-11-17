<?php

namespace Mihdan\IndexNow\Dependencies\Carbon\Doctrine;

use Mihdan\IndexNow\Dependencies\Carbon\Carbon;
use Mihdan\IndexNow\Dependencies\Doctrine\DBAL\Types\VarDateTimeType;
/** @internal */
class DateTimeType extends VarDateTimeType implements CarbonDoctrineType
{
    /** @use CarbonTypeConverter<Carbon> */
    use CarbonTypeConverter;
}

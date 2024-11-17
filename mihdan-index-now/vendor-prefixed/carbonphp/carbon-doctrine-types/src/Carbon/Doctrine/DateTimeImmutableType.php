<?php

namespace Mihdan\IndexNow\Dependencies\Carbon\Doctrine;

use Mihdan\IndexNow\Dependencies\Carbon\CarbonImmutable;
use Mihdan\IndexNow\Dependencies\Doctrine\DBAL\Types\VarDateTimeImmutableType;
/** @internal */
class DateTimeImmutableType extends VarDateTimeImmutableType implements CarbonDoctrineType
{
    /** @use CarbonTypeConverter<CarbonImmutable> */
    use CarbonTypeConverter;
    /**
     * @return class-string<CarbonImmutable>
     */
    protected function getCarbonClassName() : string
    {
        return CarbonImmutable::class;
    }
}

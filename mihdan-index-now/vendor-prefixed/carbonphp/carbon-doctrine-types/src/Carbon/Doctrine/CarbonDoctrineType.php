<?php

namespace Mihdan\IndexNow\Dependencies\Carbon\Doctrine;

use Mihdan\IndexNow\Dependencies\Doctrine\DBAL\Platforms\AbstractPlatform;
/** @internal */
interface CarbonDoctrineType
{
    public function getSQLDeclaration(array $fieldDeclaration, AbstractPlatform $platform);
    public function convertToPHPValue($value, AbstractPlatform $platform);
    public function convertToDatabaseValue($value, AbstractPlatform $platform);
}

<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Mihdan\IndexNow\Dependencies\Symfony\Contracts\Translation;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 * @internal
 */
interface TranslatableInterface
{
    public function trans(TranslatorInterface $translator, ?string $locale = null) : string;
}

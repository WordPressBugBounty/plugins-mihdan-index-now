<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Mihdan\IndexNow\Dependencies\Symfony\Component\Translation;

use Mihdan\IndexNow\Dependencies\Symfony\Contracts\Translation\LocaleAwareInterface;
use Mihdan\IndexNow\Dependencies\Symfony\Contracts\Translation\TranslatorInterface;
use Mihdan\IndexNow\Dependencies\Symfony\Contracts\Translation\TranslatorTrait;
/**
 * IdentityTranslator does not translate anything.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @internal
 */
class IdentityTranslator implements TranslatorInterface, LocaleAwareInterface
{
    use TranslatorTrait;
}

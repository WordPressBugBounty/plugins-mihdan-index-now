<?php

/**
 * This file is part of the Carbon package.
 *
 * (c) Brian Nesbitt <brian@nesbot.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Mihdan\IndexNow\Dependencies\Carbon;

use ReflectionMethod;
use Mihdan\IndexNow\Dependencies\Symfony\Component\Translation;
use Mihdan\IndexNow\Dependencies\Symfony\Contracts\Translation\TranslatorInterface;
$transMethod = new ReflectionMethod(\class_exists(TranslatorInterface::class) ? TranslatorInterface::class : Translation\Translator::class, 'trans');
require $transMethod->hasReturnType() ? __DIR__ . '/../../lazy/Carbon/TranslatorStrongType.php' : __DIR__ . '/../../lazy/Carbon/TranslatorWeakType.php';
/** @internal */
class Translator extends LazyTranslator
{
    // Proxy dynamically loaded LazyTranslator in a static way
}

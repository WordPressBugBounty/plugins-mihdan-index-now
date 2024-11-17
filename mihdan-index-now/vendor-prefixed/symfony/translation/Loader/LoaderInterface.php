<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Mihdan\IndexNow\Dependencies\Symfony\Component\Translation\Loader;

use Mihdan\IndexNow\Dependencies\Symfony\Component\Translation\Exception\InvalidResourceException;
use Mihdan\IndexNow\Dependencies\Symfony\Component\Translation\Exception\NotFoundResourceException;
use Mihdan\IndexNow\Dependencies\Symfony\Component\Translation\MessageCatalogue;
/**
 * LoaderInterface is the interface implemented by all translation loaders.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @internal
 */
interface LoaderInterface
{
    /**
     * Loads a locale.
     *
     * @param mixed  $resource A resource
     * @param string $locale   A locale
     * @param string $domain   The domain
     *
     * @return MessageCatalogue
     *
     * @throws NotFoundResourceException when the resource cannot be found
     * @throws InvalidResourceException  when the resource cannot be loaded
     */
    public function load($resource, string $locale, string $domain = 'messages');
}

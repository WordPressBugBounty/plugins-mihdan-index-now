<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Mihdan\IndexNow\Dependencies\Symfony\Component\Translation\Provider;

use Mihdan\IndexNow\Dependencies\Symfony\Component\Translation\Exception\IncompleteDsnException;
/** @internal */
abstract class AbstractProviderFactory implements ProviderFactoryInterface
{
    public function supports(Dsn $dsn) : bool
    {
        return \in_array($dsn->getScheme(), $this->getSupportedSchemes(), \true);
    }
    /**
     * @return string[]
     */
    protected abstract function getSupportedSchemes() : array;
    protected function getUser(Dsn $dsn) : string
    {
        if (null === ($user = $dsn->getUser())) {
            throw new IncompleteDsnException('User is not set.', $dsn->getScheme() . '://' . $dsn->getHost());
        }
        return $user;
    }
    protected function getPassword(Dsn $dsn) : string
    {
        if (null === ($password = $dsn->getPassword())) {
            throw new IncompleteDsnException('Password is not set.', $dsn->getOriginalDsn());
        }
        return $password;
    }
}

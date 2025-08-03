<?php

declare(strict_types=1);

namespace Boson\Contracts\Http\Component\Url;

use Boson\Contracts\Uri\UriInterface;

/**
 * @phpstan-type OutUrlType UriInterface
 */
interface UrlProviderInterface
{
    /**
     * Gets URI string of this instance.
     *
     * @var OutUrlType
     */
    public UriInterface $url {
        get;
    }
}

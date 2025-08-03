<?php

declare(strict_types=1);

namespace Boson\Contracts\Http\Component\Body;

/**
 * @phpstan-type OutBodyType string
 */
interface BodyProviderInterface
{
    /**
     * Get content of an HTTP request or response message corresponds
     * to the entity body defined in RFC 2616.
     *
     * @var OutBodyType
     */
    public string $body {
        get;
    }
}

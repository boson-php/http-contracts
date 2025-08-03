<?php

declare(strict_types=1);

namespace Boson\Contracts\Http\Component\Body;

use Boson\Contracts\Http\Exception\InvalidComponentArgumentExceptionInterface;

/**
 * Evolvable implementation of {@see BodyProviderInterface}.
 *
 * Allows to modify HTTP body value using instance value as a prototype
 * without changing the object itself.
 *
 * @phpstan-type InBodyType \Stringable|string
 */
interface EvolvableBodyProviderInterface extends BodyProviderInterface
{
    /**
     * Return an instance with the specified message body
     *
     * This method MUST be implemented in such a way as to retain the
     * immutability of the message, and MUST return a new instance
     * that has the new body
     *
     * @param InBodyType $body A new HTTP body value
     *
     * @throws InvalidComponentArgumentExceptionInterface in case of new passed
     *         body value is invalid
     */
    public function withBody(\Stringable|string $body): self;
}

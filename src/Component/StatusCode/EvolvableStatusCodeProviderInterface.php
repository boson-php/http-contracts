<?php

declare(strict_types=1);

namespace Boson\Contracts\Http\Component\StatusCode;

use Boson\Contracts\Http\Component\StatusCodeInterface;
use Boson\Contracts\Http\Exception\InvalidComponentArgumentExceptionInterface;

/**
 * Evolvable implementation of {@see StatusCodeProviderInterface}.
 *
 * Allows to modify HTTP status code value using instance value as a prototype
 * without changing the object itself.
 *
 * @phpstan-type InStatusCodeType int|StatusCodeInterface
 */
interface EvolvableStatusCodeProviderInterface extends StatusCodeProviderInterface
{
    /**
     * Return an instance with the provided HTTP status code
     *
     * This method MUST be implemented in such a way as to retain the
     * immutability of the message, and MUST return an instance that has the
     * changed HTTP status code
     *
     * @param InStatusCodeType $status A new HTTP status code value
     *
     * @throws InvalidComponentArgumentExceptionInterface in case of new
     *         HTTP status code is invalid
     */
    public function withStatus(StatusCodeInterface|int $status): self;
}

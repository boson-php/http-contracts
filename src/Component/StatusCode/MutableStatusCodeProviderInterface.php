<?php

declare(strict_types=1);

namespace Boson\Contracts\Http\Component\StatusCode;

use Boson\Contracts\Http\Component\StatusCodeInterface;
use Boson\Contracts\Http\Exception\InvalidComponentArgumentExceptionInterface;

/**
 * Mutable implementation of {@see StatusCodeProviderInterface}.
 *
 * Implementations of this interface DO NOT guarantee that the
 * HTTP status code in this object will not be modified by anyone.
 *
 * @phpstan-import-type InStatusCodeType from EvolvableStatusCodeProviderInterface
 * @phpstan-import-type OutStatusCodeType from StatusCodeProviderInterface
 *
 * @phpstan-type OutMutableStatusCodeType OutStatusCodeType
 */
interface MutableStatusCodeProviderInterface extends StatusCodeProviderInterface
{
    /**
     * Get behaviour similar to {@see StatusCodeProviderInterface::$status}.
     *
     * @var OutMutableStatusCodeType
     */
    public StatusCodeInterface $status {
        get;
        /**
         * Allows to set any integer status code value or status code insatance.
         *
         * @param InStatusCodeType $status A new HTTP status code value
         *
         * @throws InvalidComponentArgumentExceptionInterface in case of new
         *         HTTP status code is invalid
         */
        set(StatusCodeInterface|int $status);
    }
}

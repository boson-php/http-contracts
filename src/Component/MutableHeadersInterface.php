<?php

declare(strict_types=1);

namespace Boson\Contracts\Http\Component;

use Boson\Contracts\Http\Exception\InvalidComponentArgumentExceptionInterface;

/**
 * Mutable implementation of {@see HeadersInterface}.
 *
 * Implementations of this interface DO NOT guarantee that the
 * headers will not be modified by anyone.
 *
 * @phpstan-import-type InHeaderNameType from HeadersInterface
 * @phpstan-import-type InHeaderValueType from HeadersInterface
 * @phpstan-import-type InHeaderValuesType from HeadersInterface
 */
interface MutableHeadersInterface extends HeadersInterface
{
    /**
     * Adds new header value replacing the specified header.
     *
     * Note: Header resolution MUST be done without case-sensitivity.
     *
     * @param InHeaderNameType $name
     * @param InHeaderValuesType $values
     *
     * @throws InvalidComponentArgumentExceptionInterface
     */
    public function set(string|\Stringable $name, iterable|string|\Stringable $values): void;

    /**
     * Adds new header value appended with the given value.
     *
     * Note: Header resolution MUST be done without case-sensitivity.
     *
     * @param InHeaderNameType $name
     * @param InHeaderValueType $value
     *
     * @throws InvalidComponentArgumentExceptionInterface
     */
    public function add(string|\Stringable $name, string|\Stringable $value): void;

    /**
     * Removes the specified header.
     *
     * Note: Header resolution MUST be done without case-sensitivity.
     *
     * @param InHeaderNameType $name
     *
     * @throws InvalidComponentArgumentExceptionInterface
     */
    public function remove(string|\Stringable $name): void;

    /**
     * Remove all headers from headers list.
     */
    public function removeAll(): void;
}

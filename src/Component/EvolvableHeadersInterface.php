<?php

declare(strict_types=1);

namespace Boson\Contracts\Http\Component;

use Boson\Contracts\Http\Exception\InvalidComponentArgumentExceptionInterface;

/**
 * Evolvable implementation of {@see HeadersInterface}.
 *
 * Allows to modify header values using instance values as a prototype
 * without changing the object itself.
 *
 * @phpstan-import-type InHeaderNameType from HeadersInterface
 * @phpstan-import-type InHeaderValueType from HeadersInterface
 * @phpstan-import-type InHeaderValuesType from HeadersInterface
 */
interface EvolvableHeadersInterface extends HeadersInterface
{
    /**
     * @param InHeaderNameType $name
     * @param InHeaderValueType $value
     *
     * @throws InvalidComponentArgumentExceptionInterface
     */
    public function withAddedHeader(string|\Stringable $name, string|\Stringable $value): self;

    /**
     * @param InHeaderNameType $name
     * @param InHeaderValuesType $values
     *
     * @throws InvalidComponentArgumentExceptionInterface
     */
    public function withHeader(string|\Stringable $name, string|\Stringable|iterable $values): self;

    /**
     * @param InHeaderNameType $name
     *
     * @throws InvalidComponentArgumentExceptionInterface
     */
    public function withoutHeader(string|\Stringable $name): self;
}

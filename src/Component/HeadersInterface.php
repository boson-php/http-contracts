<?php

declare(strict_types=1);

namespace Boson\Contracts\Http\Component;

use Boson\Contracts\Http\Exception\InvalidComponentArgumentExceptionInterface;

/**
 * A collection of headers and their values as defined in RFC 2616
 *
 * @phpstan-type InHeaderNameType \Stringable|non-empty-string
 * @phpstan-type OutHeaderNameType non-empty-lowercase-string
 * @phpstan-type InHeaderValueType \Stringable|string
 * @phpstan-type OutHeaderValueType string
 * @phpstan-type InHeaderValuesType InHeaderValueType|iterable<mixed, InHeaderValueType>
 * @phpstan-type OutHeaderValuesType list<OutHeaderValueType>
 * @phpstan-type InHeadersListType iterable<InHeaderNameType, InHeaderValuesType>
 * @phpstan-type OutHeadersListType array<OutHeaderNameType, OutHeaderValuesType>
 *
 * @template-extends \Traversable<OutHeaderNameType, OutHeaderValueType>
 */
interface HeadersInterface extends \Traversable, \Countable
{
    /**
     * Returns the first header by name or the default one.
     *
     * This method will return {@see null} in case of header is missing
     * and default value is not passed.
     *
     * @param InHeaderNameType $name case-insensitive header field name to find
     * @param InHeaderValueType|null $default Default value if header is not defined
     *
     * @return ($default is null ? OutHeaderValueType|null : OutHeaderValueType)
     * @throws InvalidComponentArgumentExceptionInterface in case of header name
     *         or default value is not valid
     */
    public function first(\Stringable|string $name, \Stringable|string|null $default = null): ?string;

    /**
     * Returns headers list by name
     *
     * @param InHeaderNameType $name case-insensitive header field name to find
     *
     * @return OutHeaderValuesType
     * @throws InvalidComponentArgumentExceptionInterface
     */
    public function all(\Stringable|string $name): array;

    /**
     * Returns {@see true} if the HTTP header is defined.
     *
     * @param InHeaderNameType $name case-insensitive header field name to find
     *
     * @throws InvalidComponentArgumentExceptionInterface
     */
    public function has(\Stringable|string $name): bool;

    /**
     * Returns {@see true} if the given HTTP header contains
     * the given case-sensitive value.
     *
     * @param InHeaderNameType $name case-insensitive header field name to find
     * @param InHeaderValueType $value header's value to find
     *
     * @throws InvalidComponentArgumentExceptionInterface
     */
    public function contains(\Stringable|string $name, \Stringable|string $value): bool;

    /**
     * Gets count of the headers.
     *
     * @return int<0, max>
     */
    public function count(): int;

    /**
     * @return OutHeadersListType
     */
    public function toArray(): array;
}

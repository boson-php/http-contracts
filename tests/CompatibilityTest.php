<?php

declare(strict_types=1);

namespace Boson\Contracts\Http\Tests;

use Boson\Contracts\Http\Component\Body\BodyProviderInterface;
use Boson\Contracts\Http\Component\Body\EvolvableBodyProviderInterface;
use Boson\Contracts\Http\Component\Body\MutableBodyProviderInterface;
use Boson\Contracts\Http\Component\EvolvableHeadersInterface;
use Boson\Contracts\Http\Component\Headers\EvolvableHeadersProviderInterface;
use Boson\Contracts\Http\Component\Headers\HeadersProviderInterface;
use Boson\Contracts\Http\Component\Headers\MutableHeadersProviderInterface;
use Boson\Contracts\Http\Component\HeadersInterface;
use Boson\Contracts\Http\Component\Method\EvolvableMethodProviderInterface;
use Boson\Contracts\Http\Component\Method\MethodProviderInterface;
use Boson\Contracts\Http\Component\Method\MutableMethodProviderInterface;
use Boson\Contracts\Http\Component\MethodInterface;
use Boson\Contracts\Http\Component\MutableHeadersInterface;
use Boson\Contracts\Http\Component\StatusCode\EvolvableStatusCodeProviderInterface;
use Boson\Contracts\Http\Component\StatusCode\MutableStatusCodeProviderInterface;
use Boson\Contracts\Http\Component\StatusCode\StatusCodeCategoryInterface;
use Boson\Contracts\Http\Component\StatusCode\StatusCodeProviderInterface;
use Boson\Contracts\Http\Component\StatusCodeInterface;
use Boson\Contracts\Http\Component\Url\EvolvableUrlProviderInterface;
use Boson\Contracts\Http\Component\Url\MutableUrlProviderInterface;
use Boson\Contracts\Http\Component\Url\UrlProviderInterface;
use Boson\Contracts\Http\EvolvableMessageInterface;
use Boson\Contracts\Http\EvolvableRequestInterface;
use Boson\Contracts\Http\EvolvableResponseInterface;
use Boson\Contracts\Http\Exception\InvalidComponentArgumentExceptionInterface;
use Boson\Contracts\Http\MessageInterface;
use Boson\Contracts\Http\MutableMessageInterface;
use Boson\Contracts\Http\MutableRequestInterface;
use Boson\Contracts\Http\MutableResponseInterface;
use Boson\Contracts\Http\RequestInterface;
use Boson\Contracts\Http\ResponseInterface;
use Boson\Contracts\Uri\UriInterface;
use PHPUnit\Framework\Attributes\DoesNotPerformAssertions;
use PHPUnit\Framework\Attributes\Group;

/**
 * Note: Changing the behavior of these tests is allowed ONLY when updating
 *       a MAJOR version of the package.
 */
#[Group('boson-php/http-contracts')]
final class CompatibilityTest extends TestCase
{
    #[DoesNotPerformAssertions]
    public function testMessageInterfaceCompatibility(): void
    {
        new class implements MessageInterface {
            public HeadersInterface $headers {
                get {}
            }

            public string $body {
                get {}
            }
        };
    }

    #[DoesNotPerformAssertions]
    public function testRequestInterfaceCompatibility(): void
    {
        new class implements RequestInterface {
            public HeadersInterface $headers {
                get {}
            }

            public string $body {
                get {}
            }

            public MethodInterface $method {
                get {}
            }

            public UriInterface $url {
                get {}
            }
        };
    }

    #[DoesNotPerformAssertions]
    public function testResponseInterfaceCompatibility(): void
    {
        new class implements ResponseInterface {
            public HeadersInterface $headers {
                get {}
            }

            public string $body {
                get {}
            }

            public StatusCodeInterface $status {
                get {}
            }
        };
    }

    #[DoesNotPerformAssertions]
    public function testMutableMessageInterfaceCompatibility(): void
    {
        new class implements MutableMessageInterface {
            public MutableHeadersInterface $headers {
                get {}
                set(iterable $headers) {}
            }

            public string $body {
                get {}
                set(string|\Stringable $body) {}
            }
        };
    }

    #[DoesNotPerformAssertions]
    public function testEvolvableMessageInterfaceCompatibility(): void
    {
        new class implements EvolvableMessageInterface {
            public HeadersInterface $headers {
                get {}
            }

            public string $body {
                get {}
            }

            public function withHeaders(iterable $headers): self {}

            public function withBody(string|\Stringable $body): self {}
        };
    }

    #[DoesNotPerformAssertions]
    public function testMutableRequestInterfaceCompatibility(): void
    {
        new class implements MutableRequestInterface {
            public MutableHeadersInterface $headers {
                get {}
                set(iterable $headers) {}
            }

            public string $body {
                get {}
                set(string|\Stringable $body) {}
            }

            public MethodInterface $method {
                get {}
                set(string|\Stringable $method) {}
            }

            public UriInterface $url {
                get {}
                set(string|\Stringable $url) {}
            }
        };
    }

    #[DoesNotPerformAssertions]
    public function testEvolvableRequestInterfaceCompatibility(): void
    {
        new class implements EvolvableRequestInterface {
            public HeadersInterface $headers {
                get {}
            }

            public string $body {
                get {}
            }

            public MethodInterface $method {
                get {}
            }

            public UriInterface $url {
                get {}
            }

            public function withMethod(string|\Stringable $method): self {}

            public function withUrl(string|\Stringable $url): self {}

            public function withHeaders(iterable $headers): self {}

            public function withBody(string|\Stringable $body): self {}
        };
    }

    #[DoesNotPerformAssertions]
    public function testMutableResponseInterfaceCompatibility(): void
    {
        new class implements MutableResponseInterface {
            public MutableHeadersInterface $headers {
                get {}
                set(iterable $headers) {}
            }

            public string $body {
                get {}
                set(string|\Stringable $body) {}
            }

            public StatusCodeInterface $status {
                get {}
                set(StatusCodeInterface|int $status) {}
            }
        };
    }

    #[DoesNotPerformAssertions]
    public function testEvolvableResponseInterfaceCompatibility(): void
    {
        new class implements EvolvableResponseInterface {
            public HeadersInterface $headers {
                get {}
            }

            public string $body {
                get {}
            }

            public StatusCodeInterface $status {
                get {}
            }

            public function withBody(string|\Stringable $body): self {}

            public function withStatus(StatusCodeInterface|int $status): self {}

            public function withHeaders(iterable $headers): self {}
        };
    }

    #[DoesNotPerformAssertions]
    public function testHeadersInterfaceCompatibility(): void
    {
        new class implements HeadersInterface, \IteratorAggregate {
            public function first(string|\Stringable $name, string|\Stringable|null $default = null): ?string {}

            public function all(string|\Stringable $name): array {}

            public function has(string|\Stringable $name): bool {}

            public function contains(string|\Stringable $name, string|\Stringable $value): bool {}

            public function count(): int {}

            public function toArray(): array {}

            public function getIterator(): \Traversable {}
        };
    }

    #[DoesNotPerformAssertions]
    public function testMutableHeadersInterfaceCompatibility(): void
    {
        new class implements MutableHeadersInterface, \IteratorAggregate {
            public function first(string|\Stringable $name, string|\Stringable|null $default = null): ?string {}

            public function all(string|\Stringable $name): array {}

            public function has(string|\Stringable $name): bool {}

            public function contains(string|\Stringable $name, string|\Stringable $value): bool {}

            public function count(): int {}

            public function toArray(): array {}

            public function getIterator(): \Traversable {}

            public function set(string|\Stringable $name, iterable|string|\Stringable $values): void {}

            public function add(string|\Stringable $name, string|\Stringable $value): void {}

            public function remove(string|\Stringable $name): void {}

            public function removeAll(): void {}
        };
    }

    #[DoesNotPerformAssertions]
    public function testEvolvableHeadersInterfaceCompatibility(): void
    {
        new class implements EvolvableHeadersInterface, \IteratorAggregate {
            public function first(string|\Stringable $name, string|\Stringable|null $default = null): ?string {}

            public function all(string|\Stringable $name): array {}

            public function has(string|\Stringable $name): bool {}

            public function contains(string|\Stringable $name, string|\Stringable $value): bool {}

            public function count(): int {}

            public function toArray(): array {}

            public function getIterator(): \Traversable {}

            public function withAddedHeader(string|\Stringable $name, string|\Stringable $value): self {}

            public function withHeader(string|\Stringable $name, string|\Stringable|iterable $values): self {}

            public function withoutHeader(string|\Stringable $name): self {}
        };
    }

    #[DoesNotPerformAssertions]
    public function testMethodInterfaceCompatibility(): void
    {
        new class implements MethodInterface {
            public string $name { get {} }
            public ?bool $isIdempotent { get {} }
            public ?bool $isSafe { get {} }

            public function equals(mixed $other): bool {}

            public function __toString(): string {}

            public function toString(): string {}
        };
    }

    #[DoesNotPerformAssertions]
    public function testStatusCodeInterfaceCompatibility(): void
    {
        new class implements StatusCodeInterface {
            public int $code { get {} }
            public string $reason { get {} }
            public ?StatusCodeCategoryInterface $category { get {} }

            public function equals(mixed $other): bool {}

            public function __toString(): string {}

            public function toInteger(): int {}

            public function toString(): string {}
        };
    }

    #[DoesNotPerformAssertions]
    public function testStatusCodeCategoryInterfaceCompatibility(): void
    {
        new class implements StatusCodeCategoryInterface {
            public string $name { get {} }

            public function equals(mixed $other): bool {}

            public function __toString(): string {}

            public function toString(): string {}
        };
    }

    #[DoesNotPerformAssertions]
    public function testBodyProviderInterfaceCompatibility(): void
    {
        new class implements BodyProviderInterface {
            public string $body { get {} }
        };
    }

    #[DoesNotPerformAssertions]
    public function testMutableBodyProviderInterfaceCompatibility(): void
    {
        new class implements MutableBodyProviderInterface {
            public string $body {
                get {}
                set(string|\Stringable $body) {}
            }
        };
    }

    #[DoesNotPerformAssertions]
    public function testEvolvableBodyProviderInterfaceCompatibility(): void
    {
        new class implements EvolvableBodyProviderInterface {
            public string $body { get {} }

            public function withBody(string|\Stringable $body): self {}
        };
    }

    #[DoesNotPerformAssertions]
    public function testHeadersProviderInterfaceCompatibility(): void
    {
        new class implements HeadersProviderInterface {
            public HeadersInterface $headers { get {} }
        };
    }

    #[DoesNotPerformAssertions]
    public function testMutableHeadersProviderInterfaceCompatibility(): void
    {
        new class implements MutableHeadersProviderInterface {
            public MutableHeadersInterface $headers {
                get {}
                set(iterable $headers) {}
            }
        };
    }

    #[DoesNotPerformAssertions]
    public function testEvolvableHeadersProviderInterfaceCompatibility(): void
    {
        new class implements EvolvableHeadersProviderInterface {
            public HeadersInterface $headers { get {} }

            public function withHeaders(iterable $headers): self {}
        };
    }

    #[DoesNotPerformAssertions]
    public function testMethodProviderInterfaceCompatibility(): void
    {
        new class implements MethodProviderInterface {
            public MethodInterface $method { get {} }
        };
    }

    #[DoesNotPerformAssertions]
    public function testMutableMethodProviderInterfaceCompatibility(): void
    {
        new class implements MutableMethodProviderInterface {
            public MethodInterface $method {
                get {}
                set(string|\Stringable $method) {}
            }
        };
    }

    #[DoesNotPerformAssertions]
    public function testEvolvableMethodProviderInterfaceCompatibility(): void
    {
        new class implements EvolvableMethodProviderInterface {
            public MethodInterface $method { get {} }

            public function withMethod(string|\Stringable $method): self {}
        };
    }

    #[DoesNotPerformAssertions]
    public function testUrlProviderInterfaceCompatibility(): void
    {
        new class implements UrlProviderInterface {
            public UriInterface $url { get {} }
        };
    }

    #[DoesNotPerformAssertions]
    public function testMutableUrlProviderInterfaceCompatibility(): void
    {
        new class implements MutableUrlProviderInterface {
            public UriInterface $url {
                get {}
                set(string|\Stringable $url) {}
            }
        };
    }

    #[DoesNotPerformAssertions]
    public function testEvolvableUrlProviderInterfaceCompatibility(): void
    {
        new class implements EvolvableUrlProviderInterface {
            public UriInterface $url { get {} }

            public function withUrl(string|\Stringable $url): self {}
        };
    }

    #[DoesNotPerformAssertions]
    public function testStatusCodeProviderInterfaceCompatibility(): void
    {
        new class implements StatusCodeProviderInterface {
            public StatusCodeInterface $status { get {} }
        };
    }

    #[DoesNotPerformAssertions]
    public function testMutableStatusCodeProviderInterfaceCompatibility(): void
    {
        new class implements MutableStatusCodeProviderInterface {
            public StatusCodeInterface $status {
                get {}
                set(StatusCodeInterface|int $status) {}
            }
        };
    }

    #[DoesNotPerformAssertions]
    public function testEvolvableStatusCodeProviderInterfaceCompatibility(): void
    {
        new class implements EvolvableStatusCodeProviderInterface {
            public StatusCodeInterface $status { get {} }

            public function withStatus(StatusCodeInterface|int $status): self {}
        };
    }

    #[DoesNotPerformAssertions]
    public function testInvalidComponentArgumentExceptionInterfaceCompatibility(): void
    {
        new class extends \Exception implements InvalidComponentArgumentExceptionInterface {};
    }
}

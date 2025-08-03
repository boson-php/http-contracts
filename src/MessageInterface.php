<?php

declare(strict_types=1);

namespace Boson\Contracts\Http;

use Boson\Contracts\Http\Component\Body\BodyProviderInterface;
use Boson\Contracts\Http\Component\Headers\HeadersProviderInterface;

interface MessageInterface extends
    HeadersProviderInterface,
    BodyProviderInterface {}

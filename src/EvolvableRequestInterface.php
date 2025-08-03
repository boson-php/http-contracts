<?php

declare(strict_types=1);

namespace Boson\Contracts\Http;

use Boson\Contracts\Http\Component\Method\EvolvableMethodProviderInterface;
use Boson\Contracts\Http\Component\Url\EvolvableUrlProviderInterface;

interface EvolvableRequestInterface extends
    EvolvableMethodProviderInterface,
    EvolvableUrlProviderInterface,
    RequestInterface,
    EvolvableMessageInterface {}

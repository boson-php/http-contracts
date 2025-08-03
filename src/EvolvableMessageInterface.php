<?php

declare(strict_types=1);

namespace Boson\Contracts\Http;

use Boson\Contracts\Http\Component\Body\EvolvableBodyProviderInterface;
use Boson\Contracts\Http\Component\Headers\EvolvableHeadersProviderInterface;

interface EvolvableMessageInterface extends
    EvolvableHeadersProviderInterface,
    EvolvableBodyProviderInterface,
    MessageInterface {}

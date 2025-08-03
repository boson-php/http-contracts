<?php

declare(strict_types=1);

namespace Boson\Contracts\Http;

use Boson\Contracts\Http\Component\Body\MutableBodyProviderInterface;
use Boson\Contracts\Http\Component\Headers\MutableHeadersProviderInterface;

interface MutableMessageInterface extends
    MutableHeadersProviderInterface,
    MutableBodyProviderInterface,
    MessageInterface {}

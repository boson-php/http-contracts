<?php

declare(strict_types=1);

namespace Boson\Contracts\Http;

use Boson\Contracts\Http\Component\Method\MutableMethodProviderInterface;
use Boson\Contracts\Http\Component\Url\MutableUrlProviderInterface;

interface MutableRequestInterface extends
    MutableMethodProviderInterface,
    MutableUrlProviderInterface,
    MutableMessageInterface,
    RequestInterface {}

<?php

declare(strict_types=1);

namespace Boson\Contracts\Http;

use Boson\Contracts\Http\Component\Method\MethodProviderInterface;
use Boson\Contracts\Http\Component\Url\UrlProviderInterface;

interface RequestInterface extends
    MethodProviderInterface,
    UrlProviderInterface,
    MessageInterface {}

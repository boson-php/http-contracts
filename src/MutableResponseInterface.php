<?php

declare(strict_types=1);

namespace Boson\Contracts\Http;

use Boson\Contracts\Http\Component\StatusCode\MutableStatusCodeProviderInterface;

interface MutableResponseInterface extends
    MutableStatusCodeProviderInterface,
    MutableMessageInterface,
    ResponseInterface {}

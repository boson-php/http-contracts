<?php

declare(strict_types=1);

namespace Boson\Contracts\Http;

use Boson\Contracts\Http\Component\StatusCode\StatusCodeProviderInterface;

interface ResponseInterface extends
    StatusCodeProviderInterface,
    MessageInterface {}

<?php

namespace AsyncAws\TimestreamWrite\Exception;

use AsyncAws\Core\Exception\Http\ClientException;
use Symfony\Contracts\HttpClient\ResponseInterface;

/**
 * Too many requests were made by a user exceeding service quotas. The request was throttled.
 */
final class ThrottlingException extends ClientException
{
    protected function populateResult(ResponseInterface $response): void
    {
        $data = $response->toArray(false);

        $this->message = (string) $data['message'];
    }
}

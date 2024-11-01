<?php

namespace ShopMagicTwilioVendor\Psr\Http\Client;

use ShopMagicTwilioVendor\Psr\Http\Message\RequestInterface;
use ShopMagicTwilioVendor\Psr\Http\Message\ResponseInterface;
interface ClientInterface
{
    /**
     * Sends a PSR-7 request and returns a PSR-7 response.
     *
     * @param RequestInterface $request
     *
     * @return ResponseInterface
     *
     * @throws \Psr\Http\Client\ClientExceptionInterface If an error happens while processing the request.
     */
    public function sendRequest(\ShopMagicTwilioVendor\Psr\Http\Message\RequestInterface $request) : \ShopMagicTwilioVendor\Psr\Http\Message\ResponseInterface;
}

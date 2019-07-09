<?php

namespace Neok\Telegram;

class Response
{
    /** @var array */
    protected $headers;
    /** @var string */
    protected $statusCode;
    /** @var string */
    protected $body;

    public function getHeaders(): array
    {
        return $this->headers;
    }

    public function setHeaders(array $headers): self
    {
        $this->headers = $headers;

        return $this;
    }

    public function getStatusCode(): string
    {
        return $this->statusCode;
    }

    public function setStatusCode(string $statusCode): self
    {
        $this->statusCode = $statusCode;

        return $this;
    }

    public function getBody(): string
    {
        return $this->body;
    }

    public function setBody(string $body): self
    {
        $this->body = $body;

        return $this;
    }
}

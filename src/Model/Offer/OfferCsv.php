<?php

// this file is auto-generated by prolic/fpp
// don't edit this file manually

declare(strict_types=1);

namespace BolCom\RetailerApi\Model\Offer;

final class OfferCsv
{
    private $url;

    public function __construct(string $url)
    {
        $this->url = $url;
    }

    public function url(): string
    {
        return $this->url;
    }

    public function withUrl(string $url): OfferCsv
    {
        return new self($url);
    }

    public static function fromArray(array $data): OfferCsv
    {
        if (! isset($data['url']) || ! \is_string($data['url'])) {
            throw new \InvalidArgumentException("Key 'url' is missing in data array or is not a string");
        }

        $url = $data['url'];

        return new self($url);
    }
}

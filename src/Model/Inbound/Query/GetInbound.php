<?php

// this file is auto-generated by prolic/fpp
// don't edit this file manually

declare(strict_types=1);

namespace BolCom\RetailerApi\Model\Inbound\Query;

final class GetInbound
{
    private $inboundId;

    public function __construct(\BolCom\RetailerApi\Model\Inbound\InboundId $inboundId)
    {
        $this->inboundId = $inboundId;
    }

    public function inboundId(): \BolCom\RetailerApi\Model\Inbound\InboundId
    {
        return $this->inboundId;
    }

    public function withInboundId(\BolCom\RetailerApi\Model\Inbound\InboundId $inboundId): GetInbound
    {
        return new self($inboundId);
    }
}

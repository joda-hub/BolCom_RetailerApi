<?php

// this file is auto-generated by prolic/fpp
// don't edit this file manually

declare(strict_types=1);

namespace BolCom\RetailerApi\Model\ProcessStatus\Query;

final class GetStatusByEntity
{
    private $entityId;
    private $eventType;
    private $page;

    public function __construct(\BolCom\RetailerApi\Model\ProcessStatus\EntityId $entityId, \BolCom\RetailerApi\Model\ProcessStatus\EventType $eventType, int $page)
    {
        $this->entityId = $entityId;
        $this->eventType = $eventType;
        $this->page = $page;
    }

    public function entityId(): \BolCom\RetailerApi\Model\ProcessStatus\EntityId
    {
        return $this->entityId;
    }

    public function eventType(): \BolCom\RetailerApi\Model\ProcessStatus\EventType
    {
        return $this->eventType;
    }

    public function page(): int
    {
        return $this->page;
    }

    public function withEntityId(\BolCom\RetailerApi\Model\ProcessStatus\EntityId $entityId): GetStatusByEntity
    {
        return new self($entityId, $this->eventType, $this->page);
    }

    public function withEventType(\BolCom\RetailerApi\Model\ProcessStatus\EventType $eventType): GetStatusByEntity
    {
        return new self($this->entityId, $eventType, $this->page);
    }

    public function withPage(int $page): GetStatusByEntity
    {
        return new self($this->entityId, $this->eventType, $page);
    }
}
<?php

// this file is auto-generated by prolic/fpp
// don't edit this file manually

declare(strict_types=1);

namespace BolCom\RetailerApi\Model\Inbound;

final class Inbound
{
    private $id;
    private $reference;
    private $creationDate;
    private $state;
    private $labellingService;
    private $announcedBSKUs;
    private $announcedQuantity;
    private $receivedBSKUs;
    private $receivedQuantity;
    private $timeslot;
    private $products;
    private $stateTransitions;
    private $fbbTransporter;

    public function __construct(InboundId $id, Reference $reference, ?\BolCom\RetailerApi\Model\DateTime $creationDate, State $state, bool $labellingService, int $announcedBSKUs, int $announcedQuantity, int $receivedBSKUs, int $receivedQuantity, Timeslot $timeslot, array $products, array $stateTransitions, Transporter $fbbTransporter)
    {
        $this->id = $id;
        $this->reference = $reference;
        $this->creationDate = $creationDate;
        $this->state = $state;
        $this->labellingService = $labellingService;
        $this->announcedBSKUs = $announcedBSKUs;
        $this->announcedQuantity = $announcedQuantity;
        $this->receivedBSKUs = $receivedBSKUs;
        $this->receivedQuantity = $receivedQuantity;
        $this->timeslot = $timeslot;
        foreach ($products as $__value) {
            if (! $__value instanceof \BolCom\RetailerApi\Model\Inbound\Product) {
                throw new \InvalidArgumentException('products expected an array of BolCom\RetailerApi\Model\Inbound\Product');
            }
            $this->products[] = $__value;
        }

        foreach ($stateTransitions as $__value) {
            if (! $__value instanceof \BolCom\RetailerApi\Model\Inbound\StateTransition) {
                throw new \InvalidArgumentException('stateTransitions expected an array of BolCom\RetailerApi\Model\Inbound\StateTransition');
            }
            $this->stateTransitions[] = $__value;
        }

        $this->fbbTransporter = $fbbTransporter;
    }

    public function id(): InboundId
    {
        return $this->id;
    }

    public function reference(): Reference
    {
        return $this->reference;
    }

    public function creationDate(): ?\BolCom\RetailerApi\Model\DateTime
    {
        return $this->creationDate;
    }

    public function state(): State
    {
        return $this->state;
    }

    public function labellingService(): bool
    {
        return $this->labellingService;
    }

    public function announcedBSKUs(): int
    {
        return $this->announcedBSKUs;
    }

    public function announcedQuantity(): int
    {
        return $this->announcedQuantity;
    }

    public function receivedBSKUs(): int
    {
        return $this->receivedBSKUs;
    }

    public function receivedQuantity(): int
    {
        return $this->receivedQuantity;
    }

    public function timeslot(): Timeslot
    {
        return $this->timeslot;
    }

    public function products(): array
    {
        return $this->products;
    }

    public function stateTransitions(): array
    {
        return $this->stateTransitions;
    }

    public function fbbTransporter(): Transporter
    {
        return $this->fbbTransporter;
    }

    public function withId(InboundId $id): Inbound
    {
        return new self($id, $this->reference, $this->creationDate, $this->state, $this->labellingService, $this->announcedBSKUs, $this->announcedQuantity, $this->receivedBSKUs, $this->receivedQuantity, $this->timeslot, $this->products, $this->stateTransitions, $this->fbbTransporter);
    }

    public function withReference(Reference $reference): Inbound
    {
        return new self($this->id, $reference, $this->creationDate, $this->state, $this->labellingService, $this->announcedBSKUs, $this->announcedQuantity, $this->receivedBSKUs, $this->receivedQuantity, $this->timeslot, $this->products, $this->stateTransitions, $this->fbbTransporter);
    }

    public function withCreationDate(?\BolCom\RetailerApi\Model\DateTime $creationDate): Inbound
    {
        return new self($this->id, $this->reference, $creationDate, $this->state, $this->labellingService, $this->announcedBSKUs, $this->announcedQuantity, $this->receivedBSKUs, $this->receivedQuantity, $this->timeslot, $this->products, $this->stateTransitions, $this->fbbTransporter);
    }

    public function withState(State $state): Inbound
    {
        return new self($this->id, $this->reference, $this->creationDate, $state, $this->labellingService, $this->announcedBSKUs, $this->announcedQuantity, $this->receivedBSKUs, $this->receivedQuantity, $this->timeslot, $this->products, $this->stateTransitions, $this->fbbTransporter);
    }

    public function withLabellingService(bool $labellingService): Inbound
    {
        return new self($this->id, $this->reference, $this->creationDate, $this->state, $labellingService, $this->announcedBSKUs, $this->announcedQuantity, $this->receivedBSKUs, $this->receivedQuantity, $this->timeslot, $this->products, $this->stateTransitions, $this->fbbTransporter);
    }

    public function withAnnouncedBSKUs(int $announcedBSKUs): Inbound
    {
        return new self($this->id, $this->reference, $this->creationDate, $this->state, $this->labellingService, $announcedBSKUs, $this->announcedQuantity, $this->receivedBSKUs, $this->receivedQuantity, $this->timeslot, $this->products, $this->stateTransitions, $this->fbbTransporter);
    }

    public function withAnnouncedQuantity(int $announcedQuantity): Inbound
    {
        return new self($this->id, $this->reference, $this->creationDate, $this->state, $this->labellingService, $this->announcedBSKUs, $announcedQuantity, $this->receivedBSKUs, $this->receivedQuantity, $this->timeslot, $this->products, $this->stateTransitions, $this->fbbTransporter);
    }

    public function withReceivedBSKUs(int $receivedBSKUs): Inbound
    {
        return new self($this->id, $this->reference, $this->creationDate, $this->state, $this->labellingService, $this->announcedBSKUs, $this->announcedQuantity, $receivedBSKUs, $this->receivedQuantity, $this->timeslot, $this->products, $this->stateTransitions, $this->fbbTransporter);
    }

    public function withReceivedQuantity(int $receivedQuantity): Inbound
    {
        return new self($this->id, $this->reference, $this->creationDate, $this->state, $this->labellingService, $this->announcedBSKUs, $this->announcedQuantity, $this->receivedBSKUs, $receivedQuantity, $this->timeslot, $this->products, $this->stateTransitions, $this->fbbTransporter);
    }

    public function withTimeslot(Timeslot $timeslot): Inbound
    {
        return new self($this->id, $this->reference, $this->creationDate, $this->state, $this->labellingService, $this->announcedBSKUs, $this->announcedQuantity, $this->receivedBSKUs, $this->receivedQuantity, $timeslot, $this->products, $this->stateTransitions, $this->fbbTransporter);
    }

    public function withProducts(array $products): Inbound
    {
        return new self($this->id, $this->reference, $this->creationDate, $this->state, $this->labellingService, $this->announcedBSKUs, $this->announcedQuantity, $this->receivedBSKUs, $this->receivedQuantity, $this->timeslot, $products, $this->stateTransitions, $this->fbbTransporter);
    }

    public function withStateTransitions(array $stateTransitions): Inbound
    {
        return new self($this->id, $this->reference, $this->creationDate, $this->state, $this->labellingService, $this->announcedBSKUs, $this->announcedQuantity, $this->receivedBSKUs, $this->receivedQuantity, $this->timeslot, $this->products, $stateTransitions, $this->fbbTransporter);
    }

    public function withFbbTransporter(Transporter $fbbTransporter): Inbound
    {
        return new self($this->id, $this->reference, $this->creationDate, $this->state, $this->labellingService, $this->announcedBSKUs, $this->announcedQuantity, $this->receivedBSKUs, $this->receivedQuantity, $this->timeslot, $this->products, $this->stateTransitions, $fbbTransporter);
    }
}
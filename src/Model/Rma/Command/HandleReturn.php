<?php

// this file is auto-generated by prolic/fpp
// don't edit this file manually

declare(strict_types=1);

namespace BolCom\RetailerApi\Model\Rma\Command;

final class HandleReturn
{
    private $returnNumber;
    private $handlingResult;
    private $quantityReturned;

    public function __construct(\BolCom\RetailerApi\Model\Rma\Command\BolCom\RetailerApi\Model\Rma\ReturnNumber $returnNumber, \BolCom\RetailerApi\Model\Rma\Command\BolCom\RetailerApi\Model\Rma\HandlingResult $handlingResult, QuantityReturned $quantityReturned)
    {
        $this->returnNumber = $returnNumber;
        $this->handlingResult = $handlingResult;
        $this->quantityReturned = $quantityReturned;
    }

    public function returnNumber(): \BolCom\RetailerApi\Model\Rma\Command\BolCom\RetailerApi\Model\Rma\ReturnNumber
    {
        return $this->returnNumber;
    }

    public function handlingResult(): \BolCom\RetailerApi\Model\Rma\Command\BolCom\RetailerApi\Model\Rma\HandlingResult
    {
        return $this->handlingResult;
    }

    public function quantityReturned(): QuantityReturned
    {
        return $this->quantityReturned;
    }

    public function withReturnNumber(\BolCom\RetailerApi\Model\Rma\Command\BolCom\RetailerApi\Model\Rma\ReturnNumber $returnNumber): HandleReturn
    {
        return new self($returnNumber, $this->handlingResult, $this->quantityReturned);
    }

    public function withHandlingResult(\BolCom\RetailerApi\Model\Rma\Command\BolCom\RetailerApi\Model\Rma\HandlingResult $handlingResult): HandleReturn
    {
        return new self($this->returnNumber, $handlingResult, $this->quantityReturned);
    }

    public function withQuantityReturned(QuantityReturned $quantityReturned): HandleReturn
    {
        return new self($this->returnNumber, $this->handlingResult, $quantityReturned);
    }
}
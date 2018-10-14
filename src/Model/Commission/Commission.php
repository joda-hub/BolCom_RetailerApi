<?php

// this file is auto-generated by prolic/fpp
// don't edit this file manually

declare(strict_types=1);

namespace BolCom\RetailerApi\Model\Commission;

final class Commission
{
    private $ean;
    private $condition;
    private $price;
    private $fixedAmound;
    private $percentage;
    private $totalCost;
    private $totalCostWithoutReduction;
    private $reduction;

    public function __construct(\BolCom\RetailerApi\Model\Ean $ean, \BolCom\RetailerApi\Model\Offer\Condition $condition, \BolCom\RetailerApi\Model\CurrencyAmount $price, \BolCom\RetailerApi\Model\CurrencyAmount $fixedAmound, float $percentage, \BolCom\RetailerApi\Model\CurrencyAmount $totalCost, \BolCom\RetailerApi\Model\CurrencyAmount $totalCostWithoutReduction, array $reduction)
    {
        $this->ean = $ean;
        $this->condition = $condition;
        $this->price = $price;
        $this->fixedAmound = $fixedAmound;
        $this->percentage = $percentage;
        $this->totalCost = $totalCost;
        $this->totalCostWithoutReduction = $totalCostWithoutReduction;
        foreach ($reduction as $__value) {
            if (! $__value instanceof \BolCom\RetailerApi\Model\Commission\CommissionResultReduction) {
                throw new \InvalidArgumentException('reduction expected an array of BolCom\RetailerApi\Model\Commission\CommissionResultReduction');
            }
            $this->reduction[] = $__value;
        }
    }

    public function ean(): \BolCom\RetailerApi\Model\Ean
    {
        return $this->ean;
    }

    public function condition(): \BolCom\RetailerApi\Model\Offer\Condition
    {
        return $this->condition;
    }

    public function price(): \BolCom\RetailerApi\Model\CurrencyAmount
    {
        return $this->price;
    }

    public function fixedAmound(): \BolCom\RetailerApi\Model\CurrencyAmount
    {
        return $this->fixedAmound;
    }

    public function percentage(): float
    {
        return $this->percentage;
    }

    public function totalCost(): \BolCom\RetailerApi\Model\CurrencyAmount
    {
        return $this->totalCost;
    }

    public function totalCostWithoutReduction(): \BolCom\RetailerApi\Model\CurrencyAmount
    {
        return $this->totalCostWithoutReduction;
    }

    public function reduction(): array
    {
        return $this->reduction;
    }

    public function withEan(\BolCom\RetailerApi\Model\Ean $ean): Commission
    {
        return new self($ean, $this->condition, $this->price, $this->fixedAmound, $this->percentage, $this->totalCost, $this->totalCostWithoutReduction, $this->reduction);
    }

    public function withCondition(\BolCom\RetailerApi\Model\Offer\Condition $condition): Commission
    {
        return new self($this->ean, $condition, $this->price, $this->fixedAmound, $this->percentage, $this->totalCost, $this->totalCostWithoutReduction, $this->reduction);
    }

    public function withPrice(\BolCom\RetailerApi\Model\CurrencyAmount $price): Commission
    {
        return new self($this->ean, $this->condition, $price, $this->fixedAmound, $this->percentage, $this->totalCost, $this->totalCostWithoutReduction, $this->reduction);
    }

    public function withFixedAmound(\BolCom\RetailerApi\Model\CurrencyAmount $fixedAmound): Commission
    {
        return new self($this->ean, $this->condition, $this->price, $fixedAmound, $this->percentage, $this->totalCost, $this->totalCostWithoutReduction, $this->reduction);
    }

    public function withPercentage(float $percentage): Commission
    {
        return new self($this->ean, $this->condition, $this->price, $this->fixedAmound, $percentage, $this->totalCost, $this->totalCostWithoutReduction, $this->reduction);
    }

    public function withTotalCost(\BolCom\RetailerApi\Model\CurrencyAmount $totalCost): Commission
    {
        return new self($this->ean, $this->condition, $this->price, $this->fixedAmound, $this->percentage, $totalCost, $this->totalCostWithoutReduction, $this->reduction);
    }

    public function withTotalCostWithoutReduction(\BolCom\RetailerApi\Model\CurrencyAmount $totalCostWithoutReduction): Commission
    {
        return new self($this->ean, $this->condition, $this->price, $this->fixedAmound, $this->percentage, $this->totalCost, $totalCostWithoutReduction, $this->reduction);
    }

    public function withReduction(array $reduction): Commission
    {
        return new self($this->ean, $this->condition, $this->price, $this->fixedAmound, $this->percentage, $this->totalCost, $this->totalCostWithoutReduction, $reduction);
    }
}

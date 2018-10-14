<?php

// this file is auto-generated by prolic/fpp
// don't edit this file manually

declare(strict_types=1);

namespace BolCom\RetailerApi\Model\Rma;

final class HandlingResult
{
    public const OPTIONS = [
        'ReturnReceived' => 'RETURN_RECEIVED',
        'ExchangeProduct' => 'EXCHANGE_PRODUCT',
        'ProductDoesNotMeetConditions' => 'RETURN_DOES_NOT_MEET_CONDITIONS',
        'RepairProduct' => 'REPAIR_PRODUCT',
        'CustomerKeepsProductPaid' => 'CUSTOMER_KEEPS_PRODUCT_PAID',
        'StillApproved' => 'STILL_APPROVED',
    ];

    public const ReturnReceived = 'RETURN_RECEIVED';
    public const ExchangeProduct = 'EXCHANGE_PRODUCT';
    public const ProductDoesNotMeetConditions = 'RETURN_DOES_NOT_MEET_CONDITIONS';
    public const RepairProduct = 'REPAIR_PRODUCT';
    public const CustomerKeepsProductPaid = 'CUSTOMER_KEEPS_PRODUCT_PAID';
    public const StillApproved = 'STILL_APPROVED';

    private $name;
    private $value;

    private function __construct(string $name)
    {
        $this->name = $name;
        $this->value = self::OPTIONS[$name];
    }

    public static function returnReceived(): self
    {
        return new self('ReturnReceived');
    }

    public static function exchangeProduct(): self
    {
        return new self('ExchangeProduct');
    }

    public static function productDoesNotMeetConditions(): self
    {
        return new self('ProductDoesNotMeetConditions');
    }

    public static function repairProduct(): self
    {
        return new self('RepairProduct');
    }

    public static function customerKeepsProductPaid(): self
    {
        return new self('CustomerKeepsProductPaid');
    }

    public static function stillApproved(): self
    {
        return new self('StillApproved');
    }

    public static function fromName(string $value): self
    {
        if (! isset(self::OPTIONS[$value])) {
            throw new \InvalidArgumentException('Unknown enum name given');
        }

        return self::{$value}();
    }

    public static function fromValue($value): self
    {
        foreach (self::OPTIONS as $name => $v) {
            if ($v === $value) {
                return self::{$name}();
            }
        }

        throw new \InvalidArgumentException('Unknown enum value given');
    }

    public function equals(HandlingResult $other): bool
    {
        return \get_class($this) === \get_class($other) && $this->name === $other->name;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function value()
    {
        return $this->value;
    }

    public function __toString(): string
    {
        return $this->name;
    }

    public function toString(): string
    {
        return $this->name;
    }
}

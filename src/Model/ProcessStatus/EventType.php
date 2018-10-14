<?php

// this file is auto-generated by prolic/fpp
// don't edit this file manually

declare(strict_types=1);

namespace BolCom\RetailerApi\Model\ProcessStatus;

final class EventType
{
    public const OPTIONS = [
        'ConfirmShipment' => 'CONFIRM_SHIPMENT',
        'CancelOrder' => 'CANCEL_ORDER',
        'ChangeTransport' => 'CHANGE_TRANSPORT',
        'HandleReturnItem' => 'HANDLE_RETURN_ITEM',
        'CreateInbound' => 'CREATE_INBOUND',
    ];

    public const ConfirmShipment = 'CONFIRM_SHIPMENT';
    public const CancelOrder = 'CANCEL_ORDER';
    public const ChangeTransport = 'CHANGE_TRANSPORT';
    public const HandleReturnItem = 'HANDLE_RETURN_ITEM';
    public const CreateInbound = 'CREATE_INBOUND';

    private $name;
    private $value;

    private function __construct(string $name)
    {
        $this->name = $name;
        $this->value = self::OPTIONS[$name];
    }

    public static function confirmShipment(): self
    {
        return new self('ConfirmShipment');
    }

    public static function cancelOrder(): self
    {
        return new self('CancelOrder');
    }

    public static function changeTransport(): self
    {
        return new self('ChangeTransport');
    }

    public static function handleReturnItem(): self
    {
        return new self('HandleReturnItem');
    }

    public static function createInbound(): self
    {
        return new self('CreateInbound');
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

    public function equals(EventType $other): bool
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

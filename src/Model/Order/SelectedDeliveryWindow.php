<?php

// this file is auto-generated by prolic/fpp
// don't edit this file manually

declare(strict_types=1);

namespace BolCom\RetailerApi\Model\Order;

final class SelectedDeliveryWindow
{
    private $date;
    private $start;
    private $end;

    public function __construct(\BolCom\RetailerApi\Model\Date $date, \BolCom\RetailerApi\Model\DateTime $start, \BolCom\RetailerApi\Model\DateTime $end)
    {
        $this->date = $date;
        $this->start = $start;
        $this->end = $end;
    }

    public function date(): \BolCom\RetailerApi\Model\Date
    {
        return $this->date;
    }

    public function start(): \BolCom\RetailerApi\Model\DateTime
    {
        return $this->start;
    }

    public function end(): \BolCom\RetailerApi\Model\DateTime
    {
        return $this->end;
    }

    public function withDate(\BolCom\RetailerApi\Model\Date $date): SelectedDeliveryWindow
    {
        return new self($date, $this->start, $this->end);
    }

    public function withStart(\BolCom\RetailerApi\Model\DateTime $start): SelectedDeliveryWindow
    {
        return new self($this->date, $start, $this->end);
    }

    public function withEnd(\BolCom\RetailerApi\Model\DateTime $end): SelectedDeliveryWindow
    {
        return new self($this->date, $this->start, $end);
    }

    public static function fromArray(array $data): SelectedDeliveryWindow
    {
        if (! isset($data['date']) || ! \is_string($data['date'])) {
            throw new \InvalidArgumentException("Key 'date' is missing in data array or is not a string");
        }

        $date = \BolCom\RetailerApi\Model\Date::fromString($data['date']);

        if (! isset($data['start']) || ! \is_string($data['start'])) {
            throw new \InvalidArgumentException("Key 'start' is missing in data array or is not a string");
        }

        $start = \BolCom\RetailerApi\Model\DateTime::fromString($data['start']);

        if (! isset($data['end']) || ! \is_string($data['end'])) {
            throw new \InvalidArgumentException("Key 'end' is missing in data array or is not a string");
        }

        $end = \BolCom\RetailerApi\Model\DateTime::fromString($data['end']);

        return new self(
            $date,
            $start,
            $end
        );
    }
}

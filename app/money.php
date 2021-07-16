<?php
namespace Money;

class Money implements Expression
{
    // protected $amount;
    public $amount;
    protected $currency;

    public function __construct(int $amount, string $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    public function times(int $multiplier): Money
    {
        return new Money($this->amount * $multiplier, $this->currency);
    }

    public function plus(Money $addend): Sum
    {
        return new Sum($this, $addend);
    }

    public function equals(Money $object): bool
    {
        return $this->amount == $object->amount
            && $this->currency == $object->currency;
    }

    public function reduce(string $to) :Money
    {
        return $this;
    }

    public function currency(): string
    {
        return $this->currency;
    }

    public function toString(): string
    {
        return $this->amount . " " . $this->currency;
    }

    public static function dollar(int $amount): Money
    {
        return new Money($amount, "USD");
    }

    public static function franc(int $amount): Money
    {
        return new Money($amount, "CHF");
    }
}

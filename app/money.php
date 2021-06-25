<?php
namespace Money;

abstract class Money
{
    protected $amount;
    protected $currency;

    public function __construct(int $amount, string $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    abstract public function times(int $multiplier): Money;

    public function equals(Money $object): bool
    {
        return $this->amount == $object->amount
            && get_class($this) == get_class($object);
    }

    public function currency(): string
    {
        return $this->currency;
    }

    public static function dollar(int $amount): Dollar
    {
        return new Dollar($amount, "USD");
    }

    public static function franc(int $amount): Franc
    {
        return new Franc($amount, "CHF");
    }
}

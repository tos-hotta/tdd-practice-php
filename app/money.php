<?php
namespace Money;

class Money
{
    protected $amount;

    public function equals(Money $object): bool
    {
        return $this->amount == $object->amount
            && get_class($this) == get_class($object);
    }

    public static function dollar(int $amount): Dollar
    {
        return new Dollar($amount);
    }

    public static function franc(int $amount): Franc
    {
        return new Franc($amount);
    }
}

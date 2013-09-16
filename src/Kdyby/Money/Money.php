<?php

namespace Kdyby\Money;


class Money
{

    /** @var Amount */
    private $amount;

    /** @var Currency */
    private $currency;


    public function __construct(Amount $amount, Currency $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }


    public function getAmount()
    {
        return $this->amount;
    }


    public function getCurrency()
    {
        return $this->currency;
    }

}

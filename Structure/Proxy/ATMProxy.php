<?php


namespace Structure\Proxy;


class ATMProxy extends BanckAccount implements BanckAccountInterface
{
    private $balance = null;
    public function getBalance()
    {

        if ($this->balance == null) {
            return  $this->balance = parent::getBalance();
        }
        return $this->balance;
    }

    public function deposit(int $amount)
    {
        return parent::deposit($amount);
    }

    public function withdraw(int $amount)
    {
        return parent::withdraw($amount);
    }
}

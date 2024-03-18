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
}

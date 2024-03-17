<?php

namespace Structure\Proxy;


class BanckAccount  implements BanckAccountInterface
{
    private $transaction =  [];
    public function deposit(int $amount)
    {
        $this->transaction[] = +$amount;
    }

    public function withdraw(int $amount)
    {
        if ($this->getBalance() > $amount) {
            $this->transaction[] = -$amount;
            return $amount;
        }
        return false;
    }

    public function getBalance()
    {
        return array_sum($this->transaction);
    }
}

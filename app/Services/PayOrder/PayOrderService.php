<?php


namespace App\Services\PayOrder;


use App\Repositories\UserRepository\UserRepositoryInterface;

class PayOrderService
{
    public function __construct(private UserRepositoryInterface $user)
    {

    }

    public function pay()
    {

    }
}

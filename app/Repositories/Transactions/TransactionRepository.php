<?php

namespace App\Repositories\Transactions;

interface TransactionRepository{
    public function showAllTransactions($id);
    public function showDeposits($id);
    public function deposit($user, $amount);
    public function showWithdrawals($id);
    public function withdraw($user, $amount, $fee);
}

?>
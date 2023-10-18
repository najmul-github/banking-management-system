<?php
namespace App\Services\Transactions;

interface TransactionService
{
    public function showAllTransactions($id);
    public function showDeposits($id);
    public function deposit($user, $amount);
    public function showWithdrawals($id);
    public function withdraw($user, $amount);
}

?>
<?php
namespace App\Services\Transactions;

use App\Repositories\Transactions\TransactionRepository;

class TransactionServiceImp implements TransactionService
{
    public $transaction;

    public function __construct(TransactionRepository $transaction) {
        $this->transaction = $transaction;
    }

    function showAllTransactions($id){
        return $this->transaction->showAllTransactions($id);
    }
    public function showDeposits($id){
        return $this->transaction->showDeposits($id);
    }
    public function deposit($user, $amount){
        return $this->transaction->deposit($user, $amount);
    }
    public function showWithdrawals($id){
        return $this->transaction->showWithdrawals($id);
    }
    public function withdraw($user, $amount){        
        // Calculate the withdrawal fee based on the account type
        $accountType = $user->account_type;
        $withdrawalFeeRate = ($accountType === 'Business') ? 0.00025 : 0.00015;
        $fee = $amount * $withdrawalFeeRate;

        return $this->transaction->withdraw($user, $amount, $fee);
    }
}

?>
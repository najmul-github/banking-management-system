<?php

namespace App\Repositories\Transactions;

use App\Models\Transaction;
use App\Models\User;

Class TransactionRepositoryImp implements TransactionRepository{
    
    function showAllTransactions($id){
        return Transaction::where('user_id', $id)->get();
    }

    public function showDeposits($id){
        return Transaction::where('user_id', $id)
        ->where('transaction_type', 'deposit')
        ->get();
    }

    public function deposit($user, $amount){
        // Create a deposit transaction
        Transaction::create([
            'user_id' => $user->id,
            'transaction_type' => 'deposit',
            'amount' => $amount,
            'fee' => 0, // No fee for deposits
        ]);

        // Update the user's balance
        $user->balance += $amount;
        $user->save();

        return $user;
    }

    public function showWithdrawals($id){
        return Transaction::where('user_id', $id)
        ->where('transaction_type', 'withdrawal')
        ->get();
    }
    
    public function withdraw($user, $amount, $fee){        
        // Create a withdrawal transaction
        Transaction::create([
            'user_id' => $user->id,
            'transaction_type' => 'withdrawal',
            'amount' => $amount,
            'fee' => $fee,
        ]);

        // Update the user's balance
        $user->balance -= ($amount + $fee);
        $user->save();
    }
}

?>
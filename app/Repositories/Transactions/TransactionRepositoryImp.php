<?php

namespace App\Repositories\Transactions;

use App\Models\Transaction;
use App\Models\User;

Class TransactionRepositoryImp implements TransactionRepository{
    function showAllTransactions($id){
        return Transaction::where('user_id', $id)->get();
    }
}

?>
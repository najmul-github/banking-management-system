<?php
namespace App\Services\Transactions;

use App\Repositories\Transactions\TransactionRepository;

class TransactionServiceImp implements TransactionService
{
    public $Transaction;

    public function __construct(TransactionRepository $Transaction) {
        $this->Transaction = $Transaction;
    }

    function showAllTransactions($id){
        return $this->Transaction->showAllTransactions($id);
    }
}

?>
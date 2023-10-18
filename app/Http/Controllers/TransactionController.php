<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Transaction;
use App\Services\Transactions\TransactionService;
use Illuminate\Contracts\Validation\Rule;

class TransactionController extends Controller
{
    public $transaction;

    public function __construct(TransactionService $transaction) {
        $this->transaction = $transaction;
    }

    public function index() 
    {
        return view('transactions.dashboard');
    }

    public function showAllTransactions(Request $request)
    {
        $user = auth()->user();
        $transactions = $this->transaction->showAllTransactions($user->id);
        $balance = $user->balance;

        return view('transactions.index', compact('transactions', 'balance'));
    }

    public function showDeposits(Request $request)
    {
        $user = auth()->user();
        $deposits = $this->transaction->showDeposits($user->id);

        return view('transactions.deposit', compact('deposits'));
    }

    public function deposit(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric|min:0.01',
        ]);
        

        $user = auth()->user();
        $amount = $request->input('amount');

        $user = $this->transaction->deposit($user, $amount);

        return redirect('/deposits')->with('success', 'Deposit successful');
    }

    public function showWithdrawals(Request $request)
    {
        $user = auth()->user();
        
        $withdrawals = $this->transaction->showWithdrawals($user->id);

        return view('transactions.withdrawal', compact('withdrawals'));
    }

    public function withdraw(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric|min:0.01',
        ]);

        $user = auth()->user();
        $amount = $request->input('amount');
        
        $user = $this->transaction->withdraw($user, $amount);

        return redirect('/withdrawals')->with('success', 'Withdrawal successful');
    }
}



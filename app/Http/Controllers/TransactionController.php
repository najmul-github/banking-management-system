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
        $deposits = Transaction::where('user_id', $user->id)
            ->where('transaction_type', 'deposit')
            ->get();

        return view('transactions.deposit', compact('deposits'));
    }

    public function deposit(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric|min:0.01',
        ]);
        

        $user = auth()->user();
        $amount = $request->input('amount');

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

        return redirect('/transactions')->with('success', 'Deposit successful');
    }

    public function showWithdrawals(Request $request)
    {
        $user = auth()->user();
        $withdrawals = Transaction::where('user_id', $user->id)
            ->where('transaction_type', 'withdrawal')
            ->get();

        return view('transactions.withdrawal', compact('withdrawals'));
    }

    public function withdraw(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric|min:0.01',
        ]);

        $user = auth()->user();
        $amount = $request->input('amount');

        // Calculate the withdrawal fee based on the account type
        $accountType = $user->account_type;
        $withdrawalFeeRate = ($accountType === 'Business') ? 0.00025 : 0.00015;
        $fee = $amount * $withdrawalFeeRate;

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

        return redirect('/transactions')->with('success', 'Withdrawal successful');
    }
}



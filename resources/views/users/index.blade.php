@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">User Profile</div>

                    <div class="card-body">
                        <h3>Welcome, {{ Auth::user()->name }}</h3>
                        <p>Email: {{ Auth::user()->email }}</p>
                        <p>Account Type: {{ Auth::user()->account_type }}</p>
                        <p>Balance: {{ number_format(Auth::user()->balance, 2) }} BDT</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

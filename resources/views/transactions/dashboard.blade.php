<!-- resources/views/dashboard.blade.php -->
@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>
                    <div class="card-body">
                        <h2>Welcome, {{ Auth::user()->name }}</h2>
                        <p>Your Account Balance: {{ Auth::user()->balance }} BDT</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

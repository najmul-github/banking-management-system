@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Deposit Money') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('deposit.store') }}">
                            @csrf

                            <!-- Deposit Form Fields -->
                            <div class="form-group">
                                <label for="user_id">{{ __('User ID') }}</label>
                                <input id="user_id" type="text" class="form-control" name="user_id" required>
                            </div>

                            <div class="form-group">
                                <label for="amount">{{ __('Amount') }}</label>
                                <input id="amount" type="text" class="form-control" name="amount" required>
                            </div>

                            <div class="form-group mb-0">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Deposit') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

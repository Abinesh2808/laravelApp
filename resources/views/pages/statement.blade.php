@extends('layouts.app')

@section('title', 'Account Statement')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <h2 class="mb-4">Account Statement</h2>
                <form action="{{ route('statement') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="account_number" class="form-label">Account Number</label>
                        <input type="text" id="account_number" name="account_number" class="form-control" placeholder="Enter your account number" required>
                    </div>
                    <div class="mb-3">
                        <label for="mobile" class="form-label">Mobile number</label>
                        <input type="text" id="mobile" name="mobile" class="form-control" placeholder="Enter your mobile number" required>
                    </div>
                    <div class="mb-3">
                        <label for="fromDate" class="form-label">From Date</label>
                        <input type="date" id="fromDate" name="fromDate" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="toDate" class="form-label">To Date</label>
                        <input type="date" id="toDate" name="toDate" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Get Statement</button>
                </form>
            </div>
        </div>
    </div>

    @if (session('account_statement'))
        <div class="container mt-5 justify-content-center col-12 col-md-8 px-lg-4">
            <h2>Account Statement</h2>
            <div class="table-responsive">
                <table class="table table-hover">
                <thead>
                  <tr>
                    <th>Date</th>
                    <th>Particulars</th>
                    <th>Deposits</th>
                    <th>Withdrawals</th>
                    <th>Balance</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach(session('account_statement') as $statements)
                      <tr>
                        <td>{{$statements->transaction_date}}</td>
                        <td>{{$statements->description}}</td>
                        <td>{{$statements->credit}}</td>
                        <td>{{$statements->debit}}</td>
                        <td>{{$statements->balance}}</td>
                      </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
        </div>
    @endif
@endsection

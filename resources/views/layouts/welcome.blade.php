<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mariamman Indian Bank</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <style>
        body {
            background-color: #f0f2f5;
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }
        header {
        /*background-color: #d6d6d6;*/
            background-color: #f0f2f5;
        }
        .logo-container img {
            height: 150px;
            width: 150px;
        }
        .logo-container span {
            font-size: 1.5rem;
        }
        .card {
            height: 200px;
            background-color: #f2f2f2;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            text-align: left;
        }
    </style>
</head>
<body class="position-sticky">
    <x-header/>
    <x-navbar data="MARIAMMAN INDIAN BANK - Your Banking Partner !"/>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <div class="container-fluid mt-1">
        <div class="row px-4 m-2 mx-md-4">
            <div class="col-12 col-md-6 p-3">
                <div class="card p-3">
                    <div class="card-body">
                        <ul class="list-inline">
                            <li><a class="text-decoration-none m-3" href="{{ url('register') }}">Open savings account</a></li>
                            <li><a class="text-decoration-none m-3" href="{{ url('login') }}">Netbanking login</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 p-3">
                <div class="card p-3">
                    <div class="card-body">
                        <ul class="list-inline">
                            <li><a class="text-decoration-none m-3" href="{{ url('findme') }}">Forgot password</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 p-3">
                <div class="card p-3">
                    <div class="card-body">
                        <ul class="list-inline">
                            <li><a class="text-decoration-none m-3" href="{{ url('statement') }}">Account Statement</a></li>
                            <li><a class="text-decoration-none m-3" href="{{ url('deposit') }}">Deposit amount</a></li>
                            <li><a class="text-decoration-none m-3" href="{{ url('withdraw') }}">Withdraw amount</a></li>
                            <li><a class="text-decoration-none m-3" href="{{ url('check_balance') }}">Check balance</a></li>
                            <li><a class="text-decoration-none m-3" href="{{ url('update_account') }}">Update profile</a></li>
                            <li><a class="text-decoration-none m-3" href="{{ url('close_account') }}">Account closure</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 p-3">
                <div class="card p-3">
                    <div class="card-body">
                        <ul class="list-inline p-1">
                            <li><a class="text-decoration-none m-3" href="{{ url('aboutus') }}">About Us</a></li>
                            <li><a class="text-decoration-none m-3" href="{{ url('contactus') }}">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-footer/>
</body>
</html>


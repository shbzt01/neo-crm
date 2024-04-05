<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEO CRM Dashboard</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .sidebar {
            min-height: 100vh;
        }

        .footer {
            background-color: #f8f9fa;
            text-align: center;
            padding: 10px 0;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">NEO CRM</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 sidebar bg-light">
                <div class="list-group">
                    <a href="{{ route('dashboard') }}"
                        class="list-group-item list-group-item-action @if (request()->route()->uri == 'dashboard') active @endif ">Dashboard</a>
                    @if (auth()->user()->userInfo->role == 'admin')
                        <a href="{{ route('dashboard.users.index') }}"
                            class="list-group-item list-group-item-action @if (str_contains(request()->route()->uri, 'dashboard/users')) active @endif">Users</a>
                    @endif
                    <a href="{{ route('dashboard.customers.index') }}" class="list-group-item list-group-item-action">Customers</a>
                    {{-- <a href="{{ route('dashboard.segments.index') }}" class="list-group-item list-group-item-action">Segments</a> --}}
                    <a href="#" class="list-group-item list-group-item-action">Settings</a>

                    <button class="list-group-item list-group-item-action" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</button>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
            <div class="col-md-10">
                <br>
                <div class="container">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <p>&copy; 2023 NEO CRM. All rights reserved.</p>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>

@extends('layouts.app')

@section('sidebar')
<div class="sidebar bg-light border-right">
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link active" href="/dashboard">
                <i class="fas fa-home"></i> Dashboard
            </a>
        </li>
        <!-- Additional links can be added here -->
    </ul>
</div>
@endsection

@section('header')
<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
    <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    User Settings
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Profile</a>
                    <a class="dropdown-item" href="#">Settings</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Logout</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
@endsection

@section('content')
<div class="responsive-content container-fluid">
    <!-- Main content here -->
</div>
@endsection

@push('scripts')
<script>
    $('#menu-toggle').click(function(e) {
        e.preventDefault();
        $('.wrapper').toggleClass('toggled');
    });
</script>
@endpush
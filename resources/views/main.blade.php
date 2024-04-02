@extends('layouts.app')

@section('content')
    <div class="hero bg-primary text-white text-center py-5">
        <h1>Welcome to NEO CRM</h1>
        <p>Your ultimate CRM solution.</p>
        <a href="#" class="btn btn-light">Learn More</a>
    </div>
    <section class="about-us my-5">
        <div class="container">
            <h2>About Us</h2>
            <p>We are dedicated to providing the best CRM solutions to help your business grow.</p>
        </div>
    </section>
    <section class="contact-form my-5">
        <div class="container">
            <h2>Contact Us</h2>
            <form>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email">
                </div>
                <div class="mb-3">
                    <label for="subject" class="form-label">Subject</label>
                    <input type="text" class="form-control" id="subject">
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </section>
@endsection
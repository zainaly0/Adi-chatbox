@extends('welcome')

@section('account')
    <div>

    </div>

    <div class="right_container">
        <div class="right_login_form">
            <h1>Chat App</h1>
            <form class="home_login_form" action="">
                <input class="login_inputbox" type="number" placeholder="Phone number">
                <input class="login_inputbox" type="email" placeholder="Email">
                <input class="login_inputbox" type="text"  placeholder="Full name">
                <input class="login_inputbox" type="text" placeholder="Username">
                <input class="login_inputbox" type="password" placeholder="Enter Password">
                <input class="login_inputbox" type="submit" placeholder="Register">
            </form>

            <div class="account_help_register">
                <span>
                    Have an account?
                </span><a href="{{route('login')}}"> Log in</a>
            </div>
        </div>

    </div>
@endsection

@extends('welcome')

@section('account')
    <div>

    </div>

    <div class="right_container">
        <div class="right_login_form">
            <h1>Chat App</h1>
            <form class="home_login_form" action="">
                <input class="login_inputbox" type="text" placeholder="Phone number, username or email address">
                <input class="login_inputbox" type="password" placeholder="Password">
                <input class="login_inputbox" type="submit" name="baby" value="Log in">
            </form>

            <div class="account_help_login">
                <a href="">Forgotten your password?</a>
                <div>
                    <span>Dont't have an account</span>
                    <a href="{{ route('register') }}">Sign in</a>
                </div>
            </div>
        </div>

    </div>
@endsection

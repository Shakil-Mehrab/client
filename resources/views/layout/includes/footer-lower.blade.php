<div class="modal fade login-modalbox" tabindex="-1" role="dialog">
        <div class="tg-login-modalbox">
            <h2>LOGIN FORM</h2>
            <form class="login-form" method="POST" action="{{ route('login') }}">
                @csrf
                <fieldset>
                    <div class="form-group">
                        <i class="fa fa-envelope"></i>
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <i class="fa fa-lock"></i>
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" value="{{ old('password') }}" placeholder="Password" required autofocus>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label>
                             <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <em>Remember Me</em>
                        </label>
                        <a class="forgetpassword" href="{{ route('password.request') }}">
                            <em>Forgot Password</em>
                            <i class="fa fa-question-circle"></i>
                        </a>
                    </div>
                    <button class="tg-theme-btn tg-theme-btn-lg" type="submit">login</button>
                </fieldset>
            </form>
            {{-- <p>Not a Member? <a href="/register">Create an Account</a></p> --}}
        </div>
    </div>
    <div class="modal fade signup-modalbox" tabindex="-1" role="dialog">
        <div class="tg-signup-modalbox">
            <h2>REGISTRATION FORM</h2>
            <form class="login-form" method="POST" action="{{ route('register') }}">
                @csrf
                <fieldset>
                    <div class="form-group">
                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Name" required autofocus>
                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                         <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email" required>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                         <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                         <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
                    </div>
                    <div class="form-group">
                        <label><input type="checkbox"><em>I agree with the terms and conditions</em></label>
                    </div>
                    <button class="tg-theme-btn tg-theme-btn-lg" type="submit">Create an Account</button>
                </fieldset>
            </form>
        </div>
    </div>
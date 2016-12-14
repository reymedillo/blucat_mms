@extends('app')
@section('title', 'IPPP MMS / Login')
@section('content')

            <div class='container'>
                
                <div class="signin-row row">
                    <div class="span4"></div>
                    <div class="span8">
                        <div class="container-signin">
                            <legend>Please Login</legend>
                            <form action='/auth/login' method='POST' id='loginForm' class='form-signin' autocomplete='off'>
                                <input type="hidden" name="_token" value="{{csrf_token()}}" />
        @if ($error = $errors->first('password'))
          <div class="alert alert-block alert-danger"><p>{{ $error }}</p></div>
        @else
          <div class="alert alert-block alert-info"><p>Please login with your Login ID and Password.</p></div>
        @endif

                                <div class="form-inner">
                                    <div class="input-prepend">
                                        <span class="add-on" rel="tooltip" title="Username or E-Mail Address" data-placement="top"><i class="icon-envelope"></i></span>
                                        <input type='text' class='span4' id='username' name='login_id' value='{{ old('name') }}' placeholder='login ID'/>
                                    </div>

                                    <div class="input-prepend">
                                        
                                        <span class="add-on"><i class="icon-key"></i></span>
                                        <input type='password' class='span4' id='password' name='password' placeholder='password'/>
                                    </div>
                                    <label class="checkbox" for='remember_me'>Remember me
                                        <input type='checkbox' id='remember_me'/>
                                    </label>
                                </div>
                                <footer class="signin-actions">
                                    <input class="btn btn-primary" type='submit' id="submit" value='Login'/>
                                </footer>
                            </form>
                        </div>
                    </div>
                    <div class="span3"></div>
                </div>
            </div>

        <script type="text/javascript">
            $('#username').focus();
        </script>
@endsection
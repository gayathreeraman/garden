<form method="POST" action="/auth/login">
    {!! csrf_field() !!}

    @if(count($errors) > 0)
    <div>
    <h2>Form Errors:</h2>
    {{{print_r($errors->getBags()['default']->get('email'))}}}
    <ul>
    @foreach($errors->all() as $error)
    <li>{{ $error}}</li>
    @endforeach
    </ul>
    </div>
    @endif
    <div>
    Email
    <input type="email" name="email" value="{{ old('email') }}">
    @if(count($errors) > 0)
        @if(count($errors->getBags()['default']->get('email'))>0)
        <span>
            {{$errors->getBags()['default']->get('email')[0]}}

        </span>
        @endif
    @endif
    <div>


    </div>

    <div>
        Password
        <input type="password" name="password" id="password">
    </div>

    <div>
        <input type="checkbox" name="remember"> Remember Me
    </div>

    <div>
        <button type="submit">Login</button>
    </div>
</form>
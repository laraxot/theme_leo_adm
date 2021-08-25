<form action="{{ route('auth.check') }}" method="POST">

    @if (Session::get('fail'))
        <div class="alert alert-danger">
            {{ Session::get('fail') }}
        </div>
    @endif

    @csrf
    <div class="w-100"
        style="padding: 16px;box-shadow: 6px 3px 15px rgb(184,184,184);border-radius: 14px;width: 337px;margin-left: 0px;padding-bottom: 49px;">
        <h2 style="font-family: Montserrat, sans-serif;font-weight: bold;font-size: 27.44px;margin-bottom: 24px;">Login
        </h2>
        <div style="margin-bottom: 30px;">
            <p style="font-family: Montserrat, sans-serif;font-weight: bold;margin-bottom: 6px;">Email</p><input
                name="email" type="email" value="{{ old('email') }}" class="w-100"
                style="border-top-style: none;border-right-style: none;border-left-style: none; background-color: #f8f9fa;"
                placeholder="Inserisci Email" />
            <span class="text-danger">@error('email'){{ $message }} @enderror</span>
        </div>
        <div>
            <p style="font-family: Montserrat, sans-serif;font-weight: bold;margin-bottom: 6px;">Password</p><input
                name="password" type="password" value="{{ old('password') }}" class="w-100"
                style="border-top-style: none;border-right-style: none;border-left-style: none; background-color: #f8f9fa;"
                placeholder="Inserisci Password" />
            <span class="text-danger">@error('password'){{ $message }} @enderror</span>
            <a class="link-secondary" href="#" style="text-decoration: none;float: right;padding-top: 8px;">Password
                dimenticata?</a>
        </div>
    </div>
    <div class="w-100" style="display: inline-block;">
        <div class="w-50" style="display: inline-block;margin-top: 33px;text-align: left;"><a
                href="{{ route('auth.register') }}"
                style="text-decoration: none;padding-left: 24px;color: rgb(116,185,190);font-family: Montserrat, sans-serif;">Registrati</a>
        </div>
        <button type="submit" class="w-50"
            style="border: none; display: inline-block;float: right;margin-top: 24px;background: #74b9be;border-radius: 89px;box-shadow: 8px 9px 15px rgb(150,150,150);">
            <h1 class="w-100"
                style="text-align: center;color: rgb(255,255,255);font-family: Montserrat, sans-serif;font-weight: bold;font-size: 20.4px;padding-top: 11px;padding-bottom: 2px;">
                LOGIN</h1>
        </button>
    </div>
</form>

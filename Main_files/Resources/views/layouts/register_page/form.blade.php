<form action="{{ route('auth.save') }}" method="POST">

    @if (Session::get('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif

    @if (Session::get('fail'))
        <div class="alert alert-danger">
            {{ Session::get('fail') }}
        </div>
    @endif

    @csrf
    <div class="w-100"
        style="padding: 16px;box-shadow: 6px 3px 15px rgb(184,184,184);border-radius: 14px;width: 337px;margin-left: 0px;padding-bottom: 49px;">
        <h2 style="font-family: Montserrat, sans-serif;font-weight: bold;font-size: 27.44px;margin-bottom: 24px;">
            Registrazione
        </h2>

        <p style="font-family: Montserrat, sans-serif;font-weight: bold;margin-bottom: 6px;">Dati anagrafici</p>

        <!-- DROPDOWN -->

        <select style="border-top: none; border-left: none; 
            border-right: none; border-bottom-width: 2px;
            background: #F8F9FA; color: rgb(118,118,118);
            margin-bottom: 15px;" 
            class="w-100" id="legal_entity" name="legal_entity">
            <option value="privato">Privato</option>
            <option value="azienda">Azienda</option>
        </select>

        <!-- NOME & COGNOME -->

        <input name="name" type="text" style="background: #F8F9FA; width: 45%;border-top-style: none;border-right-style: none;
            border-left-style: none;margin-bottom: 15px;font-family: Montserrat;font-size: 14px;" placeholder="Nome"
            required />

        <span class="text-danger">@error('name'){{ $message }}@enderror</span>

        <input name="surname" type="text"
            style="background: #F8F9FA; float: right;width: 45%;border-top-style: none;
            border-right-style: none;border-left-style: none;margin-bottom: 15px;font-family: Montserrat;font-size: 14px;" placeholder="Cognome"
            required />

        <span class="text-danger">@error('surname'){{ $message }}@enderror</span>

        <!-- PREFISSO E NUMERO DI TELEFONO -->

        <select style="border-top: none; border-left: none; 
            border-right: none; border-bottom-width: 2px;
            background: #F8F9FA; color: rgb(118,118,118);
            margin-bottom: 15px; padding-top: 7px;" 
            class="w-25" id="prefix" name="prefix">
            <option value="italiano">+ 39</option>
            <option value="tedesco">+ 49</option>
        </select>

        <input name="phone_number" type="number"
            style="background: #F8F9FA; float: right;display: inline-block;width: 61%;border-top-style: none;border-right-style: none;border-left-style: none;margin-bottom: 15px;margin-top: 6px;font-family: Montserrat;font-size: 14px;"
            placeholder="Numero di telefono" required />

        <span class="text-danger">@error('phone_number'){{ $message }}@enderror</span>

        <!-- DATA DI NASCITA -->

        <div>
            <p style="background: #F8F9FA; display: inline-block;
                width: 36%;margin-bottom: 9px;color: rgb(118,118,118);border-width: 0px;border-top-style: none;border-right-style: none;border-bottom: 2px solid rgb(118,118,118);border-left-style: none;padding-bottom: 6px;font-family: Montserrat;font-size: 14px;">
                Data di nascita:
            </p>
            <input name="birthday" type="date"
                style="float: right;color: rgb(118,118,118); background: #F8F9FA; border-width: 0px;border-bottom-width: 2px;padding-bottom: 6px;font-family: Montserrat;font-size: 14px;" required/>
        </div>

        <div style="margin-bottom: 30px;margin-top: 20px;">
            <p style="font-family: Montserrat, sans-serif;font-weight: bold;margin-bottom: 6px;">
                Email
            </p>
            <input name="email" type="email" class="w-100" value="{{ old('email') }}"
                style="background: #F8F9FA; border-top-style: none;border-right-style: none;border-left-style: none;font-family: Montserrat;font-size: 14px;"
                placeholder="Inserire email" required />
            <span class="text-danger">@error('email'){{ $message }}@enderror</span>
            <input type="email" class="w-100"
                style="background: #F8F9FA; border-top-style: none;border-right-style: none;border-left-style: none;margin-top: 15px;font-family: Montserrat;font-size: 14px;"
                placeholder="Conferma email" required />
        </div>

        <div style="margin-bottom: 30px;">
            <p style="font-family: Montserrat, sans-serif;font-weight: bold;margin-bottom: 6px;">
                Password
            </p>
            <input name="password" type="password" class="w-100" value="{{ old('password') }}"
                style="background: #F8F9FA; border-top-style: none;border-right-style: none;border-left-style: none;font-family: Montserrat;font-size: 14px;"
                placeholder="Inserire password" required />
            <span class="text-danger">@error('password'){{ $message }}@enderror</span>
            <input type="password" class="w-100"
                style="background: #F8F9FA; border-top-style: none;border-right-style: none;border-left-style: none;margin-top: 15px;font-family: Montserrat;font-size: 14px;"
                placeholder="Conferma password" required />
        </div>
        <div style="margin-bottom: 20px;">
            <p style="font-family: Montserrat, sans-serif;font-weight: bold;margin-bottom: 6px;">
                Indirizzo
            </p>
            <input
                name="via" type="text" class="w-100"
                style="background: #F8F9FA; border-top-style: none;border-right-style: none;border-left-style: none;margin-bottom: 15px;font-family: Montserrat;font-size: 14px;"
                placeholder="Inserire via" />
            <span class="text-danger">@error('via'){{ $message }}@enderror</span>

            <input type="text"
                name="city" style="background: #F8F9FA; width: 45%;border-top-style: none;border-right-style: none;border-left-style: none;margin-bottom: 10px;font-family: Montserrat;font-size: 14px;"
                placeholder="Inserire Comune" />
            <span class="text-danger">@error('city'){{ $message }}@enderror</span>

            <input type="text"
                name="cap" style="background: #F8F9FA; float: right;width: 45%;margin-bottom: 10px;border-top-style: none;border-right-style: none;border-left-style: none;font-family: Montserrat;font-size: 14px;"
                placeholder="Inserire CAP" />
            <span class="text-danger">@error('cap'){{ $message }}@enderror</span>
        </div>
    </div>

    <div class="w-100" style="display: inline-block;">
        <div class="w-50" style="display: inline-block;margin-top: 33px;text-align: left;">
            <a href="{{ route('auth.login') }}"
                style="text-decoration: none;padding-left: 24px;color: rgb(116,185,190);font-family: Montserrat, sans-serif;">
                Login
            </a>
        </div>
        <button type="submit" class="w-50"
                style="border: none; display: inline-block;float: right;margin-top: 24px;background: #74b9be;border-radius: 89px;box-shadow: 8px 9px 15px rgb(150,150,150);">
            <h1 class="w-100"
                style="text-align: center;color: rgb(255,255,255);font-family: Montserrat, sans-serif;font-weight: bold;font-size: 20.4px;padding-top: 11px;padding-bottom: 2px;">
                REGISTRATI
            </h1>
        </button>
    </div>
</form>
                    {{-- @if (Session::get('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif

        @if (Session::get('fail'))
            <div class="alert alert-danger">
                {{ Session::get('fail') }}
            </div>
        @endif

        @csrf

        <div class="w-100"
            style="margin-top: -75px; padding: 16px;box-shadow: 16px 12px 36px rgb(184,184,184);border-radius: 14px;width: 337px;margin-left: 0px;padding-bottom: 49px;">
            <h2 style="font-family: Montserrat, sans-serif;font-weight: bold;font-size: 27.44px;margin-bottom: 24px;">
                Registrazione</h2>
            <div style="margin-bottom: 30px;">
                <p style="font-family: Montserrat, sans-serif;font-weight: bold;margin-bottom: 6px;">Dati anagrafici</p>
                <div class="dropdown w-100"><button class="btn btn-primary dropdown-toggle w-100" aria-expanded="false"
                        data-bs-toggle="dropdown" type="button" style="background: #F8F9FA;color: rgb(118,118,118);font-family: Montserrat;
                        text-align: left;padding-left: 2px;border-radius: 0px;border-top-width: 0px;border-right-width: 0px;
                        border-bottom-width: 2px;border-bottom-color: rgb(118,118,118);border-left-width: 0px;
                        font-size: 14px;margin-bottom: 15px;">
                        Selezionare soggetto giuridico 
                    </button>
                    <div class="dropdown-menu w-100"><a class="dropdown-item w-100" href="#"
                            style="background: #F8F9FA; font-family: Montserrat;font-size: 14px;color: rgb(118,118,118);">Privato</a><a
                            class="dropdown-item w-100" href="#"
                            style="background: #F8F9FA; font-family: Montserrat;font-size: 14px;color: rgb(118,118,118);">Azienda</a>
                    </div>
                </div><input name="name" type="text"
                    style="background: #F8F9FA; width: 45%;border-top-style: none;border-right-style: none;border-left-style: none;margin-bottom: 15px;font-family: Montserrat;font-size: 14px;"
                    placeholder="Nome" /><input name="surname" type="text"
                    style="background: #F8F9FA; float: right;width: 45%;border-top-style: none;border-right-style: none;border-left-style: none;margin-bottom: 15px;font-family: Montserrat;font-size: 14px;"
                    placeholder="Cognome" />
                <div class="dropdown" style="background: #F8F9FA; display: inline-block;width: 30%;"><button
                        class="btn btn-primary dropdown-toggle w-100" aria-expanded="false" data-bs-toggle="dropdown"
                        type="button"
                        style="background: #F8F9FA;color: rgb(118,118,118);font-family: Montserrat;text-align: left;padding-left: 2px;border-radius: 0px;border-top-width: 0px;border-right-width: 0px;border-bottom-width: 2px;border-bottom-color: rgb(118,118,118);border-left-width: 0px;font-size: 14px;margin-bottom: 15px;">Prefisso
                        Tel.</button>
                    <div class="dropdown-menu" style="width: 30%;"><a class="dropdown-item" href="#"
                            style="background: #F8F9FA; width: 30%;font-family: Montserrat;font-size: 14px;color: rgb(118,118,118);">+
                            39</a><a class="dropdown-item w-100" href="#"
                            style="font-family: Montserrat;font-size: 14px;color: rgb(118,118,118);">+ 49</a></div>
                </div><input name="phone_number" type="number"
                    style="background: #F8F9FA; float: right;display: inline-block;width: 61%;border-top-style: none;border-right-style: none;border-left-style: none;margin-bottom: 15px;margin-top: 6px;font-family: Montserrat;font-size: 14px;"
                    placeholder="Numero di telefono" />
                <div>
                    <p
                        style="background: #F8F9FA; display: inline-block;width: 36%;margin-bottom: 9px;color: rgb(118,118,118);border-width: 0px;border-top-style: none;border-right-style: none;border-bottom: 2px solid rgb(118,118,118);border-left-style: none;padding-bottom: 6px;font-family: Montserrat;font-size: 14px;">
                        Data di nascita:</p><input name="birthday" type="date"
                        style="float: right;color: rgb(118,118,118); background: #F8F9FA; border-width: 0px;border-bottom-width: 2px;padding-bottom: 6px;font-family: Montserrat;font-size: 14px;" />
                </div>
            </div>
            <div style="margin-bottom: 30px;">
                <p style="font-family: Montserrat, sans-serif;font-weight: bold;margin-bottom: 6px;">Email</p><input
                    name="email" type="email" class="w-100"
                    style="background: #F8F9FA; border-top-style: none;border-right-style: none;border-left-style: none;font-family: Montserrat;font-size: 14px;"
                    placeholder="Inserire email" /><input type="email" class="w-100"
                    style="border-top-style: none;border-right-style: none;border-left-style: none;margin-top: 15px;font-family: Montserrat;font-size: 14px;"
                    placeholder="Conferma email" />
            </div>
            <div style="margin-bottom: 30px;">
                <p style="font-family: Montserrat, sans-serif;font-weight: bold;margin-bottom: 6px;">Password</p><input
                    name="password" type="password" class="w-100"
                    style="background: #F8F9FA; border-top-style: none;border-right-style: none;border-left-style: none;font-family: Montserrat;font-size: 14px;"
                    placeholder="Inserire password" /><input type="password" class="w-100"
                    style="background: #F8F9FA; border-top-style: none;border-right-style: none;border-left-style: none;margin-top: 15px;font-family: Montserrat;font-size: 14px;"
                    placeholder="Conferma password" />
            </div>
            <div style="margin-bottom: 20px;">
                <p style="font-family: Montserrat, sans-serif;font-weight: bold;margin-bottom: 6px;">Indirizzo</p><input
                    name="address" type="text" class="w-100"
                    style="background: #F8F9FA; border-top-style: none;border-right-style: none;border-left-style: none;margin-bottom: 15px;font-family: Montserrat;font-size: 14px;"
                    placeholder="Inserire via" /><input type="text"
                    name="via" style="background: #F8F9FA; width: 45%;border-top-style: none;border-right-style: none;border-left-style: none;margin-bottom: 10px;font-family: Montserrat;font-size: 14px;"
                    placeholder="Inserire Comune" /><input type="text"
                    name="city" style="background: #F8F9FA; float: right;width: 45%;margin-bottom: 10px;border-top-style: none;border-right-style: none;border-left-style: none;font-family: Montserrat;font-size: 14px;"
                    placeholder="Inserire CAP" />
            </div>
            <div class="form-check"><input type="checkbox" class="form-check-input" id="formCheck-1"  required /><label
                    class="form-check-label" for="formCheck-1"
                    style="font-size: 9px;font-family: Montserrat;color: rgb(33, 37, 41);"><a
                        href="https://fastorder.club/Dafilippo/privacy.pdf" target="_blank">Dichiaro di aver preso visione della
                        Privacy, Art.13 Reg. Europeo 679/2016, e di rilasciare il consenso al trattamento dei dati personali,
                        per le finalità indicate nel presente link.</a><br /></label></div>
            <div class="form-check" style="margin-bottom: 7px;"><input type="checkbox" class="form-check-input"
                    id="formCheck-2"  required /><label class="form-check-label" for="formCheck-1"
                    style="font-size: 9px;font-family: Montserrat;color: rgb(33, 37, 41);">Confermo di essere
                    maggiorenne.<br /></label></div>
            <div class="form-check"><input type="checkbox" class="form-check-input" id="formCheck-3"  required /><label
                    class="form-check-label" for="formCheck-1"
                    style="font-size: 9px;font-family: Montserrat;color: rgb(33, 37, 41);">Rilascio il consenso per ricevere
                    comunicazioni pubblicitarie e promozionali sui Servizi e Prodotti offerti dalla Vostra società,
                    principalmente tramite email.<br /><br /></label></div>
        </div>
        <div class="w-100" style="display: inline-block; margin-bottom: 100px;">
            <div class="w-50" style="display: inline-block;margin-top: 33px;text-align: left;"><a href="#"
                    style="text-decoration: none;padding-left: 24px;color: rgb(116,185,190);font-family: Montserrat, sans-serif;">Login</a>
            </div>
            <div class="w-50"
                style="display: inline-block;float: right;margin-top: 24px;background: #74b9be;border-radius: 89px;box-shadow: 15px 13px 36px rgb(150,150,150);">
                <h1 class="w-100"
                    style="text-align: center;color: rgb(255,255,255);font-family: Montserrat, sans-serif;font-weight: bold;font-size: 20.4px;padding-top: 11px;padding-bottom: 2px;">
                    REGISTRATI</h1>
            </div>
        </div>
        </div> --}}

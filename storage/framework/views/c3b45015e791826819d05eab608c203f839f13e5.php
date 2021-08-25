<form action="<?php echo e(route('auth.save')); ?>" method="POST">

    <?php if(Session::get('success')): ?>
        <div class="alert alert-success">
            <?php echo e(Session::get('success')); ?>

        </div>
    <?php endif; ?>

    <?php if(Session::get('fail')): ?>
        <div class="alert alert-danger">
            <?php echo e(Session::get('fail')); ?>

        </div>
    <?php endif; ?>

    <?php echo csrf_field(); ?>
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

        <span class="text-danger"><?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>

        <input name="surname" type="text"
            style="background: #F8F9FA; float: right;width: 45%;border-top-style: none;
            border-right-style: none;border-left-style: none;margin-bottom: 15px;font-family: Montserrat;font-size: 14px;" placeholder="Cognome"
            required />

        <span class="text-danger"><?php $__errorArgs = ['surname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>

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

        <span class="text-danger"><?php $__errorArgs = ['phone_number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>

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
            <input name="email" type="email" class="w-100" value="<?php echo e(old('email')); ?>"
                style="background: #F8F9FA; border-top-style: none;border-right-style: none;border-left-style: none;font-family: Montserrat;font-size: 14px;"
                placeholder="Inserire email" required />
            <span class="text-danger"><?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
            <input type="email" class="w-100"
                style="background: #F8F9FA; border-top-style: none;border-right-style: none;border-left-style: none;margin-top: 15px;font-family: Montserrat;font-size: 14px;"
                placeholder="Conferma email" required />
        </div>

        <div style="margin-bottom: 30px;">
            <p style="font-family: Montserrat, sans-serif;font-weight: bold;margin-bottom: 6px;">
                Password
            </p>
            <input name="password" type="password" class="w-100" value="<?php echo e(old('password')); ?>"
                style="background: #F8F9FA; border-top-style: none;border-right-style: none;border-left-style: none;font-family: Montserrat;font-size: 14px;"
                placeholder="Inserire password" required />
            <span class="text-danger"><?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
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
            <span class="text-danger"><?php $__errorArgs = ['via'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>

            <input type="text"
                name="city" style="background: #F8F9FA; width: 45%;border-top-style: none;border-right-style: none;border-left-style: none;margin-bottom: 10px;font-family: Montserrat;font-size: 14px;"
                placeholder="Inserire Comune" />
            <span class="text-danger"><?php $__errorArgs = ['city'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>

            <input type="text"
                name="cap" style="background: #F8F9FA; float: right;width: 45%;margin-bottom: 10px;border-top-style: none;border-right-style: none;border-left-style: none;font-family: Montserrat;font-size: 14px;"
                placeholder="Inserire CAP" />
            <span class="text-danger"><?php $__errorArgs = ['cap'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
        </div>
    </div>

    <div class="w-100" style="display: inline-block;">
        <div class="w-50" style="display: inline-block;margin-top: 33px;text-align: left;">
            <a href="<?php echo e(route('auth.login')); ?>"
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
                    
<?php /**PATH C:\TAVOLI\fastoder.laravel\resources\views/layouts/register_page/form.blade.php ENDPATH**/ ?>
@php
$informations = DB::select('select * from informations where store_id = 1');
@endphp
@foreach ($informations as $information)
<div style="margin-top: 15px;">
    <div class="w-100" style="height: 1px;background: #d0d0d0;margin-bottom: 10px;font-family: Montserrat, sans-serif;">
    </div>
    <div class="w-100" style="font-family: Montserrat, sans-serif;">
        <div class="w-50" style="display: inline-block;font-family: Montserrat, sans-serif;">
            <p class="w-100" style="display: inline-block;font-weight: bold;font-family: Montserrat, sans-serif;"> {{ $information->store_phone_number }} <br /></p>
        </div>
        <a href="tel:{{ $information->store_phone_number }}">
            <div style="display: inline-block;font-family: Montserrat, sans-serif;width: 170px">
                <p class="w-100"
                    style="display: inline-block;font-weight: bold;font-family: Montserrat, sans-serif;text-align: center;background: #49c34e;padding: 10px;border-radius: 25px;color: rgb(255,255,255);padding-top: 10px;width: 141.844px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16"
                        fill="currentColor" class="bi bi-telephone-fill" style="margin-right: 7px;">
                        <path fill-rule="evenodd"
                            d="M2.267.98a1.636 1.636 0 0 1 2.448.152l1.681 2.162c.309.396.418.913.296 1.4l-.513 2.053a.636.636 0 0 0 .167.604L8.65 9.654a.636.636 0 0 0 .604.167l2.052-.513a1.636 1.636 0 0 1 1.401.296l2.162 1.681c.777.604.849 1.753.153 2.448l-.97.97c-.693.693-1.73.998-2.697.658a17.47 17.47 0 0 1-6.571-4.144A17.47 17.47 0 0 1 .639 4.646c-.34-.967-.035-2.004.658-2.698l.97-.969z">
                        </path>
                    </svg>Chiamaci<br />
                </p>
            </div>
        </a>
    </div>
</div>
@endforeach

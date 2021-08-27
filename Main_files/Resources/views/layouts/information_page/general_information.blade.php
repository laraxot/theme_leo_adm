@php
$informations = \App\Models\Information::where('store_id', 1)->get();
@endphp
@foreach ($informations as $information)
<div style="margin-top: 15px;">
    <div class="w-100" style="height: 1px;background: #d0d0d0;margin-bottom: 10px;font-family: Montserrat, sans-serif;"></div>
    <div class="w-100" style="font-family: Montserrat, sans-serif;">
        <div class="w-50" style="/*display: inline-block;*/font-family: Montserrat, sans-serif;">
            <p class="w-100" style="display: inline-block;font-weight: bold;font-family: Montserrat, sans-serif;">Informazioni Generali:<br /></p>
        </div>
        <div class="w-100" style="display: inline-block;font-family: Montserrat, sans-serif;">
            <p class="w-100" style="display: inline-block;font-family: Montserrat, sans-serif;">
               <b>Nome Società:</b> {{ $information->store_name }} <br>
                <b>Supporto e Informazioni:</b> {{ $information->store_email }} <br>
                <b>P.Iva:</b> {{ $information->store_p_iva }}
            </p>
        </div>
    </div>
</div>
@endforeach
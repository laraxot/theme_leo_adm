{{-- @foreach(XotModel('category')::find(app('request')->input('id'))->productsas$row) --}}

<a href="{{-- route('container0.index',['lang'=>App::getLocale(),'container0'=>'addition','id'=>$row->id]) --}}" style="color: rgb(24, 24, 24)">
    <div class="w-100"
        style="background: #e6e6e6a4;margin-left: 0px;width: 314px;border-radius: 15px;margin-bottom: 20px;">
        <div class="w-100"  {{-- @if($row->immagine=='')@endif --}}
            >

            {{--@if (!$row->immagine == '')

                <img src="{{ Theme::imageSrc(['path' => 'pub_theme::resources/assets/img/'.$row->immagine.'.jpg']) }}"
                    class="w-100" style="width: 280px;margin: 0px;border-radius: 15px;margin-bottom: 0;padding: 7px;">

            @endif--}}


            <h5
                style="display: inline-block;margin: 16px;margin-top: 0px;padding-bottom: 0px;font-family: Montserrat, sans-serif;font-weight: bold;margin-bottom: 0px;padding-top: 0px;background: rgba(255,36,36,0);width: 219px;margin-left: 0px; margin-left:13px; margin-top: 13px">
                4 Formaggi{{-- $row->descrizione --}}</h5>
            <p
                style="float: right;display: inline-block;width: 55px;font-family: Montserrat, sans-serif;font-weight: bold;color: rgb(120,127,135); margin-right:8px; margin-top: 13px">
                € 6.50{{-- $row->prezzo_1 --}}</p>
        </div>
        <div class="w-100" style="display: inline-block;padding: 11px;">
            <p style="display: inline-block;padding-bottom: 0px;width: 255px;margin-left: 0px;margin-bottom: 0px;">
                Pomodoro, mozzarella, formaggio grattugiato, patatine, basilico{{-- $row->ricetta --}}</p><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" class="bi bi-heart-fill fa-lg" style="float: right;">
                    <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"></path>
                </svg><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16"
                fill="currentColor" class="bi bi-plus-circle"
                style="/*position: absolute;*/float: right;margin-top: 48px;font-size: 20px;margin-right: -21px;">
                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z">
                </path>
                <path fill-rule="evenodd"
                    d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z">
                </path>
            </svg>
        </div>
    </div>
</a>



{{--@endforeach
--}}

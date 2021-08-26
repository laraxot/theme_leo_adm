@foreach ($areas as $area)
    @php
        //if(isset($params('module')) && $param['module'] == $area_define_name)
    @endphp
    <li>
        <a href="{{ $area->url }}" title="{{ $area->area_define_name }}"
            aria-expanded="false">{{ $area->area_define_name }}</a>
    </li>
@endforeach

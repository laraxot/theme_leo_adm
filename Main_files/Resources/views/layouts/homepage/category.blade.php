@php
$categories = DB::select('select * from categories where superior_category_guid != "root" AND store_id = 1 AND superior_category_guid != "addition" AND superior_category_guid != "dough"');
@endphp
@foreach ($categories as $category)
    <div class="w-100"
        style="background: #e6e6e6a4;margin-left: 0px;width: 314px;border-radius: 15px;margin-bottom: 20px;">
        <a href="{{ url('/category/' . $category->guid) }}" style="text-decoration: none; color: rgb(39, 39, 39)">
            <div class="w-100"><img class="w-100" src="{{ $category->img }}"
                    style="width: 280px;margin: 0px;border-radius: 15px;margin-bottom: 0;padding: 7px;">
                <h3
                    style="margin: 16px;margin-top: 5px;padding-bottom: 9px;font-family: Montserrat, sans-serif;font-weight: bold;font-size: 21.05px;">
                    {{ $category->name }}</h3>
            </div>
        </a>
    </div>
@endforeach

@php
$superior_categories = DB::select('select * from categories where guid = (SELECT category_guid FROM products WHERE guid = "' . $guid . '") AND store_id = 1');

//$products = DB::select('select * from products where guid = "' . $guid . '" AND store_id = 1');

$conditions = ['store_id' => 1, 'guid' => $guid];

$products = \App\Models\Product::where($conditions)->get();

@endphp

@foreach ($superior_categories as $superior_category)
    <a href="{{ url('/category/' . $superior_category->guid) }}" style="text-decoration: none; color:rgb(33,37,41)">
        <h1
            style="margin-top: 100px;font-family: Montserrat, sans-serif;padding-left: 0px;font-weight: bold;margin-bottom: 20px;">
            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                class="bi bi-chevron-left"
                style="padding-right: 15px;font-size: 40px;margin-right: -9px;margin-top: -4px;">
                <path fill-rule="evenodd"
                    d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z">
                </path>
            </svg>
            @foreach ($products as $product)
                {{ $product->name }}
            @endforeach
        </h1>
    </a>
@endforeach

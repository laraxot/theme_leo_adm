@include('layouts.global.head')

<body style="background-color: #f8f9fa;">
    <div style="padding: 11px;padding-top: 11px;padding-bottom: 11px;">
        @include('layouts.global.topbar')
        @include('layouts.search_page.searchbar')
        @if (isset($products))
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Ingredienti</th>
                        <th>Prezzo</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($products) > 0)
                        @foreach ($products as $product)
                            <tr>
                                <td>
                                    <a style="color:black; text-decoration: none;"
                                        href="{{ url('product/' . $product->guid) }}">
                                        {{ $product->name }}
                                    </a>
                                </td>
                                <td>
                                    <a style="color:black; text-decoration: none;"
                                        href="{{ url('product/' . $product->guid) }}">
                                        {{ $product->recipes }}
                                    </a>
                                </td>
                                <td>
                                    <a style="color:black; text-decoration: none;"
                                        href="{{ url('product/' . $product->guid) }}">
                                        € {{ number_format($product->price, 2, ',', '') }}
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    @else

                        <tr>
                            <td>Nessun risultato </td>
                        </tr>
                    @endif
                </tbody>
            </table>
        @endif
        @include('layouts.global.cart')
    </div>
    @include('layouts.global.head')
</body>

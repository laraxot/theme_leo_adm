@php
$informations = \App\Models\Information::where('store_id', 1)->get();
@endphp
@foreach ($informations as $information)
    <h1
        style="margin-top: 100px;font-family: Montserrat, sans-serif;padding-left: 0px;font-weight: bold;margin-bottom: 20px;">
        Dove siamo</h1>
    <section class="map-clean">
        <iframe allowfullscreen frameborder="0" src="
        https://www.google.com/maps/embed/v1/place?key=AIzaSyBB1FSN_jmMPxSmVs0Nk57BJ-yLCAXKzLY&amp;q=Via+Berna%2C+2%2C+30030+Martellago+VE&amp;zoom=15
        {{-- $information->store_maps_api --}}" width="100%" height="450">
        </iframe>
    </section>
@endforeach

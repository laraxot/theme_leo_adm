@php
//$superior_categories = DB::select('select * from categories where superior_category_guid = "root" AND store_id = 1');

$conditions = ['store_id' => 1, 'superior_category_guid' => 'root'];

$superior_categories = \App\Models\Category::where($conditions)->get();
@endphp

<div style="background: rgba(156,27,27,0);margin-top: 84px;">
    <div class="w-100"
        style="display: flex;width: 329px;background: rgba(200,194,64,0);margin-left: 0px; overflow: auto;">
        @foreach ($superior_categories as $superior_category)
            <div
                style="width: 80px;background: rgba(60,167,43,0);margin-left: 0;display: inline-block;margin-right: 5px;">
                <button id="{{ $superior_category->guid }}"
                    style="border: none; background-color:#F8F9FA;text-align: center" type="button">
                    <div
                        style="background: rgba(230,230,230,0.64);width: 70px;border-radius: 15px;height: 70px;box-shadow: 0px 0px;text-align: center;">
                        <img src="{{ $superior_category->img }}"
                            style="width: 40px;height: 40px;padding-left: 0px;margin: 15px;">
                    </div>
                </button>
                <h6
                    style="text-align: center;font-size: 12;width: 70px;font-family: Montserrat, sans-serif;font-weight: bold;margin-left:5px">
                    {{ $superior_category->name }}
                </h6>
            </div>

            <div id="dom-target" style="display: none;">
                @php
                    $output = "$superior_category->guid";
                    echo htmlspecialchars($output);
                @endphp
            </div>
            {{-- <div id="n-element" style="display: none;">
                @php
                     $output = DB::select('select COUNT(*) from categories where superior_category_guid = "root"')
                     echo htmlspecialchars($output);
                @endphp
            </div> --}}
        @endforeach
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script>
    var div = document.getElementById("dom-target");
    var myData = "#" + div.textContent;
    myData = myData.replace(/\s+/g, '');
    $(myData).click(function() {
        $('html,body').animate({
                scrollTop: $(".second").offset().top
            },
            'slow');
    });

    /*var bigDiv = document.getElementById("n-element");
    var myBigData = bigDiv.textContent;*/
    /*
        for (let i = 0; i < 5; i++) {
            var div = document.getElementById("dom-target");
            var myData = "#" + div.textContent;
            myData = myData.replace(/\s+/g, '');
            alert(myData);
            $(myData).click(function() {
                $('html,body').animate({
                        scrollTop: $(".second").offset().top
                    },
                    'slow');
            });
        }*/
</script>

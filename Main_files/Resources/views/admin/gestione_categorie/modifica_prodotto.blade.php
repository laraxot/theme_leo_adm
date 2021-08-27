@include('layouts.admin_page.style')

<!DOCTYPE html>
<html>

@include('layouts.admin_page.head')

@php
//$products = DB::select('select * from products where guid = "' . $guid . '"');

$conditions = ['store_id' => 1, 'guid' => $guid];

$products = \App\Models\Product::where($conditions)->get();

@endphp


<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Fastorder.club</h3>
            </div>

            <ul class="list-unstyled components">
                <p>Menù di gestione</p>
                <li>
                    <a href="#" data-toggle="collapse" aria-expanded="false">Gestione Login</a>
                </li>
                <li>
                    <a href="#gestionePrenotazioniSubmenu" data-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle">Gestione Prenotazioni</a>
                    <ul class="collapse list-unstyled" id="gestionePrenotazioniSubmenu">
                        <li>
                            <a href="#">Calendario</a>
                        </li>
                        <li>
                            <a href="#">Fasce Orarie</a>
                        </li>
                        <li>
                            <a href="#">Conteggio Ordini</a>
                        </li>
                        <li>
                            <a href="#">Giorni Chiusura</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" data-toggle="collapse" aria-expanded="false">Gestione Stampanti</a>
                </li>
                <li class="active">
                    <a href="#gestioneCategorieSubmenu" data-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle">Gestione Categorie</a>
                        <ul class="collapse list-unstyled" id="gestioneCategorieSubmenu">
                            <li>
                                <a href="{{ url('admin/gestione_categorie_madri') }}">Categorie Madri</a>
                            </li>
                            <li>
                                <a href=" {{ url('admin/gestione_categorie') }} ">Categorie Prodotti</a>
                            </li>
                        </ul>
                </li>
                <li>
                    <a href="#" data-toggle="collapse" aria-expanded="false">Gestione Portate</a>
                </li>
                <li>
                    <a href="#" data-toggle="collapse" aria-expanded="false">Gestione Lingue</a>
                </li>
                <li>
                    <a href="{{ url('admin/profilo_aziendale') }}">Profilo Aziendale</a>
                </li>
                <li>
                    <a href="#impostazioniSubmenu" data-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle">Impostazioni</a>
                    <ul class="collapse list-unstyled" id="impostazioniSubmenu">
                        <li>
                            <a href="#">Limitazioni di Accesso</a>
                        </li>
                        <li>
                            <a href="#">Messaggi Personalizzati</a>
                        </li>
                        <li>
                            <a href="#">Impostazioni Ordine</a>
                        </li>
                        <li>
                            <a href="#">Impostazioni Comanda</a>
                        </li>
                        <li>
                            <a href="#">Layout Stampa Conto</a>
                        </li>
                    </ul>
                </li>

            </ul>

            <li>
                <a href=" {{ route('auth.logout') }} ">Logout</a>
            </li>

        </nav>

        <div class="row">
            <!-- Page Content  -->
            <div id="content">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">

                        <button type="button" id="sidebarCollapse" class="btn btn-info">
                            <i class="fas fa-align-left"></i>
                            <span>Riduci Menù</span>
                        </button>
                        <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button"
                            data-toggle="collapse" data-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fas fa-align-justify"></i>
                        </button>
                    </div>
                </nav>

                <h2>Modifica Prodotto</h2>
                <p>In questa sezione si potranno creare categorie con prodotti al suo interno, impostarne i prezzi e le
                    eventuali aggiunte.</p>

                <div class="line"></div>

                <div style="background: #13849621; padding: 30px; border-radius: 30px;">
                    <div style="text-align: center; justify-content: center; align-items: center;">
                        <div class="drag-area" style="border: 2px dashed #fff; height: 300px; width: 48.5%; border-radius: 5px; 
                            display: flex; align-items: center; justify-content: center; flex-direction: column;">
                            <div class="icon" style="font-size: 80px;">
                                <i class="fas fa-cloud-upload-alt"></i>
                            </div>
                            <header style="font-size: 20px; font-weight: 500;">
                                Trascinare per Caricare File
                            </header>
                            <span style="font-size: 15px; font-weight: 500; margin: 10px 0 15px 0;">
                                OPPURE
                            </span>
                            <br>
                            <button style="cursor: pointer; margin-top: -20px; padding: 10px 25px; font-size: 16px; 
                            font-weight: 500; border: none; outline: none; background: rgb(51, 51, 51);
                            border-radius: 5px; color: white">
                                Caricare un file
                            </button>
                            <input type="file" hidden>
                        </div>
                    </div>

                    @foreach ($products as $product)

                        <form action="{{ route('admin.modify_product') }}" method="POST" style="margin-top: 20px;">

                            @if (Session::get('success'))
                                <div class="alert alert-success">
                                    {{ Session::get('success') }}
                                </div>
                            @endif

                            @if (Session::get('fail'))
                                <div class="alert alert-danger">
                                    {{ Session::get('fail') }}
                                </div>
                            @endif

                            @csrf
                            <label for="name">Nome Prodotto:</label>
                            <label for="guid" style="margin-left: 17%">GUID:</label> <br>

                            <input type="text" name="name" value="{{ $product->name }}" {{-- oninput="assignGuid(this)" --}}
                                style="display: inline-block; width: 24%; margin-bottom: 10px; border-radius: 30px; border: none; padding: 8px;">
                            <input type="text" name="guid" value="{{ $product->guid }}" id="guid"
                                style="display: inline-block; width: 24%; margin-bottom: 10px; border-radius: 30px; border: none; padding: 8px;
                                color: rgb(51, 51, 51, 0.5); background: rgba(146, 146, 146, 0.5);" readonly>
                            <br>

                            <label for="recipes">Ingredienti:</label> <br>

                            <input type="text" name="recipes" value="{{ $product->recipes }}"
                                style="width: 48.5%; margin-bottom: 10px; border-radius: 30px; border: none; padding: 8px;">
                            <br>

                            <label for="recipes">Url immagine:</label> <br>

                            <div id="image_input">
                                <input type="text" name="img" value="{{ $product->img }}" placeholder="Url immagine"
                                    style="width: 48.5%; margin-bottom: 10px; border-radius: 30px; border: none; padding: 8px;">
                                    <br>
                            </div>

                            <label for="price">Prezzo:</label>
                            <label for="maxi_price" style="margin-left: 21%">Prezzo Maxi:</label> <br>

                            <input type="number" step="0.01" name="price" value="{{ $product->price }}"
                                style="width: 24%; margin-bottom: 10px; border-radius: 30px; border: none; padding: 8px;">
                            <input type="number" step="0.01" name="maxi_price"
                                value="{{ $product->maxi_price }}"
                                style="width: 24%; margin-bottom: 10px; border-radius: 30px; border: none; padding: 8px;">
                            <br>
                            {{-- <inputtype="number"name="reduction_price"value=""> --}}
                            <label for="info">Informazioni aggiuntive:</label> <br>

                            <input type="text" name="info" value="{{ $product->info }}" placeholder="Informazioni Aggiuntive"
                                style="width: 48.5%; margin-bottom: 10px; border-radius: 30px; border: none; padding: 8px;">
                            <br>

                            <label for="category_guid">Categoria:</label>
                            <label for="variant_category_guid" style="margin-left: 11.5%">Aggiunte:</label>
                            <label for="dough_category_guid" style="margin-left: 11.5%">Impasti:</label> <br>

                            <select id="category_guid" name="category_guid"
                                style="width: 16%; margin-bottom: 10px; border-radius: 30px; border: none; padding: 8px;">
                                <option value="{{ $product->category_guid }}">{{ $product->category_guid }}
                                </option>
                                @php
                                    $categories = DB::select('select * from categories where superior_category_guid != "root" AND store_id = 1 AND superior_category_guid != "addition" AND superior_category_guid != "dough"');
                                @endphp
                                @foreach ($categories as $category)
                                    <option value="{{ $category->guid }}">{{ $category->name }}</option>
                                @endforeach
                            </select>

                            <select id="variant_category_guid" name="variant_category_guid"
                                style="width: 16%; margin-bottom: 10px; border-radius: 30px; border: none; padding: 8px;">
                                <option value="{{ $product->variant_category_guid }}">
                                    {{ $product->variant_category_guid }}</option>
                                @php
                                    $categories = DB::select('select * from categories where superior_category_guid = "addition" AND store_id = 1');
                                @endphp
                                @foreach ($categories as $category)
                                    <option value="{{ $category->guid }}">{{ $category->name }}</option>
                                @endforeach
                            </select>

                            <select id="dough_category_guid" name="dough_category_guid"
                                style="width: 16%; margin-bottom: 10px; border-radius: 30px; border: none; padding: 8px;">
                                <option value="{{ $product->dough_category_guid }}">
                                    {{ $product->dough_category_guid }}</option>
                                @php
                                    $categories = DB::select('select * from categories where superior_category_guid = "dough" AND store_id = 1');
                                @endphp
                                @foreach ($categories as $category)
                                    <option value="{{ $category->guid }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            <br>

                            <label for="iva">Percentuale IVA:</label>
                            <label for="department" style="margin-left: 9%">Reparto:</label>
                            <label for="warehouse" style="margin-left: 12%">Magazzino:</label> <br>

                            <input type="number" step="0.01" value="10" name="iva"
                                value="Percentuale IVA (Default 10)"
                                style="width: 16%; margin-bottom: 10px; border-radius: 30px; border: none; padding: 8px;">
                            <input type="string" step="0.01" value="01" name="department"
                                value="Reparto (Default 01)"
                                style="width: 16%; margin-bottom: 10px; border-radius: 30px; border: none; padding: 8px;">
                            <select name="warehouse" id="warehouse"
                                style="width: 16%; margin-bottom: 10px; border-radius: 30px; border: none; padding: 8px;">
                                <option value="{{ $product->warehouse }}">
                                    {{ $product->warehouse }}</option>
                                <option value="Disponibile">Disponibile</option>
                                <option value="Esaurito">Esaurito</option>
                                <option value="Nascosto">Nascosto</option>
                            </select>
                            <br>
                            <br>
                            <button type="submit"
                                style="color: white; background-color: #45ad30e8; width: 48.5%; border: none; cursor: pointer; height: 40px; border-radius: 30px;">Modifica</button>
                        </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    @include('layouts.admin_page.script')
</body>
@include('layouts.global.firestore')

</html>

<script>

    const dropArea = document.querySelector(".drag-area"),
        dragText = dropArea.querySelector("header"),
        button = dropArea.querySelector("button"),
        input = dropArea.querySelector("input"),
        src = document.querySelector("#image_input");

    let file;

    button.onclick = () => {
        input.click();
    }

    input.addEventListener("change", function() {
        file = this.files[0];
        var storageRef = firebase.storage().ref('AlBasilico/Image/Products/' + file.name);
        var uploadTask = storageRef.put(file);

        uploadTask.on('state_chaged', function (snapshot) {
            var progress = (snapshot.bytesTransferred/snapshot.totalBytes) * 100;
            console.log("caricamento completato al: " + progress);
        }, function (error) { 
            console.log(error.message);
        }, function () {
            uploadTask.snapshot.ref.getDownloadURL().then(function (downloadURL) {
                console.log(downloadURL);
                src.innerHTML = `<input id="image_input" value="${downloadURL}" type="text" name="img" placeholder="Url immagine"
                            style="width: 48.5%; margin-bottom: 10px; border-radius: 30px; border: none; padding: 8px;">`;
            });
        });

        showFile();
        dropArea.classList.add("active");
    });

    dropArea.addEventListener("dragover", (event) => {
        event.preventDefault();
        dropArea.classList.add("active");
        dragText.textContent = "Rilascia per Caricare il File";
    });

    dropArea.addEventListener("dragleave", () => {
        dropArea.classList.remove("active");
        dragText.textContent = "Trascinare per Caricare File";
    });

    dropArea.addEventListener("drop", (event) => {
        event.preventDefault();
        file = event.dataTransfer.files[0];

        var storageRef = firebase.storage().ref('AlBasilico/Image/Products/' + file.name);
        var uploadTask = storageRef.put(file);

        uploadTask.on('state_chaged', function (snapshot) {
            var progress = (snapshot.bytesTransferred/snapshot.totalBytes) * 100;
            console.log("caricamento completato al: " + progress);
        }, function (error) { 
            console.log(error.message);
        }, function () {
            uploadTask.snapshot.ref.getDownloadURL().then(function (downloadURL) {
                console.log(downloadURL);
                src.innerHTML = `<input id="image_input" value="${downloadURL}" type="text" name="img" placeholder="Url immagine"
                            style="width: 48.5%; margin-bottom: 10px; border-radius: 30px; border: none; padding: 8px;">`;
            });
        });
        
        showFile();
    });

    function showFile() {
        let fileType = file.type;
        let validExtensions = ["image/jpeg", "image/png", "image/jpg"];
        if (validExtensions.includes(fileType)) {
            let fileReader = new FileReader();
            fileReader.onload = () => {
                let fileURL = fileReader.result;
                let imgTag = `<img src="${fileURL}" alt="">`;
                dropArea.innerHTML = imgTag;
            }
            fileReader.readAsDataURL(file);
        } else {
            alert("File non valido! \n Utilizzare un'immagine dei seguenti formati: \n .png .jpg . jpeg");
            dropArea.classList.remove("active");
            dragText.textContent = "Trascinare per Caricare File";
        }
    }

    function assignGuid(element) {
        let created_guid = stringToSlug(element.value);
        let input = document.getElementById('guid');
        input.value=created_guid;
    }

    function stringToSlug(str) {
        str = str.replace(/^\s+|\s+$/g, ''); // trim
        str = str.toLowerCase();

        // remove accents, swap ñ for n, etc
        var from = "àáãäâèéëêìíïîòóöôùúüûñç·/_,:;";
        var to = "aaaaaeeeeiiiioooouuuunc------";

        for (var i = 0, l = from.length; i < l; i++) {
            str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
        }

        str = str.replace(/[^a-z0-9 -]/g, '') // remove invalid chars
            .replace(/\s+/g, '-') // collapse whitespace and replace by -
            .replace(/-+/g, '-'); // collapse dashes

        return str;
    }
</script>

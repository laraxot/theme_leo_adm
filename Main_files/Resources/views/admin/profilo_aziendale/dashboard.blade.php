@include('layouts.admin_page.style')

@php

$informations = \App\Models\Information::where('store_id', 1)->get();

@endphp


<!DOCTYPE html>
<html>

@include('layouts.admin_page.head')

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
                <li>
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
                <li class="active">
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

        <!-- Page Content  -->
        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Riduci Menù</span>
                    </button>
                </div>
            </nav>

            <h2>Gestione Profilo Aziendale</h2>
            <p>In questa sezione è possibile andare a cambiare il layout base del sito web e alcune informazioni di
                contatto.</p>

            <div class="line"></div>

            <div style="background: #13849621; padding: 30px; border-radius: 30px;">
                <label for="name">Logo:</label>
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

                @foreach ($informations as $information)

                    <form action="{{ route('admin.modify_information') }}" method="POST" style="margin-top: 20px;">

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
                        <label for="store_name">Nome Locale:</label>
                        <label for="store_email" style="margin-left: 18%">Email Locale:</label> <br>

                        <input type="text" name="store_name" value="{{ $information->store_name }}"
                            {{-- oninput="assignGuid(this)" --}}
                            style="display: inline-block; width: 24%; margin-bottom: 10px; border-radius: 30px; border: none; padding: 8px;">
                        <input type="email" name="store_email" value="{{ $information->store_email }}"
                            style="display: inline-block; width: 24%; margin-bottom: 10px; border-radius: 30px; border: none; padding: 8px;">
                        <br>

                        <label for="store_phone_number">Numero di Telefono:</label>
                        <label for="store_logo" style="margin-left: 15%">Url Logo:</label> <br>

                        <input type="text" name="store_phone_number" value="{{ $information->store_phone_number }}"
                            {{-- oninput="assignGuid(this)" --}}
                            style="display: inline-block; width: 24%; margin-bottom: 10px; border-radius: 30px; border: none; padding: 8px;">
                        
                        <div id="image_input" style="display: inline-block; width: 24%; ">
                            <input type="text" name="store_logo" value="{{ $information->store_logo }}"
                                style="display: inline-block;; width: 100%;  margin-bottom: 10px; border-radius: 30px; border: none; padding: 8px;">
                        </div>
                        <br>

                        <label for="store_address">Indirizzo:</label>
                        <label for="store_address" style="margin-left: 24.5%">P.IVA:</label> <br>

                        <input type="text" name="store_address" value="{{ $information->store_address }}"
                            style="width: 28.5%; margin-bottom: 10px; border-radius: 30px; border: none; padding: 8px;">
                            <input type="text" name="store_p_iva" value="{{ $information->store_p_iva }}"
                            style="width: 19.5%; margin-bottom: 10px; border-radius: 30px; border: none; padding: 8px;">
                        <br>

                        <label for="store_maps_url">Url Google Maps:</label> <br>


                        <input type="text" name="store_maps_url" value="{{ $information->store_maps_url }}"
                            placeholder="Url Google Maps"
                            style="width: 48.5%; margin-bottom: 10px; border-radius: 30px; border: none; padding: 8px;">
                        <br>


                        {{-- <inputtype="number"name="reduction_price"value=""> --}}
                        <label for="store_maps_api">API Google Maps:</label> <br>

                        <input type="text" name="store_maps_api" value="{{ $information->store_maps_api }}"
                            placeholder="API Google Maps"
                            style="width: 48.5%; margin-bottom: 10px; border-radius: 30px; border: none; padding: 8px;">
                        <br>

                        <br>
                        <br>
                        <button type="submit"
                            style="color: white; background-color: #45ad30e8; width: 48.5%; border: none; cursor: pointer; height: 40px; border-radius: 30px;">Modifica</button>
                    </form>
                @endforeach
            </div>
        </div>
    </div>

    @include('layouts.admin_page.script')
</body>

</html>

@include('layouts.global.firestore')

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
        var storageRef = firebase.storage().ref('AlBasilico/Image/Other/' + file.name);
        var uploadTask = storageRef.put(file);

        uploadTask.on('state_chaged', function(snapshot) {
            var progress = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
            console.log("caricamento completato al: " + progress);
        }, function(error) {
            console.log(error.message);
        }, function() {
            uploadTask.snapshot.ref.getDownloadURL().then(function(downloadURL) {
                console.log(downloadURL);
                src.innerHTML =
                    `<input id="image_input" value="${downloadURL}" type="text" name="store_logo" placeholder="Url immagine"
                            style="width: 100%; margin-bottom: 10px; border-radius: 30px; border: none; padding: 8px;">`;
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

        uploadTask.on('state_chaged', function(snapshot) {
            var progress = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
            console.log("caricamento completato al: " + progress);
        }, function(error) {
            console.log(error.message);
        }, function() {
            uploadTask.snapshot.ref.getDownloadURL().then(function(downloadURL) {
                console.log(downloadURL);
                src.innerHTML =
                    `<input id="image_input" value="${downloadURL}" type="text" name="img" placeholder="Url immagine"
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
</script>

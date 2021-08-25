<?php echo $__env->make('layouts.admin_page.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!DOCTYPE html>
<html>

<?php echo $__env->make('layouts.admin_page.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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
                    <a href=" <?php echo e(url('admin/gestione_categorie')); ?> ">Gestione Categorie</a>
                </li>
                <li>
                    <a href="#" data-toggle="collapse" aria-expanded="false">Gestione Portate</a>
                </li>
                <li>
                    <a href="#" data-toggle="collapse" aria-expanded="false">Gestione Lingue</a>
                </li>
                <li>
                    <a href="#" data-toggle="collapse" aria-expanded="false">Profilo Aziendale</a>
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
                <a href=" <?php echo e(route('auth.logout')); ?> ">Logout</a>
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

                <h2>Crea Prodotto</h2>
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

                    <form action="<?php echo e(route('admin.add_product')); ?>" method="POST" style="margin-top: 20px;">

                        <?php if(Session::get('success')): ?>
                            <div class="alert alert-success">
                                <?php echo e(Session::get('success')); ?>

                            </div>
                        <?php endif; ?>

                        <?php if(Session::get('fail')): ?>
                            <div class="alert alert-danger">
                                <?php echo e(Session::get('fail')); ?>

                            </div>
                        <?php endif; ?>

                        <?php echo csrf_field(); ?>
                        <input type="text" name="name" placeholder="Nome Prodotto"
                            style="display: inline-block; width: 24%; margin-bottom: 10px; border-radius: 30px; border: none; padding: 8px;">
                        <input type="text" name="guid" placeholder="GUID"
                            style="display: inline-block; width: 24%; margin-bottom: 10px; border-radius: 30px; border: none; padding: 8px;">
                        <br>
                        <input type="text" name="recipes" placeholder="Ingredienti"
                            style="width: 48.5%; margin-bottom: 10px; border-radius: 30px; border: none; padding: 8px;">
                        <br>
                        <input type="text" name="img" placeholder="Url immagine"
                            style="width: 48.5%; margin-bottom: 10px; border-radius: 30px; border: none; padding: 8px;">
                        <br>
                        <input type="number" step="0.01" name="price" placeholder="Prezzo"
                            style="width: 24%; margin-bottom: 10px; border-radius: 30px; border: none; padding: 8px;">
                        <input type="number" step="0.01" name="maxi_price" placeholder="Prezzo Maxi"
                            style="width: 24%; margin-bottom: 10px; border-radius: 30px; border: none; padding: 8px;">
                        <br>
                        
                        <input type="text" name="info" placeholder="Informazioni aggiuntive"
                            style="width: 48.5%; margin-bottom: 10px; border-radius: 30px; border: none; padding: 8px;">
                        <br>

                        <select id="category_guid" name="category_guid"
                            style="width: 16%; margin-bottom: 10px; border-radius: 30px; border: none; padding: 8px;">
                            <?php
                                $categories = DB::select('select * from categories where superior_category_guid != "root" AND store_id = 1 AND superior_category_guid != "addition" AND superior_category_guid != "dough"');
                            ?>
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($category->guid); ?>"><?php echo e($category->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>

                        <select id="variant_category_guid" name="variant_category_guid"
                            style="width: 16%; margin-bottom: 10px; border-radius: 30px; border: none; padding: 8px;">
                            <?php
                                $categories = DB::select('select * from categories where superior_category_guid = "addition" AND store_id = 1');
                            ?>
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($category->guid); ?>"><?php echo e($category->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>

                        <select id="dough_category_guid" name="dough_category_guid"
                            style="width: 16%; margin-bottom: 10px; border-radius: 30px; border: none; padding: 8px;">
                            <?php
                                $categories = DB::select('select * from categories where superior_category_guid = "dough" AND store_id = 1');
                            ?>
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($category->guid); ?>"><?php echo e($category->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <br>
                        <button type="submit"
                            style="color: white; background-color: #45ad30e8; width: 48.5%; border: none; cursor: pointer; height: 40px; border-radius: 30px;">Aggiungi</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php echo $__env->make('layouts.admin_page.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
<?php echo $__env->make('layouts.global.firestore', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</html>

<script>
    const dropArea = document.querySelector(".drag-area"),
        dragText = dropArea.querySelector("header"),
        button = dropArea.querySelector("button"),
        input = dropArea.querySelector("input");

    let file;

    button.onclick = () => {
        input.click();
    }

    input.addEventListener("change", function() {
        file = this.files[0];
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
<?php /**PATH C:\TAVOLI\fastoder.laravel\resources\views/admin/aggiungi_prodotto.blade.php ENDPATH**/ ?>
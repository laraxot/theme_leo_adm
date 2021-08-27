@include('layouts.admin_page.style')

@php
//$superior_categories = DB::select('select * from categories where superior_category_guid = "root" AND store_id = 1');

$conditions = ['store_id' => 1, 'superior_category_guid' => 'root'];

$superior_categories = \App\Models\Category::where($conditions)->get();
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

            <h2>Gestione Categorie Madri</h2>
            <p>In questa sezione si potranno creare categorie con prodotti al suo interno, impostarne i prezzi e le
                eventuali aggiunte.</p>

            <div class="line"></div>

            <a style="color: rgb(43, 43, 43) !important;"
                href="{{ url('/admin/gestione_categorie/crea_categoria') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16"
                    class="bi bi-plus-square" style="font-size: 80px;margin-top: 5px;height: 80px;">
                    <path
                        d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z">
                    </path>
                    <path
                        d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z">
                    </path>
                </svg>
            </a>

            <div style="margin-top: 30px;"></div>

            <div style="margin-left: -20px;">

                @foreach ($superior_categories as $superior_category)

                    <div
                        style="text-align: center;width: 250px;height: 190px;background: #dfdfdf79;border-radius: 11px; display: inline-block; margin-left: 20px; margin-top: 20px;">
                        {{-- <ahref="url('/admin/gestione_categorie/'.$superior_category->guid) }}">--}}
                            <img style="width: 85px;height: 85px;margin: 0px;margin-top: 35px;border-radius: 11px;margin-right: 0px;"
                                src="{{ $superior_category->img }}" />
                        {{-- </a> --}}
                        <a href="{{ url('/admin/modifica_categoria/' . $superior_category->guid) }}" style="color: rgb(31, 30, 30) !important;">
                            <h1
                                style="cursor: pointer; font-size: 18px;text-align: left; margin-top: 42.5px;margin-left: 5px;
                                margin_bottom: 20px; font-family: Montserrat, sans-serif;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                    viewBox="0 0 16 16" class="bi bi-pencil"
                                    style="float: right;margin-right: 7px;margin-top: 2px;font-size: 18px;">
                                    <path
                                        d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z">
                                    </path>
                                </svg>
                                {{ $superior_category->name }}
                            </h1>
                        </a>
                        <a href= {{ url('/admin/elimina_categoria/' . $superior_category->guid) }}>
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" hseight="1em" fill="currentColor"
                                viewBox="0 0 16 16" class="bi bi-x-circle"
                                style="cursor: pointer; position: fixed;margin-top: -187px;margin-left: 89px;font-size: 30px;color: rgb(215,50,39);background: rgba(255,255,255,0.82);padding: 1px;border-radius: 57px;">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                <path
                                    d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z">
                                </path>
                            </svg>
                        </a>
                    </div>

                @endforeach
            </div>
        </div>
    </div>

    @include('layouts.admin_page.script')
</body>

</html>

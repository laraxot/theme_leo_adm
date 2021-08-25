    @php
        $panel = Panel::get(\Auth::user());
        $areas = $panel->areas();
        //dddx($areas);
    @endphp
    <!-- Sidebar  -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>Fastorder.club</h3>
        </div>

        <ul class="list-unstyled components">
            <p>Aree</p>
            @if (\Auth::check())
                @foreach ($areas as $area)
                    <li>
                        <a href="#" data-toggle="collapse" aria-expanded="false">{{ $area->area_define_name }}</a>
                    </li>
                @endforeach
            @endif
            {{-- <p>Menù di gestione</p>
            <li class="active">
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
                <a href=" {{ url('admin/gestione_categorie') }} ">Gestione Categorie</a>
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
            </li> --}}
        </ul>


        <li>
            <a href=" {{-- route('auth.logout') --}} ">Logout</a>
        </li>

    </nav>

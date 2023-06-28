<div class="iq-sidebar  sidebar-default  ">
    <div class="iq-sidebar-logo d-flex align-items-end justify-content-between">
        <a href="/" class="header-logo">
            <img src="{{asset('assets/img/logo.png')}}" class="img-fluid rounded-normal light-logo" alt="logo">
            <span>STEIL AUTO</span>
        </a>
        <div class="side-menu-bt-sidebar-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="text-light wrapper-menu" width="30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </div>
    </div>
    <div class="data-scrollbar" data-scroll="1">
        <nav class="iq-sidebar-menu">
            <ul id="iq-sidebar-toggle" class="side-menu">
                <li class="active sidebar-layout">
                    <a href="/login/admin" class="svg-icon">
                        <i class="fa-solid fa-house"></i>
                        <span class="ml-2">MENU GENERAL</span>
                    </a>
                </li>
                <li class="px-3 pt-3 pb-2">
                    <span class="text-uppercase small font-weight-bold">GESTION DES PIECES / ENGIN</span>
                </li>

                <li class="sidebar-layout">
                    <a href="#app1" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                        <i class="fa-solid fa-toolbox"></i>
                        <span class="ml-2">Pièces</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon iq-arrow-right arrow-active" width="15" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                    <ul id="app1" class="submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class=" sidebar-layout">
                            <a href="/categorie_piece" class="svg-icon">
                                <i class="fa-solid fa-layer-group"></i>
                                <span class="">Créer une Catégorie</span>
                            </a>
                        </li>
                        <li class=" sidebar-layout mt-2">
                            <a href="/pieces" class="svg-icon">
                                <i class="fa-solid fa-list"></i>
                                <span class="">Liste des Pièces</span>
                            </a>
                        </li>

                        <li class=" sidebar-layout">
                            <a href="/pieces/create" class="svg-icon">
                                <i class="fa-solid fa-plus"></i>
                                <span class="">Ajouter une pièce</span>
                            </a>
                        </li>


                    </ul>
                </li>

                <li class="sidebar-layout">
                    <a href="#app2" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                        <i class="fa-solid fa-car"></i>
                        <span class="ml-2">Engin</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon iq-arrow-right arrow-active"  width="15" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                    <ul id="app2" class="submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class=" sidebar-layout">
                            <a href="/categorie_engin" class="svg-icon">
                                <i class="fa-solid fa-layer-group"></i>
                                <span class="">Créer une Catégorie</span>
                            </a>
                        </li>
                        <li class=" sidebar-layout mt-2">
                            <a href="/engin" class="svg-icon">
                                <i class="fa-solid fa-list"></i>
                                <span class="">Liste des Engin</span>
                            </a>
                        </li>
                        <li class=" sidebar-layout">
                            <a href="/engin/create" class="svg-icon">
                                <i class="fa-solid fa-plus"></i>
                                <span class="">Ajouter un Engin</span>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="px-3 pt-3 pb-2">
                    <span class="text-uppercase small font-weight-bold">GESTION DES REALISATIONS</span>
                </li>
                <li class="sidebar-layout">
                    <a href="#app3" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                        <i class="fa-solid fa-list"></i>
                        <span class="ml-2">Réalisation</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon iq-arrow-right arrow-active"  width="15" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                    <ul id="app3" class="submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class=" sidebar-layout mt-2">
                            <a href="" class="svg-icon">
                                <i class="fa-solid fa-plus"></i>
                                <span class="">Liste des réalisations</span>
                            </a>
                        </li>
                        <li class=" sidebar-layout">
                            <a href="" class="svg-icon">
                                <i class="fa-solid fa-pen-to-square"></i>
                                <span class="">Ajouter</span>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="px-3 pt-3 pb-2">
                    <span class="text-uppercase small font-weight-bold">GESTION DES LOGO DE MARQUES</span>
                </li>
                <li class="sidebar-layout">
                    <a href="#app6" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                        <i class="fa-solid fa-newspaper"></i>
                        <span class="ml-2">Logo</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon iq-arrow-right arrow-active"  width="15" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                    <ul id="app6" class="submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class=" sidebar-layout mt-2">
                            <a href="" class="svg-icon">
                                <i class="fa-solid fa-plus"></i>
                                <span class="">Liste des logo</span>
                            </a>
                        </li>
                        <li class=" sidebar-layout">
                            <a href="" class="svg-icon">
                                <i class="fa-solid fa-pen-to-square"></i>
                                <span class="">Ajouter</span>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="px-3 pt-3 pb-2">
                    <span class="text-uppercase small font-weight-bold">GESTION DES TEMOIGNAGES</span>
                </li>
                <li class="sidebar-layout">
                    <a href="#app5" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                        <i class="fa-solid fa-newspaper"></i>
                        <span class="ml-2">Témoignages</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon iq-arrow-right arrow-active"  width="15" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                    <ul id="app5" class="submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class=" sidebar-layout mt-2">
                            <a href="" class="svg-icon">
                                <i class="fa-solid fa-plus"></i>
                                <span class="">Liste des témoignages</span>
                            </a>
                        </li>
                        <li class=" sidebar-layout">
                            <a href="" class="svg-icon">
                                <i class="fa-solid fa-pen-to-square"></i>
                                <span class="">Ajouter</span>
                            </a>
                        </li>

                    </ul>
                </li>



                <li class="px-3 pt-3 pb-2">
                    <span class="text-uppercase small font-weight-bold">PARAMETRAGE</span>
                </li>
                <li class="sidebar-layout">
                    <a href="#app7" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                        <i class="fa-solid fa-fingerprint"></i>
                        <span class="ml-2">Accès Utilisateur</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon iq-arrow-right arrow-active"  width="15" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                    <ul id="app7" class="submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class=" sidebar-layout mt-2">
                            <a href="#" class="svg-icon">
                                <i class="fa-solid fa-plus"></i>
                                <span class="">Ajouter un accès</span>
                            </a>
                        </li>
                        <li class=" sidebar-layout">
                            <a href="#" class="svg-icon">
                                <i class="fa-solid fa-pen-to-square"></i>
                                <span class="">Modifier un accès</span>
                            </a>
                        </li>

                    </ul>
                </li>

            </ul>
        </nav>
        <div class="pt-5 pb-5"></div>
    </div>
</div>

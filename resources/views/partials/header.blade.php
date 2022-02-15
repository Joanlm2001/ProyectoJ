<header id="menu-sticky">
    <nav> <!--Barra superior-->
        <div class="flex-container">
            <section class="hamburger-menu"> <!-- Menu Hamburger -->
                    <input id="menu__toggle" type="checkbox"/>
                    <label class="menu_btn" for="menu_toggle">
                        <span></span>
                    </label>

                    <ul class="menu__box">
                        <li><a class="menu__item" href="#">Muebles</a></li>
                        <li><a class="menu__item" href="#">Espejos</a></li>
                        <li><a class="menu__item" href="#">Accesorios</a></li>
                        <li><a class="menu__item" href="#">Patas</a></li>
                        <li class="desplegable"><a class="menu__item" href="#">Estilos<i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li><a class="menu__item" href="#">Nórdico</a></li>
                                <li><a class="menu__item" href="#">Boho</a></li>
                                <li><a class="menu__item" href="#">Industrial</a></li>
                                <li><a class="menu__item" href="#">Glamour</a></li>
                            </ul>
                        </li>
                    </ul>
            </section>

            <section id="div-logo"><!--Logo-->
                <a href="#">
                    <img id="logo" src="../../public/img/logotipo-color.png" alt="Logotipo de Projjject">
                    <!-- <img class="logo-top" src="/PROJJJECT/img/isotipo-azul-oscuro.png" alt="Isotipo de Projjject"> -->
                </a>
            </section>

            <section id="iconos-acceso"><!--Panel acceso-->
                <ul id="iconos-resp">
                    <li class="fa fa-search iconos-acceso-estilo" ><!--Search-->
                        <form action="" autocomplete="on">
                        <input id="search" name="search" type="text" placeholder="Buscar...">
                        <input id="search_submit" value="Buscar" type="submit">
                        </form>
                        <!-- <a class="fa fa-search iconos-acceso-estilo" href="#"></a> -->
                    </li>
                    <li><!--User-->
                        <a class="fa fa-user iconos-acceso-estilo" href="#"></a>
                    </li>
                    <li><!--Cesta-->
                        <a class="fa fa-shopping-basket iconos-acceso-estilo" href="#"></a>
                        <span class="count">3</span>
                    </li>
                </ul>
            </section>
        </div>
    </nav>
    <hr>
</header>

<?php $sidebarController=model_load('mainmodel', 'getCityName', '')?>

<div class="wrapper">
    <!-- Sidebar  -->
    <nav id="sidebar">
        <div class="sidebar-header">
        <a class="btn btn-danger" href="wylogowanie/index" role="button">Wyloguj</a>
            <img src="/application/media/images/logo.png">
        </div>

        <ul class="list-unstyled components">
            <li>
                <a href="administrator/home/index">Panel Główny</a>
            </li>
            <li>
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Dane Firmy</a>
                
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li>
                        <a href="administrator/adressen/index">Wszystkie</a>
                    </li>
                    <?php foreach($sidebarController as $row): ?>
                    <li>
                    <?=" <a href='administrator/adressen/index/stad/$row[0]'> $row[1]</a>" ?>
                    </li>
                    <?php endforeach; ?>
                </ul>
           </li>
            <li>
                <a href="administrator/inkomsten/index">Faktury</a>
            </li>
            <li>
                <a href="administrator/instellingen/stedenlijst">Ustawienia</a>
            </li>

        </ul>
    </nav>
    <button id="sidebarCollapse" class="btn btn-danger mb-2">X</button>
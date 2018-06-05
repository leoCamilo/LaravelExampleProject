<div class="sidebar" data-color="orange" data-background-color="white">
    <div class="logo">
        <a href="#" class="simple-text logo-normal text-center">
            {{ config('app.name', 'Laravel') }}
        </a>
    </div>

    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item @isset($side1) active @endisset">
                <a class="nav-link" href="/news">
                    <i class="material-icons">dashboard</i>
                    <p>Novidades</p>
                </a>
            </li>

            <?php $academicNotColapsed = isset($side21) || isset($side22) || isset($side23) || isset($side24) || isset($side25); ?>

            <li class="nav-item">
                <a class="nav-link @if(!$academicNotColapsed) collapsed @endif" data-toggle="collapse" href="#schoolMenu" aria-expanded="@if ($academicNotColapsed) true @else false @endif">
                    <i class="material-icons">school</i>
                    <p> Acadêmico <b class="caret"></b></p>
                </a>

                <div class="collapse @if ($academicNotColapsed) show @endif" id="schoolMenu" style="">
                    <ul class="nav">
                        <li class="nav-item @isset($side21) active @endisset">
                            <a class="nav-link" href="/videolessons">
                                <i class="material-icons">videocam</i>
                                <span class="sidebar-normal"> Vídeo Aula </span>
                            </a>
                        </li>

                        <li class="nav-item @isset($side22) active @endisset">
                            <a class="nav-link" href="/study">
                                <i class="material-icons">book</i>
                                <span class="sidebar-normal"> Estudos </span>
                            </a>
                        </li>

                        <li class="nav-item @isset($side23) active @endisset">
                            <a class="nav-link" href="/supportcontent">
                                <i class="material-icons">library_books</i>
                                <span class="sidebar-normal"> Material de apoio </span>
                            </a>
                        </li>

                        <!-- <li class="nav-item @isset($side24) active @endisset">
                            <a class="nav-link" href="#">
                                <i class="material-icons">account_balance</i>
                                <span class="sidebar-normal"> Legislação </span>
                            </a>
                        </li> -->

                        <li class="nav-item @isset($side25) active @endisset">
                            <a class="nav-link" href="/projects">
                                <i class="material-icons">build</i>
                                <span class="sidebar-normal"> Projetos Acadêmicos </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            
            <?php $officeNotColapsed = isset($side31) || isset($side32) || isset($side33) || isset($side34); ?>

            <li class="nav-item">
                <a class="nav-link @if(!$officeNotColapsed) collapsed @endif" data-toggle="collapse" href="#officeMenu" aria-expanded="@if ($officeNotColapsed) true @else false @endif">
                    <i class="material-icons">assignment</i>
                    <p> Escritório <b class="caret"></b></p>
                </a>

                <div class="collapse @if ($officeNotColapsed) show @endif" id="officeMenu">
                    <ul class="nav">
                        <li class="nav-item @isset($side31) active @endisset">
                            <a class="nav-link" href="/office">
                            <i class="material-icons">content_paste</i>
                            <span class="sidebar-normal"> Escritório </span>
                            </a>
                        </li>

                        <li class="nav-item @isset($side32) active @endisset">
                            <a class="nav-link" href="/team">
                            <i class="material-icons">group</i>
                            <span class="sidebar-normal"> Equipe </span>
                            </a>
                        </li>

                        <li class="nav-item @isset($side33) active @endisset">
                            <a class="nav-link" href="/roles">
                            <i class="material-icons">library_books</i>
                            <span class="sidebar-normal"> Atuação </span>
                            </a>
                        </li>

                        <li class="nav-item @isset($side34) active @endisset">
                            <a class="nav-link" href="/awards">
                            <i class="material-icons">stars</i>
                            <span class="sidebar-normal"> Prêmios </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item @isset($side4) active @endisset">
                <a class="nav-link" href="/chat">
                    <i class="material-icons">chat</i>
                    <p>Chat</p>
                </a>
            </li>

            <?php $clientsNotColapsed = isset($side51) || isset($side52); ?>

            <li class="nav-item">
                <a class="nav-link @if(!$clientsNotColapsed) collapsed @endif" data-toggle="collapse" href="#clientMenu" aria-expanded="@if ($clientsNotColapsed) true @else false @endif">
                    <i class="material-icons">monetization_on</i>
                    <p> Clientes <b class="caret"></b></p>
                </a>

                <div class="collapse @if ($clientsNotColapsed) show @endif" id="clientMenu" style="">
                    <ul class="nav">
                        <li class="nav-item @isset($side51) active @endisset">
                            <a class="nav-link" href="/legaladvice">
                            <i class="material-icons">book</i>
                            <span class="sidebar-normal"> Assessoria Jurídica </span>
                            </a>
                        </li>

                        <li class="nav-item @isset($side52) active @endisset">
                            <a class="nav-link" href="/consultations">
                            <i class="material-icons">search</i>
                            <span class="sidebar-normal"> Consulta Processual </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
                
            <li class="nav-item @isset($side6) active @endisset">
                <a class="nav-link" href="/users">
                    <i class="material-icons">supervisor_account</i>
                    <p>Usuários</p>
                </a>
            </li>

            <li class="nav-item @isset($side7) active @endisset">
                <meta name="csrf-token" content="{{ csrf_token() }}">
                <a class="nav-link" href="#" onclick="logout_user()">
                    <i class="material-icons">exit_to_app</i>
                    <p>Sair</p>
                </a>
            </li>
        </ul>
    </div>
</div>
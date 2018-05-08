<div class="sidebar" data-color="orange" data-background-color="white">
	<div class="logo">
		<a href="#" class="simple-text logo-normal">
            {{ config('app.name', 'Laravel') }}
		</a>
	</div>

	<div class="sidebar-wrapper">
		<ul class="nav">
			<li class="nav-item @isset($side0) active @endisset">
				<a class="nav-link" href="../examples/dashboard.html">
					<i class="material-icons">dashboard</i>
					<p>Início</p>
				</a>
			</li>

			<li class="nav-item @isset($side1) active @endisset">
				<a class="nav-link" href="/news">
					<i class="material-icons">view_agenda</i>
					<p>Novidades</p>
				</a>
			</li>

			<li class="nav-item @isset($side2) active @endisset">
                <a class="nav-link collapsed" data-toggle="collapse" href="#schoolMenu" aria-expanded="false">
					<i class="material-icons">school</i>
                    <p> Acadêmico <b class="caret"></b></p>
                </a>

                <div class="collapse" id="schoolMenu" style="">
                    <ul class="nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="#">
                              <i class="material-icons">videocam</i>
                              <span class="sidebar-normal"> Vídeo Aula </span>
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link" href="#">
                              <i class="material-icons">book</i>
                              <span class="sidebar-normal"> Estudos </span>
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link" href="#">
                              <i class="material-icons">library_books</i>
                              <span class="sidebar-normal"> Material de apoio </span>
                            </a>
                        </li>

						<li class="nav-item ">
                            <a class="nav-link" href="#">
                              <i class="material-icons">account_balance</i>
                              <span class="sidebar-normal"> Legislação </span>
                            </a>
                        </li>

						<li class="nav-item ">
                            <a class="nav-link" href="#">
                              <i class="material-icons">build</i>
                              <span class="sidebar-normal"> Projetos Acadêmicos </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

			<li class="nav-item @isset($side3) active @endisset">
                <a class="nav-link collapsed" data-toggle="collapse" href="#officeMenu" aria-expanded="false">
					<i class="material-icons">assignment</i>
                    <p> Escritório <b class="caret"></b></p>
                </a>

                <div class="collapse" id="officeMenu" style="">
                    <ul class="nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="#">
                              <i class="material-icons">content_paste</i>
                              <span class="sidebar-normal"> Escritório </span>
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link" href="#">
                              <i class="material-icons">group</i>
                              <span class="sidebar-normal"> Equipe </span>
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link" href="#">
                              <i class="material-icons">library_books</i>
                              <span class="sidebar-normal"> Atuação </span>
                            </a>
                        </li>

						<li class="nav-item ">
                            <a class="nav-link" href="#">
                              <i class="material-icons">stars</i>
                              <span class="sidebar-normal"> Prêmios </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

			<li class="nav-item @isset($side4) active @endisset">
				<a class="nav-link" href="#">
					<i class="material-icons">chat</i>
					<p>Chat</p>
				</a>
			</li>

			<li class="nav-item @isset($side5) active @endisset">
                <a class="nav-link collapsed" data-toggle="collapse" href="#clientMenu" aria-expanded="false">
					<i class="material-icons">monetization_on</i>
                    <p> Clientes <b class="caret"></b></p>
                </a>

                <div class="collapse" id="clientMenu" style="">
                    <ul class="nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="#">
                              <i class="material-icons">book</i>
                              <span class="sidebar-normal"> Assessoria Jurídica </span>
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link" href="#">
                              <i class="material-icons">search</i>
                              <span class="sidebar-normal"> Consulta Processual </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
				
			<li class="nav-item @isset($side6) active @endisset">
				<a class="nav-link" href="#">
					<i class="material-icons">supervisor_account</i>
					<p>Usuários</p>
				</a>
			</li>

			<li class="nav-item @isset($side7) active @endisset">
				<a class="nav-link" href="#">
					<i class="material-icons">exit_to_app</i>
					<p>Sair</p>
				</a>
			</li>
		</ul>
	</div>
</div>
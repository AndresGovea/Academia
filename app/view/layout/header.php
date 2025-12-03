<header class="p-3 mb-3 border-bottom" style="background-color: #0F1E3D;">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="#" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                     viewBox="0 0 24 24" fill="none" stroke="#69e069" stroke-width="2"
                     stroke-linecap="round" stroke-linejoin="round"
                     class="icon icon-tabler icons-tabler-outline icon-tabler-school">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M22 9l-10 -4l-10 4l10 4l10 -4v6" />
                    <path d="M6 10.6v5.4a6 3 0 0 0 12 0v-5.4" />
                </svg>
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li>
                    <a href="dashboard.php" class="nav-link px-2 link-secondary text-white">Inicio</a>
                </li>
                <li>
                    <a href="#" class="nav-link px-2 link-body-emphasis text-white">Mis cursos</a>
                </li>
                <li>
                    <a href="#" class="nav-link px-2 link-body-emphasis text-white">Historial</a>
                </li>
                <li>
                    <a href="#" class="nav-link px-2 link-body-emphasis text-white">Favoritos</a>
                </li>

                <?php 
                // Botones extra solo para admin
                if (isset($_SESSION['rol']) && $_SESSION['rol'] == 'admin') { 
                ?>
                    <li>
                        <a href="admin.php" class="nav-link px-2 link-body-emphasis text-white">Administrar</a>
                    </li>
                    <li>
                        <!-- IMPORTANTE: parámetro from=admin para saber que vienes desde Alta usuario -->
                        <a href="auth/registro.php?from=admin" class="nav-link px-2 link-body-emphasis text-white">Alta usuario</a>
                    </li>
                <?php 
                } 
                ?>
            </ul>

            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Buscar..." aria-label="Search">
            </form>

            <div class="dropdown text-end">
                <a href="#" class="d-block link-body-emphasis text-white text-decoration-none dropdown-toggle"
                   data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="../../public/img/foto_perfil.jpg" alt="Foto de perfil" width="32" height="32" class="rounded-circle" />
                </a>
                <ul class="dropdown-menu text-small">
                    <li><a class="dropdown-item" href="#">Nuevo curso</a></li>
                    <li><a class="dropdown-item" href="./configuracion.php">Configuración</a></li>
                    <li><a class="dropdown-item" href="./perfil.php">Perfil</a></li>
                    <li><hr class="dropdown-divider" /></li>
                    <li><a class="dropdown-item" href="../view/logout.php">Cerrar sesión</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>

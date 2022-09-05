<header class="header header-sticky mb-4">
    <div class="container-fluid">
        <button class="header-toggler px-md-0 me-md-3" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">z<svg class="icon icon-lg">

                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
            </svg>
        </button><a class="header-brand d-md-none" href="#">
        </a>
        <ul class="header-nav d-none d-md-flex">
            @role('aprendiz')
            <li class="nav-item"><a class="nav-link" href="#">Esto lo ve el aprendiz</a></li>
            @endrole
            @role('instructor')
            <li class="nav-item"><a class="nav-link" href="#">Esto lo ve el teacher</a></li>
            @endrole
        </ul>
        <ul class="header-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="#">
                    <svg class="icon icon-lg">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
                    </svg></a></li>
            <li class="nav-item"><a class="nav-link" href="#">
                    <svg class="icon icon-lg">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-list-rich"></use>
                    </svg></a></li>
            <li class="nav-item"><a class="nav-link" href="#">
                    <svg class="icon icon-lg">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
                    </svg></a></li>
        </ul>
        <ul class="header-nav ms-3">
            <li class="nav-item dropdown"><a class="nav-link py-0" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <div class="avatar avatar-md"><img class="avatar-img" src="https://tif-picture.herokuapp.com/svg?name={{ Auth::user()->name }}"></div>
                {{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu dropdown-menu-end pt-0">
                    <div class="dropdown-header bg-light py-2">
                        <div class="fw-semibold">Cuenta</div>
                    </div>
                    <a class="dropdown-item" href="#">
                        <svg class="icon me-2">
                            Logo
                        </svg> Perfil
                    </a>

                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" onclick="document.getElementById('form-logout').submit()">
                        <svg class="icon me-2">
                           logo
                        </svg>
                        Cerrar sesion</a>
                </div>
            </li>
        </ul>
    </div>
    <form action="{{ route('logout') }}" method="post" id="form-logout">
        @csrf
    </form>
    <!-- Migas de pan-->
    <!--<div class="header-divider"></div>
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-0 ms-2">
                <li class="breadcrumb-item">
                    <a href="#">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="#">Components</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="#">Buttons</a>
                </li>
                <li class="breadcrumb-item active"><span>Buttons</span></li>
            </ol>
        </nav>
    </div> -->
</header>

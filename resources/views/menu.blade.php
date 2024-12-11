<style>
    /* Reset de márgenes y padding */
    body {
        font-family: 'Roboto', sans-serif;
        margin: 0;
        padding: 0;
    }

    /* Estilos del sidebar */
    .sidebar {
        width: 250px;
        background: linear-gradient(135deg, #6a11cb, #2575fc);
        /* Fondo degradado */
        color: white;
        height: 100vh;
        padding-top: 30px;
        position: fixed;
        display: flex;
        flex-direction: column;
        box-shadow: 4px 0px 15px rgba(0, 0, 0, 0.15);
        /* Sombra más suave */
        transition: all 0.3s ease;
        border-top-right-radius: 15px;
        border-bottom-right-radius: 15px;
    }

    /* Información de usuario */
    .user-info {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 20px;
        border-bottom: 1px solid #f1f1f1;
        text-align: center;
        margin-bottom: 20px;
    }

    .user-avatar {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        margin-bottom: 10px;
        object-fit: cover;
        border: 2px solid #fff;
    }

    .user-name {
        font-size: 18px;
        font-weight: bold;
        color: white;
        margin-top: 5px;
    }

    /* Estilos de los enlaces principales del menú */
    .sidebar a {
        color: white;
        padding: 12px 20px;
        text-decoration: none;
        font-size: 18px;
        display: flex;
        align-items: center;
        border-bottom: 1px solid #f1f1f1;
        margin-bottom: 10px;
        border-radius: 8px;
        transition: all 0.3s ease;
    }

    .sidebar a:hover {
        background-color: #4c3c9b;
        /* Color al pasar el ratón */
        padding-left: 25px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
    }

    /* Estilo de los íconos dentro de los enlaces */
    .sidebar a i {
        margin-right: 15px;
        font-size: 20px;
    }

    /* Estilo del submenú */
    .submenu-toggle {
        cursor: pointer;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 12px 20px;
        border-radius: 8px;
        transition: background-color 0.3s ease;
        font-size: 16px;
    }

    .submenu-toggle:hover {
        background-color: #4c3c9b;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
    }

    /* Submenú */
    .submenu {
        display: none;
        padding-left: 20px;
        margin-top: 10px;
    }

    .submenu li a {
        font-size: 16px;
        color: #f1f1f1;
        padding: 10px 20px;
        display: block;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .submenu li a:hover {
        background-color: #5a0d93;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    }

    .submenu.active {
        display: block;
    }

    .submenu li a i {
        margin-right: 10px;
        font-size: 16px;
    }

    /* Estilo para los submenús dentro de submenús (nivel de profundidad) */
    .submenu-item:hover>.submenu {
        display: block;
    }

    .submenu-toggle {
        cursor: pointer;
    }

    /* Responsividad */
    @media (max-width: 768px) {
        .sidebar {
            width: 100%;
            height: auto;
            position: relative;
            border-radius: 0;
        }

        .submenu {
            padding-left: 10px;
        }
    }
</style>

<div class="sidebar">

    <a href="{{ route('dashboard') }}">
        <i class="fas fa-tachometer-alt"></i> Dashboard
    </a>


    <a href="#" class="submenu-toggle">
        <i class="fas fa-users"></i>Beneficiarios <i class="fas fa-chevron-down"></i>
    </a>
    <ul class="submenu">
        <li><a href="{{-- {{ route('consulta_beneficiarios') }} --}}"><i class="fas fa-search"></i> Consulta Beneficiarios</a>
        </li>
        <li><a href="{{-- {{ route('carga_masiva') }} --}}"><i class="fas fa-upload"></i> Carga Masiva</a></li>
    </ul>


    <a href="#" class="submenu-toggle">
        <i class="fas fa-calendar-alt"></i>Eventos <i class="fas fa-chevron-down"></i>
    </a>
    <ul class="submenu">
        <li><a href="{{ route('alta_evento') }}"><i class="fas fa-plus-circle"></i> Alta Evento</a></li>
        <li><a href="{{ route('consulta_eventos') }}"><i class="fas fa-search"></i> Consulta Eventos</a></li>
    </ul>



    <a href="#" class="submenu-toggle">
        <i class="fas fa-file-alt"></i>Formularios <i class="fas fa-chevron-down"></i>
    </a>
    <ul class="submenu">
        <li><a href="{{-- {{ route('tablero_control') }} --}}"><i class="fas fa-tachometer-alt"></i> Tablero de Control</a>
        </li>
        <li><a href="{{-- {{ route('mapa') }} --}}"><i class="fas fa-map"></i> Mapa</a></li>
        <li><a href="{{-- {{ route('carga_masiva_formularios') }} --}}"><i class="fas fa-upload"></i> Carga Masiva</a></li>
    </ul>


    <a href="#" class="submenu-toggle">
        <i class="fas fa-tasks"></i>Gestión <i class="fas fa-chevron-down"></i>
    </a>
    <ul class="submenu">
        <li><a href="{{-- {{ route('alta_gestion') }} --}}"><i class="fas fa-plus-circle"></i> Alta de Gestión</a></li>
        <li><a href="{{-- {{ route('consulta_gestion') }} --}}"><i class="fas fa-search"></i> Consulta de Gestión</a></li>
        <li><a href="{{-- {{ route('mapa_gestion') }} --}}"><i class="fas fa-map"></i> Mapa</a></li>
    </ul>


    <a href="#" class="submenu-toggle">
        <i class="fas fa-users-cog"></i>Ciudadano <i class="fas fa-chevron-down"></i>
    </a>
    <ul class="submenu">
        <li><a href="{{ route('alta_ciudadano') }}"><i class="fas fa-plus-circle"></i> Alta de Ciudadano</a></li>
        <li><a href="{{ route('consulta_ciudadano') }}"><i class="fas fa-search"></i> Consulta de Ciudadano</a></li>
    </ul>


    <a href="#" class="submenu-toggle">
        <i class="fas fa-comment-dots"></i>Mensajería <i class="fas fa-chevron-down"></i>
    </a>
    <ul class="submenu">
        <li><a href="{{ route('sms') }}"><i class="fas fa-mobile-alt"></i> SMS</a></li>
        <li><a href="{{ route('wa') }}"><i class="fas fa-mobile-alt"></i> WhatsApp</a></li>
        <li><a href="{{ route('email') }}"><i class="fas fa-envelope"></i> Correo Electrónico</a></li>
    </ul>


    <a href="#" class="submenu-toggle">
        <i class="fas fa-poll"></i> Encuestas <i class="fas fa-chevron-down"></i>
    </a>
    <ul class="submenu">
        <li><a href="{{ route('sms') }}"><i class="fas fa-chart-bar"></i> Encuestas</a></li>
        <li><a href="{{ route('wa') }}"><i class="fas fa-poll"></i> Encuestas por Estado</a></li>
    </ul>

    <a href="#" class="submenu-toggle">
        <i class="fas fa-search"></i> Detección <i class="fas fa-chevron-down"></i>
    </a>
    <ul class="submenu">
        <li class="submenu-item">
            <a href="#"><i class="fas fa-user-check"></i> Simpatizantes <i class="fas fa-chevron-right"></i></a>
            <ul class="submenu">
                <li><a href="{{ route('alta_simpatizante') }}"><i class="fas fa-plus-circle"></i> Alta Simpatizante</a>
                </li>
                <li><a href="{{ route('consulta_simpatizantes') }}"><i class="fas fa-search"></i> Consulta Simpatizante</a></li>
            </ul>
        </li>

        <li class="submenu-item">
            <a href="#"><i class="fas fa-users"></i> Votantes <i class="fas fa-chevron-right"></i></a>
            <ul class="submenu">
                <li><a href="{{ route('alta_votante') }}"><i class="fas fa-plus-circle"></i> Alta Votante</a></li>
                <li><a href="{{ route('consulta_votantes') }}"><i class="fas fa-search"></i> Consulta Votante</a></li>
            </ul>
        </li>
    </ul>



    <a href="#" class="submenu-toggle">
        <i class="fas fa-vote-yea"></i> Electoral <i class="fas fa-chevron-down"></i>
    </a>
    <ul class="submenu">
        <li><a href="{{ route('sms') }}"><i class="fas fa-vote-yea"></i> Representantes de Casilla</a></li>
        <li><a href="{{ route('wa') }}"><i class="fas fa-gavel"></i> Jurídico</a></li>
    </ul>



    <a href="{{ route('logout') }}"
        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <i class="fas fa-sign-out-alt"></i> Cerrar sesión
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</div>

<script>
    const submenuToggles = document.querySelectorAll('.submenu-toggle');
    submenuToggles.forEach(toggle => {
        toggle.addEventListener('click', (e) => {
            const submenu = toggle.nextElementSibling;
            submenu.classList.toggle('active');
            document.querySelectorAll('.submenu').forEach(item => {
                if (item !== submenu) {
                    item.classList.remove('active');
                }
            });
        });
    });
</script>

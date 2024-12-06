<style>
    body {
        font-family: 'Roboto', sans-serif;
    }

    .sidebar {
        width: 250px;
        background-color: #8b29fa;
        color: white;
        height: 100vh;
        padding-top: 30px;
        position: fixed;
        display: flex;
        flex-direction: column;
        box-shadow: 4px 0px 10px rgba(0, 0, 0, 0.1);
    }

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

    .sidebar a {
        color: white;
        padding: 15px 20px;
        text-decoration: none;
        font-size: 16px;
        display: flex;
        align-items: center;
        border-bottom: 1px solid #f1f1f1;
        margin-bottom: 10px;
        border-radius: 5px;
        transition: all 0.3s ease;
    }

    .sidebar a:hover {
        background-color: #6a11cb;
        padding-left: 25px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
    }

    .sidebar a i {
        margin-right: 15px;
        font-size: 18px;
    }

    .submenu-toggle {
        cursor: pointer;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .submenu {
        display: none;
        list-style: none;
        padding-left: 20px;
        margin-top: 10px;
    }

    .submenu li a {
        font-size: 16px;
        color: #f1f1f1;
        padding: 10px 20px;
        display: block;
        border-radius: 4px;
        transition: background-color 0.3s ease;
    }

    .submenu li a:hover {
        background-color: #6a11cb;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    }

    .submenu.active {
        display: block;
    }

    .submenu li a i {
        margin-right: 8px;
        font-size: 16px;
    }

    .submenu li a:hover {
        background-color: #5a0d93;
    }
</style>

<div class="sidebar">

    <a href="{{ route('dashboard') }}">
        <i class="fas fa-tachometer-alt"></i> Dashboard
    </a>

    <a href="#" class="submenu-toggle">
        <i class="fas fa-cogs"></i> SAGAC <i class="fas fa-chevron-down"></i>
    </a>
    <ul class="submenu">
        <li><a href=""><i class="fas fa-users"></i> Beneficiarios</a></li>
        <li><a href=""><i class="fas fa-calendar-alt"></i> Eventos</a></li>
        <li><a href=""><i class="fas fa-file-alt"></i> Formularios</a></li>
        <li><a href=""><i class="fas fa-tasks"></i> Gestión</a></li>
    </ul>

    <a href="#" class="submenu-toggle">
        <i class="fas fa-users-cog"></i> SIGE <i class="fas fa-chevron-down"></i>
    </a>
    <ul class="submenu">
        <li><a href=""><i class="fas fa-search"></i> Consulta Ciudadanos</a></li>
        <li><a href=""><i class="fas fa-comment-dots"></i> Mensajería</a></li>
        <li><a href=""><i class="fas fa-mobile-alt"></i> SMS</a></li>
        <li><a href=""><i class="fas fa-mobile-alt"></i> WA</a></li>
        <li><a href=""><i class="fas fa-envelope"></i> Mail</a></li>
    </ul>

    <a href="#" class="submenu-toggle">
        <i class="fas fa-poll"></i> DIA D <i class="fas fa-chevron-down"></i>
    </a>
    <ul class="submenu">
        <li><a href=""><i class="fas fa-chart-bar"></i> Encuestas</a></li>
    </ul>

    <a href="#" class="submenu-toggle">
        <i class="fas fa-network-wired"></i> SISTEMA PAN<i class="fas fa-chevron-down"></i>
    </a>
    <ul class="submenu">
        <li><a href=""><i class="fas fa-search"></i> Detección</a></li>
        <li><a href=""><i class="fas fa-vote-yea"></i> Electoral</a></li>
    </ul>

    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
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

            if (submenu.classList.contains('active')) {
                submenu.classList.remove('active');
            } else {
                submenu.classList.add('active');
            }

            document.querySelectorAll('.submenu').forEach(item => {
                if (item !== submenu) {
                    item.classList.remove('active');
                }
            });
        });
    });
</script>

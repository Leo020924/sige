<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/locales/es.js"></script>
    <title>SIGE MÉXICO</title>
    <style>
        .sidebar {
            width: 250px;
            background-color: #2c3e50;
            color: white;
            height: 100vh;
            padding-top: 30px;
            position: fixed;
            transition: width 0.3s ease;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .sidebar h3 {
            text-align: center;
            font-size: 26px;
            font-weight: 500;
            margin-bottom: 40px;
            color: #ecf0f1;
        }

        .sidebar a {
            color: white;
            padding: 15px;
            display: block;
            text-decoration: none;
            font-size: 18px;
            border-bottom: 1px solid #34495e;
            transition: background-color 0.3s ease, padding-left 0.3s;
        }

        .sidebar a:hover {
            background-color: #3498db;
            padding-left: 25px;
        }

        /* Contenido principal */
        .main-content {
            margin-left: 250px;
            padding: 0px;
            width: calc(100% - 250px);
            background-color: #f5f7fa;
            display: flex;
            flex-direction: column;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
        }

        .table-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 50px;
        }

        .table {
            width: 70%;
            margin-left: 320px;
            border-collapse: collapse;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .table thead {
            background-color: #6a11cb;
            color: #fff;
        }

        .table thead th {
            padding: 12px;
            text-align: left;
            font-size: 16px;
        }

        .table tbody td {
            padding: 12px;
            text-align: left;
            font-size: 14px;
        }

        .table tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .table tbody tr:hover {
            background-color: #f1f1f1;
        }

        .table td,
        .table th {
            border: 1px solid #ddd;
        }

        .btn {
            padding: 6px 12px;
            margin-right: 5px;
            font-size: 14px;
            border-radius: 4px;
            text-decoration: none;
            color: white;
        }

        .btn-info {
            background-color: #17a2b8;
        }

        .btn-warning {
            background-color: #ffc107;
        }

        .btn-danger {
            background-color: #dc3545;
        }

        .btn:hover {
            opacity: 0.8;
        }
    </style>
</head>

<body>

    @include('menu')


    <div class="container">
        <h2 style="text-align: center">Consulta de Simpatizantes</h2>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>CURP</th>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Estado de Nacimiento</th>
                    <th>Genero</th>
                    <th>Clave de Elector</th>
                    <th>Vigencia del INE</th>
                    <th>Telefono</th>
                    <th>Correo Electronico</th>
                    <th>Código Postal</th>
                    <th>Colonia</th>
                    <th>Calle</th>
                    <th>Num. Interno</th>
                    <th>Num. Externo</th>
                    <th>Sección</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($simpatizantes as $simpatizante)
                    <tr>
                        <td>{{ $simpatizante->id }}</td>
                        <td>{{ $simpatizante->curp }}</td>
                        <td>{{ $simpatizante->nombre }}</td>
                        <td>{{ $simpatizante->paterno }}</td>
                        <td>{{ $simpatizante->materno }}</td>
                        <td>{{ $simpatizante->estado_nacimiento }}</td>
                        <td>{{ $simpatizante->fecha_nacimiento }}</td>
                        <td>{{ $simpatizante->genero }}</td>
                        <td>{{ $simpatizante->clave_elector }}</td>
                        <td>{{ $simpatizante->vigencia_ine }}</td>
                        <td>{{ $simpatizante->telefono }}</td>
                        <td>{{ $simpatizante->correo }}</td>
                        <td>{{ $simpatizante->cp }}</td>
                        <td>{{ $simpatizante->colonia }}</td>
                        <td>{{ $simpatizante->calle }}</td>
                        <td>{{ $simpatizante->externo }}</td>
                        <td>{{ $simpatizante->interno }}</td>
                        <td>{{ $simpatizante->seccion }}</td>
                        <td>
                            <!-- Acciones como Ver, Editar o Eliminar -->
                            <a href="{{-- {{ route('eventos.show', $evento->id) }} --}}" class="btn btn-info">Ver</a>
                            <a href="{{-- {{ route('eventos.edit', $evento->id) }} --}}" class="btn btn-warning">Editar</a>
                            <form action="{{-- {{ route('eventos.destroy', $evento->id) }} --}}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>

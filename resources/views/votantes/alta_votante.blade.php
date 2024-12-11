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
            padding: 30px;
            width: calc(100% - 250px);
            background-color: #f5f7fa;
            display: flex;
            flex-direction: column;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
        }

        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f6f9;
        }

        .container {
            width: 40%;
            margin: 0px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #6a11cb;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-size: 16px;
            font-weight: bold;
            color: #333;
        }

        input, select {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #6a11cb;
            color: white;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #5a0d93;
        }

        .alert {
            color: green;
            font-size: 16px;
            padding: 10px;
            background-color: #e7f7e6;
            border-radius: 5px;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>

    @include('menu')


    <div class="container">
        <h2>Alta de Votantes</h2>


        <form action="{{ route('alta_votantes.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="curp">CURP</label>
                <input type="text" id="curp" name="curp" required value="{{ old('curp') }}">
                @error('curp')
                    <div style="color: red; font-size: 14px;">{{ $message }}</div>
                @enderror
            </div>


            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" required value="{{ old('nombre') }}">
                @error('nombre')
                    <div style="color: red; font-size: 14px;">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="paterno">Apellido Paterno</label>
                <input type="text" id="paterno" name="paterno" required
                    value="{{ old('paterno') }}">
                @error('paterno')
                    <div style="color: red; font-size: 14px;">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="materno">Apellido Materno</label>
                <input type="text" id="materno" name="materno" required
                    value="{{ old('materno') }}">
                @error('materno')
                    <div style="color: red; font-size: 14px;">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="estado_nacimiento">Estado de Nacimiento</label>
                <input type="text" id="estado_nacimiento" name="estado_nacimiento" required
                    value="{{ old('estado_nacimiento') }}">
                @error('estado_nacimiento')
                    <div style="color: red; font-size: 14px;">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="fecha_nacimiento">Fecha de Nacimiento</label>
                <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required
                    value="{{ old('fecha_nacimiento') }}">
                @error('fecha_nacimiento')
                    <div style="color: red; font-size: 14px;">{{ $message }}</div>
                @enderror
            </div>


            <div class="form-group">
                <label for="genero">Género</label>
                <select id="genero" name="genero" required>
                    <option value="masculino" {{ old('genero') == 'masculino' ? 'selected' : '' }}>Masculino</option>
                    <option value="femenino" {{ old('genero') == 'femenino' ? 'selected' : '' }}>Femenino</option>
                    <option value="otro" {{ old('genero') == 'otro' ? 'selected' : '' }}>Otro</option>
                </select>
                @error('genero')
                    <div style="color: red; font-size: 14px;">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="clave_elector">Clave Elector</label>
                <input type="text" id="clave_elector" name="clave_elector" required
                    value="{{ old('clave_elector') }}">
                @error('clave_elector')
                    <div style="color: red; font-size: 14px;">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="vigencia_ine">Vigencia INE</label>
                <input type="text" id="vigencia_ine" name="vigencia_ine" required
                    value="{{ old('vigencia_ine') }}">
                @error('vigencia_ine')
                    <div style="color: red; font-size: 14px;">{{ $message }}</div>
                @enderror
            </div>


            <div class="form-group">
                <label for="telefono">Teléfono</label>
                <input type="text" id="telefono" name="telefono" value="{{ old('telefono') }}">
                @error('telefono')
                    <div style="color: red; font-size: 14px;">{{ $message }}</div>
                @enderror
            </div>


            <div class="form-group">
                <label for="correo">Correo Electrónico</label>
                <input type="email" id="correo" name="correo" required value="{{ old('correo') }}">
                @error('correo')
                    <div style="color: red; font-size: 14px;">{{ $message }}</div>
                @enderror
            </div>


            <div class="form-group">
                <label for="cp">Código Postal</label>
                <input type="text" id="cp" name="cp" required value="{{ old('cp') }}">
                @error('cp')
                    <div style="color: red; font-size: 14px;">{{ $message }}</div>
                @enderror
            </div>

           

            <div class="form-group">
                <label for="colonia">Colonia</label>
                <input type="text" id="colonia" name="colonia" required value="{{ old('colonia') }}">
                @error('colonia')
                    <div style="color: red; font-size: 14px;">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="calle">Calle</label>
                <input type="text" id="calle" name="calle" required value="{{ old('calle') }}">
                @error('calle')
                    <div style="color: red; font-size: 14px;">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="externo">Número Externo</label>
                <input type="text" id="externo" name="externo" value="{{ old('externo') }}">
                @error('externo')
                    <div style="color: red; font-size: 14px;">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="interno">Número Interno</label>
                <input type="text" id="interno" name="interno" value="{{ old('interno') }}">
                @error('interno')
                    <div style="color: red; font-size: 14px;">{{ $message }}</div>
                @enderror
            </div>           
            

            <div class="form-group">
                <label for="seccion">Sección</label>
                <input type="text" id="seccion" name="seccion" value="{{ old('seccion') }}">
                @error('seccion')
                    <div style="color: red; font-size: 14px;">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <input type="submit" value="Registrar Simpatizante">
            </div>
        </form>
    </div>


</body>

</html>

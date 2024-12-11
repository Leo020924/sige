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
        /* Estilo para el sidebar */
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

        .main-content {
            margin-left: 250px; 
            padding: 20px;
        }

        .form-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: calc(100vh - 60px); 
        }

        .form-wrapper {
            width: 100%;
            max-width: 800px; 
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        }

        .form-wrapper input,
        .form-wrapper textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ccc;
            background-color: #f4f4f4;
        }

        .form-wrapper label {
            font-size: 14px;
            font-weight: bold;
            color: #004aad;
        }

        .form-wrapper input[type="date"] {
            padding: 8px;
        }

        .form-wrapper button {
            background-color: #3498db;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .form-wrapper button:hover {
            background-color: #2980b9;
        }
    </style>
</head>

<body>

    @include('menu')

    <div class="main-content">
        <div class="py-4 flex justify-between items-center">
            <h2 style="text-align: center" class="titulo_general flex items-center">
                Alta de Eventos
            </h2>
           
        </div>

        <!-- Contenedor principal para centrar el formulario -->
        <div class="form-container">
            <div class="form-wrapper">
                <form id="eventForm" action="{{ route('eventos.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-4">
                        <label for="nombre_evento">Nombre del Evento</label>
                        <input type="text" name="nombre_evento" id="nombre_evento" class="block">
                    </div>


                    <div class="mb-4">
                        <label for="lugar">Lugar del Evento</label>
                        <input type="text" name="lugar" id="lugar" class="block">
                    </div>

                    <div class="mb-4">
                        <label for="correo">Correo</label>
                        <input type="text" name="correo" id="correo" class="block">
                    </div>

                    <div class="mb-4">
                        <label for="colonia">Colonia</label>
                        <input type="text" name="colonia" id="colonia" class="block">
                    </div>

                    <div class="mb-4">
                        <label for="seccion">Sección</label>
                        <input type="text" name="seccion" id="seccion" class="block">
                    </div>


                    <div class="mb-4">
                        <label for="evento_actividad">¿Qué se realizará en el evento?</label>
                        <textarea name="evento_actividad" id="evento_actividad" class="block"></textarea>
                    </div>

                    <div class="mb-4">
                        <label for="responsable">Responsable del Evento</label>
                        <input type="text" name="responsable" id="responsable" class="block">
                    </div>

                    <div class="mb-4">
                        <label for="fecha_evento">Fecha del Evento</label>
                        <input type="date" name="fecha_evento" id="fecha_evento" class="block">
                    </div>

                
                    <div class="mb-4">
                        <button type="submit">Guardar Evento</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</body>

</html>

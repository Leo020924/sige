<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/locales/es.js"></script>
    <title>SIGE MÉXICO</title>
    <style>
        .message-section {
            width: 1500px;
            margin-left: 320px;
            padding: 20px;
            background-color: #f9f9f9;
            margin-top: 20px;
            border-radius: 8px;
        }

        .conversations-section {
            width: 1700px;
            margin-left: 320px;
            padding: 20px;
            background-color: #fff;
            margin-top: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            
        }

        h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border-radius: 5px;
            border: 1px solid #ddd;
        }

        textarea.form-control {
            resize: vertical;
        }

        .btn-primary {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .table {
            width: 80%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .table th,
        .table td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .table th {
            background-color: #f1f1f1;
        }

        .table tbody tr:hover {
            background-color: #f9f9f9;
        }

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
    </style>
</head>

<body>

    @include('menu')



    <div class="message-section">
        <h3>Enviar Correo</h3>
        <form id="sendMessageForm">
            <div class="form-group">
                <label for="recipient">Destinatario</label>
                <input type="text" id="recipient" name="recipient" class="form-control"
                    placeholder="52xxxxxxxxxxx">
            </div>

            <div class="form-group">
                <label for="message">Mensaje</label>
                <textarea id="message" name="message" class="form-control" rows="4" placeholder="Escriba su mensaje"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>



    <div class="conversations-section">
        <h3>Conversaciones</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>Número</th>
                    <th>Último Mensaje</th>
                    <th>Estatus</th>
                    <th>Fecha</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>777777777</td>
                    <td>Hola, ¿cómo estás?</td>
                    <td>Enviado</td>
                    <td>2024-12-09 14:30</td>
                </tr>
                <tr>
                    <td>777777777</td>
                    <td>Reunión mañana a las 10 AM</td>
                    <td>Leído</td>
                    <td>2024-12-09 10:15</td>
                </tr>
                <tr>
                    <td>777777777</td>
                    <td>¿Me puedes enviar el informe?</td>
                    <td>Enviado</td>
                    <td>2024-12-08 16:45</td>
                </tr>
            </tbody>
        </table>
    </div>


    <div class="conversations-section">
        <h3>Reportes</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>Mensaje</th>
                    <th>Cantidad</th>
                   
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Hola, ¿cómo estás?</td>
                    <td>20</td>
                </tr>
                <tr>
                    <td>Reunión mañana a las 10 AM</td>
                    <td>20</td>
                </tr>
                <tr>           
                    <td>¿Me puedes enviar el informe?</td>                  
                    <td>45</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>

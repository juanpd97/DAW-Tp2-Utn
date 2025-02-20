<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
        }
        .welcome-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
            padding: 2rem;
            margin-top: 2rem;
            transition: transform 0.3s ease;
        }
        
        h1 {
            color: #2c3e50;
            font-weight: 600;
        }
        .btn {
            padding: 10px 25px;
            border-radius: 25px;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
        }
        .btn-primary {
            background: #4e73df;
            border: none;
            box-shadow: 0 4px 15px rgba(78,115,223,0.3);
        }
        .btn-secondary {
            background: #858796;
            border: none;
            box-shadow: 0 4px 15px rgba(133,135,150,0.3);
        }
        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 18px rgba(0,0,0,0.2);
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="welcome-card text-center">
                    <h1 class="display-4 mb-4">Bienvenido</h1>
                    <h4>Tp-2: Desarrollo de solución en Laravel Framework</h4>
                    <p>DAW 2024</p>
                    <div class="mt-4">
                        <a href="/buscarCliente" class="btn btn-primary me-3">Buscar cliente</a>
                        <a href="/comprobantesEmitidos" class="btn btn-secondary">Buscar comprobantes</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
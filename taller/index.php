<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Service</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h2 class="mb-0 text-center">Consumo de Recursos Web</h2>
            </div>
            <div class="card-body">
                <form action="webservice.php" method="post">
                    <div class="mb-3">
                        <label for="iNombre" class="form-label">Selecciona el país del cual quieres conocer su bandera:</label>
                        <select name="iNombre" id="iNombre" class="form-select">
                            <option value="mx">México</option>
                            <option value="us">USA</option>
                            <option value="co">Colombia</option>
                            <option value="br">Brasil</option>
                            <option value="ve">Venezuela</option>
                        </select>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Mostrar Bandera</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

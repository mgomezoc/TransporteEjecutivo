<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->renderSection('title') ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <!-- Aquí va el menú de navegación -->
    </header>
    <main class="container">
        <?= $this->renderSection('content') ?>
    </main>
    <footer>
        <!-- Aquí va el pie de página -->
    </footer>
</body>

</html>
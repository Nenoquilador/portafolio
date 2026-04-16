<?php
// Imagina que esto viene de tu base de datos SQL más adelante
$proyectos = [
    [
        "titulo" => "Sistema de Biblioteca",
        "desc" => "Proyecto final desarrollado en PHP y MySQL.",
        "archivo" => "sistema_biblioteca.pdf",
        "tag" => "Backend"
    ],
    [
        "titulo" => "Investigación Smishing",
        "desc" => "Documento académico sobre ciberseguridad bancaria.",
        "archivo" => "smishing_doc.pdf",
        "tag" => "Seguridad"
    ]
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portafolio | Ernesto Gómez</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <header>
        <h1>Mi Portafolio de Evidencias</h1>
        <p>Estudiante de Ingeniería en Justo Sierra</p>
    </header>

    <main class="grid">
        <?php foreach ($proyectos as $p): ?>
            <div class="card">
                <h3><?php echo $p['titulo']; ?></h3>
                <span class="badge"><?php echo $p['tag']; ?></span>
                <p><?php echo $p['desc']; ?></p>
                <a href="/docs/<?php echo $p['archivo']; ?>" target="_blank" class="btn">Ver Documento</a>
            </div>
        <?php endforeach; ?>
    </main>
</body>
</html>
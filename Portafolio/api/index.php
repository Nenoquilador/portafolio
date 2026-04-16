<?php
// Configuración de tus documentos basada en tu carpeta
$proyectos = [
    [
        "titulo" => "Certificado de Finalización",
        "desc" => "Certificación oficial de aprovechamiento académico.",
        "archivo" => "Certificado.jpg",
        "tag" => "Certificación"
    ],
    [
        "titulo" => "Tabla Comparativa de Antivirus",
        "desc" => "Análisis técnico de soluciones de seguridad informática y protección de datos.",
        "archivo" => "TABLA_DE_ANTIVIRUS.pdf",
        "tag" => "Ciberseguridad"
    ],
    [
        "titulo" => "Interacción e Investigación con IA",
        "desc" => "Memoria de consultas y procesos de aprendizaje asistidos por inteligencia artificial.",
        "archivo" => "Preguntas_a_la_ia.pdf",
        "tag" => "Investigación"
    ],
    [
        "titulo" => "Documento de Soporte Académico",
        "desc" => "Material complementario para la formación profesional.",
        "archivo" => "negro.pdf",
        "tag" => "Académico"
    ]
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portafolio Profesional | Ernesto Gómez Romero</title>
    <style>
        /* Estilos integrados para que no falle al cargar archivos externos */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 900px;
            margin: 0 auto;
            padding: 40px 20px;
            background-color: #f8f9fa;
        }
        header {
            border-bottom: 3px solid #004488;
            margin-bottom: 40px;
            padding-bottom: 20px;
        }
        h1 { color: #004488; margin: 0; }
        .subtitle { color: #666; font-size: 1.1em; }
        
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
        }
        .card {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 25px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            transition: box-shadow 0.3s ease;
        }
        .card:hover { box-shadow: 0 5px 15px rgba(0,0,0,0.1); }
        .tag {
            background: #e1ecf4;
            color: #39739d;
            padding: 4px 10px;
            border-radius: 4px;
            font-size: 0.85em;
            font-weight: bold;
            display: inline-block;
            margin-bottom: 10px;
        }
        .card h3 { margin-top: 0; color: #222; }
        .btn {
            background-color: #004488;
            color: white;
            text-decoration: none;
            padding: 10px 15px;
            border-radius: 5px;
            text-align: center;
            font-weight: bold;
            margin-top: 20px;
        }
        .btn:hover { background-color: #002d5a; }
        footer { margin-top: 50px; text-align: center; font-size: 0.9em; color: #888; }
    </style>
</head>
<body>

<header>
    <h1>Ernesto Gómez Romero</h1>
    <p class="subtitle">Portafolio de Evidencias Digitales | Ingeniería en Sistemas</p>
</header>

<div class="grid">
    <?php foreach ($proyectos as $p): ?>
    <div class="card">
        <div>
            <span class="tag"><?php echo $p['tag']; ?></span>
            <h3><?php echo $p['titulo']; ?></h3>
            <p><?php echo $p['desc']; ?></p>
        </div>
        <a href="/docs/<?php echo $p['archivo']; ?>" target="_blank" class="btn">Visualizar Evidencia</a>
    </div>
    <?php endforeach; ?>
</div>

<footer>
    <p>&copy; <?php echo date("Y"); ?> - Universidad Justo Sierra</p>
</footer>

</body>
</html>

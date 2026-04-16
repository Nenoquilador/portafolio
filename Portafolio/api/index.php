<?php
// Listado de archivos actualizado según tu última captura
$proyectos = [
    [
        "titulo" => "Proyecto Argos: Defensa EDR",
        "desc" => "Implementación y análisis de soluciones Endpoint Detection and Response.",
        "archivo" => "Proyecto_Argos_Defensa_EDR.pdf",
        "tag" => "Seguridad Avanzada"
    ],
    [
        "titulo" => "Caso de Negocio",
        "desc" => "Análisis de viabilidad y estructuración de proyectos tecnológicos.",
        "archivo" => "caso_de_negocio.pdf",
        "tag" => "Gestión"
    ],
    [
        "titulo" => "Tabla Comparativa de Antivirus",
        "desc" => "Evaluación detallada de software de protección contra malware.",
        "archivo" => "TABLA_DE_ANTIVIRUS.pdf",
        "tag" => "Ciberseguridad"
    ],
    [
        "titulo" => "Interacción con IA",
        "desc" => "Investigación sobre el uso de modelos de lenguaje en la educación.",
        "archivo" => "Preguntas_a_la_ia.pdf",
        "tag" => "Innovación"
    ],
    [
        "titulo" => "Certificado Académico",
        "desc" => "Acreditación de competencias y logros obtenidos.",
        "archivo" => "Certificado.jpg",
        "tag" => "Logro"
    ],
    [
        "titulo" => "Documento Complementario",
        "desc" => "Recursos adicionales de soporte para la materia.",
        "archivo" => "negro.pdf",
        "tag" => "Material"
    ]
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ernesto Gómez | Portafolio Digital</title>
    <style>
        :root {
            --primary: #6366f1; /* Morado/Azul juvenil */
            --dark: #0f172a;    /* Fondo oscuro profesional */
            --gray: #64748b;
            --bg: #f8fafc;
        }

        body {
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
            background-color: var(--bg);
            color: var(--dark);
            margin: 0;
            padding: 0;
        }

        header {
            background: var(--dark);
            color: white;
            padding: 80px 20px;
            text-align: center;
            clip-path: polygon(0 0, 100% 0, 100% 85%, 0% 100%);
        }

        header h1 {
            font-size: 2.5rem;
            margin: 0;
            letter-spacing: -1px;
        }

        header p {
            color: #94a3b8;
            font-size: 1.1rem;
            margin-top: 10px;
        }

        .container {
            max-width: 1100px;
            margin: -40px auto 60px;
            padding: 0 20px;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 25px;
        }

        .card {
            background: white;
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 10px 15px -3px rgba(0,0,0,0.05);
            border: 1px solid rgba(226, 232, 240, 0.8);
            display: flex;
            flex-direction: column;
            transition: all 0.3s ease;
        }

        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 25px -5px rgba(99, 102, 241, 0.1);
            border-color: var(--primary);
        }

        .tag {
            font-size: 0.75rem;
            font-weight: 700;
            text-transform: uppercase;
            color: var(--primary);
            background: #eef2ff;
            padding: 5px 12px;
            border-radius: 999px;
            display: inline-block;
            margin-bottom: 15px;
        }

        .card h3 {
            margin: 0 0 12px 0;
            font-size: 1.4rem;
        }

        .card p {
            color: var(--gray);
            font-size: 0.95rem;
            line-height: 1.5;
            flex-grow: 1;
        }

        .btn {
            background: var(--dark);
            color: white;
            text-decoration: none;
            padding: 12px;
            border-radius: 12px;
            text-align: center;
            font-weight: 600;
            margin-top: 20px;
            transition: background 0.2s;
        }

        .btn:hover {
            background: var(--primary);
        }

        footer {
            text-align: center;
            padding: 40px;
            color: var(--gray);
            font-size: 0.9rem;
        }

        @media (max-width: 600px) {
            header h1 { font-size: 1.8rem; }
        }
    </style>
</head>
<body>

<header>
    <h1>Ernesto Gómez Romero</h1>
    <p>Ingeniería en Sistemas | Universidad Justo Sierra</p>
</header>

<div class="container">
    <div class="grid">
        <?php foreach ($proyectos as $p): ?>
        <div class="card">
            <div>
                <span class="tag"><?php echo $p['tag']; ?></span>
                <h3><?php echo $p['titulo']; ?></h3>
                <p><?php echo $p['desc']; ?></p>
            </div>
            <a href="/docs/<?php echo $p['archivo']; ?>" target="_blank" class="btn">Abrir Evidencia</a>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<footer>
    <p>Proyecto desarrollado para la materia de Ciberseguridad &bull; 2026</p>
</footer>

</body>
</html>

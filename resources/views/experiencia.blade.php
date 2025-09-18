<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Experiencia Laboral — [TU NOMBRE]</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">
  <style>
    :root{
      --bg-1: #0f172a;
      --accent-1: #f59e0b;
      --accent-2: #d97706;
      --accent-3: #92400e;
      --glass: rgba(255,255,255,0.07);
      --card-bg: rgba(255,255,255,0.03);
      --text: #e6eef8;
      --muted: #9aa6bf;
      --radius: 18px;
    }

    *{box-sizing:border-box}
    html,body{height:100%;margin:0}
    body{
      font-family: 'Inter', system-ui, -apple-system, 'Segoe UI', Roboto;
      background: radial-gradient(1200px 600px at 10% 10%, rgba(245,158,11,0.15), transparent 8%),
                  radial-gradient(800px 450px at 95% 90%, rgba(217,119,6,0.08), transparent 8%),
                  linear-gradient(180deg,var(--bg-1), #081126 80%);
      color:var(--text);
      min-height:100vh;
      padding:40px 20px;
    }

    .container{
      max-width:1100px;
      margin:0 auto;
    }

    .back-btn{
      display:inline-flex;align-items:center;gap:8px;margin-bottom:24px;
      padding:8px 16px;border-radius:12px;background:rgba(255,255,255,0.05);
      color:var(--text);text-decoration:none;font-weight:500;
      border:1px solid rgba(255,255,255,0.06);
      transition:all .18s ease;
    }
    .back-btn:hover{background:rgba(255,255,255,0.08);transform:translateY(-1px)}

    .header{
      text-align:center;margin-bottom:40px;
    }
    .header h1{
      font-size:2.5rem;font-weight:800;margin:0 0 12px 0;
      background:linear-gradient(135deg,var(--accent-1),var(--accent-2));
      -webkit-background-clip:text;-webkit-text-fill-color:transparent;
      background-clip:text;
    }
    .header p{color:var(--muted);font-size:1.1rem;margin:0}

    .timeline{
      position:relative;
      padding-left:40px;
      margin-bottom:40px;
    }

    .timeline::before{
      content:'';
      position:absolute;
      left:20px;
      top:0;
      bottom:0;
      width:3px;
      background:linear-gradient(180deg,var(--accent-1),var(--accent-2));
      border-radius:2px;
    }

    .experience-item{
      position:relative;
      margin-bottom:32px;
    }

    .experience-item::before{
      content:'';
      position:absolute;
      left:-50px;
      top:24px;
      width:20px;
      height:20px;
      background:linear-gradient(135deg,var(--accent-1),var(--accent-2));
      border-radius:50%;
      border:4px solid var(--bg-1);
      box-shadow:0 0 0 4px rgba(245,158,11,0.2);
    }

    .experience-card{
      background:linear-gradient(180deg,rgba(255,255,255,0.04),rgba(255,255,255,0.02));
      border-radius:var(--radius);
      padding:24px;
      border:1px solid rgba(255,255,255,0.06);
      backdrop-filter:blur(12px);
      position:relative;
      overflow:hidden;
      transition:transform .3s ease;
    }

    .experience-card:hover{
      transform:translateY(-4px);
    }

    .experience-card::before{
      content:'';
      position:absolute;
      top:0;
      left:0;
      right:0;
      height:3px;
      background:linear-gradient(90deg,var(--accent-1),var(--accent-2));
    }

    .job-header{
      display:flex;
      justify-content:space-between;
      align-items:flex-start;
      margin-bottom:16px;
    }

    .job-title{
      flex:1;
    }

    .job-title h3{
      margin:0 0 4px 0;
      font-size:1.3rem;
      font-weight:700;
      color:var(--text);
      display:flex;
      align-items:center;
      gap:8px;
    }

    .company{
      color:var(--accent-1);
      font-weight:600;
      font-size:1.1rem;
    }

    .period{
      background:rgba(245,158,11,0.2);
      color:var(--accent-1);
      padding:6px 12px;
      border-radius:20px;
      font-size:0.85rem;
      font-weight:600;
      white-space:nowrap;
    }

    .job-description{
      color:var(--muted);
      line-height:1.7;
      margin-bottom:16px;
    }

    @media (max-width:768px){
      .timeline{padding-left:30px}
      .timeline::before{left:15px}
      .experience-item::before{left:-40px;width:16px;height:16px}
      .job-header{flex-direction:column;align-items:flex-start;gap:8px}
      .header h1{font-size:2rem}
    }
  </style>
</head>
<body>
  <div class="container">
    <a href="/" class="back-btn">← Volver al Inicio</a>
    
    <div class="header">
      <h1>💼 Mi Experiencia Laboral</h1>
      <p>El camino profesional que me ha formado y las lecciones aprendidas</p>
    </div>

    <div class="timeline">
      <!-- Proyecto 1 -->
      <div class="experience-item">
        <div class="experience-card">
          <div class="job-header">
            <div class="job-title">
              <h3>EDSAR</h3>
            </div>
          </div>
          <div class="job-description">
            Aunque aún no he tenido una experiencia laboral formal, considero
            que uno de los proyectos más significativos que he desarrollado
            durante mis estudios fue una aplicación de comidas en Android
            Studio con Kotlin. Esta app permitía al usuario ingresar los
            ingredientes que tenía disponibles y, a partir de ellos, le
            sugería diferentes recetas. Además, incluía consejos prácticos
            de cocina y una base de datos con una amplia variedad de recetas,
            lo que enriquecía la experiencia del usuario. Este proyecto me
            permitió fortalecer mis habilidades en programación, manejo de
            bases de datos y diseño de interfaces móviles, representando una
            valiosa primera aproximación al trabajo en el ámbito del desarrollo de software.
          </div>
        </div>
      </div>

      <!-- Proyecto 2 -->
      <div class="experience-item">
        <div class="experience-card">
          <div class="job-header">
            <div class="job-title">
              <h3>Sandbox</h3>
            </div>
          </div>
          <div class="job-description">
            Durante mi formación, en el semestre pasado también trabajé en el desarrollo de
            Sandbox, un videojuego creado en Unity, utilizando Maya para la creación de personajes
            y objetos. Aunque el proyecto representó un gran reto debido al poco trabajo colaborativo
            del equipo, me permitió aprender a manejar situaciones de estrés y, sobre todo, adquirir
            conocimientos prácticos sobre los principios básicos del desarrollo de videojuegos.
            Esta experiencia me ayudó a fortalecer mi creatividad, mi disciplina y mi capacidad
            de resolución de problemas dentro de un entorno de desarrollo real.
          </div>
        </div>
      </div>

      <!-- Proyecto 3 -->
      <div class="experience-item">
        <div class="experience-card">
          <div class="job-header">
            <div class="job-title">
              <h3>AirProject</h3>
            </div>
          </div>
          <div class="job-description">
            Otro proyecto relevante fue AirProject, desarrollado en la materia de Inteligencia Artificial.
            En este trabajo se realizó un proceso de limpieza y entrenamiento de datos mediante diferentes
            métodos, con el objetivo de identificar la calidad del aire y clasificarlo en categorías como
            bueno, moderado o malo. Gracias a esta experiencia, pude comprender las bases del funcionamiento
            de los modelos de IA, desde la preparación de datos hasta la interpretación de resultados, lo
            que me permitió adentrarme en el mundo del aprendizaje automático y sus aplicaciones prácticas.
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>

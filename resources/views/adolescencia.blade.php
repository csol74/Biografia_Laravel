<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Mi Adolescencia — [TU NOMBRE]</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">
  <style>
    :root{
      --bg-1: #0f172a;
      --accent-1: #7c5cff;
      --accent-2: #34d399;
      --accent-3: #a29bfe;
      --accent-4: #6c5ce7;
      --accent-5: #fd79a8;
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
      background: radial-gradient(1200px 600px at 10% 10%, rgba(162,155,254,0.15), transparent 8%),
                  radial-gradient(800px 450px at 95% 90%, rgba(108,92,231,0.08), transparent 8%),
                  linear-gradient(180deg,var(--bg-1), #081126 80%);
      color:var(--text);
      min-height:100vh;
      padding:40px 20px;
    }

    .container{
      max-width:1200px;
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
      background:linear-gradient(135deg,var(--accent-3),var(--accent-4));
      -webkit-background-clip:text;-webkit-text-fill-color:transparent;
      background-clip:text;
    }
    .header p{color:var(--muted);font-size:1.1rem;margin:0}

    .period-section{
      margin-bottom:40px;
    }

    .period-header{
      background:linear-gradient(45deg,var(--accent-3),var(--accent-4));
      color:white;
      padding:16px 28px;
      border-radius:12px 12px 0 0;
      font-size:1.4rem;
      font-weight:700;
      display:flex;
      align-items:center;
      gap:12px;
    }

    .period-content{
      background:linear-gradient(180deg,rgba(255,255,255,0.04),rgba(255,255,255,0.02));
      padding:28px;
      border-radius:0 0 12px 12px;
      border:2px solid var(--accent-3);
      border-top:none;
      backdrop-filter:blur(8px);
    }

    .period-intro{
      color:var(--muted);
      line-height:1.7;
      margin-bottom:24px;
      font-size:1.05rem;
    }

    .experience-grid{
      display:grid;
      grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
      gap:20px;
      margin-top:20px;
    }

    .experience-card{
      background:linear-gradient(180deg,rgba(255,255,255,0.06),rgba(255,255,255,0.02));
      padding:20px;
      border-radius:14px;
      border:1px solid rgba(255,255,255,0.08);
      backdrop-filter:blur(8px);
      transition:all .3s ease;
      position:relative;
      overflow:hidden;
    }

    .experience-card::before{
      content:'';
      position:absolute;
      top:0;
      left:0;
      right:0;
      height:3px;
      background:linear-gradient(90deg,var(--accent-4),var(--accent-3));
    }

    .experience-card:hover{
      transform:translateY(-6px);
      box-shadow:0 12px 30px rgba(0,0,0,0.2);
    }

    .experience-card h4{
      color:var(--accent-4);
      margin:0 0 12px 0;
      display:flex;
      align-items:center;
      gap:10px;
      font-size:1.1rem;
      font-weight:700;
    }

    .experience-card .icon{
      font-size:20px;
    }

    .experience-card p{
      color:var(--muted);
      line-height:1.6;
      margin:0;
      font-size:0.95rem;
    }

    .highlight-box{
      background:linear-gradient(45deg,var(--accent-5),#e84393);
      color:white;
      padding:32px;
      border-radius:var(--radius);
      margin:32px 0;
      text-align:center;
      position:relative;
      overflow:hidden;
    }

    .highlight-box::before{
      content:'';
      position:absolute;
      top:-50%;
      right:-50%;
      width:200px;
      height:200px;
      background:radial-gradient(circle,rgba(255,255,255,0.1) 0%,transparent 70%);
      border-radius:50%;
    }

    .highlight-box h3{
      margin:0 0 16px 0;
      font-size:1.5rem;
      font-weight:800;
      display:flex;
      align-items:center;
      justify-content:center;
      gap:12px;
    }

    .highlight-box p{
      margin:0;
      line-height:1.7;
      font-size:1.05rem;
      position:relative;
      z-index:1;
    }

    .nav-footer{
      display:flex;justify-content:center;gap:16px;margin-top:50px;
    }

    .nav-btn{
      display:inline-flex;align-items:center;gap:8px;
      padding:12px 24px;border-radius:12px;text-decoration:none;
      font-weight:600;transition:all .18s ease;
    }

    .nav-btn.primary{
      background:linear-gradient(90deg,var(--accent-1),#6366f1);
      color:#021024;
    }
    .nav-btn.secondary{
      background:rgba(255,255,255,0.05);color:var(--text);
      border:1px solid rgba(255,255,255,0.06);
    }

    .nav-btn:hover{transform:translateY(-2px);box-shadow:0 8px 20px rgba(0,0,0,0.2)}

    @media (max-width:768px){
      .experience-grid{grid-template-columns:1fr}
      .header h1{font-size:2rem}
      .nav-footer{flex-direction:column;align-items:center}
    }
  </style>
</head>
<body>
  <div class="container">
    <a href="/" class="back-btn">← Volver al inicio</a>
    
    <div class="header">
      <h1>🧑 Mi Adolescencia</h1>
      <p>Los años de descubrimiento, cambios y decisiones que definieron mi futuro</p>
    </div>

    <div class="period-section">
      <div class="period-header">
        <span>🏫</span> Secundaria (12-15 años)
      </div>
      <div class="period-content">
        <p class="period-intro">
        El paso de la primaria a la secundaria se sintió como un gran cambio,
        ya que trajo consigo más responsabilidad y también mayor libertad,
        pues ahora iba y regresaba del colegio sin el acompañamiento de mis
        padres. Este nuevo entorno me hizo madurar y organizar mejor mis tiempos
        </p>
        
        <div class="experience-grid">
          <div class="experience-card">
            <h4><span class="icon">📚</span> Vida Académica</h4>
            <p>En la secundaria mis materias favoritas eran español y emprendimiento,
                ya que me resultaban interesantes y prácticas. Por otro lado, se me
                hacían un poco más difíciles, o mejor dicho tediosas, las clases de
                química y física, porque requerían mayor concentración y no me entusiasmaban
                tanto. Con el tiempo fui cambiando mi forma de estudiar: dejé de prepararme
                únicamente de memoria y descubrí que con prestar atención en clase y repasar
                unos 20 minutos era suficiente para estar listo para los exámenes.</p>
          </div>
          
          <div class="experience-card">
            <h4><span class="icon">🎯</span> Actividades Extracurriculares</h4>
            <p>Durante la secundaria participé en varias actividades que me dejaron buenos recuerdos. 
                Formé parte de los interclases, donde llegué a ganar en baloncesto, un deporte que siempre
                me motivó por el trabajo en equipo y la emoción de la competencia. Además, junto a mis amigos
                participé en una exposición de canto, una experiencia diferente que me animó a salir
                 de la rutina académica y disfrutar de otros talentos</p>
          </div>
          
          <div class="experience-card">
            <h4><span class="icon">🎮</span> Entretenimiento</h4>
            <p>En esa época me gustaba mucho jugar videojuegos en el celular, especialmente Clash
                Royale y Dream Soccer. También disfrutaba ver películas de aventura y acción,
                ya que me atrapaban con sus historias emocionantes y llenas de adrenalina.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="period-section">
      <div class="period-header">
        <span>🎯</span> Bachillerato (16-18 años)
      </div>
      <div class="period-content">
        <p class="period-intro">
          En los últimos años de colegio la experiencia fue distinta, pues debido a la pandemia
           se cancelaron muchas salidas y actividades, lo que hizo que no se disfrutara de la
            misma manera. Sin embargo, ya en grado 11 tuve la satisfacción de ganar el primer
            lugar en voleibol, un logro que me dio mucha alegría. También fue una etapa en la
            que aparecieron nuevas responsabilidades, como pensar en el futuro y empezar a
            decidir qué carrera seguir, aunque me gradué sin tenerlo del todo claro. Esta
            etapa marcó un cambio en mi personalidad, pues me obligó a ser más consciente
            de mis decisiones y del rumbo que quería darle a mi vida.
</div>

    <div class="nav-footer">
      <a href="/actualidad" class="nav-btn primary">Actualidad →</a>
    </div>
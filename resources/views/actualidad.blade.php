<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Mi Actualidad — [TU NOMBRE]</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">
  <style>
    :root{
      --bg-1: #0f172a;
      --accent-1: #7c5cff;
      --accent-2: #34d399;
      --accent-3: #10b981;
      --accent-4: #059669;
      --accent-5: #0ea5e9;
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
      background: radial-gradient(1200px 600px at 10% 10%, rgba(16,185,129,0.12), transparent 8%),
                  radial-gradient(800px 450px at 95% 90%, rgba(14,165,233,0.08), transparent 8%),
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
      background:linear-gradient(135deg,var(--accent-2),var(--accent-5));
      -webkit-background-clip:text;-webkit-text-fill-color:transparent;
      background-clip:text;
    }
    .header p{color:var(--muted);font-size:1.1rem;margin:0}

    .status-banner{
      background:linear-gradient(135deg,var(--accent-2),var(--accent-3));
      color:#021024;
      padding:20px 32px;
      border-radius:var(--radius);
      text-align:center;
      margin-bottom:40px;
      font-weight:700;
      font-size:1.1rem;
      position:relative;
      overflow:hidden;
    }

    .status-banner::before{
      content:'';
      position:absolute;
      top:-50%;
      right:-50%;
      width:150px;
      height:150px;
      background:radial-gradient(circle,rgba(255,255,255,0.2) 0%,transparent 70%);
      border-radius:50%;
    }

    .main-grid{
      display:grid;
      grid-template-columns:1fr 1fr;
      gap:32px;
      margin-bottom:40px;
    }

    .section-card{
      background:linear-gradient(180deg,rgba(255,255,255,0.04),rgba(255,255,255,0.02));
      border-radius:var(--radius);
      padding:28px;
      border:1px solid rgba(255,255,255,0.06);
      backdrop-filter:blur(12px);
      position:relative;
      overflow:hidden;
    }

    .section-card::before{
      content:'';
      position:absolute;
      top:0;
      left:0;
      right:0;
      height:4px;
      background:linear-gradient(90deg,var(--accent-2),var(--accent-5));
    }

    .section-title{
      display:flex;
      align-items:center;
      gap:12px;
      margin:0 0 20px 0;
      font-size:1.4rem;
      font-weight:700;
      color:var(--text);
    }

    .section-title .icon{
      font-size:28px;
    }

    .detail-list{
      list-style:none;
      padding:0;
      margin:0;
    }

    .detail-list li{
      padding:8px 0;
      border-bottom:1px solid rgba(255,255,255,0.06);
      display:flex;
      align-items:flex-start;
      gap:12px;
    }

    .detail-list li:last-child{
      border-bottom:none;
    }

    .detail-label{
      font-weight:600;
      color:var(--accent-2);
      min-width:120px;
      font-size:0.9rem;
    }

    .detail-value{
      color:var(--muted);
      line-height:1.6;
      flex:1;
    }

    .skills-grid{
      display:grid;
      grid-template-columns:repeat(auto-fit,minmax(140px,1fr));
      gap:12px;
      margin-top:16px;
    }

    .skill-tag{
      background:linear-gradient(135deg,rgba(52,211,153,0.15),rgba(14,165,233,0.1));
      color:var(--accent-2);
      padding:8px 12px;
      border-radius:8px;
      text-align:center;
      font-size:0.85rem;
      font-weight:600;
      border:1px solid rgba(52,211,153,0.2);
    }

    .projects-section{
      background:linear-gradient(180deg,rgba(255,255,255,0.04),rgba(255,255,255,0.02));
      border-radius:var(--radius);
      padding:32px;
      border:1px solid rgba(255,255,255,0.06);
      backdrop-filter:blur(12px);
      margin-bottom:32px;
      position:relative;
      overflow:hidden;
    }

    .projects-section::before{
      content:'';
      position:absolute;
      top:0;
      left:0;
      right:0;
      height:4px;
      background:linear-gradient(90deg,var(--accent-5),var(--accent-1));
    }

    .projects-grid{
      display:grid;
      grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
      gap:20px;
      margin-top:24px;
    }

    .project-card{
      background:linear-gradient(180deg,rgba(255,255,255,0.06),rgba(255,255,255,0.02));
      padding:20px;
      border-radius:12px;
      border:1px solid rgba(255,255,255,0.08);
      transition:transform .3s ease;
    }

    .project-card:hover{
      transform:translateY(-4px);
    }

    .project-card h4{
      color:var(--accent-5);
      margin:0 0 8px 0;
      font-weight:700;
      display:flex;
      align-items:center;
      gap:8px;
    }

    .project-card .tech-stack{
      display:flex;
      flex-wrap:wrap;
      gap:6px;
      margin-top:12px;
    }

    .tech-tag{
      background:rgba(124,92,255,0.2);
      color:var(--accent-1);
      padding:4px 8px;
      border-radius:6px;
      font-size:0.75rem;
      font-weight:600;
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
      .main-grid{grid-template-columns:1fr}
      .projects-grid{grid-template-columns:1fr}
      .header h1{font-size:2rem}
      .nav-footer{flex-direction:column;align-items:center}
    }
  </style>
</head>
<body>
  <div class="container">
    <a href="/" class="back-btn">← Volver al inicio</a>
    
    <div class="header">
      <h1>🎯 Mi Actualidad</h1>
      <p>Lo que hago hoy en día: estudios, proyectos y pasiones del presente</p>
    </div>

    <div class="status-banner">
      🎓 Actualmente: Estudiante de Ingeniería de Sistemas en UNAB"
    </div>

    <div class="main-grid">
      <div class="section-card">
        <h3 class="section-title"><span class="icon">📚</span> Estudios Actuales</h3>
        <ul class="detail-list">
          <li>
            <span class="detail-label">Universidad:</span>
            <span class="detail-value">UNAB</span>
          </li>
          <li>
            <span class="detail-label">Carrera:</span>
            <span class="detail-value">Ingeniería de Sistemas</span>
          </li>
          <li>
            <span class="detail-label">Semestre:</span>
            <span class="detail-value">5to</span>
          </li>
          <li>
            <span class="detail-label">Año de Graduación:</span>
            <span class="detail-value">2027</span>
          </li>
          <li>
            <span class="detail-label">Materias Favoritas:</span>
            <span class="detail-value">Desarrollo móviles, Base de datos, Multimedia  </span>
          </li>
        </ul>
      </div>

    <div class="section-card">
      <h3 class="section-title"><span class="icon">🛠️</span> Habilidades Técnicas</h3>
      <div class="skills-grid">
        <div class="skill-tag">JavaScript</div>
        <div class="skill-tag">Python</div>
        <div class="skill-tag">HTML/CSS</div>
        <div class="skill-tag">Laravel</div>
        <div class="skill-tag">Android Studio</div>
        <div class="skill-tag">MySQL</div>
       
      </div>
    </div>


    <div class="section-card">
      <h3 class="section-title"><span class="icon">🎯</span> Rutina y Actividades Diarias</h3>
      <p style="color:var(--muted);line-height:1.7;margin:0;">
       Un día típico en mi vida actual comienza muy temprano: suelo levantarme
        a las 4:00 a.m. cuando tengo clases a las 6:00, o a las 6:00 a.m. si mis
        clases son a las 8:00. Procuro organizar mi tiempo de manera que el trabajo
        académico no se acumule, repartiendo las tareas para mantener un mejor
        ritmo. En mi tiempo libre disfruto ver películas, descansar con una siesta
        o salir a comer con mis amigos. De esta manera logro mantener un equilibrio
        entre mis responsabilidades y la diversión, lo que me permite avanzar en mis
        estudios sin dejar de lado los momentos de descanso y ocio.
      </p>
    </div>
  </div>
</body>
    <div class="nav-footer">
      <a href="/metas" class="nav-btn primary">🌟 Mis Metas →</a>
    </div>
</html>
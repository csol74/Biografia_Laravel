<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Mis Metas — [TU NOMBRE]</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">
  <style>
    :root{
      --bg-1: #0f172a;
      --accent-1: #7c5cff;
      --accent-2: #34d399;
      --accent-3: #fbbf24;
      --accent-4: #f59e0b;
      --accent-5: #ec4899;
      --accent-6: #8b5cf6;
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
      background: radial-gradient(1200px 600px at 10% 10%, rgba(251,191,36,0.12), transparent 8%),
                  radial-gradient(800px 450px at 95% 90%, rgba(139,92,246,0.08), transparent 8%),
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
      text-align:center;margin-bottom:48px;
    }
    .header h1{
      font-size:2.8rem;font-weight:800;margin:0 0 16px 0;
      background:linear-gradient(135deg,var(--accent-3),var(--accent-6));
      -webkit-background-clip:text;-webkit-text-fill-color:transparent;
      background-clip:text;
    }
    .header p{color:var(--muted);font-size:1.2rem;margin:0;line-height:1.6}

    .vision-banner{
      background:linear-gradient(135deg,var(--accent-3),var(--accent-4));
      color:#0c1220;
      padding:32px;
      border-radius:var(--radius);
      text-align:center;
      margin-bottom:48px;
      position:relative;
      overflow:hidden;
    }

    .vision-banner::before{
      content:'';
      position:absolute;
      top:-50%;
      left:-50%;
      width:200px;
      height:200px;
      background:radial-gradient(circle,rgba(255,255,255,0.2) 0%,transparent 70%);
      border-radius:50%;
    }

    .vision-banner h2{
      margin:0 0 16px 0;
      font-size:1.8rem;
      font-weight:800;
      position:relative;
      z-index:1;
    }

    .vision-banner p{
      margin:0;
      font-size:1.1rem;
      line-height:1.7;
      position:relative;
      z-index:1;
      font-weight:500;
    }

    .timeline-goals{
      display:grid;
      gap:32px;
      margin-bottom:48px;
    }

    .timeline-period{
      background:linear-gradient(180deg,rgba(255,255,255,0.04),rgba(255,255,255,0.02));
      border-radius:var(--radius);
      padding:32px;
      border:1px solid rgba(255,255,255,0.06);
      backdrop-filter:blur(12px);
      position:relative;
      overflow:hidden;
    }

    .timeline-period.short-term::before{
      content:'';position:absolute;top:0;left:0;right:0;height:4px;
      background:linear-gradient(90deg,var(--accent-2),#10b981);
    }

    .timeline-period.medium-term::before{
      content:'';position:absolute;top:0;left:0;right:0;height:4px;
      background:linear-gradient(90deg,var(--accent-3),var(--accent-4));
    }

    .timeline-period.long-term::before{
      content:'';position:absolute;top:0;left:0;right:0;height:4px;
      background:linear-gradient(90deg,var(--accent-5),var(--accent-6));
    }

    .period-header{
      display:flex;
      align-items:center;
      gap:16px;
      margin-bottom:24px;
    }

    .period-icon{
      width:60px;
      height:60px;
      border-radius:50%;
      display:flex;
      align-items:center;
      justify-content:center;
      font-size:24px;
      font-weight:bold;
    }

    .short-term .period-icon{
      background:linear-gradient(135deg,var(--accent-2),#10b981);
      color:#021024;
    }

    .medium-term .period-icon{
      background:linear-gradient(135deg,var(--accent-3),var(--accent-4));
      color:#021024;
    }

    .long-term .period-icon{
      background:linear-gradient(135deg,var(--accent-5),var(--accent-6));
      color:white;
    }

    .period-title{
      flex:1;
    }

    .period-title h3{
      margin:0 0 4px 0;
      font-size:1.5rem;
      font-weight:700;
      color:var(--text);
    }

    .period-subtitle{
      color:var(--muted);
      margin:0;
      font-size:1rem;
    }

    .goals-grid{
      display:grid;
      grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
      gap:20px;
    }

    .goal-card{
      background:linear-gradient(180deg,rgba(255,255,255,0.06),rgba(255,255,255,0.02));
      padding:24px;
      border-radius:14px;
      border:1px solid rgba(255,255,255,0.08);
      transition:transform .3s ease;
    }

    .goal-card:hover{
      transform:translateY(-4px);
    }

    .goal-card h4{
      margin:0 0 12px 0;
      font-weight:700;
      font-size:1.1rem;
      display:flex;
      align-items:center;
      gap:10px;
    }

    .short-term .goal-card h4{color:var(--accent-2)}
    .medium-term .goal-card h4{color:var(--accent-3)}
    .long-term .goal-card h4{color:var(--accent-5)}

    .goal-card p{
      color:var(--muted);
      line-height:1.6;
      margin:0 0 12px 0;
    }

    .progress-bar{
      height:6px;
      background:rgba(255,255,255,0.1);
      border-radius:3px;
      overflow:hidden;
      margin-top:12px;
    }

    .progress-fill{
      height:100%;
      border-radius:3px;
      transition:width .6s ease;
    }

    .short-term .progress-fill{background:linear-gradient(90deg,var(--accent-2),#10b981)}
    .medium-term .progress-fill{background:linear-gradient(90deg,var(--accent-3),var(--accent-4))}
    .long-term .progress-fill{background:linear-gradient(90deg,var(--accent-5),var(--accent-6))}

    .inspiration-section{
      background:linear-gradient(180deg,rgba(255,255,255,0.04),rgba(255,255,255,0.02));
      border-radius:var(--radius);
      padding:32px;
      border:1px solid rgba(255,255,255,0.06);
      backdrop-filter:blur(12px);
      margin-bottom:32px;
      position:relative;
      overflow:hidden;
    }

    .inspiration-section::before{
      content:'';
      position:absolute;
      top:0;
      left:0;
      right:0;
      height:4px;
      background:linear-gradient(90deg,var(--accent-1),var(--accent-2),var(--accent-3));
    }

    .inspiration-section h3{
      display:flex;
      align-items:center;
      gap:12px;
      margin:0 0 20px 0;
      font-size:1.4rem;
      font-weight:700;
      color:var(--text);
    }

    .inspiration-section p{
      color:var(--muted);
      line-height:1.7;
      margin:0 0 16px 0;
      font-size:1.05rem;
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
      .goals-grid{grid-template-columns:1fr}
      .header h1{font-size:2.2rem}
      .nav-footer{flex-direction:column;align-items:center}
      .period-header{flex-direction:column;text-align:center}
    }
  </style>
</head>
<body>
  <div class="container">
    <a href="/" class="nav-btn primary">🏠 Volver al Inicio</a>
    
    <div class="header">
      <h1>🌟 Mis Metas y Aspiraciones</h1>
      <p>El futuro que estoy construyendo: sueños, objetivos y el camino hacia mis aspiraciones</p>
    </div>

    <div class="vision-banner">
      <h2>🎯 Mi Visión Personal</h2>
      <p>
        Mi propósito es crecer constantemente, mantener el equilibrio entre éxito y satisfacción personal, y dejar una huella positiva en cada lugar donde esté.
      </p>
    </div>

    <div class="timeline-goals">
      <!-- METAS A CORTO PLAZO -->
      <div class="timeline-period short-term">
        <div class="period-header">
          <div class="period-icon">📅</div>
          <div class="period-title">
            <h3>Metas a Corto Plazo</h3>
            <p class="period-subtitle">Los próximos 6 meses a 1 año</p>
          </div>
        </div>
        
        <div class="goals-grid">
          <div class="goal-card">
            <h4><span>🎓</span> Académicas</h4>
            <p>Aprobar todas las materias, mejorar mi promedio, comenzar con el desarrollo de mi proyecto de grado, aprender nuevas tecnologías]</p>
            <div class="progress-bar">
              <div class="progress-fill" style="width: 70%"></div>
            </div>
          </div>
          
          <div class="goal-card">
            <h4><span>💻</span> Técnicas</h4>
            <p>Aprender flutter, crear mi primera app con una arquitectura de software completa, obtener certificaciones para mejorar mi CV]</p>
            <div class="progress-bar">
              <div class="progress-fill" style="width: 45%"></div>
            </div>
          </div>
          
          <div class="goal-card">
            <h4><span>🏃‍♂️</span> Personales</h4>
            <p>Mejorar hábitos, ejercitarme, leer más libros, aprender un nuevo hobby, mejorar habilidades sociales</p>
            <div class="progress-bar">
              <div class="progress-fill" style="width: 60%"></div>
            </div>
          </div>
        </div>
      </div>

      <!-- METAS A MEDIANO PLAZO -->
      <div class="timeline-period medium-term">
        <div class="period-header">
          <div class="period-icon">🎯</div>
          <div class="period-title">
            <h3>Metas a Mediano Plazo</h3>
            <p class="period-subtitle">Los próximos 2 a 5 años</p>
          </div>
        </div>
        
        <div class="goals-grid">
          <div class="goal-card">
            <h4><span>🎓</span> Graduación y Especialización</h4>
            <p>Graduarme de mi carrera, posiblemente hacer una especialización, maestría, o certificaciones importantes en mi campo]</p>
            <div class="progress-bar">
              <div class="progress-fill" style="width: 30%"></div>
            </div>
          </div>
          
          <div class="goal-card">
            <h4><span>💼</span> Carrera Profesional</h4>
            <p>Conseguir mi primer trabajo profesional, ganar experiencia en empresas importantes, desarrollar mi perfil profesional]</p>
            <div class="progress-bar">
              <div class="progress-fill" style="width: 20%"></div>
            </div>
          </div>
          
          <div class="goal-card">
            <h4><span>🚀</span> Proyectos Propios</h4>
            <p>Desarrollar proyectos personales significativos, tal vez una startup, una aplicación exitosa, o un portafolio sólido</p>
            <div class="progress-bar">
              <div class="progress-fill" style="width: 25%"></div>
            </div>
          </div>
          
          <div class="goal-card">
            <h4><span>🌍</span> Experiencias</h4>
            <p>[Viajar, conocer otras culturas, trabajar en el extranjero, expandir mi perspectiva del mundo]</p>
            <div class="progress-bar">
              <div class="progress-fill" style="width: 15%"></div>
            </div>
          </div>
        </div>
      </div>
  </div>
</body>
</html>
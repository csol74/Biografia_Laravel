<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Habilidades Técnicas — [TU NOMBRE]</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">
  <style>
    :root{
      --bg-1: #0f172a;
      --accent-1: #10b981;
      --accent-2: #059669;
      --accent-3: #047857;
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
      background: radial-gradient(1200px 600px at 10% 10%, rgba(16,185,129,0.15), transparent 8%),
                  radial-gradient(800px 450px at 95% 90%, rgba(5,150,105,0.08), transparent 8%),
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
      background:linear-gradient(135deg,var(--accent-1),var(--accent-2));
      -webkit-background-clip:text;-webkit-text-fill-color:transparent;
      background-clip:text;
    }
    .header p{color:var(--muted);font-size:1.1rem;margin:0}

    .skills-categories{
      display:grid;
      gap:32px;
      margin-bottom:40px;
    }

    .category-section{
      background:linear-gradient(180deg,rgba(255,255,255,0.04),rgba(255,255,255,0.02));
      border-radius:var(--radius);
      padding:28px;
      border:1px solid rgba(255,255,255,0.06);
      backdrop-filter:blur(12px);
      position:relative;
      overflow:hidden;
    }

    .category-section::before{
      content:'';
      position:absolute;
      top:0;
      left:0;
      right:0;
      height:4px;
      background:linear-gradient(90deg,var(--accent-1),var(--accent-2));
    }

    .category-header{
      display:flex;
      align-items:center;
      gap:16px;
      margin-bottom:24px;
    }

    .category-icon{
      width:50px;
      height:50px;
      border-radius:12px;
      background:linear-gradient(135deg,var(--accent-1),var(--accent-2));
      display:flex;
      align-items:center;
      justify-content:center;
      font-size:24px;
      color:#021024;
    }

    .category-title{
      flex:1;
    }

    .category-title h3{
      margin:0 0 4px 0;
      font-size:1.4rem;
      font-weight:700;
      color:var(--text);
    }

    .category-subtitle{
      color:var(--muted);
      margin:0;
      font-size:1rem;
    }

    .skills-grid{
      display:grid;
      grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
      gap:20px;
    }

    .skill-card{
      background:linear-gradient(180deg,rgba(255,255,255,0.06),rgba(255,255,255,0.02));
      padding:20px;
      border-radius:14px;
      border:1px solid rgba(255,255,255,0.08);
      transition:transform .3s ease;
    }

    .skill-card:hover{transform:translateY(-4px)}

    .skill-header{
      display:flex;
      justify-content:space-between;
      align-items:center;
      margin-bottom:12px;
    }

    .skill-name{
      font-weight:700;
      font-size:1.1rem;
      color:var(--text);
      display:flex;
      align-items:center;
      gap:8px;
    }

    .skill-level{
      background:rgba(16,185,129,0.2);
      color:var(--accent-1);
      padding:4px 12px;
      border-radius:20px;
      font-size:0.8rem;
      font-weight:600;
    }

    .skill-description{
      color:var(--muted);
      line-height:1.6;
      margin-bottom:16px;
      font-size:0.95rem;
    }

    .progress-container{margin-bottom:12px}

    .progress-label{
      display:flex;
      justify-content:space-between;
      margin-bottom:6px;
      font-size:0.85rem;
      color:var(--muted);
    }

    .progress-bar{
      height:8px;
      background:rgba(255,255,255,0.1);
      border-radius:4px;
      overflow:hidden;
    }

    .progress-fill{
      height:100%;
      background:linear-gradient(90deg,var(--accent-1),var(--accent-2));
      border-radius:4px;
      transition:width .8s ease;
    }

    .tools-list{
      display:flex;
      flex-wrap:wrap;
      gap:8px;
      margin-top:12px;
    }

    .tool-tag{
      background:rgba(16,185,129,0.15);
      color:var(--accent-1);
      padding:4px 10px;
      border-radius:6px;
      font-size:0.8rem;
      font-weight:600;
      border:1px solid rgba(16,185,129,0.3);
    }

    .certifications-section{
      background:linear-gradient(180deg,rgba(255,255,255,0.04),rgba(255,255,255,0.02));
      border-radius:var(--radius);
      padding:28px;
      border:1px solid rgba(255,255,255,0.06);
      backdrop-filter:blur(12px);
      position:relative;
      overflow:hidden;
      margin-bottom:32px;
    }

    .certifications-section::before{
      content:'';
      position:absolute;
      top:0;
      left:0;
      right:0;
      height:4px;
      background:linear-gradient(90deg,var(--accent-2),var(--accent-3));
    }

    .cert-grid{
      display:grid;
      grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
      gap:16px;
      margin-top:20px;
    }

    .cert-card{
      background:rgba(16,185,129,0.1);
      padding:16px;
      border-radius:12px;
      border:1px solid rgba(16,185,129,0.2);
    }

    .cert-card h4{
      margin:0 0 8px 0;
      color:var(--accent-1);
      font-weight:700;
      font-size:1rem;
    }

    .cert-details{
      color:var(--muted);
      font-size:0.9rem;
      line-height:1.5;
    }

    .nav-footer{
      display:flex;
      justify-content:center;
      gap:16px;
      margin-top:50px;
    }

    .nav-btn{
      display:inline-flex;
      align-items:center;
      gap:8px;
      padding:12px 24px;
      border-radius:12px;
      text-decoration:none;
      font-weight:600;
      transition:all .18s ease;
    }

    .nav-btn.primary{
      background:linear-gradient(90deg,var(--accent-1),var(--accent-2));
      color:#021024;
    }
    .nav-btn.secondary{
      background:rgba(255,255,255,0.05);
      color:var(--text);
      border:1px solid rgba(255,255,255,0.06);
    }

    .nav-btn:hover{
      transform:translateY(-2px);
      box-shadow:0 8px 20px rgba(0,0,0,0.2);
    }

    @media (max-width:768px){
      .skills-grid{grid-template-columns:1fr}
      .cert-grid{grid-template-columns:1fr}
      .header h1{font-size:2rem}
      .nav-footer{flex-direction:column;align-items:center}
    }
  </style>
</head>
<body>
  <div class="container">
    <a href="/" class="back-btn">← Volver al Inicio</a>
    
    <div class="header">
      <h1>🛠️ Mis Habilidades Técnicas</h1>
      <p>Tecnologías, herramientas y competencias que domino para crear soluciones</p>
    </div>

    <div class="skills-categories">
      <!-- PROGRAMACIÓN -->
      <div class="category-section">
        <div class="category-header">
          <div class="category-icon">💻</div>
          <div class="category-title">
            <h3>Lenguajes de Programación</h3>
            <p class="category-subtitle">Código que da vida a las ideas</p>
          </div>
        </div>
        
        <div class="skills-grid">
          <div class="skill-card">
            <div class="skill-header">
              <div class="skill-name">🐍 Python</div>
              <div class="skill-level">Avanzado</div>
            </div>
            <div class="progress-container">
              <div class="progress-label">
                <span>Competencia</span>
                <span>80%</span>
              </div>
              <div class="progress-bar">
                <div class="progress-fill" style="width: 80%"></div>
              </div>
            </div>
            <div class="tools-list">
              <span class="tool-tag">Django</span>
              <span class="tool-tag">FastAPI</span>
            </div>
          </div>

          <div class="skill-card">
            <div class="skill-header">
              <div class="skill-name">⚡ JavaScript</div>
              <div class="skill-level">Intermedio</div>
            </div>
            <div class="progress-container">
              <div class="progress-label">
                <span>Competencia</span>
                <span>60%</span>
              </div>
              <div class="progress-bar">
                <div class="progress-fill" style="width: 60%"></div>
              </div>
            </div>
            <div class="tools-list">
              <span class="tool-tag">Node.js</span>
            </div>
          </div>

          <div class="skill-card">
            <div class="skill-header">
              <div class="skill-name">🐘 PHP</div>
              <div class="skill-level">Principiante</div>
            </div>
            <div class="skill-description">
              Proyectos web, frameworks utilizados
            </div>
            <div class="progress-container">
              <div class="progress-label">
                <span>Competencia</span>
                <span>30%</span>
              </div>
              <div class="progress-bar">
                <div class="progress-fill" style="width: 30%"></div>
              </div>
            </div>
            <div class="tools-list">
              <span class="tool-tag">Laravel</span>
            </div>
          </div>
        </div>
      </div>

      <!-- BASES DE DATOS -->
      <div class="category-section">
        <div class="category-header">
          <div class="category-icon">🗄️</div>
          <div class="category-title">
            <h3>Bases de Datos</h3>
            <p class="category-subtitle">Gestión y análisis de información</p>
          </div>
        </div>
        
        <div class="skills-grid">
          <div class="skill-card">
            <div class="skill-header">
              <div class="skill-name">🐬 MySQL</div>
              <div class="skill-level">Avanzado</div>
            </div>
            <div class="skill-description">
              Diseño de esquemas, optimización, consultas complejas
            </div>
            <div class="progress-container">
              <div class="progress-label">
                <span>Competencia</span>
                <span>70%</span>
              </div>
              <div class="progress-bar">
                <div class="progress-fill" style="width: 70%"></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- HABILIDADES BLANDAS -->
      <div class="category-section">
        <div class="category-header">
          <div class="category-icon">💡</div>
          <div class="category-title">
            <h3>Habilidades Blandas</h3>
            <p class="category-subtitle">Competencias interpersonales</p>
          </div>
        </div>
        
        <div style="color:var(--muted);line-height:1.8;font-size:1rem;">
          <ul style="margin:0;padding-left:20px;">
            <li><strong style="color:var(--accent-1);">Comunicación efectiva</strong></li>
            <li><strong style="color:var(--accent-1);">Trabajo en equipo</strong></li>
            <li><strong style="color:var(--accent-1);">Resolución de problemas</strong></li>
            <li><strong style="color:var(--accent-1);">Adaptabilidad</strong></li>
          </ul>
        </div>
      </div>
      <!-- HABILIDADES ADICIONALES -->
    <div class="category-section">
      <div class="category-header">
        <div class="category-icon">🎨</div>
        <div class="category-title">
          <h3>Habilidades Adicionales</h3>
          <p class="category-subtitle">Talentos y pasatiempos</p>
        </div>
      </div>
      
      <div style="color:var(--muted);line-height:1.8;font-size:1rem;">
        <ul style="margin:0;padding-left:20px;">
          <li><strong style="color:var(--accent-1);">Deportes:</strong> Voleibol, Baloncesto, Futbol</li>
          <li><strong style="color:var(--accent-1);">Arte/Diseño:</strong> Dibujo, Origami</li>
          <li><strong style="color:var(--accent-1);">Música:</strong> Piano, Flauta</li>
          <li><strong style="color:var(--accent-1);">Idiomas:</strong> Ingles costeño XD</li>
        </ul>
      </div>
    </div>
    </div>
  </div>
</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Mi Origen — [TU NOMBRE]</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">
  <style>
    :root{
      --bg-1: #0f172a;
      --accent-1: #7c5cff;
      --accent-2: #34d399;
      --accent-3: #f59e0b;
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
                  radial-gradient(800px 450px at 95% 90%, rgba(52,211,153,0.08), transparent 8%),
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
      background:linear-gradient(135deg,var(--accent-3),#fbbf24);
      -webkit-background-clip:text;-webkit-text-fill-color:transparent;
      background-clip:text;
    }
    .header p{color:var(--muted);font-size:1.1rem;margin:0}

    .info-grid{
      display:grid;
      grid-template-columns:repeat(auto-fit,minmax(320px,1fr));
      gap:24px;
      margin-bottom:32px;
    }

    .info-card{
      background:linear-gradient(180deg,rgba(255,255,255,0.03),rgba(255,255,255,0.01));
      border-radius:var(--radius);
      padding:24px;
      border:1px solid rgba(255,255,255,0.04);
      backdrop-filter:blur(8px);
      position:relative;
      overflow:hidden;
    }

    .info-card::before{
      content:'';position:absolute;top:0;left:0;right:0;height:3px;
      background:linear-gradient(90deg,var(--accent-3),#fbbf24);
    }

    .info-card h3{
      display:flex;align-items:center;gap:12px;margin:0 0 16px 0;
      font-size:1.25rem;font-weight:700;color:var(--text);
    }

    .info-card .icon{
      font-size:24px;
    }

    .detail-item{
      display:flex;margin-bottom:12px;
    }
    .detail-label{
      font-weight:600;color:var(--accent-3);min-width:100px;
    }
    .detail-value{
      color:var(--muted);line-height:1.5;
    }

    .story-section{
      background:linear-gradient(180deg,rgba(255,255,255,0.03),rgba(255,255,255,0.01));
      border-radius:var(--radius);
      padding:32px;
      border:1px solid rgba(255,255,255,0.04);
      backdrop-filter:blur(8px);
      position:relative;
      overflow:hidden;
    }

    .story-section::before{
      content:'';position:absolute;top:0;left:0;right:0;height:3px;
      background:linear-gradient(90deg,var(--accent-2),#10b981);
    }

    .story-section h3{
      display:flex;align-items:center;gap:12px;margin:0 0 20px 0;
      font-size:1.4rem;font-weight:700;
    }

    .story-section p{
      color:var(--muted);line-height:1.7;font-size:1rem;margin-bottom:16px;
    }

    .nav-footer{
      display:flex;justify-content:center;gap:16px;margin-top:40px;
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
      .info-grid{grid-template-columns:1fr}
      .header h1{font-size:2rem}
      .nav-footer{flex-direction:column;align-items:center}
    }
  </style>
</head>
<body>
  <div class="container">
    <a href="/" class="back-btn">← Volver al inicio</a>
    
    <div class="header">
      <h1>🏠 Mi Origen</h1>
      <p>Descubre mis raíces, mi familia y el lugar que me vio crecer</p>
    </div>

    <div class="info-grid">
      <div class="info-card">
        <h3><span class="icon">🌍</span> Lugar de Nacimiento</h3>
        <div class="detail-item">
          <span class="detail-label">Pueblo:</span>
          <span class="detail-value">Málaga</span>
        </div>
        <div class="detail-item">
          <span class="detail-label">País:</span>
          <span class="detail-value">Colombia</span>
        </div>
        <div class="detail-item">
          <span class="detail-label">Fecha:</span>
          <span class="detail-value">04/12/2005</span>
        </div>
        <div class="detail-item">
          <span class="detail-label">Región:</span>
          <span class="detail-value">Santander</span>
        </div>
      </div>

      <div class="info-card">
        <h3><span class="icon">👨‍👩‍👧‍👦</span> Mi Familia</h3>
        <div class="detail-item">
          <span class="detail-label">Padre:</span>
          <span class="detail-value">Julio Solano</span>
        </div>
        <div class="detail-item">
          <span class="detail-label">Madre:</span>
          <span class="detail-value">Monica Clavijo</span>
        </div>
        <div class="detail-item">
          <span class="detail-label">Hermanos:</span>
          <span class="detail-value">2 hermanas mayores</span>
        </div>
        <div class="detail-item">
          <span class="detail-label">Mascota:</span>
          <span class="detail-value">Haru y Bailey</span>
        </div>
      </div>
    </div>

    <div class="story-section">
      <h3><span class="icon">🏘️</span> La Historia de Mi Hogar</h3>
      
      <p>
       Málaga es un municipio de Santander, Colombia, que se caracteriza por su clima frío
        y paisajes de montaña propios de la provincia de García Rovira. Es un lugar tranquilo, rodeado de naturaleza,
        donde la gente es muy cálida y acogedora. Lo chévere de Málaga es poder disfrutar de su aire puro, su gastronomía
        típica santandereana y las vistas de los páramos que lo rodean, además de ser un punto clave para explorar la región.
        A lo largo de los años he residido en diferentes lugares
        mas sin embargo hace 13 años me mude a Bucaramanga, 
        donde viví en un apartamento ubicado en las cercanías del sector Provenza. 
        En la actualidad resido en un conjunto de casas, un espacio más amplio y adecuado para la vida familiar. 
        Este lugar se ha enriquecido con la llegada de dos nuevos integrantes: Haru y Bailey, dos perros 
        de raza golden retriever que se han convertido en parte fundamental del hogar. Cada lugar en el que he 
        vivido ha dejado recuerdos significativos, y lo que los hace especiales es la manera en que cada espacio 
        se transforma con las experiencias compartidas en familia.
      </p>
    </div>

    <div class="nav-footer">
      <a href="/" class="nav-btn secondary">🏠 Inicio</a>
      <a href="/infancia" class="nav-btn primary">👶 Mi Infancia →</a>
    </div>
    <br>
  </div>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Mi Educación — [TU NOMBRE]</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">
  <style>
    :root{
      --bg-1: #0f172a;
      --accent-1: #f97316;
      --accent-2: #ea580c;
      --text: #e6eef8;
      --muted: #9aa6bf;
      --radius: 18px;
    }

    *{box-sizing:border-box}
    html,body{height:100%;margin:0}
    body{
      font-family: 'Inter', sans-serif;
      background: radial-gradient(1200px 600px at 10% 10%, rgba(249,115,22,0.15), transparent 8%),
                  linear-gradient(180deg,var(--bg-1), #081126 80%);
      color:var(--text);min-height:100vh;padding:40px 20px;
    }

    .container{max-width:900px;margin:0 auto;}

    .back-btn{
      display:inline-flex;align-items:center;gap:8px;margin-bottom:24px;
      padding:8px 16px;border-radius:12px;background:rgba(255,255,255,0.05);
      color:var(--text);text-decoration:none;font-weight:500;
      border:1px solid rgba(255,255,255,0.06);transition:all .18s ease;
    }
    .back-btn:hover{background:rgba(255,255,255,0.08)}

    .header{text-align:center;margin-bottom:40px;}
    .header h1{
      font-size:2.5rem;font-weight:800;margin:0 0 12px 0;
      background:linear-gradient(135deg,var(--accent-1),var(--accent-2));
      -webkit-background-clip:text;-webkit-text-fill-color:transparent;
    }

    .education-card{
      background:linear-gradient(180deg,rgba(255,255,255,0.04),rgba(255,255,255,0.02));
      border-radius:var(--radius);padding:28px;margin-bottom:24px;
      border:1px solid rgba(255,255,255,0.06);
      position:relative;overflow:hidden;
    }

    .education-card::before{
      content:'';position:absolute;top:0;left:0;right:0;height:4px;
      background:linear-gradient(90deg,var(--accent-1),var(--accent-2));
    }

    .education-header{
      display:flex;align-items:center;gap:16px;margin-bottom:16px;
    }

    .education-icon{
      font-size:32px;
    }

    .education-info h3{
      margin:0 0 4px 0;font-size:1.3rem;font-weight:700;color:var(--text);
    }

    .institution{
      color:var(--accent-1);font-weight:600;font-size:1.1rem;margin:0 0 4px 0;
    }

    .period{
      color:var(--muted);font-size:0.9rem;
    }

    .details{
      color:var(--muted);line-height:1.7;margin-top:16px;
    }

    .details ul{
      margin:8px 0;padding-left:20px;
    }

    .details li{
      margin-bottom:6px;
    }
  </style>
</head>
<body>
  <div class="container">
    <a href="/" class="back-btn">← Volver al Inicio</a>
    
    <div class="header">
      <h1>🎓 Mi Formación Académica</h1>
      <p style="color:var(--muted);font-size:1.1rem;">El camino educativo que me ha formado</p>
    </div>

    <!-- EDUCACIÓN SECUNDARIA -->
    <div class="education-card">
      <div class="education-header">
        <div class="education-icon">🏫</div>
        <div class="education-info">
          <h3>Educación Secundaria</h3>
          <div class="institution">Colegio Adventista Libertad</div>
          <div class="period">2012 - 2022</div>
        </div>
      </div>
      
      <div class="details">
        <p><strong style="color:var(--accent-1);">Título obtenido:</strong> Bachiller Académico</p>
        <p><strong style="color:var(--accent-1);">Experiencia:</strong> 
        Mi experiencia en el colegio fue una etapa de aprendizaje, crecimiento
        personal y construcción de amistades.</p>
      </div>
    </div>

    <!-- EDUCACIÓN PROFESIONAL -->
     <div class="education-card">
      <div class="education-header">
        <div class="education-icon">🎓</div>
        <div class="education-info">
          <h3>Educación Superior</h3>
          <div class="institution">Universidad Autónoma de Bucaramanga</div>
          <div class="period">2023 - 2027</div>
        </div>
      </div>
      
      <div class="details">
        <p><strong style="color:var(--accent-1);">Carrera:</strong> Ingeniería de Sistemas</p>
        <p><strong style="color:var(--accent-1);">Semestre actual:</strong> 5 semestre</p>
        
  </div>
</body>
</html>
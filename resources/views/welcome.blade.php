<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Mi Biografía — Cesar Solano</title>
  <!-- Fuente moderna -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">
  <style>
    :root{
      --bg-1: #0f172a; /* deep navy */
      --accent-1: #7c5cff; /* violet */
      --accent-2: #34d399; /* teal */
      --glass: rgba(255,255,255,0.07);
      --card-bg: rgba(255,255,255,0.03);
      --text: #e6eef8;
      --muted: #9aa6bf;
      --radius: 18px;
    }

    *{box-sizing:border-box}
    html,body{height:100%;margin:0}
    body{
      font-family: 'Inter', system-ui, -apple-system, 'Segoe UI', Roboto, 'Helvetica Neue', Arial;
      background: radial-gradient(1200px 600px at 10% 10%, rgba(124,92,255,0.18), transparent 8%),
                  radial-gradient(800px 450px at 95% 90%, rgba(52,211,153,0.08), transparent 8%),
                  linear-gradient(180deg,var(--bg-1), #081126 80%);
      color:var(--text);
      display:flex;
      align-items:center;
      justify-content:center;
      padding:40px;
    }

    .wrap{
      width:100%;
      max-width:1000px;
    }

    .card{
      background: linear-gradient(180deg, rgba(255,255,255,0.02), rgba(255,255,255,0.01));
      border-radius:calc(var(--radius) + 6px);
      padding:28px;
      box-shadow: 0 10px 30px rgba(2,6,23,0.6), inset 0 1px 0 rgba(255,255,255,0.02);
      border:1px solid rgba(255,255,255,0.04);
      backdrop-filter: blur(8px) saturate(120%);
      overflow:hidden;
    }

    .grid{
      display:grid;
      grid-template-columns: 260px 1fr;
      gap:24px;
      align-items:start;
    }

    /* SIDEBAR */
    .sidebar{
      background:linear-gradient(135deg, rgba(255,255,255,0.02), rgba(255,255,255,0.01));
      padding:22px;
      border-radius:14px;
      text-align:center;
      border:1px solid rgba(255,255,255,0.03);
    }

    .avatar{
      width:120px;height:120px;border-radius:999px;margin:0 auto 14px;
      display:flex;align-items:center;justify-content:center;font-weight:700;font-size:28px;
      background: linear-gradient(135deg,var(--accent-1), #5eead4);
      color:#021024;
      box-shadow: 0 8px 20px rgba(124,92,255,0.18);
    }

    .name{font-size:1.15rem;font-weight:800;margin:6px 0;color:var(--text)}
    .role{color:var(--muted);font-size:0.9rem;margin-bottom:10px}

    .bio-short{font-size:0.95rem;color:var(--muted);line-height:1.5;margin-top:12px}

    .nav{
      margin-top:18px;display:flex;flex-direction:column;gap:10px;align-items:center
    }
    .nav a{
      width:100%;display:inline-flex;align-items:center;justify-content:center;padding:10px 12px;border-radius:999px;
      text-decoration:none;color:var(--text);font-weight:600;border:1px solid rgba(255,255,255,0.03);
      background: linear-gradient(180deg, rgba(255,255,255,0.01), rgba(255,255,255,0.00));
      transition: transform .18s ease, box-shadow .18s ease;
    }
    .nav a:hover{transform:translateY(-4px);box-shadow:0 8px 20px rgba(2,6,23,0.5)}

    /* MAIN */
    .main{
      padding:6px 4px 4px 4px;
    }

    .hero{
      display:flex;align-items:center;justify-content:space-between;gap:18px;margin-bottom:18px;
    }

    .headline{
      text-align:left
    }

    .headline h1{margin:0;font-size:1.9rem;letter-spacing:-0.02em}
    .headline p{margin:6px 0 0;color:var(--muted)}

    .cta-row{display:flex;gap:12px;align-items:center}
    .btn{
      padding:10px 16px;border-radius:12px;background:linear-gradient(90deg,var(--accent-1), #5eead4);
      color:#021024;font-weight:700;text-decoration:none;border:none;cursor:pointer;box-shadow:0 8px 18px rgba(124,92,255,0.12);
      transition: transform .18s ease;
    }
    .btn:hover{transform:translateY(-2px)}
    .btn.secondary{
      background:transparent;border:1px solid rgba(255,255,255,0.06);color:var(--text);font-weight:600
    }

    /* Sections */
    .sections{display:grid;grid-template-columns:repeat(2,1fr);gap:14px}
    .section{
      padding:14px;border-radius:12px;background:var(--card-bg);border:1px solid rgba(255,255,255,0.02);
      min-height:100px;
    }

    .section h3{margin:0 0 10px 0;font-size:1rem}
    .meta{color:var(--muted);font-size:0.9rem;line-height:1.45}

    /* footer */
    .card-footer{margin-top:16px;text-align:center;color:var(--muted);font-size:0.9rem}

    /* Responsive */
    @media (max-width:880px){
      .grid{grid-template-columns:1fr;}
      .hero{flex-direction:column;align-items:flex-start}
      .sections{grid-template-columns:1fr}
      .avatar{width:96px;height:96px;font-size:22px}
    }

    /* Reduced motion */
    @media (prefers-reduced-motion: reduce){
      .nav a, .btn{transition:none}
    }
  </style>
</head>
<body>
  <div class="wrap">
    <div class="card" role="main" aria-label="Biografía de Cesar Solano">
      <div class="grid">
        <aside class="sidebar" aria-labelledby="perfil-title">
          <div class="avatar" aria-hidden="true">CS</div>
          <div id="perfil-title" class="name">Cesar Stiven Solano Clavijo</div>
          <div class="role">Estudiante de Ingeniería de Sistemas</div>

          <nav class="nav" aria-label="Navegación principal">
            <a href="/">Inicio</a>
            <a href="/origen">Mi Origen</a>
            <a href="/infancia">Infancia</a>
            <a href="/adolescencia">Adolescencia</a>
            <a href="/actualidad">Actualidad</a>
            <a href="/metas">Metas</a>
            <a href="/experiencia">Experiencia</a>
            <a href="/skills">Habilidades</a>
            <a href="/academy">Academia</a>

          </nav>
        </aside>

        <section class="main">
          <div class="hero">
            <div class="headline">
              <h1>Bienvenido a mi biografía</h1>
              <p>Explora mis orígenes, formación, proyectos y metas.</p>
            </div>

            <div class="cta-row" aria-hidden="true">
              <button class="btn">Descargar CV</button>
              <button class="btn secondary">Contactar</button>
            </div>
          </div>

          <div class="sections">
            <article class="section" id="origen">
              <h3>Mi Origen</h3>
              <p class="meta">Nacido en Málaga Santader en el año 2005...</p>
            </article>

            <article class="section" id="infancia">
              <h3>Infancia</h3>
              <p class="meta">En mis primeros años como todo niño, cambiaba casi todo el tiempo sobre las carreras que quería estudiar, como arquitectura, medicina bombero etc... </p>
            </article>

            <article class="section" id="adolescencia">
              <h3>Adolescencia</h3>
              <p class="meta">Estudie mi primaria y bachillerato en colegio Adventista Libertad donde...</p>
            </article>

            <article class="section" id="actualidad">
              <h3>Actualidad</h3>
              <p class="meta">Me encuentro cursando 5to semestre de ing de sistemas y... </p>
            </article>
          </div>

          <div class="card-footer"> CesarSolano_@Unab ©2025</div>
        </section>
      </div>
    </div>
  </div>
</body>
</html>
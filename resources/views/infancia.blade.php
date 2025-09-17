<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Mi Infancia — [TU NOMBRE]</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">
  <style>
    :root{
      --bg-1: #0f172a;
      --accent-1: #7c5cff;
      --accent-2: #34d399;
      --accent-3: #ff6b6b;
      --accent-4: #4ecdc4;
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
      background: radial-gradient(1200px 600px at 10% 10%, rgba(255,107,107,0.12), transparent 8%),
                  radial-gradient(800px 450px at 95% 90%, rgba(78,205,196,0.08), transparent 8%),
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
      background:linear-gradient(135deg,var(--accent-3),#ffa8a8);
      -webkit-background-clip:text;-webkit-text-fill-color:transparent;
      background-clip:text;
    }
    .header p{color:var(--muted);font-size:1.1rem;margin:0}

    .timeline{
      position:relative;
      padding-left:40px;
    }

    .timeline::before{
      content:'';
      position:absolute;
      left:20px;
      top:0;
      bottom:0;
      width:3px;
      background:linear-gradient(180deg,var(--accent-3),var(--accent-4));
      border-radius:2px;
    }

    .timeline-item{
      position:relative;
      margin-bottom:32px;
    }

    .timeline-item::before{
      content:'';
      position:absolute;
      left:-50px;
      top:24px;
      width:20px;
      height:20px;
      background:linear-gradient(135deg,var(--accent-3),var(--accent-4));
      border-radius:50%;
      border:4px solid var(--bg-1);
      box-shadow:0 0 0 4px rgba(255,107,107,0.2);
    }

    .memory-card{
      background:linear-gradient(180deg,rgba(255,255,255,0.04),rgba(255,255,255,0.02));
      border-radius:var(--radius);
      padding:24px;
      border:1px solid rgba(255,255,255,0.06);
      backdrop-filter:blur(12px);
      position:relative;
      overflow:hidden;
      transition:transform .3s ease;
    }

    .memory-card:hover{
      transform:translateY(-4px);
    }

    .memory-card::before{
      content:'';
      position:absolute;
      top:0;
      left:0;
      right:0;
      height:3px;
      background:linear-gradient(90deg,var(--accent-3),var(--accent-4));
    }

    .age-tag{
      display:inline-block;
      background:linear-gradient(90deg,var(--accent-3),#ff8a8a);
      color:#021024;
      padding:6px 16px;
      border-radius:20px;
      font-size:0.85rem;
      font-weight:700;
      margin-bottom:12px;
    }

    .memory-card h3{
      display:flex;
      align-items:center;
      gap:12px;
      margin:0 0 16px 0;
      font-size:1.3rem;
      font-weight:700;
      color:var(--text);
    }

    .memory-card .icon{
      font-size:24px;
    }

    .memory-card p{
      color:var(--muted);
      line-height:1.7;
      margin:0;
      font-size:1rem;
    }

    .highlight-memory{
      background:linear-gradient(180deg,rgba(255,107,107,0.08),rgba(78,205,196,0.06));
      border:1px solid rgba(255,107,107,0.15);
      transform:scale(1.02);
    }

    .highlight-memory .age-tag{
      background:linear-gradient(90deg,#ffd93d,#ff6b6b);
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
      .timeline{padding-left:30px}
      .timeline::before{left:15px}
      .timeline-item::before{left:-40px;width:16px;height:16px}
      .header h1{font-size:2rem}
      .nav-footer{flex-direction:column;align-items:center}
    }
  </style>
</head>
<body>
  <div class="container">
    <a href="/origen" class="back-btn">← Mi Origen</a>
    
    <div class="header">
      <h1>👶 Mi Infancia</h1>
      <p>Los primeros años que marcaron mi vida y despertaron mi curiosidad</p>
    </div>

    <div class="timeline">
      <div class="timeline-item">
        <div class="memory-card">
          <div class="age-tag">3-5 años</div>
          <h3><span class="icon">🧸</span> Primeros Recuerdos</h3>
          <p>
           Mis primeros recuerdos están llenos de juegos y diversión. Mis juguetes
            favoritos eran los carros tipo Hot Wheels, con los que pasaba horas
            imaginando carreras. También me gustaba correr, jugar fútbol y participar
            en juegos como el escondite o el ponchado. Era muy inquieto y disfrutaba
            treparme a los árboles, además de asistir a una guardería donde jugaba con otros
            niños y hacía manualidades. En casa, encontraba siempre la forma de divertirme
            con mis juegos y mi energía inagotable.
          </p>
        </div>
      </div>
      
      <div class="timeline-item">
        <div class="memory-card">
          <div class="age-tag">6-8 años</div>
          <h3><span class="icon">🏫</span> Primaria Inicial</h3>
          <p>
            Cuando tenía 6 años me mudé a Bucaramanga y allí empecé primero de primaria. 
            El primer día fue emocionante porque todo era nuevo, pero pronto hice amigos 
            gracias al fútbol, que siempre fue una forma fácil de acercarme a los demás. 
            Mi maestra favorita me acompañó en ese proceso de adaptación y me ayudó a sentirme 
            más seguro en el colegio. Entre las materias, me gustaba mucho informática, ya que 
            a veces nos dejaban jugar en Friv, y educación física, porque podíamos practicar 
            deportes y divertirnos juntos. Fueron años llenos de aprendizajes y momentos que recuerdo con cariño
          </p>
        </div>
      </div>
      
      <div class="timeline-item">
        <div class="memory-card">
          <div class="age-tag">9-11 años</div>
          <h3><span class="icon">⚽</span> Juegos y Pasatiempos</h3>
          <p>
            En mi tiempo libre disfrutaba mucho practicar deportes, especialmente fútbol
            y baloncesto, que eran mis favoritos. Me encantaba ver
            caricaturas y programas como Bajoterra, Power Rangers o La Liga de la Justicia,
            que me llenaban de emoción y aventuras. Después del colegio, lo que más me gustaba
            era jugar con mis amigos o ver películas, actividades que hacían que mis tardes
            fueran siempre entretenidas y especiales.
          </p>
        </div>
      </div>
    

    <div class="nav-footer">
      <a href="/adolescencia" class="nav-btn primary">🧑 Adolescencia →</a>
    </div>
  </div>
</body>
</html>
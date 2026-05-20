<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Profil & Biodata</title>
<style>
  :root {
    --bg: #0f172a;
    --card: #1e293b;
    --text: #e2e8f0;
    --muted: #94a3b8;
    --accent: #3b82f6;
    --radius: 16px;
  }

    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Inter', system-ui, sans-serif;
  }

  body {
    background: var(--bg);
    color: var(--text);
    display: flex;
    justify-content: center;
    padding: 24px;
    min-height: 100vh;
  }

  .card {
    background: var(--card);
    border-radius: var(--radius);
    padding: 28px;
    width: 100%;
    max-width: 700px;
    box-shadow: 0 8px 24px rgba(0,0,0,0.3);
  }

  .profile {
    display: flex;
    gap: 20px;
    align-items: center;
    flex-wrap: wrap;
  }

  .avatar {
    width: 110px;
    height: 110px;
    border-radius: 50%;
    object-fit: cover;
    border: 3px solid var(--accent);
  }

  .profile-info h1 {
    font-size: 1.8rem;
    margin-bottom: 6px;
  }

  .profile-info p {
    color: var(--muted);
    font-size: 0.95rem;
  }

  .biodata {
    margin-top: 28px;
    display: grid;
    grid-template-columns: 160px 1fr;
    gap: 12px 16px;
  }

  .biodata .label {
    color: var(--muted);
    font-weight: 600;
  }

  .biodata .value {
    color: var(--text);
  }

  .badge {
    display: inline-block;
    background: var(--accent);
    color: white;
    padding: 4px 10px;
    border-radius: 999px;
    font-size: 0.8rem;
    margin-top: 8px;
  }

  /* Responsive */
  @media (max-width: 600px) {
    .profile {
      flex-direction: column;
      text-align: center;
    }
    
    .biodata {
      grid-template-columns: 1fr;
    }
    
    .biodata .label {
      margin-top: 8px;
    }
  }
</style>
</head>
<body>
  <div class="card">
    <div class="profile">
      <img src="https://via.placeholder.com/110" alt="Foto Profil" class="avatar">
      <div class="profile-info">
        <h1>Budi Santoso</h1>
        <p>UI/UX Designer & Frontend Developer</p>
        <span class="badge">Tersedia untuk project</span>
      </div>
    </div>

    <div class="biodata">
      <div class="label">Nama Lengkap</div>
      <div class="value">Budi Santoso</div>

      <div class="label">Tempat, Tanggal Lahir</div>
      <div class="value">Jakarta, 12 Januari 2000</div>

      <div class="label">Email</div>
      <div class="value">budi.santoso@email.com</div>

      <div class="label">Telepon</div>
      <div class="value">+62 812-3456-7890</div>

      <div class="label">Alamat</div>
      <div class="value">Jl. Mawar No. 10, Jakarta Selatan</div>

      <div class="label">Keahlian</div>
      <div class="value">HTML, CSS, JavaScript, Figma, React</div>

      <div class="label">Tentang Saya</div>
      <div class="value">Saya suka membangun antarmuka yang bersih, cepat, dan mudah digunakan. Fokus saya di desain responsif dan pengalaman pengguna.</div>
    </div>
  </div>
</body>
</html>

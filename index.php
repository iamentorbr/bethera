
<?php include 'includes/header.php'; ?>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Poppins:wght@300;500&display=swap" rel="stylesheet">
<style>
body {
  font-family: 'Poppins', sans-serif;
  background-color: #ffffff;
  color: #333;
  margin: 0;
  padding: 0;
}
nav {
  background-color: #f4f4f9;
  padding: 20px;
  text-align: center;
  box-shadow: 0 2px 4px rgba(0,0,0,0.05);
}
nav a {
  margin: 0 15px;
  text-decoration: none;
  color: #512da8;
  font-weight: bold;
}
.container {
  max-width: 900px;
  margin: 60px auto;
  padding: 20px;
  text-align: center;
}
.titulo {
  font-family: 'Playfair Display', serif;
  font-size: 48px;
  color: #512da8;
  margin-bottom: 10px;
}
.subtitulo {
  font-size: 22px;
  color: #b39ddb;
  margin-bottom: 30px;
}
.descricao {
  font-size: 18px;
  line-height: 1.6;
  margin-bottom: 40px;
  padding: 0 10px;
}
.botao-assine {
  display: inline-block;
  padding: 15px 30px;
  background-color: #d4af37;
  color: #fff;
  text-decoration: none;
  border-radius: 30px;
  font-weight: bold;
  transition: background 0.3s;
}
.botao-assine:hover {
  background-color: #b58d2b;
}
.sessao-cards {
  padding: 50px 20px;
  background-color: #f9f7fc;
  text-align: center;
}
.cards {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 30px;
  margin-top: 30px;
}
.card {
  background: white;
  border-radius: 16px;
  box-shadow: 0 2px 8px rgba(0,0,0,0.06);
  padding: 25px;
  width: 280px;
  transition: transform 0.3s ease;
}
.card:hover {
  transform: translateY(-8px);
}
.card span {
  font-size: 40px;
}
.card h3 {
  margin-top: 15px;
  font-family: 'Playfair Display', serif;
  color: #512da8;
}
.card p {
  margin-top: 10px;
  font-size: 15px;
  color: #555;
}
</style>

<nav>
  <a href="index.php">BETHERA</a>
  <a href="auth/login.php">ÁREA DO PACIENTE</a>
  <a href="#">CONHEÇA NOSSO PLANO</a>
</nav>

<div class="container">
  <h1 class="titulo">BETHERA</h1>
  <h2 class="subtitulo">Seu espaço sagrado de cuidado, entrega e transformação.</h2>
  <p class="descricao">
    Uma plataforma criada para terapeutas da Nova Era: aqui você organiza suas sessões, compartilha áudios e reflexões com seus pacientes, constrói vínculos profundos e entrega a jornada de cura com presença e propósito.
  </p>
  <a href="auth/cadastro.php" class="botao-assine">QUERO SER TERAPEUTA BETHERA</a>
</div>

<section class="sessao-cards">
  <h2>Como Funciona</h2>
  <div class="cards">
    <div class="card">
      <span>🧘‍♀️</span>
      <h3>Cadastre-se como Terapeuta</h3>
      <p>Crie sua conta gratuitamente e comece a configurar seu espaço terapêutico online.</p>
    </div>
    <div class="card">
      <span>💼</span>
      <h3>Organize seus atendimentos</h3>
      <p>Agende sessões, compartilhe áudios, envie exercícios e resumos com facilidade.</p>
    </div>
    <div class="card">
      <span>✨</span>
      <h3>Entregue Transformação</h3>
      <p>Ofereça um ambiente seguro e acolhedor para seus pacientes evoluírem com você.</p>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>

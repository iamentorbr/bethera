
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
</style>

<div class="container">
  <h1 class="titulo">BETHERA</h1>
  <h2 class="subtitulo">Seu espaço sagrado de cuidado, entrega e transformação.</h2>
  <p class="descricao">
    Uma plataforma criada para terapeutas da Nova Era: aqui você organiza suas sessões, compartilha áudios e reflexões com seus pacientes, constrói vínculos profundos e entrega a jornada de cura com presença e propósito.
  </p>
  <a href="auth/cadastro.php" class="botao-assine">QUERO SER TERAPEUTA BETHERA</a>
</div>

<?php include 'includes/footer.php'; ?>

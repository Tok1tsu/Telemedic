
<?php
  if(isset($_POST['submit']))
  {
//    print_r($_POST['nome']);
//    print_r($_POST['email']);
//    print_r($_POST['password']);
//    print_r($_POST['telefone']);
//    print_r($_POST['cep']);

      include_once('config.php');

      $nome = $_POST['nome'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $telefone = $_POST['telefone'];
      $cep = $_POST['cep'];

      $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, email, password, telefone, cep) VALUES ('$nome', '$email', '$password', '$telefone', '$cep')");

  }

?>
<html>
<head>
<title>Telemedic</title>
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
<link rel="shortcut icon" href="assets/images/telemedic-com-sinal-e-sem-fundo-removebg-preview-1.png" type="image/x-icon">
<meta name="description" content="">
<script src="https://apis.google.com/js/platform.js" async defer></script>
</head>
<body>
  <form action="registro.php" method="POST">
  <div class="form-container">
      <p class="title">Registro</p>
      <a class="form">
        <input type="text" name="nome" class="input" placeholder="Nome" id="nome" required>

        <input type="email" name="email" class="input" placeholder="Email" id="email" required>

        <input type="password" name="password" class="input" placeholder="Senha" id="password" required>

        <input type="password" class="input" placeholder="Senha novamente" id="senha2" required>

        <input type="text" name="telefone" class="input" placeholder="+55 (00) 00000-0000" id="telefone" required>

        <input type="text" name="cep" class="input" placeholder="CEP" id="cep" required>
        
        <button type="submit" name="submit" class="form-btn" id="submit">Criar conta</button>
      </a>
  </form>
</body>
<style>
body {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  margin: 0;
}
.form-container {
  width: 350px;
  height: 650px;
  background-color: #fff;
  box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
  border-radius: 10px;
  box-sizing: border-box;
  padding: 20px 30px;
}

.title {
  text-align: center;
  font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande",
        "Lucida Sans Unicode", Geneva, Verdana, sans-serif;
  margin: 10px 0 30px 0;
  font-size: 28px;
  font-weight: 800;
}

.form {
  width: 100%;
  display: flex;
  flex-direction: column;
  gap: 18px;
  margin-bottom: 15px;
}

.input {
  border-radius: 20px;
  border: 1px solid #c0c0c0;
  outline: 0 !important;
  box-sizing: border-box;
  padding: 12px 15px;
}

.page-link {
  text-decoration: underline;
  margin: 0;
  text-align: end;
  color: #747474;
  text-decoration-color: #747474;
}

.page-link-label {
  cursor: pointer;
  font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande",
        "Lucida Sans Unicode", Geneva, Verdana, sans-serif;
  font-size: 9px;
  font-weight: 700;
}

.page-link-label:hover {
  color: #000;
}

.form-btn {
  padding: 10px 15px;
  font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande",
        "Lucida Sans Unicode", Geneva, Verdana, sans-serif;
  border-radius: 20px;
  border: 0 !important;
  outline: 0 !important;
  background: teal;
  color: white;
  cursor: pointer;
  box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
}

.form-btn:active {
  box-shadow: none;
}

.sign-up-label {
  margin: 0;
  font-size: 10px;
  color: #747474;
  font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande",
        "Lucida Sans Unicode", Geneva, Verdana, sans-serif;
}

.sign-up-link {
  margin-left: 1px;
  font-size: 11px;
  text-decoration: underline;
  text-decoration-color: teal;
  color: teal;
  cursor: pointer;
  font-weight: 800;
  font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande",
        "Lucida Sans Unicode", Geneva, Verdana, sans-serif;
}

.buttons-container {
  width: 100%;
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
  margin-top: 20px;
  gap: 15px;
}

.apple-login-button,
    .google-login-button {
  border-radius: 20px;
  box-sizing: border-box;
  padding: 10px 15px;
  box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px,
        rgba(0, 0, 0, 0.06) 0px 0px 0px 1px;
  cursor: pointer;
  display: flex;
  justify-content: center;
  align-items: center;
  font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande",
        "Lucida Sans Unicode", Geneva, Verdana, sans-serif;
  font-size: 11px;
  gap: 5px;
}

.apple-login-button {
  background-color: #000;
  color: #fff;
  border: 2px solid #000;
}

.google-login-button {
  border: 2px solid #747474;
}

.apple-icon,
    .google-icon {
  font-size: 18px;
  margin-bottom: 1px;
}
</style>
</html>
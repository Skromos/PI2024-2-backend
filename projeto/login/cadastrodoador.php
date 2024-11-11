<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário de Coleta</title>
  <style>
    body {
      font-family: 'Arial', sans-serif;
      margin: 0;
      padding: 0;
      display: flex;
      height: 100vh;
      background: white;
    }

    .left-side {
      flex: 1;
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
      overflow: hidden;
    }

    .left-side img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .right-side {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .container {
      padding: 70px;
      background-color: #fff;
      border-radius: 8px;
      position: relative;
      box-sizing: border-box;
      text-align: center;
    }

    .logo-button {
      width: 130px;
      height: 65px;
    }

    h2 {
      text-align: center;
      color: #333;
      margin-bottom: 15px;
      font-size: 22px;
      font-weight: bold;
      margin-top: 0;
    }

    .form-group {
      width: 100%;
      display: flex;
      flex-direction: column;
      align-items: flex-start;
      margin-bottom: 10px;
      padding: 0 10px;
    }

    label {
      margin-bottom: 4px;
      font-size: 13px;
      color: #555;
    }

    input[type="text"],
    input[type="email"],
    textarea,
    select {
      width: 100%;
      padding: 6px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      font-size: 12px;
    }

    input[type="radio"],
    input[type="checkbox"] {
      margin-right: 8px;
    }

    button {
      width: 100%;
      padding: 10px;
      background-color: #FA5058;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 15px;
      transition: background-color 0.3s ease;
      font-weight: bold;
      margin-top: 10px;
    }

    button:hover {
      background-color: #ff3445;
    }

    select {
      appearance: none;
      -webkit-appearance: none;
      -moz-appearance: none;
      padding: 6px;
      cursor: pointer;
    }

    select::-ms-expand {
      display: none;
    }

    @media screen and (max-width: 600px) {
      body {
        flex-direction: column;
      }

      .left-side,
      .right-side {
        flex: none;
        width: 100%;
      }

      .container {
        padding: 10px;
      }
    }
  </style>
</head>

<body style="display: grid; grid-template-columns: repeat(2, minmax(0, 1fr));">
  <div class="left-side">
    <img src="imagens/imagemhomen.png" alt="Imagem de Fundo">
  </div>
  <div class="container">
    <a href="./index.php" style="margin-bottom: 40px;">
      <img src="imagens/iconequerodoar.png" class="logo-button"/>
    </a>
    <h2>Cadastro doador</h2>
    <form action="#" method="post">
      <div class="form-group">
        <label for="nomeCompleto">Nome completo:</label>
        <input type="text" id="nomeCompleto" name="nomeCompleto" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="estadoConservacao">CPF:</label>
        <input type="text" id="estadoConservacao" name="estadoConservacao" required>
      </div>
      <div class="form-group">
        <label for="tipoItem">Endereço:</label>
        <input type="text" id="tipoItem" name="tipoItem" required>
      </div>
      <div class="form-group">
        <label for="tamanho">Telefone para contato:</label>
        <input type="text" id="tamanho" name="tamanho" required>
      </div>
      <div class="form-group">
        <label for="genero">Gênero:</label>
        <div>
          <input type="radio" id="masculino" name="genero" value="masculino" required>
          <label for="masculino">Masculino</label>
          <input type="radio" id="feminino" name="genero" value="feminino" required>
          <label for="feminino">Feminino</label>
        </div>
      </div>
      <div class="form-group">
        <label for="imagem">Upload de laudo médico:</label>
        <input type="file" id="imagem" name="imagem" required accept="image/*">
      </div>
      <div class="form-group">
        <label for="coleta">Local de conclusão do cadastro:</label>
        <select id="coleta" name="coleta" required>
          <option value="" disabled selected>Selecione o local de coleta</option>
          <option value="unievangelica">UniEvangélica</option>
          <option value="camaraMunicipal">Câmara Municipal de Anápolis</option>
          <option value="ubsJundiai">UBS Jundiaí</option>
          <option value="ubsJundiai">Espaço da Oportunidade</option>
        </select>
      </div>
      <div class="form-group">
        <input type="checkbox" id="termos" name="termos" required>
        <label for="termos">Li e aceito os seguintes termos</label>
      </div>
      <button type="submit">Enviar</button>
    </form>
  </div>
</body>

</html>

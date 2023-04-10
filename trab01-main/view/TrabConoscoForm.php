<?php 
include "../controller/TrabConoscoController.php";
include "../Util.php";
util::verificar();


$TrabConosco = new TrabConoscoController();

  if(!empty($_POST['id'])){
    $TrabConosco->update($_POST);
    header("location: TrabConoscoList.php");

  } elseif(!empty($_POST)) {
    $TrabConosco->salvar($_POST);
    header("location: TrabConoscoList.php");

  }

  if(!empty($_GET['id'])){
    $data = $TrabConosco->buscar($_GET['id']);
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  </head>
  <body>

  <nav class="navbar navbar-expand-sm navbar-dark bg-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="../index.php">LG Agência</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="TrabConoscoList.php">Currículos recebidos </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="UsuarioList.php">Usuários Cadastrados</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ReuniaoList.php">Lista de Reuniões</a>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto">
      <li class="nav-item">
  <a href="login.php">
    <button class="btn btn-primary" type="button">Logar</button>
           </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</header>
 <br>
  <br>
     <br>
    <div class="container">
      <h1>Formulário Trabalhe Conosco</h1>
        <form action="TrabConoscoForm.php" method="POST">
            <input type="hidden" name="id" value="<?php echo !empty($data->id) ? $data->id : "" ?>"/><br>
            <div class="col-3">
            <label class="form-label">Nome</label><br>
            <input type="text" class="form-control" name="nome" value="<?php echo !empty($data->nome) ? $data->nome : "" ?>">
        </div>
            <div class="col-3">
            <label class="form-label">Email</label><br>
            <input type="text" class="form-control" name="email" value="<?php echo !empty($data->email) ? $data->email : "" ?>">
        </div>
            <div class="col-3">
            <label class="form-label">Telefone</label><br>
            <input type="text" class="form-control" name="telefone" value="<?php echo !empty($data->telefone) ? $data->telefone : "" ?>">
        </div>
            <div class="col-3">
            <label class="form-label">CPF</label><br>
            <input type="text" class="form-control" name="CPF" value="<?php echo !empty($data->CPF) ? $data->CPF : "" ?>">
        </div>
        <br>
             <div class="mb-3">
    <select class="form-select" aria-label="Default select" name="funcao">
        <option selected>Selecione sua função</option>
        <option value="Gestor de Tráfego" <?php if (!empty($data->funcao) && $data->funcao == "1") echo "selected"; ?>>Gestor de tráfego</option>
        <option value=" Web Designer" <?php if (!empty($data->funcao) && $data->funcao == "2") echo "selected"; ?>>Web Designer</option>
        <option value=" Copywriter" <?php if (!empty($data->funcao) && $data->funcao == "3") echo "selected"; ?>>Copywriter</option>
        <option value=" Social Media" <?php if (!empty($data->funcao) && $data->funcao == "4") echo "selected"; ?>>Social Media</option>
    </select>
</div>
            <div class="mb-3">
            <label for="formFile" class="form-label">Adicione seu portfólio</label>
            <input class="form-control" type="file" id="formFile">
        </div>
            <input type="submit" class="btn btn-success" value="Salvar"/>
            <a href="TrabConoscoList.php" class="btn btn-primary">Voltar</a>
        </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
	</body>
</html>
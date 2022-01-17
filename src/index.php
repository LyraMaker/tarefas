<!doctype html>
<html lang="en">

<head>
  <title>Agendador de Tarefas</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">
  <!-- Bootstrap CSS v5.0.2 -->
  <script defer src="https://friconix.com/cdn/friconix.js"> </script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
  <header class="py-3 shadow-sm bg-primary bg-gradient text-white">
    <div class="text-center">
      <h1>Agendador de Tarefas em PHP</h1>
      <p class="font-monospace">Desenvolvido em PHP, JS e Bootstrap</p>
    </div>
  </header>
  <main class="container p-2">
    <form action="" method="post" class="m-lg-5 m-4">

      <div class="input-group mb-4">
        <span class="input-group-text fw-bold">Nome da tarefa</span>
        <input type="text" class="form-control" name="nome" id="txtNome">
      </div>

      <div class="input-group mb-4">
        <span class="input-group-text fw-bold">Descrição</span>
        <textarea type="text" class="form-control" name="descricao" id="txtDescricao"></textarea>
      </div>
      <div class="input-group mb-4">
        <span class="input-group-text fw-bold">Início</span>
        <input type="date" class="form-control" name="datainicio" id="txtInicio">
        <span class="input-group-text fw-bold">Fim</span>
        <input type="date" class="form-control" name="datafim" id="txtFim">
      </div>
      <div class="input-group mb-4">
        <span class="input-group-text fw-bold">Urgência</span>
        <select type="text" class="form-select" name="urgencia" id="selurgencia" >
          <option value="Teste">Teste</option>
        </select>
      </div>
      <div class="d-flex mx-auto btn-group">
  <button type="button" class="btn btn-success"><i class="fi-xnsuxl-hard-floppy me-2"></i>Salvar</button>
  <button type="button" class="btn btn-danger"><i class="fi-cnsuxl-times-solid me-2"></i>Cancelar</button>
  <button type="button" class="btn btn-secondary"><i class="fi-xnsuxl-eraser-alt-solid me-2"></i>Limpar</button>
</div>


    </form>
  </main>
<footer class="container bg-light p-4 border-top d-flex justify-content-between">


  <p class="m-0 align-self-center">Desenvolvido por LyraMaker | 2021</p>
  <img class="align-self-center" src="img/icon.png" height="40px">

  
</footer>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
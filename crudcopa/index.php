<?php
   session_start();
   require 'dbcon.php';
?>
<!doctype html>
<html lang="pt-BR">
 <head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="css/style.css">
   <title>CRUD COPA</title>
</head>
<body>
   <div class="container mt-4">
     <?php include('message.php'); ?>
       <div class="row">
           <div class="col-md-12">
               <div class="card">
                   <div class="card-header text-center">
                       <h4>Detalhes do Time
                           <a class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Adicionar Time</a>
                       </h4>
                   </div>
<!-- modal cadastro -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastro de Times</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="code.php" method="POST">
        <div class="mb-3">
                               <label>Time</label>
                               <input type="text" name="time" class="form-control">
                           </div>



                           <div class="mb-3">
                               <label>País</label>
                               <input type="text" name="pais" class="form-control">
                           </div>
                           <div class="mb-3">
                               <label>Número de Títulos</label>
                               <input type="number" name="numtitulos" class="form-control">
                           </div>
                           <div class="mb-3">
                               <label>Treinador</label>
                               <input type="text" name="treinador" class="form-control">
                           </div>
                           <div class="mb-3">
                               <label>Cor do Uniforme</label>
                               <input type="text" name="coruniforme" class="form-control">
                           </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        <button type="submit" name="save_team" class="btn btn-primary">Salvar Time</button>
      </div>
    </div>
  </div>
</div>
</form>
<!-- fim do modal cadastro -->




                   <div class="card-body">
                       <table class="table table-dark table-striped">
                           <thead>
                               <tr class="table-light">
                                   <th>ID</th>
                                   <th>Time</th>
                                   <th>País</th>
                                   <th>Número de Títulos</th>
                                   <th>Treinador</th>
                                   <th>Cor do Uniforme</th>
                                   <th>Ação</th>
                               </tr>
                           </thead>
                           <tbody>
                               <?php
                                   $query = "SELECT * FROM tbtimes";
                                   $query_run = mysqli_query($con, $query);
                                   if(mysqli_num_rows($query_run) > 0)  {
                                       foreach($query_run as $team)    {
                                           ?>
                                           <tr>
                                               <td><?=$team['id']; ?></td>
                                               <td><?=$team['time']; ?></td>
                                               <td><?=$team['pais']; ?></td>
                                               <td><?=$team['numtitulos']; ?></td>
                                               <td><?=$team['treinador']; ?></td>
                                               <td><?=$team['coruniforme']; ?></td>
                                               <td>




                                                   <a href="team-view.php?id=<?= $team['id']; ?>" class="btn btn-info btn-sm">Visualizar</a>
                                                   <a href="team-edit.php?id=<?= $team['id']; ?>" class="btn btn-success btn-sm">Editar</a>
                                                   <form action="code.php" method="POST" class="d-inline">
                                                       <button type="submit" name="delete_team" value="<?=$team['id'];?>" class="btn btn-danger btn-sm">Deletar</button>
                                                   </form>
                                               </td>
                                           </tr>
                                           <?php
                                       }
                                   }
                                   else
                                   {
                                       echo "<h5> Nenhum time cadastrado </h5>";
                                   }
                               ?>
                           </tbody>
                       </table>
                    </div>
               </div>
           </div>
       </div>
   </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

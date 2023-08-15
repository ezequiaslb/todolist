<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>

    <?php include('header.php'); ?>

<main>
  <table>
    <thead>
      <tr>
        <th>Descrição</th>
        <th>Tipo</th>
        <th>Data de criação</th>
        <th>Imagem</th>
        <th>Ações</th>
      </tr>
    </thead>
    <tbody>
        
    <?php foreach($tarefas as $tarefa): ?>
        <tr>
          <td><?= $tarefa->descricao ?></td>
          <td><?= $tarefa->tipo ?></td>
          <td><?= $tarefa->data_criacao ?></td>
          <td><img src="<?= $tarefa->imagem ?>" alt="Imagem da tarefa"></td>
          <td>
            <a href="editar.php?id=<?= $tarefa->id ?>">Editar</a>
            <a href="excluir.php?id=<?= $tarefa->id ?>">Excluir</a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
    
  <?php include('footer.php'); ?>

</main>

</body>
</html>
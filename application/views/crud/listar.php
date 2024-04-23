<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
<a href="<?= base_url('home_site/cadastrar') ?>" type="button" class="btn btn-success">Cadastrar</a>
<table class="table">
  <thead>

    <tr>
      <th scope="col">id</th>
      <th scope="col">titulo</th>
      <th scope="col">titulo secutaria</th>
      <th scope="col">quatos</th>
      <th scope="col">banheiros</th>
      <th scope="col">opcionais</th>
      <th scope="col">hospedes</th>
      <th scope="col">Valor</th>
      <th scope="col">img</th>
      <th scope="col">actions</th>
    </tr>
  </thead>
  <tbody>
        <?php 
        if(!empty($categorias)){
        foreach($categorias as $categoria){ ?>
    <tr>
      <th scope="row"><?=$categoria["id_categorias"] ?></th>
      <td><?=$categoria["titulo_primario"] ?></td>
      <td><?=$categoria["titulo_secundario"];?></td>
      <td><?=$categoria["qtd_quartos"];?></td>
      <td><?=$categoria["qtd_banheiros"];?></td>
      <td><?=$categoria["opcionais"];?></td>
      <td><?=$categoria["qtd_hospedes"];?></td>
      <td><?=$categoria["valor_diaria"];?></td>
      <td><?=$categoria["link_img"];?></td>
      <td>
      
        <a href="<?= base_url('home_site/editar/'.$categoria["id_categorias"]) ?>" type="button" class="btn btn-primary">Editar</a>
        <a href="<?= base_url('home_site/delete/'.$categoria["id_categorias"]) ?>" type="button" class="btn btn-danger">Excluir</a>
    </td>
    <?php }}else{echo "<b style='color:red;'>Nenhum Dado Encontrado<b>";} ?>
    </tr>
    
  </tbody>
</table>

    
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</html>
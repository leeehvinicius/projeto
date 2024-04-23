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
<form method="POST" class="form" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleFormControlInput1">Titulo</label>
    <input type="text" class="form-control" name="titulo_primario" value="<?=$categoria["titulo_primario"];?>">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Titulo secundario</label>
    <input type="text" class="form-control" name="titulo_secundario" value="<?=$categoria["titulo_secundario"];?>">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">qtd quartos</label>
    <input type="text" class="form-control" name="qtd_quartos" value="<?=$categoria["qtd_quartos"];?>">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">qtd banheiros</label>
    <input type="text" class="form-control" name="qtd_banheiros" value="<?=$categoria["qtd_banheiros"];?>">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">opcionais</label>
    <input type="text" class="form-control" name="opcionais" value="<?=$categoria["opcionais"];?>">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">qtd hospedes</label>
    <input type="text" class="form-control" name="qtd_hospedes" value="<?=$categoria["qtd_hospedes"];?>">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">valor diaria</label>
    <input type="text" class="form-control" name="valor_diaria" value="<?=$categoria["valor_diaria"];?>">
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">Imagem</label>
    <input type="file" class="form-control-file" name="userfile" id="exampleFormControlFile1">
  </div>
  <div class="form-group">
  <button type="submit" class="btn btn-primary">Cadastrar</button>
  </div>
  
</form>


    
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</html>
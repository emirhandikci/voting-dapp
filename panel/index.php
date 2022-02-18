
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Hello, world!</title>
  </head>
  <body>
      <div class="container">
        <h1>Aday ekle</h1>
        <form id="adayEkle" >
        <div class="mb-3">
            <label for="adayAdi" class="form-label">Aday adı</label>
            <input type="text" class="form-control" name="adayAdi" id="adayAdi" placeholder="Aday adı">
        </div>
        <div class="mb-3">
            <label for="adayFoto" class="form-label">Aday fotoğrafı linki</label>
            <input type="text" class="form-control" name="adayFoto" id="adayFoto" placeholder="Aday fotoğrafı linki">
        </div>
        <button type="button" class="btn btn-primary ekle" style="float:right" >Adayı ekle</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  
  </body>
  <script>
    $('.ekle').click(function(){
     var form= new FormData(document.getElementById("adayEkle"));
     $.ajax({
       type:"post",
       url:"addPresident.php",
       data: form,
        contentType: false,
        cache: false,
        processData:false,
        success: function(data){
           Swal.fire(data
           )
   }
     })
    })
  </script>
</html>
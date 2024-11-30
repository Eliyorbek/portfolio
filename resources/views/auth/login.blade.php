<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Texkinum</title>
     <link rel="stylesheet" href="/css/style.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
     <section class="container-fluid section1">
          <div class="container_login">
               <form action="" method="GET">
                    @csrf
                    <p class="topTitle">ElTO</p>
                    <label for="">User name</label>
                    <input type="text" name="name" placeholder="User name">
                    <label for="">Password</label>
                    <input type="password" name="password" placeholder="Password">
                    <button type="submit">Login</button>
               </form>
          </div>
          <audio id="audios" controls="true" autoplay="autoplay" class="audio" style="display:none;"></audio>
     </section>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
          crossorigin="anonymous"></script>
</body>
<script src="/js/script.js"></script>

</html>

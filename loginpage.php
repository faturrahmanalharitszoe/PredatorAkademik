<!doctype html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <?php include('./font.php') ?>
    <style>
        body{
            font-family: 'Inter';
            background-color: #D9D9D9;
        }
    </style>
    <title>LOGIN</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card-body shadow-sm bg-white rounded" style="margin:70px;height:30rem">
                    <div class="row d-flex flex-column align-items-center" style="margin-top: 50px;">
                        <div class="col text-center" style="font-size: 30px;padding-top:20px;">
                            <strong>Sistem Informasi Akademik</strong><br> <span>Informatika</span>
                        </div>
                        <div class="col text-center" style="padding-top:10px;font-size:15px">Silahkan Login</div>
                        <div class="input-group " style="padding-top:10px;width:20rem">
                            <div class="input-group-prepend">
                                <span class="input-group-text" style="padding-bottom:16px;"><i class="fa-solid fa-user fa-xl" style="margin-left:3px;margin-top:15px;color:black;"></i></span>
                            </div>
                            <input type="username" class="form-control" id="username" style="height: 40px;" placeholder="Masukkan Username Anda">
                        </div>
                        <div class="input-group " style="padding-top:10px;width:20rem">
                            <div class="input-group-prepend">
                                <span class="input-group-text" style="padding-bottom:16px;"><i class="fa-solid fa-key fa-xl" style="margin-left:1px;margin-top:15px;color:black;"></i></span>
                            </div>
                            <input type="password" class="form-control" id="password" style="height: 40px;" placeholder="Masukkan Password Anda">
                        </div>
                        <div class="col text-center" style="margin-top: 20px;">
                            <button class="btn" style="background-color: #DADAD9;">Login</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script src="https://kit.fontawesome.com/8cc297976c.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
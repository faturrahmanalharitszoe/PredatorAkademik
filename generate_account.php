<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <style>
        body{
            font-family: 'Inter';
            background-color: #D9D9D9;
        }
    </style>
    <title>LOGIN</title>
  </head>
  <body>
    <div class="card-body shadow-sm bg-white rounded" style="margin:90px;height:550px;">
        <div class="row" style="padding-top:60px;padding-bottom:60px;">
            <div class="col text-center">
                <div class="d-flex flex-column" style="margin-right: 60px;">
                    <div>
                        <img class="float-end" style="width:160px;" src="./user.png">
                    </div>
                    <div style="margin-right:20px">
                        <button class="btn float-end" style="width:120px;font-size:20px;">Upload  <img style="width:20px;" src="./Upload.png"></button>
                    </div>
                    <div style="margin-right:20px">
                        <button class="btn float-end" style="width:120px;color:red;;font-size:20px;">Delete  <img style="width:20px;margin-left:5px;" src="./Trash.png"></button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column">
                    <div>
                        <div style="padding-bottom: 10px;">Nama Lengkap</div>
                        <input type="text"></input>
                    </div>
                    <div>
                        <div style="padding-bottom: 10px;">NIM</div>
                        <input type="text">
                    </div>
                    <div>
                        <div style="padding-bottom: 10px;">Angkatan</div>
                        <input type="text">
                    </div>
                    <div style="margin-right:75px;">
                        <div style="padding-top: 5px;">
                            Status
                        </div>
                        <div class="dropdown">
                            <select name="status" id="status" style="background-color: #D9D9D9;">
                                <option value="aktif">Aktif</option>
                                <option value="cuti">Cuti</option>
                                <option value="mangkir">Mangkir</option>
                                <option value="do">DO</option>
                                <option value="undur_diri">Undur Diri</option>
                                <option value="meninggal_dunia">Meninggal Dunia</option>
                            </select>
                        </div>
                        <div style="padding-top:30px;">
                            <button class="btn" style="width:150px;height:40px;color:white;background-color: #33363F;">Generate</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>     
    </div>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
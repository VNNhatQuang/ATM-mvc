<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rút tiền</title>
    <link rel="icon" href="./assets/image/icon/icon.png">
    <link rel="stylesheet" href="./assets/css/ruttien.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>
    <div id="main">
        <div id="header">
            <p>Ngân hàng Công Thương Việt Nam</p>
            <div class="logo">
                <img src="./assets/image/icon/logo.png" width="250">
            </div>
            <div class="title">
                <p>Quý khách vui lòng chọn số tiền</p>
            </div>
        </div>
        <div id="menu">
            <div class="col1">
                <button onclick="location.href='xulyruttienController?st=500000'" type="button" class="btn btn-warning">500.000 VND</button>
                <button onclick="location.href='xulyruttienController?st=2000000'" type="button" class="btn btn-warning">2.000.000 VND</button>
                <button onclick="location.href='xulyruttienController?st=5000000'" type="button" class="btn btn-warning">5.000.000 VND</button>
            </div>
            <div class="col2">
                <button onclick="location.href='xulyruttienController?st=1000000'" type="button" class="btn btn-warning">1.000.000 VND</button>
                <button onclick="location.href='xulyruttienController?st=3000000'" type="button" class="btn btn-warning">3.000.000 VND</button>
                <button onclick="location.href='ruttiensokhacController'" type="button" class="btn btn-warning">Số khác</button>
                <button onclick="location.href='atmController'" type="button" class="btn btn-danger">Trở lại</button>
            </div>
        </div>
    </div>
</body>

</html>
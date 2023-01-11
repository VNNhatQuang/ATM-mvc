<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATM VietinBank</title>
    <link rel="icon" href="./Views/assets/image/icon/icon.png">
    <link rel="stylesheet" href="./Views/assets/css/atm.css">
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
                <img src="./Views/assets/image/icon/logo.png" width="250">
            </div>
            <div class="title">
                <p>Mời quý khách chọn giao dịch</p>
            </div>
        </div>
        <div id="menu">
            <div class="col1">
                <button onclick="location.href='chuyenkhoanController'" type="button" class="btn btn-primary">Chuyển khoản</button>
                <button onclick="location.href='ruttienController'" type="button" class="btn btn-primary">Rút tiền</button>
                <button onclick="location.href='naptienController'" type="button" class="btn btn-primary">Nạp tiền</button>
                <button onclick="location.href='thoatController'" type="button" class="btn btn-danger">Thoát</button>
            </div>
            <div class="col2">
                <button onclick="location.href='doipinController'" type="button" class="btn btn-primary">Đổi PIN</button>
                <button onclick="location.href='vantintkController'" type="button" class="btn btn-primary">Vấn tin TK</button>
                <button onclick="location.href='lsgdController'" type="button" class="btn btn-primary">Lịch sử giao dịch</button>
            </div>
        </div>
    </div>
</body>


</html>
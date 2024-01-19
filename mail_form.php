<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <form id="myForm" class="card" action="mail.php" method="post">
        <div class="msg"></div>

        <h2>ติดต่อเรา</h2>

        <div class="form-control">
            <p>Name</p>
            <input type="text" name="name" class="txt" placeholder="กรอกชื่อ">
        </div>

        <div class="form-control">
            <p>Email</p>
            <input type="text" name="email" class="txt" placeholder="กรอกอีเมล์">
        </div>

        <div class="form-control">
            <p>Subject</p>
            <input type="text" name="header" class="txt" placeholder="หัวเรื่องเมล์">
        </div>

        <div class="form-control">
            <p>Detail</p>
            <textarea name="detail" class="txt txtarea" placeholder="รายละเอียด"></textarea>
        </div>

        <button type="submit"  value="submit" class="btn-submit">Send</button>
    </form>
    


</body>
</html>

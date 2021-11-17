<?php

    session_start();

    if (!isset($_SESSION['email'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: loginnew.php');
    }

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['email']);
        header('location: loginnew.php');
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Teacher Homepage with auto cards</title>
    <link rel="stylesheet" href="head-style.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <header class="page-header content">
                <div class="topnav">
                    <a href="#contact">Notification</a>
                    <a href="homenew.html">MY COURSE</a>
                    <li style="float: left;"><a href="loginnew.php">LEARN</a></li>
                </div>
            </header>
        </div>
        <div class="row">
            <h3>ปีการศึกษา 2564 ภาคต้น Welcome, <strong><?php echo $_SESSION['user']; ?></strong></h3>
            <a href="homenew.php?logout='1'" style="color: red;">Logout</a>
        </div>
        <div class="row">
            <!--แบ่งเป็น 2 ส่วน-->
            <!--ส่วนแรกเมนูด้านซ้าย ขนาดหน้าจอใหญ่กว่าขนาดMdจะมีความกว้าง2คอลัมน์ ถ้าเล็กกว่าจะเรียงต่อกัน-->
            <div class="col-md-2 bg-light">
                เมนูด้านซ้าย
            </div>
            <!--คั่นสอง่ส่วน ขนาดหน้าจอใหญ่กว่าขนาดMdจะมีความกว้าง1คอลัมน์ ถ้าเล็กกว่าจะเรียงต่อกัน-->
            <div class="col-md-1"></div>
            <!--ส่วนที่สองข้อมูลตรงกลาง ขนาดหน้าจอใหญ่กว่าขนาดMdจะมีความกว้าง9คอลัมน์ ถ้าเล็กกว่าจะเรียงต่อกัน-->
            <div class="col-md-9 bg-light">
                <p>ช่องแรก</p>
                <!--create card auto-->
                <!--row-cols-1 : แถวนึงมี1อัน , g-3 : ช่องห่างระหว่างอัน-->
                <div id='subjectcard' class="row row-cols-4 g-3 bg-light"></div>
            </div>
        </div>
    </div>

    <?php
        $allsub = explode(",", $_SESSION['allsub']);
    ?>

    <script>
        //ลิสวิชาที่เเต่ละคนลง
        //let subjects = ['2102387', '2102422', '2102425','2102387', '2102422', '2102425'];
        
        var subjects = <?php echo json_encode($allsub); ?>;
        //for(var i=0; i<subjects.length; i++){
         //   alert(subjects[i]);
        //}
        
        //ระบุที่ที่จะเอาไปใส่
        let boxofsubject = document.getElementById('subjectcard');
        //ลิสที่จะดึงมาที่ละตัว.forEach(ดึงมาไว้ในตัวแปรช่องนี้)
        subjects.forEach((subject) => {
            let divHTML = '<div class="col">';
            divHTML += '<div class="card" style="border-radius: 20px;">';
            divHTML += '<div class="card-body">';
            divHTML += '<h5 class="card-title text-danger">';
            divHTML += subject;
            divHTML += '</h5>';
            //ชื่อวิชา
            divHTML += '<p class="card-text">This is a longer card with supporting text below as a naturallead-in to additional content.</p>';
            divHTML += '</div>';
            divHTML += '</div>';
            divHTML += '</div>';
            boxofsubject.innerHTML += divHTML;
        })
    </script>
</body>

</html>
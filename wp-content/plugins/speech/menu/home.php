<?php
include("conn.php");
?>



<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- jquery ajax -->

    <title>myTest</title>
</head>

<body>
    <h1 class="text-center">Tay my Test</h1>

    <br>

    <h2 class="text-center">ข้อมูลต้นไม้</h2>
    <!-- บทความเเบบเขียน -->
    <div class="container">
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ลำดับ</th>
                    <th scope="col">ต้นไม้</th>
                    <th scope="col">ประเภท</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>กล้วย</td>
                    <td>พรรณไม้ล้มลุก</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>มะพร้าว</td>
                    <td>พืชยืนต้น</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>มะม่วง</td>
                    <td>พืชใบเลี้ยงคู่</td>
                </tr>
            </tbody>
        </table>
    </div>


    <!-- บทความเเบบดึงจากฐานข้อมูล พนักงาน -->

    <h2 class="text-center">ข้อมูลพนักงาน</h2>


    <div class="container">
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ไอดี</th>
                    <th scope="col">ชื่อ</th>
                    <th scope="col">อายุ</th>
                    <th scope="col">อีเมล</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($emp as $data) { ?>

                    <tr>
                        <th> <?= $data['user_id'] ?> </th>
                        <td> <?= $data['name'] ?> </td>
                        <td> <?= $data['age'] ?> </td>
                        <td> <?= $data['email'] ?> </td>
                    </tr>

                <?php } ?>


            </tbody>
        </table>
    </div>



    <br>
    <!-- บทความเเบบดึงจากฐานข้อมูล -->

    <div class="container">
        <div class="list-group">

            <li class="list-group-item active">หัวข้อบทความ</li>

            <?php foreach ($post as $data) { ?>

                <tr>
                    <button type="button" class="list-group-item list-group-item-action"><?= $data['post_title'] ?></button>
                </tr>

            <?php } ?>

        </div>
    </div>







    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
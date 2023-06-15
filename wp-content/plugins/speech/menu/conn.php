<?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "plantdb";


        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // ดึงข้อมูลพนักงาน
        $sql1 = "SELECT * FROM employee";
        $emp = mysqli_query($conn, $sql1);

        // ดึงข้อมูลบทความ
        $sql2 = "SELECT post_title FROM wp_posts WHERE comment_status = 'open' ";
        $post = mysqli_query($conn, $sql2);
?>
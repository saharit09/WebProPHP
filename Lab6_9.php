<title> ตัวอย่าง Control statement ที่ 9 </title></head>
</head>
<body>
    <?php
        $found = false;
        for($num = 100 ; $num <= 200 ; $num++) {
            if ($num % 13 == 0) {
                $found = true;
            break;
            }
        }
        if ($found)
            echo "เลขจำนวนเต็มที่อยู่ในช่วง 100 ถึง 200 ที่น้อยที่สุดและหารด้วย 13 ลงตัวคือ $num<br>";
        else
            echo "ไม่มีเลขจำนวนเต็มที่
อยู่ในช่วง 100 ถึง 200 ที่น้อยที่สุดและหารด้วย 13 ลงตัว<br>";
    ?>
</body>
</html>
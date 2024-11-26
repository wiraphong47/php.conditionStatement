<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ประมวณผลและแสดงผล</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #FFDAB9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #333;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
            text-align: center;
        }

        h2 {
            color: #2d3e50;
            margin-bottom: 15px;
        }

        h3 {
            color: #4caf50;
            margin: 20px 0;
            font-size: 20px;
        }

        .back-link {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #2196F3;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .back-link:hover {
            background-color: #1976d2;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>ผลการคำนวณพื้นที่รูปสามเหลี่ยม</h2>
    <?php
        $height = $_POST['height'];
        $width = $_POST['width'];
        $area = 0.5 * $height * $width;

        echo "<h3>รูปสามเหลี่ยมที่มีความสูง $height <br> ความยาวของฐาน $width </h3>";
        echo "<h3>คำนวณพื้นที่ได้: $area ตารางหน่วย</h3>";
    ?>
    <a href="http://localhost:8080/work1/php.conditionStatement/triangle_area_form.php" class="back-link">กลับไปคำนวณใหม่</a>
</div>

</body>
</html>

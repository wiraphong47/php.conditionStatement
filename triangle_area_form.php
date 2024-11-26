<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>คำนวณพื้นที่สามเหลี่ยม</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #33CCFF;
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
            margin-bottom: 20px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            box-sizing: border-box;
        }

        input[type="submit"], input[type="reset"] {
            background-color: #4caf50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
        }

        input[type="submit"]:hover, input[type="reset"]:hover {
            background-color: #45a049;
        }

        .reset-btn {
            background-color: #f44336;
        }

        .reset-btn:hover {
            background-color: #e53935;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>โปรแกรมสำหรับคำนวณพื้นที่สามเหลี่ยม</h2>

    <h3>คำนวณพื้นที่รูปสามเหลี่ยม</h3>
    <form action="triangle_area.php" method="post">
        <label for="height">ความยาวฐานของรูปสามเหลี่ยม:</label>
        <input type="text" id="height" name="height" placeholder="ใส่ความยาวฐาน"><br>
        
        <label for="width">ความสูงของรูปสามเหลี่ยม:</label>
        <input type="text" id="width" name="width" placeholder="ใส่ความสูง"><br>
        
        <input type="submit" value="คำนวณ">
        <input type="reset" value="รีเซ็ต" class="reset-btn">
    </form>
</div>

</body>
</html>

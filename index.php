<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>การใช้งานคำสั่งแบบ condition <กลุ่มคำสั่ง if></h1>
    <?php
        echo "<h2?>คำสั่ง if</h2><br>";
        $x = 5;
        $y = 8;
        echo "\$x = $x <br>";
        echo "\$y = $y <br>";
        if($x<$y){
            echo "ตัวในตัวแปร x น้อยกว่าค่าในตัวแปร y<br>";
        }
        else{
            echo "ตัวในตัวแปร y น้อยกว่าค่าในตัวแปร x<br>";
        }
        echo "----------------------------------------";

        echo "<h1> Short hand if</h1>";
        $score = 40;
        if ($score >= 50) echo "ขอแสดงความยินดีคุณสอบผ่าน" ;
        echo "<br>";
            $result = $score >= 50 ? "ได้เกรด P": "ได้เกรด F";
            echo "<br>";
            echo "ผลการเรียนของคุณ".$result;
            echo "<br>";
        echo "----------------------------------------";
        echo "<br>";
        echo "<h2> Switch case</h2>";
        echo "<br>";
        $pet = 'Cat';
        switch ($pet) {
            case 'cat':
                echo "คุณชอบนอนเหมือนแมว<br>";
                break;
            case 'Dogt':
                echo "คุณเห่าเหมือนสุนัข<br>";
                break;
            case 'Bird':
                echo "คุณพูดมากเหมือนนก<br>";
                break;
            
            default:
                echo "คุณเป็นมนุษย์ Introvert<br>";
                break;
        }
        echo "<br>";
        echo "----------------------------------------";
    ?>
    
</body>
</html>

<?php
    $media = 5;
        if($media >=7){
            echo 'Aprovado';
        }elseif($media >= 5 and $media <= 6.9){
                echo 'Recuperação';
        }else{    
            echo 'Reprovado';
        }
    
    echo '<hr>';

    $i = 25;
    if($i >=68 || $i<=18){
        echo 'Dependente';
    }else
            echo 'Independente';
    
    echo '<hr>';

    $i = 12;
    
    switch($i){
        case($i<=12):
            echo 'Criança';
            break;
        case($i>12 && $i<18):
            echo 'Adolescente';
            break;
        default:
            echo 'Adulto';
            break;
    } 
?>
<hr>
    <form action="index.php" method="post">
    <input type="number" name="um">
    +
    <input type="number" name="dois">
    <input type="submit" name="calcula" value="calcula">
    </form>
<?php
    if(isset($_POST['calcula'])){

        $um=$_POST['um'];
        $dois=$_POST['dois'];
        $op=$um+$dois;
        echo "$um + $dois = ".$op;
    }
?>




    
       
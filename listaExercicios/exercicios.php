<?php

$exercise = $_POST['exercicio'];
    if ($exercise == 'ex1')
    {
        if(isset($_POST['num1'])){
            $num1 = $_POST['num1'];
            $resultado;
            if($num1%2== 0){   
                $resultado = 'PAR';
            } 
            else{
                $resultado = "IMPAR";
            }
             echo "Resposta: $resultado";
        }  
    }

    if ($exercise == 'ex2')
    {
        if(isset($_POST['num1'])){
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $resultado;
            if($num1 > $num2){   
                $resultado = "$num1 maior";
            } 
            else{
                $resultado = "$num2 maior";
            }
             echo "Resposta: $resultado";
        }  
    }
    
    if ($exercise == 'ex3')
    {
        if(isset($_POST['num1'])){
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $num3 = $_POST['num3'];
            $resultado;
            if($num1 > $num2 && $num3){   
                $resultado = "$num1 maior";
            } 
            else if($num2 > $num3){
                $resultado = "$num2 maior";
            }
            else{
                $resultado = "$num3 maior";
            }
             echo "Resposta: $resultado";
        }  
    } 
    if ($exercise == 'ex4')
    {
        if(isset($_POST['idade'])){
            $idade = $_POST['idade'];
            $resultado;
            if($idade <= 12 ){   
                echo "Você é criança";
            }
            else if($idade>=13 && $idade<=17  ){
                echo "Você é adolescente";
            }
            if ($idade>=18 && $idade <=59){
                echo "Você é adulto";
            }
            else if ($idade >= 60){
                echo "Você é idoso";
            }
        }
    }
    if ($exercise == 'ex5')
    {
        if(isset($_POST['num1'])){
            $num1 = $_POST['num1'];
            if($num1 >= 10 and $num1 <=100 ){   
                echo "$num1 está entre 10 e 100!";
            }
            else 
            {
                echo "$num1 NÃO está entre 10 e 100!";
            }
        } 
    }
    if ($exercise == 'ex6')
    {
        if(isset($_POST['num1'])){
            $num1 = $_POST['num1'];
            if($num1%5==0 and $num1%3==0 ){   
                echo "$num1 é multiplo de 3 e 5";
            }
            else 
            {
                echo "$num1 NÃO é multiplo de 3 e 5";
            }
        } 
    }
    if ($exercise == 'ex7')
    {
        if(isset($_POST['num1'])){
            $num1 = $_POST['num1'];
            $resultado;
            if($num1 >= 7){   
                $resultado = "$num1 é sua nota, você está aprovado";
            } 
            else if ($num1 >= 5){
                $resultado = "$num1 é sua nota, você está de recuperação";
            }
            else
            {
                $resultado = "$num1 é sua nota, você está reprovado";
            }
             echo "Resposta: $resultado";
        }  
    }
    if ($exercise == 'ex8')
    {
        if(isset($_POST['text1'])){
            $text1 = $_POST['text1'];
            if(in_array($text1,['a','e','i','o','u'])){   
                echo "é vogal";
            }
            else 
            {
                echo "é consoante";
            }
        }
    }
    if ($exercise == 'ex9')
    {
        if(isset($_POST['num1'])){
            $dia = $_POST['num1'];
            $weekday =['domingo','segunda','terça','quarta','quinta','sexta','sábado'];
            if($dia >=1 and $dia<=7){   
                echo "Dia da semana é ".$weekday[$dia-1];
            }
            else 
            {
                echo "invalido";
            }
        }
    }
    
    if ($exercise == 'ex10')
    {
        if(isset($_POST['num1']))
        $num1=$_POST['num1'];
        $num2=$_POST['num2'];
        if($num1>$num2){
        for($i=$num2;$i<=$num1; $i++)
        {
            echo $i."\n";
        }
    }
    else
    {
        for($i=1;$i<=$num2; $i++);
        echo $i."\n";
    }
    }

    if ($exercise == 'ex11')
    {
        if(isset($_POST['num1']))
        $num1=$_POST['num1'];
        for($i=1; $i<=10; $i++)
        {
            echo $num1*$i."\n";
        }
    }
    if ($exercise == 'ex12')
    {
        if(isset($_POST['num1']))
        $num1=$_POST['num1'];
        $p;$n;$z;
        if(in_array(()))
    }
    

?>


        for($i=0; $i < 10; $i++){
        
          if ($num1 > 0)
          {
            $positivos++;
        }
          else if ($num1 < 0)
          {
            $negativos++;
          }
          else {
            $zero++;
          }
        }
    }
        echo "Positivos: $positivos ; Negativos: $negativos ; Zero: $zero"."\n"
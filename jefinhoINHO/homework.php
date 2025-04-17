<?php
$exercicio = $_POST["exercicio"];
if($exercicio =="ex13")
{
    if (isset ($_POST['um']))
    {
    $um = $_POST['um'];
    $dois = $_POST['dois'];
    $tres = $_POST['tres'];
    $quatro = $_POST['quatro'];
    $cinco = $_POST['cinco'];

    $resultado= array($um,$dois,$tres,$quatro,$cinco);
    $media= array_sum($resultado) / count($resultado);
    echo "$media essa é a média entre $um, $dois, $tres, $quatro e $cinco";
    }
}
if ($exercicio == "ex14")
{
    if(isset ($_POST['num']))
    {
        $numero = $_POST['num'];
        $fatorial = 1;
        for ($i=1; $i <= $numero;$i++)
        {
            $fatorial*= $i;
        }
        echo "O fatorial de $numero é  $fatorial";
    }
}
if ($exercicio == "15")
{}

if ($exercicio == "ex16")
{
    if(isset ($_POST["senha"]))
    {
        $senha = $_POST["senha"];
        $senhacorreta = 1234;

        if ($senha == $senhacorreta){
            echo "Senha correta!";
        }
        else {
            echo "Senha incorreta! tente novamente";
        }
    }
}
if ($exercicio == "")
?>
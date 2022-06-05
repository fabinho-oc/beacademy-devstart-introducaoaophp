

<form action="" method="post">
    <input name="n1" type="text" placeholder= "Valor 1">
    <input name="n2" type="text" placeholder= "Valor 2">

    <button name='Soma'>Somar</button>
    <button name='Subtracao'>Subtrair</button>
    <button name='Multiplicacao'>Multiplicar</button>
    <button name='Divisao'>Dividir</button>

</form>

<br/>


<?php
    if ($_POST){
        
        if (isset($_POST['Soma'])) {
             echo $_POST['n1'] + $_POST['n2'];
             //var_dump($_POST);
        }

        if (isset($_POST["Subtracao"])) {
             echo $_POST['n1'] - $_POST['n2'];
        }

        if (isset($_POST["Multiplicacao"])) {
             echo $_POST['n1'] * $_POST['n2'];
        }

        if (isset($_POST["Divisao"])) {
             echo $_POST['n1'] / $_POST['n2'];
        }

        //var_dump($_POST)
    }

//localhost:8000\exercicios

?>


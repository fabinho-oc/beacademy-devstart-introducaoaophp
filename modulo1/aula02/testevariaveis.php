<form action="" method="post">
    <input $nome="nome" type="text" placeholder= "Nome">
    <br/>
    <button name='Manha'>Manha</button>
    <button name='Tarde'>Tarde</button>
    <button name='noite'>Noite</button>
</form>

<?php


    $nome = $_POST;

    if (isset($_POST['Manha'])) {
        $bebida = "Café";
        echo "Oi, eu sou o " . $nome. ", eu gosto de " .$bebida;
    } else{ 
        if (isset($_POST['Tarde'])) {
          $bebida = "Suco";
          echo "Oi, eu sou o " . $nome. ", eu gosto de " .$bebida;
        }
      } else{
            if (isset($_POST['noite'])) {
            $bebida = "Chopp";
            echo "Oi, eu sou o " . $nome. ", eu gosto de " .$bebida;
            }
      }
      



?>
<h1>Editar Contato</h1>
<hr>
<form action="" method = "post">
    <input value="<?php echo $dados[0]; // incluir as informações que estão no array dados na posição 0?>" name = "nome" class = "form-control mt-2" type="text" placeholder="Nome">
    <input value="<?php echo $dados[1]; // incluir as informações que estão no array dados na posição 1?>" name = "email" class = "form-control mt-2" type="text" placeholder="e-mail">
    <input value="<?php echo $dados[2]; // incluir as informações que estão no array dados na posição 2?>" name = "telefone" class = "form-control mt-2" type="text" placeholder ="Telefone">
    
    <button class = "btn btn-primary mt-3">Enviar</button>

</form>
<?php 

include_once("templates/header.php");

 ?>

	<div class="container w-50 mb-5">
        <?php include_once("templates/backbtn.php") ?>
        <h1 id="main-title">Criar Contato</h1> 

        <form id="create-form" action="/config/process.php" method="POST">
            <input type="hidden" name="type" value="create"> 

            <div class="form-group mt-2">
                <label class="p-2" for="name">Nome Do Contato:</label>
                <input type="text" class="form-control" name="name" required id="name" placeholder="Digite o nome">
            </div>

             <div class="form-group mt-2">
                <label class="p-2" for="phone">Telefone Do Contato:</label>
                <input rows="3" type="text"  class="form-control" name="phone" required id="phone" placeholder="Digite o Telefone">
            </div>

            <div class="form-group mt-2">
                <label class="p-2" for="observations">Observações:</label>
                <textarea type="text" class="form-control" name="observations" id="observations" placeholder="Insira as observações" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-primary  mt-2">Cadastrar</button>
            
        </form>  
    </div>

<?php 

include_once("templates/footer.php");

 ?>



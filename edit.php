<?php

include_once("templates/header.php");

?>

<div class="container w-50 mb-5">
    <?php include_once("templates/backbtn.php") ?>
    <h1 id="main-title">Editar Contato</h1>

    <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
        <input type="hidden" name="type" value="edit">
        <?php if (isset($contact) && !empty($contact)): ?>
            <input type="hidden" name="id" value="<?= $contact['id'] ?>">

            <div class="form-group mt-2">
                <label class="p-2" for="name">Nome do Contato:</label>
                <input type="text" class="form-control" value="<?= $contact['name'] ?>" name="name" required id="name" placeholder="Digite o nome">
            </div>

            <div class="form-group mt-2">
                <label class="p-2" for="phone">Telefone do Contato:</label>
                <input type="text" class="form-control" value="<?= $contact['phone'] ?>" name="phone" required id="phone" placeholder="Digite o telefone">
            </div>

            <div class="form-group mt-2">
                <label class="p-2" for="observations">Observações:</label>
                <textarea type="text" class="form-control" name="observations" id="observations" placeholder="Insira as observações" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-primary mt-2">Atualizar</button>
        <?php else: ?>
            <p>Contato não encontrado.</p>
        <?php endif; ?>
    </form>
</div>

<?php

include_once("templates/footer.php");

?>
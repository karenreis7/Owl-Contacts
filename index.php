<?php
global $contacts, $BASE_URL;
include_once ("templates/header.php");
?>


<div class="container">
    <?php if (isset($printMsg) && $printMsg != ''): ?>
        <p id="msg"><?=$printMsg?></p>
    <?php endif; ?>
</div>
    <h1 id="main-title"> Owl Contacts </h1>
    <?php if (count($contacts) > 0): ?>
        <table class="table" id="contacts-table">
            <thead>
            <tr>
                <th scope="col">Nº Registro</th>
                <th scope="col">Representante</th>
                <th scope="col">Empresa</th>
                <th scope="col">Telefone</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($contacts as $contact): ?>
                <tr>
                    <td scope="row"><?= $contact['id']?></td>
                    <td scope="row"><?= $contact['name_user']?></td>
                    <td scope="row"><?= $contact['company']?></td>
                    <td scope="row"><?= $contact['phone']?></td>
                    <td class="actions">
                        <a href="<?=$BASE_URL?>show.php?id=<?=$contact['id']?>"><i class="fas fa-eye check-icon"></i></a>
                        <a href="#"><i class="fas fa-edit edit-icon"></i></a>
                        <button type="submit" class="delete-btn"><i class="fas fa-times delete-icon"></i></button>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>

        </table>
    <?php else: ?>
      <p id="empty-list-text"> Ainda não há contatos na sua agenda, <a href="create.php">clique aqui</a> para adicionar.</p>
    <?php endif; ?>












<?php
include_once ("templates/footer.php")
?>
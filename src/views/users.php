<main class="content">
    <?php
        renderTitle(
            'Cadastro de Usuários',
            'Mantenha os dados dos usuários atualizados',
            'icofont-users'
        );

        include(TEMPLATE_PATH. "/messages.php");
    ?>

    <a class="btn btn-lg btn-primary mb-2" href="save_user.php">Novo Usuário</a>

    <table class="table table-striped table-hover">
        <thead>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Data de Admissão</th>
            <th>Data de desligamento</th>
            <th>Ações</th>
        </thead>
        <tbody>
            <?php foreach($users as $user) { ?>
                <tr>
                    <td><?= $user->name?></td>
                    <td><?= $user->email?></td>
                    <td><?= $user->start_date?></td>
                    <td><?= $user->end_date?></td>
                    <td>
                        <a href="save_user.php?update=<?= $user->id ?>" class="btn btn-warning btn-sm rounded-circle me-1">
                            <i class="icofont-edit"></i>
                        </a>
                        <a href="?delete=<?= $user->id ?>" data-confirm class="btn btn-danger btn-sm rounded-circle ms-1">
                            <i class="icofont-trash"></i>
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</main>
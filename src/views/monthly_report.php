<main class="content report">
    <?php
        renderTitle(
            'Relatório Mensal',
            'Acompanhe seu saldo de horas',
            'icofont-ui-calendar'
        );
    ?>
    <div>
        <form action="#" method="post" class="mb-4">
            <div class="input-group">
                <?php if($user->is_admin) { ?>
                <select name="user" class="form-control mb-1 mr-2" placeholder="Selecione o usuário..">
                    <option value="">Selecione o Usuário</option>
                    <?php
                        foreach($users as $user) {
                            $selected = $user->id === $selectedUserId ? 'selected' : '';
                            echo "<option value='{$user->id}' {$selected}>{$user->name}</option>";
                        }
                        ?>
                </select>
                <?php } ?>
                <select name="period" class="form-control mr-1" placeholder="Selecione o período..">
                    <?php
                        foreach($periods as $key => $month) {
                            $selected = $key === $selectedPeriod ? 'selected' : '';
                            echo "<option value='{$key}' {$selected}>{$month}</option>";
                        }
                    ?>
                </select>
                <button class="btn btn-primary mb-1">
                    <i class="icofont-search"></i>
                </button>
            </div>
        </form>
        <table class="table table-striped table-hover">
            <thead class="monthly-report-footer">
                <th>Horas Trabalhadas</th>    
                <th colspan="3"><?= $sumOfWorkedTime ?></th>    
                <th>Saldo Mensal</th>    
                <th><?= $balance ?></th>                 
            </thead>
            <tbody>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tbody>
            <thead>
                <th>Dia</th>
                <th>Entrada 1</th>
                <th>Entrada 2</th>
                <th>Saída 1</th>
                <th>Saída 2</th>
                <th>Saldo</th>
            </thead>
            <tbody>
                <?php foreach($report as $registry) { ?>
                    <tr>
                        <td><?= formatDateWithLocale($registry->work_date, '%A, %d de %B de %Y') ?></td>
                        <td><?= $registry->time1 ?></td>
                        <td><?= $registry->time2 ?></td>
                        <td><?= $registry->time3 ?></td>
                        <td><?= $registry->time4 ?></td>
                        <td><?= $registry->getBalance() ?></td>
                    </tr>                              
                    
                    <?php  }  ?>
                    
            </tbody>
        </table>
    </div>
</main>
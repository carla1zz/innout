<?php
session_start();
requireValidSession(true);

$exception = null;
if(isset($_GET['delete'])) {
    if($_GET['delete'] == $_SESSION['id']){
        // throw new Exception('Não é possível excluir o usuário atual, faça login como outro admin para excluí-lo');

    }
    try {
        User::deleteById($_GET['delete']);
        addSuccessMsg('Usuário excluído com sucesso!');
    } catch (Exception $e) {
        if(stripos($e->getMessage(), 'FOREIGN KEY')){
            addErrorMsg('Não é possível excluir o usuário com registro de pontos');
        } else {
            $exception = $e;
        }
    }
}

$users = User::get();
foreach($users as $user) {
    $user->start_date = (new DateTime($user->start_date))->format('d/m/Y');
    if($user->end_date) {
        $user->end_date = (new DateTime($user->end_date))->format('d/m/Y');
    }
}

loadTemplateView('users', [
    'users' => $users, 
    'exception' => $exception
]);
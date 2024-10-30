<?php 
    session_start();
    if(isset($_SESSION['perfil']));
?>

<!DOCTYPE html>
<html lang="pt-br">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
    <link rel="stylesheet" type='text/css' media='screen' href="CSS/list.css"> <!-- Link para o arquivo CSS -->
</head>
 
<body class="<?= $_SESSION['perfil'] ?>"> <!-- Define a classe com base no perfil do usuário -->
    <div class="container">
        <h2>Lista de Usuários</h2>
        <table class="styled-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Perfil</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($users as $user): ?>

                <tr>
                    <td><?= $user['id']?></td>
                    <td><?= $user['nome']?></td>
                    <td><?= $user['email']?></td>
                    <td><?= $user['perfil']?></td>
                    <td>
                        <?php if ($_SESSION['perfil'] == 'admin' || $_SESSION['perfil'] == 'gestor'): ?>
                        <a href="../index.php?action=edit?id=<?= $user['id'] ?>" class="btn1">Editar</a>
                        <?php endif; ?>

                        <?php if($_SESSION['perfil'] == 'admin'):?>
                        <a href="" class="btn2" onclick= "return confirm('Tem certeza que deseja excluir este perfil?')" >Excluir</a>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
 
            </tbody>
        </table>
 
        <a href="" class="btn">Voltar ao Dashboard</a>
        </div>
</body>
</html>

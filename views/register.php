<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>
    <link rel='stylesheet' type='text/css' media='screen' href='CSS/register.css'>
</head>
<body>
    <div>
        <h2>Cadastro de usuário</h2>
        <form method="post" action="index.php?action=register">
            <label for="">Nome:</label>
            <input type="text" name="nome"  id="nome" required>
            <label for="">E-mail:</label>
            <input type="email" name="email" id="email">
            <label for="">Senha:</label>
            <input type="password" name="senha" id="senha" required>
            <label for="">Perfil:</label>
            <select name="perfil" id="perfil">
                <option value="admin">ADMIN</option>
                <option value="gestor">GESTOR</option>
                <option value="colaborador">COLABORADOR</option>
            </select>
            <button type="submit">Cadastrar</button>
        </form>
        <a href="index.php?action=login">Voltar ao login</a>
    </div>
</body>
</html>
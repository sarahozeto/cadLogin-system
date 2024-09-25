<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LLogin</title>
</head>
<body>
    <main>
        <form action="index.php?action=login" method="post">
            <section>
                <label for="">Email:</label>
                <input type="email" name="email" placheholder="email" required>
            </section>
            <section>
                <label for="">Senha:</label>
                <input type="password" name="senha" placheholder="*********" required>
            </section>
            <button type="submit">Login</button>
        </form>
        <a href="index.php?action=register">Cadastre-se</a>
    </main>
</body>
</html>
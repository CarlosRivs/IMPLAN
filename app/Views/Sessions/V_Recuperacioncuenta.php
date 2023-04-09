<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Recupera tu cuenta</h1>
        <p>Ingresa tu correo electrónico o nombre de usuario para recuperar tu cuenta.</p>
        <form action="<?= base_url()?>/login/recuperarCuenta" method="post">
            <label for="usuario">E-mail</label>
            <input type="text" name="emailUsuario" id="emailUsuario" placeholder="Usuario o Email" required>
            <br>
            <input type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>
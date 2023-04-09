<!DOCTYPE html>
<html lang="en">

<head>
    <title>Upload Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center">
        <div class="card text-center">
            <div class="card-header p-5">
                <h5 class="mb-2">CODIGO DE VERIFICACIÓN</h5>
                <div>
                    <small>codigo ha sido enviado a <?php echo session('emailUsuario'); ?></small>
                </div>
            </div>
            <form action="<?= base_url() ?>/VerificarCodigo" method="post">
                <div class="input-container d-flex flex-row justify-content-center mt-2">
                    <input type="text" name="email" id="email" value="<?php echo session('emailUsuario'); ?>" hidden>
                    <input type="text" class="m-1 text-center form-control rounded" maxlength="1" id="N1" name="N1">
                    <input type="text" class="m-1 text-center form-control rounded" maxlength="1" id="N2" name="N2">
                    <input type="text" class="m-1 text-center form-control rounded" maxlength="1" id="N3" name="N3">
                    <input type="text" class="m-1 text-center form-control rounded" maxlength="1" id="N4" name="N4">
                    <input type="text" class="m-1 text-center form-control rounded" maxlength="1" id="N5" name="N5">
                </div>
                <div class="mt-3 mb-5">
                    <button type="submit" class="btn btn-success px-4 verify-btn">Verificar</button>
                </div>
            </form>
            <div class="row">
                <div class="col-12">
                    <?php if (isset($mensaje)) { ?>
                        <div class="alert alert-<?= $tipo; ?> ">
                            <?= $mensaje; ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div>
                <small>
                    ¿No obtuviste el codigo?
                    <a href="<?= base_url() ?>/ReenviarCodigo" class="text-decoration-none">Reenviar</a>
                </small>
            </div>

        </div>
    </div>


</body>

</html>
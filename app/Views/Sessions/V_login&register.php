<?= $this->extend('User/Front/layout/main') ?>
<!-- Services-->
<?= $this->section('EstilosCss') ?>
<link href="/css/styles.css" rel="stylesheet" />
<?= $this->endSection() ?>

<?= $this->section('menu') ?>
<!-- Navigation-->
<nav class="navbar navbar-light bg-dark d-flex justify-content-center align-items-center">
  <a class="navbar-brand" href="<?php echo base_url() ?>/">
    <h3 class="text-light">IMPLAN</h3>
  </a>
  </div>
</nav>
<?= $this->endSection() ?>


<?= $this->section('content') ?>
<!-- Masthead-->

<div class="container-fluid h-custom">
  <br>
  <br>
  <br>
  <div class="row d-flex justify-content-center align-items-center h-100">
    <div class="col-md-9 col-lg-6 col-xl-5">
      <img src="/assets/img/implan.png" class="img-fluid" alt="Sample image" class="img-fluid img-thumbnail">
    </div>
    <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
      <form action="<?= base_url()?>/login/Inicio" method="post">
        <!-- Email input -->
        <div class="form-outline mb-4">
          <input type="email" name="emailUsuario" id="emailUsuario" placeholder="Usuario o Email" class="form-control form-control-lg" required>
          <label class="form-label" for="form3Example3">Correo electronico</label>
        </div>

        <!-- Password input -->
        <div class="form-outline mb-3">
          <input type="password" name="contraseña" id="contraseña" class="form-control form-control-lg" placeholder="Enter password" required>
          <label class="form-label" for="form3Example4">Contraseña</label>
        </div>

        <div class="d-flex justify-content-between align-items-center">
          <!-- Checkbox -->
          <div class="form-check mb-0">
            <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
            <label class="form-check-label" for="form2Example3">
              Recuerdame
            </label>
          </div>
          <a href="#!" class="text-body">Olvido su contraseña?</a>
        </div>

        <br>
        <div class="row">
          <div class="col-12">
            <?php if (isset($mensaje)) { ?>
              <div class="alert alert-<?= $tipo; ?> ">
                <?= $mensaje; ?>
              </div>
            <?php } ?>
          </div>
        </div>


        <div class="text-center text-lg-start mt-4 ">
          <div class="d-grid gap-2 col-10 mx-auto">
            <button class="btn btn-primary" value="Inciar sesión" type="submit">INICIAR</button>
          </div>
        </div>
      </form>
      <!-- Modal Registro -->
      <br>
      <p class="small fw-bold mt-2 pt-4 mb-0">¿No tienes cuenta?</p>
      <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#myModal" data-bs-whatever="@fat">Crea cuenta nueva</button>
      <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header text-center">
              <h5 class="modal-title w-100 font-weight-bold">REGISTRATE</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
              <!-- form RegistroUsr -->
              <form action="<?= base_url() ?>/registroUsuaurio" method="post">
                <div class="container">
                  <div class="md-form mb-3">
                    <i class="fas fa-user prefix grey-text"></i>
                    <label for="nombre">Nombres</label>
                    <input type="text" name="nombre" id="nombre" class="form-control " required>
                  </div>
                  <div class="row">
                    <div class="md-form mb-3 col-6">
                      <i class="fas fa-user prefix grey-text"></i>
                      <label for="apellidoPatr">Apellido paterno</label>
                      <input type="text" name="apellidoPatr" id="apellidoPatr" class="form-control" required>
                    </div>
                    <div class="md-form mb-3 col-6">
                      <i class="fas fa-user prefix grey-text"></i>
                      <label for="apellidoMatr">Apellido materno</label>
                      <input type="text" name="apellidoMatr" id="apellidoMatr" class="form-control" required>
                    </div>
                  </div>
                </div>
                <div class="container">
                  <div class="row">
                    <div class="md-form mb-3 col-8">
                      <i class="fas fa-envelope prefix grey-text"></i>
                      <label for="Email">Email</label>
                      <input type="email" name="Email" id="Email" class="form-control" required>
                    </div>
                    <div class="md-form mb-3 col-4">
                      <i class="fas fa-calendar-days prefix grey-text"></i>
                      <label for="DateN">Fecha de nacimiento</label>
                      <input type="date" name="DateN" id="DateN" class="form-control" required>
                    </div>
                  </div>
                  <div class="md-form mb-3">
                    <i class="fas fa-lock prefix grey-text"></i>
                    <label for="Password">Contraseña</label>
                    <input type="password" name="Password" id="Password" class="form-control" required>
                  </div>
                </div>

                <div class="container bg-light">
                  <div class="col-md-12 text-center">
                    <button type="submit" value="Enviar" class="btn btn-primary btn-lg">REGISTRAR</button>
                  </div>
                </div>
                
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

    <!-- Footer-->
    <footer class="footer py-4">
      <br>
      <br>
      <br>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-4 text-lg-start">Copyright &copy; Your Website 2022</div>
          <div class="col-lg-4 my-3 my-lg-0">
            <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/ImplanAcapulco/" aria-label="Twitter">
              <i class="fab fa-twitter"></i>
            </a>
            <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/ImplanAcapulco/" aria-label="Facebook">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
          <div class="col-lg-4 text-lg-end">
            <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
            <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
          </div>
        </div>
      </div>
    </footer>

    <?= $this->endSection() ?>

    <?= $this->section('js') ?>
    <script src="<?php echo base_url() ?>/js/scripts.js"></script>
    <script>
      const myModalEl = document.getElementById('myModal')
      myModalEl.addEventListener('hidden.bs.modal', event => {
        // do something...
      })
    </script>
    <?= $this->endSection() ?>
<?=$this->extend('User/Front/layout/main')?>
<!-- Services-->
<?=$this->section('EstilosCss') ?>
<link href="css/styleACA.css" rel="stylesheet" />
<?=$this->endSection()?>

<?=$this->section('menu')?>
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="<?php echo base_url()?>/"><img src="assets/img/im.png" alt="" style="width: 60px; height: 25px;" /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item mx-auto ms-lg-4"><a class="nav-link" href="<?php echo base_url()?>/BancodeProyectos">Banco de Proyectos</a></li>
                        <li class="nav-item mx-auto ms-lg-4"><a class="nav-link" href="<?php echo base_url()?>/SitiosdeAcapulco">Sitios de interes Acapulco</a></li>
                        <li class="nav-item mx-auto ms-lg-4"><a class="nav-link" href="<?php echo base_url()?>/ObrasenProceso">Obras en Proceso</a></li>
                       </ul>
                       <ul class="nav navbar-nav navbar-right">

                        <li class="nav-item dropdown mx-auto"> 
                        <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="assets/img/team/user3.png" alt="" style="width: 30px; height: 30px;"  >
                        </a>
                            <ul class="dropdown-menu dropdown">
                              
                              <?php if(empty(session('nombreUsuario'))){ ?>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <a class="dropdown-item" href="<?php echo base_url()?>/login">Iniciar Sesion</a>
                            </li>
                            <?php }else {?>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <a class="dropdown-item" href="#"><?php echo session('nombreUsuario'); ?></a>
                            </li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <a class="dropdown-item" href="<?php echo base_url()?>/login/cerrarSession">Cerrar sesion</a>
                            </li>
                        <?php }?>
                            </ul>
                          </li>
                    </ul>
                </div>
            </div>
        </nav>
<?=$this->endSection()?>

<?=$this->section('content')?>

        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-heading text-uppercase">PUNTOS DE INTERES DE ACAPULCO</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#Descripcion">Más</a>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="Descripcion">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">¿QUE ES SITIOS DE INTERES DE ACAPULCO?</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                
            </div>
        </section>

       


        <!-- Portfolio Grid SITIOS-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">PLAYAS</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                
<div class="container">
  <div class="row">
    <?php foreach($sitios as $sitio): ?>
    <div class="col-lg-4 col-md-6 col-sm-12 p-4">
      <div class="card mx-auto" style="width: 18rem;">
        <img class="card-img-top" style="height: 200px;" src="<?=base_url()?>/resources/img/<?=$sitio['sit_Foto'];?>" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title"><?=$sitio['sit_Nombre'];?></h5>
          <p class="card-text"><?=$sitio['sit_Descripcion'];?></p>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#sitio-modal-<?=$sitio['sit_ID'];?>" data-nombre="<?=$sitio['sit_Nombre'];?>" data-descripcion="<?=$sitio['sit_Descripcion'];?>" data-imagen="<?=base_url()?>/resources/img/<?=$sitio['sit_Foto'];?>">Ver más</button>
        </div>
      </div>

      <div class="modal" id="sitio-modal-<?=$sitio['sit_ID'];?>">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="sitio-modal-title-<?=$sitio['sit_ID'];?>"><?=$sitio['sit_Nombre'];?></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <img src="<?=base_url()?>/resources/img/<?=$sitio['sit_Foto'];?>" style="height: 510px;" alt="" class="img-fluid mb-3">
              <p id="sitio-modal-desc-<?=$sitio['sit_ID'];?>"><?=$sitio['sit_Descripcion'];?></p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              <a href="#" class="btn btn-primary" id="sitio-modal-link-<?=$sitio['sit_ID'];?>">Ir al sitio</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>                 
</div>
</section>
      
        <!-- Team-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">NUESTRO INCREIBLE EQUIPO</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/user2.png" alt="..." />
                            <h4>Nombres</h4>
                            <p class="text-muted">Puesto o área encargada</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/user2.png" alt="..." />
                            <h4>Nombres</h4>
                            <p class="text-muted">Puesto o área encargada</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/user2.png" alt="..." />
                            <h4>Nombres</h4>
                            <p class="text-muted">Puesto o área encargada</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p></div>
                </div>
            </div>
        </section>
        <!-- Clients-->
        <div class="py-5">
            <div class="container">
                <div class="row align-items-center">
   
                    <div class="col-md-12 col-sm-6 my-3">
                        <a href="https://www.facebook.com/ImplanAcapulco/"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/facebook.svg" alt="..." aria-label="Facebook Logo" /></a>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">CONTACT0</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control" id="name" type="text" placeholder="Nombre *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">Se requiere un nombre.</div>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" id="email" type="email" placeholder="Email *" data-sb-validations="required,email" />
                                <div class="invalid-feedback" data-sb-feedback="email:required">Se requiere un email.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">El correo no es valido.</div>
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control" id="phone" type="tel" placeholder="Telefono *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="phone:required">Se requiere un número de teléfono.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control" id="message" placeholder="Su mensaje *" data-sb-validations="required"></textarea>
                                <div class="invalid-feedback" data-sb-feedback="message:required">Se requiere un mensaje.</div>
                            </div>
                        </div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                            To activate this form, sign up at
                            <br />
                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                    <!-- Submit Button-->
                    <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled" id="submitButton" type="submit">Enviar mensaje</button></div>
                </form>
            </div>
        </section>


        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; Your Website 2022</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/ImplanAcapulco/" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/ImplanAcapulco/" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Portfolio Modals-->
    
<!-- Botón que abre la ventana modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#miModal">
  Abrir ventana modal
</button>

<!-- Ventana modal -->
<div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="miModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="miModalLabel">Ventana modal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Aquí va el contenido de la ventana modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Guardar cambios</button>
      </div>
    </div>
  </div>
</div>
  

<?=$this->endSection()?>

<?=$this->section('js')?>
<script src="<?php echo base_url()?>/js/scripts.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.2/dist/sweetalert2.all.min.js"></script>

<script>
let timer;

function showAlert() {
  Swal.fire({
    title: '¡Recomendación!',
    html: '<p>Recomendaciones de lugares a donde ir.</p>' +
          '<form id="myForm">' +
          '  <!-- Agrega los campos del formulario aquí -->' +
          '</form>',
    confirmButtonText: 'Ir',
    showCloseButton: true,
    position: 'bottom',
    timer: 3000,
    timerProgressBar: true,
    allowOutsideClick: false,
    customClass: {
      popup: 'my-swal-size'
    },
    willOpen: function() {
      timer = setTimeout(function() {
        Swal.close();
      }, 3000);
    },
    preConfirm: function() {
      clearTimeout(timer); // Detener el timer aquí
      return new Promise(function(resolve) {
        $('#myForm').submit(function(event) {
          event.preventDefault();
          resolve();
        });
        $('#myForm').append('<button type="submit" class="btn btn-primary">Enviar</button>');
      });
    }
  });
}

showAlert();

</script>

<style>
    .my-swal-size .swal2-popup {
  width: 30px !important;
  height: 30px !important;
  font-size: 14px !important;
  margin-right: 50px !important;
  margin-bottom: -75px !important;
}

.my-swal-size .swal2-title {
  font-size: 14px !important;
}

.my-swal-size .swal2-content {
  font-size: 14px !important;
}

.my-swal-size .swal2-confirm {
  font-size: 14px !important;
}
</style>

<?=$this->endSection()?>

<?=$this->extend('User/Front/layout/main')?>
<!-- Services-->
<?= $this->section('title')?>
IMPLAN 
<?=$this->endSection()?>
<?=$this->section('EstilosCss') ?>
<link href="css/styles.css" rel="stylesheet" />
<?=$this->endSection()?>

<?=$this->section('menu')?>
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container"> <?php if (empty(session('nombreUsuario'))) {
            ?>
            <a class="nav-link" href="<?php echo base_url()?>/login">INICIAR SESION</a>
                <?php }else{};?>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url()?>/BancodeProyectos">Banco de Proyectos</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url()?>/SitiosdeAcapulco">Sitios de interes Acapulco</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url()?>/ObrasenProceso">Obras en Proceso</a></li>
                        <!--<li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              PROYECTOS
                            </a>
                            <ul class="dropdown-menu">
                            <li><hr class="dropdown-divider"></li>
                              <li><a class="dropdown-item" href="<?php echo base_url()?>/BancodeProyectos">Banco de Proyectos</a></li>
                              <li><hr class="dropdown-divider"></li>
                              <li><a class="dropdown-item" href="<?php echo base_url()?>/Acapulco">Acapulco</a></li>
                              <li><hr class="dropdown-divider"></li>
                              <li><a class="dropdown-item" href="<?php echo base_url()?>/mapa">Mapa</a></li>
                            </ul>
                          </li>-->
                    </ul>
                </div>
            </div>
        </nav>
<?=$this->endSection()?>

<?=$this->section('content')?>
<!-- Masthead-->
<header class="masthead">
    <div class="container">
        <div class="masthead-heading text-uppercase">INSTITUTO MUNICIPAL DE PLANEACIÓN DE ACAPULCO
        </div>
        <a class="btn btn-primary btn-xl text-uppercase" href="#services">Más</a>
    </div>
</header>
<section class="page-section" id="services">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">¿QUIÉNES SOMOS?</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
        </div>
        <div class="row text-center">
            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                    <i class="fas fa-magnifying-glass fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="my-3">DEFINICIÓN</h4>
                <p class="text-muted">Es un organismo público que orienta la Planeación
                    Estratégica Multidisciplinaria a mediano y largo plazo de las ciudades. Traspasa
                    períodos políticos para sentar las bases de la participación ciudadana en la
                    planificación de la ciudad, garantizando la continuidad de proyectos de gran
                    aliento y de transformación.
                </p>
        </div>
        <div class="col-md-4">
            <span class="fa-stack fa-4x">
                <i class="fas fa-circle fa-stack-2x text-primary"></i>
                <i class="fas fa-gears fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="my-3">CONTEXTO</h4>
            <p class="text-muted">En cualquier alcaldía del país, el proceso trienal de
                cambio de administración genera Inevitablemente un ciclo recurrente de
                ‘reinvención’ del proyecto municipal cada tres años, con todos los costos que
                esto representa.
            </p>
        </div>
        <div class="col-md-4">
            <span class="fa-stack fa-4x">
                <i class="fas fa-circle fa-stack-2x text-primary"></i>
                <i class="fas fa-handshake fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="my-3">BENEFICIOS</h4>
                <p class="text-muted">• Apoyar a la administración municipal a alcanzar sus objetivos.

                    <p class="text-muted">• Vinculación, gestión y gobernanza a través del Consejo Ciudadano del IMPLAN.

                        <p class="text-muted">• Posicionamiento regional.

                            <p class="text-muted">• Atracción de recursos internacionales para proyectos estratégicos.

                                <p class="text-muted">• Capitalización política, social y económica de la Alcaldesa.</p>
            </div>
        </div>
    </div>
</section>
                <!-- Portfolio Grid-->
                <section class="page-section bg-light" id="portfolio">
                    <div class="container">
                        <div class="text-center">
                            <h2 class="section-heading text-uppercase">NOTICIAS</h2>
                            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-sm-6 mb-4">
                                <!-- Portfolio item 1-->
                                <div class="portfolio-item">
                                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                        <div class="portfolio-hover">
                                            <div class="portfolio-hover-content">
                                                <i class="fas fa-plus fa-3x"></i>
                                            </div>
                                        </div>
                                        <img class="img-fluid" src="assets/img/proyectos/pr1.jpg" alt="..."/>
                                    </a>
                                    <div class="portfolio-caption">
                                        <div class="portfolio-caption-heading">NOTICIA</div>
                                        <div class="portfolio-caption-subheading text-muted">Descripción corta</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 mb-4">
                                <!-- Portfolio item 2-->
                                <div class="portfolio-item">
                                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                        <div class="portfolio-hover">
                                            <div class="portfolio-hover-content">
                                                <i class="fas fa-plus fa-3x"></i>
                                            </div>
                                        </div>
                                        <img class="img-fluid" src="assets/img/proyectos/pr2.jpg" alt="..."/>
                                    </a>
                                    <div class="portfolio-caption">
                                        <div class="portfolio-caption-heading">NOTICIA</div>
                                        <div class="portfolio-caption-subheading text-muted">Descripción corta</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 mb-4">
                                <!-- Portfolio item 3-->
                                <div class="portfolio-item">
                                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                                        <div class="portfolio-hover">
                                            <div class="portfolio-hover-content">
                                                <i class="fas fa-plus fa-3x"></i>
                                            </div>
                                        </div>
                                        <img class="img-fluid" src="assets/img/proyectos/pr3.jpg" alt="..."/>
                                    </a>
                                    <div class="portfolio-caption">
                                        <div class="portfolio-caption-heading">NOTICIA</div>
                                        <div class="portfolio-caption-subheading text-muted">Descripción corta</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                                <!-- Portfolio item 4-->
                                <div class="portfolio-item">
                                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                                        <div class="portfolio-hover">
                                            <div class="portfolio-hover-content">
                                                <i class="fas fa-plus fa-3x"></i>
                                            </div>
                                        </div>
                                        <img class="img-fluid" src="assets/img/proyectos/pr4.jpg" alt="..."/>
                                    </a>
                                    <div class="portfolio-caption">
                                        <div class="portfolio-caption-heading">NOTICIA</div>
                                        <div class="portfolio-caption-subheading text-muted">Descripción corta</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                                <!-- Portfolio item 5-->
                                <div class="portfolio-item">
                                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                                        <div class="portfolio-hover">
                                            <div class="portfolio-hover-content">
                                                <i class="fas fa-plus fa-3x"></i>
                                            </div>
                                        </div>
                                        <img class="img-fluid" src="assets/img/proyectos/pr5.jpg" alt="..."/>
                                    </a>
                                    <div class="portfolio-caption">
                                        <div class="portfolio-caption-heading">NOTICIA</div>
                                        <div class="portfolio-caption-subheading text-muted">Descripción corta</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <!-- Portfolio item 6-->
                                <div class="portfolio-item">
                                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                                        <div class="portfolio-hover">
                                            <div class="portfolio-hover-content">
                                                <i class="fas fa-plus fa-3x"></i>
                                            </div>
                                        </div>
                                        <img class="img-fluid" src="assets/img/proyectos/pr6.jpg" alt="..."/>
                                    </a>
                                    <div class="portfolio-caption">
                                        <div class="portfolio-caption-heading">NOTICIA</div>
                                        <div class="portfolio-caption-subheading text-muted">Descripción corta</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- About-->
                <section class="page-section" id="about">
                    <div class="container">
                        <div class="text-center">
                            <h2 class="section-heading text-uppercase">SOBRE NOSOTROS</h2>
                            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                        </div>
                        <ul class="timeline">
                            <li>
                                <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/1.jpg" alt="..."/></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4>2005</h4>
                                        <h4 class="subheading">CREACIÓN</h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted">Nace el IMPLAN como parte de la estrategia de planeación.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-inverted">
                                <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/2.jpg" alt="..."/></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4>2012</h4>
                                        <h4 class="subheading">SEGUIMIENTO</h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted">Se nombra dirección pero sin atribuciones conferidas en el reglamento.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/3.jpg" alt="..."/></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4>2015</h4>
                                        <h4 class="subheading">REACTIVACIÓN</h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted">Se busca volver a incorporar pero no hay voluntad política.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-inverted">
                                <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/4.jpg" alt="..."/></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4>2018</h4>
                                        <h4 class="subheading">ABANDONO</h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted">Adela Román abandonó la propuesta de planeación ciudadana de la ciudad.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/3.jpg" alt="..."/></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4>2021</h4>
                                        <h4 class="subheading">CONSOLIDACIÓN</h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted">Abelina López busca encaminar el esfuerzo de gobierno con
                                            la agenda 2030. Esto plantea como eje rector de su gobierno la planeación de la
                                            ciudad.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-inverted">
                                <div class="timeline-image">
                                    <h4>
                                        Se Parte
                                        <br/>
                                        De Nuestra
                                        <br/>
                                        Historia!
                                    </h4>
                                </div>
                            </li>
                        </ul>
                    </div>
                </section>
                <!-- Team-->
                <section class="page-section bg-light" id="team">
                    <div class="container">
                        <div class="text-center">
                            <h2 class="section-heading text-uppercase">NUESTRO EQUIPO</h2>
                            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="team-member">
                                    <img class="mx-auto rounded-circle" src="assets/img/team/user2.png" alt="..."/>
                                    <h4>Nombres</h4>
                                    <p class="text-muted">Puesto o área encargada</p>
                                    <a
                                        class="btn btn-dark btn-social mx-2"
                                        href="#!"
                                        aria-label="Parveen Anand Twitter Profile">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a
                                        class="btn btn-dark btn-social mx-2"
                                        href="#!"
                                        aria-label="Parveen Anand Facebook Profile">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a
                                        class="btn btn-dark btn-social mx-2"
                                        href="#!"
                                        aria-label="Parveen Anand LinkedIn Profile">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="team-member">
                                    <img class="mx-auto rounded-circle" src="assets/img/team/user2.png" alt="..."/>
                                    <h4>Nombres</h4>
                                    <p class="text-muted">Puesto o área encargada</p>
                                    <a
                                        class="btn btn-dark btn-social mx-2"
                                        href="#!"
                                        aria-label="Diana Petersen Twitter Profile">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a
                                        class="btn btn-dark btn-social mx-2"
                                        href="#!"
                                        aria-label="Diana Petersen Facebook Profile">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a
                                        class="btn btn-dark btn-social mx-2"
                                        href="#!"
                                        aria-label="Diana Petersen LinkedIn Profile">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="team-member">
                                    <img class="mx-auto rounded-circle" src="assets/img/team/user2.png" alt="..."/>
                                    <h4>Nombres</h4>
                                    <p class="text-muted">Puesto o área encargada</p>
                                    <a
                                        class="btn btn-dark btn-social mx-2"
                                        href="#!"
                                        aria-label="Larry Parker Twitter Profile">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a
                                        class="btn btn-dark btn-social mx-2"
                                        href="#!"
                                        aria-label="Larry Parker Facebook Profile">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a
                                        class="btn btn-dark btn-social mx-2"
                                        href="#!"
                                        aria-label="Larry Parker LinkedIn Profile">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8 mx-auto text-center">
                                <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing
                                    elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam
                                    corporis ea, alias ut unde.</p>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Clients-->
                <div class="py-5">
                    <div class="container">
                        <div class="row align-items-center">

                            <div class="col-md-12 col-sm-6 my-3">
                                <a href="https://www.facebook.com/ImplanAcapulco/"><img
                                    class="img-fluid img-brand d-block mx-auto"
                                    src="assets/img/logos/facebook.svg"
                                    alt="..."
                                    aria-label="Facebook Logo"/></a>
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
                        <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <div class="row align-items-stretch mb-5">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <!-- Name input-->
                                        <input
                                            class="form-control"
                                            id="name"
                                            type="text"
                                            placeholder="Nombre *"
                                            data-sb-validations="required"/>
                                        <div class="invalid-feedback" data-sb-feedback="name:required">Se requiere un nombre.</div>
                                    </div>
                                    <div class="form-group">
                                        <!-- Email address input-->
                                        <input
                                            class="form-control"
                                            id="email"
                                            type="email"
                                            placeholder="Email *"
                                            data-sb-validations="required,email"/>
                                        <div class="invalid-feedback" data-sb-feedback="email:required">Se requiere un email.</div>
                                        <div class="invalid-feedback" data-sb-feedback="email:email">El correo no es valido.</div>
                                    </div>
                                    <div class="form-group mb-md-0">
                                        <!-- Phone number input-->
                                        <input
                                            class="form-control"
                                            id="phone"
                                            type="tel"
                                            placeholder="Telefono *"
                                            data-sb-validations="required"/>
                                        <div class="invalid-feedback" data-sb-feedback="phone:required">Se requiere un número de teléfono.</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-group-textarea mb-md-0">
                                        <!-- Message input-->
                                        <textarea
                                            class="form-control"
                                            id="message"
                                            placeholder="Su mensaje *"
                                            data-sb-validations="required"></textarea>
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
                                    <br/>
                                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage">
                                <div class="text-center text-danger mb-3">Error sending message!</div>
                            </div>
                            <!-- Submit Button-->
                            <div class="text-center">
                                <button
                                    class="btn btn-primary btn-xl text-uppercase disabled"
                                    id="submitButton"
                                    type="submit">Enviar mensaje</button>
                            </div>
                        </form>
                    </div>
                </section>
                <!-- Footer-->
                <footer class="footer py-4">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-4 text-lg-start">Copyright &copy; Your Website 2022</div>
                            <div class="col-lg-4 my-3 my-lg-0">
                                <a
                                    class="btn btn-dark btn-social mx-2"
                                    href="https://www.facebook.com/ImplanAcapulco/"
                                    aria-label="Twitter">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a
                                    class="btn btn-dark btn-social mx-2"
                                    href="https://www.facebook.com/ImplanAcapulco/"
                                    aria-label="Facebook">
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
                <!-- Portfolio Modals-->
                <!-- Portfolio item 1 modal popup-->
                <div
                    class="portfolio-modal modal fade"
                    id="portfolioModal1"
                    tabindex="-1"
                    role="dialog"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal"/></div>
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8">
                                        <div class="modal-body">
                                            <!-- Project details-->
                                            <h2 class="text-uppercase">NOTICIA</h2>
                                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                            <img
                                                class="img-fluid d-block mx-auto"
                                                src="assets/img/proyectos/pr1.jpg"
                                                alt="..."/>
                                            <p>Use this area to describe your project. Lorem ipsum dolor sit amet,
                                                consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus
                                                dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae
                                                cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                            <ul class="list-inline">
                                                <li>
                                                    <strong>DATOS:</strong>
                                                    datos
                                                </li>
                                                <li>
                                                    <strong>DATOS:</strong>
                                                    datos
                                                </li>
                                            </ul>
                                            <button
                                                class="btn btn-primary btn-xl text-uppercase"
                                                data-bs-dismiss="modal"
                                                type="button">
                                                <i class="fas fa-xmark me-1"></i>
                                                Cerrar
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Portfolio item 2 modal popup-->
                <div
                    class="portfolio-modal modal fade"
                    id="portfolioModal2"
                    tabindex="-1"
                    role="dialog"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal"/></div>
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8">
                                        <div class="modal-body">
                                            <!-- Project details-->
                                            <h2 class="text-uppercase">NOTICIA</h2>
                                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                            <img
                                                class="img-fluid d-block mx-auto"
                                                src="assets/img/proyectos/pr2.jpg"
                                                alt="..."/>
                                            <p>Use this area to describe your project. Lorem ipsum dolor sit amet,
                                                consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus
                                                dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae
                                                cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                            <ul class="list-inline">
                                                <li>
                                                    <strong>DATOS:</strong>
                                                    datos
                                                </li>
                                                <li>
                                                    <strong>DATOS:</strong>
                                                    datos
                                                </li>
                                            </ul>
                                            <button
                                                class="btn btn-primary btn-xl text-uppercase"
                                                data-bs-dismiss="modal"
                                                type="button">
                                                <i class="fas fa-xmark me-1"></i>
                                                Cerrar
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Portfolio item 3 modal popup-->
                <div
                    class="portfolio-modal modal fade"
                    id="portfolioModal3"
                    tabindex="-1"
                    role="dialog"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal"/></div>
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8">
                                        <div class="modal-body">
                                            <!-- Project details-->
                                            <h2 class="text-uppercase">NOTICIA</h2>
                                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                            <img
                                                class="img-fluid d-block mx-auto"
                                                src="assets/img/proyectos/pr3.jpg"
                                                alt="..."/>
                                            <p>Use this area to describe your project. Lorem ipsum dolor sit amet,
                                                consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus
                                                dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae
                                                cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                            <ul class="list-inline">
                                                <li>
                                                    <strong>DATOS:</strong>
                                                    datos
                                                </li>
                                                <li>
                                                    <strong>DATOS:</strong>
                                                    datos
                                                </li>
                                            </ul>
                                            <button
                                                class="btn btn-primary btn-xl text-uppercase"
                                                data-bs-dismiss="modal"
                                                type="button">
                                                <i class="fas fa-xmark me-1"></i>
                                                Cerrar
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Portfolio item 4 modal popup-->
                <div
                    class="portfolio-modal modal fade"
                    id="portfolioModal4"
                    tabindex="-1"
                    role="dialog"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal"/></div>
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8">
                                        <div class="modal-body">
                                            <!-- Project details-->
                                            <h2 class="text-uppercase">NOTICIA</h2>
                                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                            <img
                                                class="img-fluid d-block mx-auto"
                                                src="assets/img/proyectos/pr4.jpg"
                                                alt="..."/>
                                            <p>Use this area to describe your project. Lorem ipsum dolor sit amet,
                                                consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus
                                                dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae
                                                cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                            <ul class="list-inline">
                                                <li>
                                                    <strong>DATOS:</strong>
                                                    datos
                                                </li>
                                                <li>
                                                    <strong>DATOS:</strong>
                                                    datos
                                                </li>
                                            </ul>
                                            <button
                                                class="btn btn-primary btn-xl text-uppercase"
                                                data-bs-dismiss="modal"
                                                type="button">
                                                <i class="fas fa-xmark me-1"></i>
                                                Cerrar
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Portfolio item 5 modal popup-->
                <div
                    class="portfolio-modal modal fade"
                    id="portfolioModal5"
                    tabindex="-1"
                    role="dialog"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal"/></div>
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8">
                                        <div class="modal-body">
                                            <!-- Project details-->
                                            <h2 class="text-uppercase">NOTICIA</h2>
                                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                            <img
                                                class="img-fluid d-block mx-auto"
                                                src="assets/img/proyectos/pr5.jpg"
                                                alt="..."/>
                                            <p>Use this area to describe your project. Lorem ipsum dolor sit amet,
                                                consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus
                                                dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae
                                                cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                            <ul class="list-inline">
                                                <li>
                                                    <strong>DATOS:</strong>
                                                    datos
                                                </li>
                                                <li>
                                                    <strong>DATOS:</strong>
                                                    datos
                                                </li>
                                            </ul>
                                            <button
                                                class="btn btn-primary btn-xl text-uppercase"
                                                data-bs-dismiss="modal"
                                                type="button">
                                                <i class="fas fa-xmark me-1"></i>
                                                Cerrar
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Portfolio item 6 modal popup-->
                <div
                    class="portfolio-modal modal fade"
                    id="portfolioModal6"
                    tabindex="-1"
                    role="dialog"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal"/></div>
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8">
                                        <div class="modal-body">
                                            <!-- Project details-->
                                            <h2 class="text-uppercase">NOTICIA</h2>
                                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                            <img
                                                class="img-fluid d-block mx-auto"
                                                src="assets/img/proyectos/pr6.jpg"
                                                alt="..."/>
                                            <p>Use this area to describe your project. Lorem ipsum dolor sit amet,
                                                consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus
                                                dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae
                                                cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                            <ul class="list-inline">
                                                <li>
                                                    <strong>DATOS:</strong>
                                                    datos
                                                </li>
                                                <li>
                                                    <strong>DATOS:</strong>
                                                    datos
                                                </li>
                                            </ul>
                                            <button
                                                class="btn btn-primary btn-xl text-uppercase"
                                                data-bs-dismiss="modal"
                                                type="button">
                                                <i class="fas fa-xmark me-1"></i>
                                                Cerrar
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<?=$this->endSection()?>

<?=$this->section('js')?>
<script src="<?php echo base_url()?>/js/scripts.js"></script>
<?=$this->endSection()?>

<?php headerAdmin($data); ?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i><?= $data['page_title']; ?></h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Blank Page</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <!--<div class="tile-body">Hospital Nuestra Familia</div>-->
            <h1 class="titulo">HOSPITAL NUESTRA FAMILIA</h1>

            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="<?= media(); ?>/images/doctor-portada.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="<?= media(); ?>/images/odontologia.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="<?= media(); ?>/images/laboratorio.jpg" class="d-block w-100" alt="...">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>

            <br>
            <h1 class="titulo">ESPECIALIDADES</h1>
            <div class="card-deck">
              <div class="card">
                <img src="<?= media(); ?>/images/medicina-interna.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Medicina Interna</h5>
                  <p class="card-text">Es una especialidad médica que se dedica a la atención integral del adulto enfermo, enfocada al diagnóstico y el 
                  tratamiento no quirúrgico de las enfermedades que afectan a sus órganos y sistemas internos, y a su prevención.</p>
                </div>
              </div>

              <div class="card">
                <img src="<?= media(); ?>/images/endocrinologia.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Endocrinología</h5>
                  <p class="card-text">Rama de la medicina que se especializa en el diagnóstico y tratamiento de trastornos del sistema endocrino, 
                  que incluye las glándulas y órganos que elaboran hormonas. Estos trastornos incluyen diabetes, infertilidad, 
                  y problemas tiroideos, suprarrenales y de la hipófisis.</p>
                </div>
              </div>
              
              <div class="card">
                <img src="<?= media(); ?>/images/ginecologia.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Ginecología</h5>
                  <p class="card-text">La especialidad de Ginecología y Obstetricia es el campo de la medicina que se ocupa de la salud integral 
                  de la mujer, así como de los fenómenos fisiológicos relacionados con la reproducción humana, incluyendo la 
                  gestación, el parto y el puerperio.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
<?php footerAdmin($data); ?>
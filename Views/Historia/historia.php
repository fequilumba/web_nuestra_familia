<?php headerAdmin($data); ?>
<div class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="fa fa-dashboard"></i><?= $data['page_title']; ?></h1>
    </div>
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item"><a href="<?= base_url(); ?>/historia"><?= $data['page_title']; ?></a></li>
    </ul>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <h1 class="titulo">HOSPITAL NUESTRA FAMILIA</h1>

        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="<?= media(); ?>/images/ecografia.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="<?= media(); ?>/images/radiologia.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="<?= media(); ?>/images/imagenologia.jpg" class="d-block w-100" alt="...">
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
        <h1 class="titulo">Historia</h1>  
  
        <p class="card-text">El Hospital “Nuestra Familia” es la institución con 93 años de servicio a la comunidad sus 
          secretos e inspiraciones para mantenerse en un constante crecimiento durante mucho tiempo esta en la 
          esencia de su misión y visión.
          Durante su incesante y perseverante historia de esta Casa de Salud, se ha caracterizado por la creciente 
          valor de servicios lo que conlleva al desarrollo institucional, además por albergar y forjar a los más notables
          profesionales que ha dado la medicina ecuatoriana.
        </p>

        <p class="card-text">Contamos con 10 especialidades médicas, 5 especialidades quirúrgicas, 1 unidades especial y 1 servicio general; en este
          periodo, el Ministerio de Salud ha invertido significativamente para equiparlo de una moderna infraestructura que se
          revierte en la óptimna atención de todos los pacientes. Contamos con salas de laborotario e imagen que cubre las necesidades
          más recientes y exigentes de la comunidad.
        </p>  
      </div>
    </div>
  </div>
</div>
<?php footerAdmin($data); ?>
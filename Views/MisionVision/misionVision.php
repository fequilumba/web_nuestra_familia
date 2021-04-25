<?php headerAdmin($data); ?>
<div class="app-content">
  <div class="app-title">
    <div>
    <h1><i class="fa fa-dashboard"></i><?= $data['page_title']; ?></h1>
  </div>
  <ul class="app-breadcrumb breadcrumb">
    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item"><a href="<?= base_url(); ?>/misionVision"><?= $data['page_title']; ?></a></li>
    </ul>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <div style="text-align:center;">
          <img src="<?= media(); ?>/images/LOGO.png" alt="Imagen Logo">
        </div>
      
        <br>
        <div>
          <h2 class="titulo">Misión</h2>
          <p class="parrafo">El Hospital “Nuestra Familia", es una entidad privada que promueve la 
            atención de alta calidad y proporciona atención médica basada en principios éticos y morales, 
            con responsabilidad en la atención inmediata a pacientes.
          </p>
        </div>
        
        <br>
        <div>
          <h2 class="titulo">Visión</h2>
          <p class="parrafo">Ser un referente de salud, calidad y seguridad del paciente a nivel nacional, 
            convirtiéndose en un hospital docente en varias especialidades médicas.
          </p>
        </div>

        <br>
        <div>
          <h2 class="titulo">Valores</h2>
          <p class="parrafo">Los valores fundamentales que se inculcan en nuestra casa de salud se basan en
            el respeto, integridad, transparencia, calidez y calidad hacia nuestros pacientes.
          </p>
        </div>
      </div> 
    </div> <!-- .card --> 
  </div> <!-- /.col-12 -->
</div> <!-- /.content-wrapper -->
<?php footerAdmin($data); ?>
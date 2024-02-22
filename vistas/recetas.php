<?php

 
if (!isset($_SESSION["rol"])) {
  echo'<script> 
  window.location.href="index.php?ruta=inicio";
   
</script>';
return;

}





if  ($_SESSION["rol"] == 2)
echo'<script> 
swal.fire({
  icon: "success",
  title: "...",
  text: "acceso correcto",});
  timer: 800


</script>';



?>




<div id="recetas" class="text-center bg-dark text-light has-height-md middle-items wow fadeIn">
        <h2 class="section-title">RECETAS RECOMENDADAS</h2>
    

    <div class="row">
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="vistas/assets/imgs/arroz blanco.jpg" target="_blank">
          <img src="vistas/assets/imgs/arroz blanco.jpg" alt="Lights" style="width:100%">
          <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="/w3images/nature.jpg" target="_blank">
          <img src="vistas/assets/imgs/comida rapida.png" alt="Nature" style="width:100%">
          <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="/w3images/fjords.jpg" target="_blank">
          <img src="vistas/assets/imgs/bandeja paisa.png" alt="Fjords" style="width:100%">
          <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
          </div>
        </a>
      </div>
    </div>
  </div>
        
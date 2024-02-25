<?php


if (!isset($_SESSION["rol"])) {
  echo '<script> 
  window.location.href="index.php?ruta=inicio";
   
</script>';
  return;
}

if ($_SESSION["rol"] != 1) {
  echo '<script> 
  window.location.href="index.php?ruta=recetas";
   
</script>';

  return;
}

if ($_SESSION["rol"] == 1)
  echo '<script> 
swal.fire({
  icon: "success",
  title: "...",
  text: "acceso correcto",
  timer: 800
});

</script>';



?>



<div id="" class="text-center bg-dark text-light has-height-md middle-items wow fadeIn ">


  <h2> Recetas</h2>
  <button type="button" class="btn btn-outline-success btn-block"> <i class="fa-solid fa-circle-check" data-toggle="modal" data-target="#myModal">
      Nueva receta
  </button>



  </form>
  <table class="table table-striped table-bordered">

    <thead>
      <tr>
        <th>id Platillo</th>
        <th>Nombre de la platillo</th>
        <th>niveles</th>
        <th>paso a paso</th>



      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>arroz Blanco</td>
        <td>basico</td>
        <td>basico</td>
        <div class="btn btn-grop"></div>
        <td> <button class="btn btn-warning"> <i class="fa-regular fa-pen-to-square"></i></button>
          <button class="btn btn-primary"> <i class="fa-regular fa-trash-can"></i></button>



        </td>

      </tr>
    </tbody>
  </table>

</div>
</div>


</section>
</div>
</div>

<!-- Modal -->

<div class="modal" id="myModal">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Nueva Receta</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="group">
        <label for="n_receta" class="label">Nombre de la receta</label>
        <input id="reg_Rcontraseña" type="text" class="input"  name="n_receta" placeholder="Ingrese el nombre de la receta">
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
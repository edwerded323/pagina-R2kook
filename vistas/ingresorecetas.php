<?php

 
if (!isset($_SESSION["rol"])) {
  echo'<script> 
  window.location.href="index.php?ruta=inicio";
   
</script>';
return;

}

if ($_SESSION["rol"] != 1) {
  echo'<script> 
  window.location.href="index.php?ruta=recetas";
   
</script>';

return;
}

if  ($_SESSION["rol"] == 1)
echo'<script> 
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

  

  <div class= container mt-3>
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
        <td> <button class="btn bnt-info "> modificar</button></td>
        <td> <button class="btn bnt-primary "> eliminar</button></td>
      </tr>      
      <tr >
        <td>Success</td>
        <td>Doe</td>
        <td>john@example.com</td>
       
      </tr>
      <tr >
        <td>Danger</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr >
        <td>Info</td>
        <td>Dooley</td>
        <td>july@example.com</td>
        <td>
          <div class="btn btn-grop"></div>

        </td>
      </tr>
      
    </tbody>
  </table>
  </div>
</div>
</div>
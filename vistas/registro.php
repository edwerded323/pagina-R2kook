<div class="modal fade"   id="registro">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="login-wrap">
                <div class="login-html color:#fff;">
                    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Inicio de Sesion</label>
                    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Registro</label>
                    <div class="login-form">
                        <form class="sign-in-htm" method="POST">
                            <div class="group">
                                <label for="nombre" class="label">Correo</label>
                                <input id="nomber" type="text" class="input" name="ini_correo">
                            </div>
                            <div class="group">
                                <label for="contraseña" class="label">Contraseña</label>
                                <input id="contraseña" type="password" class="input" data-type="password" name="ini_contra">
                            </div>
                            <div class="group">
                                <input id="check" type="checkbox" class="check" checked>
                                <label for="check"><span class="icon"></span> Mantener Sesion Iniciada</label>
                            </div>
                            <div class="group">
                                <input type="submit" class="button" value="Iniciar Sesion">
                            </div>
                            <div class="hr"></div>
                            <div class="foot-lnk">¿Olvidaste la Contraseña?</a>
                            
                            <label for="tab-2">¿Quieres registrarte?</a>
                            </div>

                            <?php

                                    $ingresar = new ControladorFormularios();
                                    $ingresar-> ctrIngreso();
                            ?>

                        </form>

                    



                        <form class="sign-up-htm" method="POST">
                            <div class="group">
                                <label for="nombre" class="label">Nombre de Usuario</label>
                                <input id="nombre" type="text" class="input" name="reg_nombre">
                            </div>
                            <?php 
                           
                            ?>
                            <div class="group">
                                <label for="contraseña" class="label">Contraseña</label>
                                <input id="reg_contraseña" type="password" class="input" data-type="password" name="reg_contraseña">
                            </div>
                           
                            <div class="group">
                                <label for="contraseña" class="label">Repetir Contraseña</label>
                                <input id="reg_Rcontraseña" type="password" class="input" data-type="password" name="reg_Rcontraseña">
                            </div>
                            
                            <div class="group">
                                <label for="email" class="label">Correo</label>
                                <input id="email" type="email" class="input" name="reg_email">
                            </div>
                            <div class="group">
                                <input type="submit" class="button" value="Registrar">
                                
                            <div class="foot-lnk">
                                <label for="tab-1">¿Ya estas registrado?</a>
                            </div>
                            </div>
                            
                            <?php
                             
    
                               
     
                               
                            $registro =  ControladorFormularios::ctrRegistro();


                            if ($registro == "ok") {


                                echo '<script> 
                                     if(window.history.replaceState ){
                                     window.history.replaceState( null, null, window.location.href );
                                              }
        
                                                Swal.fire({
                                                    position: "top-end",
                                                    icon: "success",
                                                    title: "Your work has been saved",
                                                    showConfirmButton: false,
                                                    timer: 2500
                                                });
                                                </script>';
                                                                    } 
                                                                   
                                else {
                                 
                                                                
                                 ' <script> 
                                   alert("contraseña no coincide");
                                                   </script>';
                                                   }


                            ?>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
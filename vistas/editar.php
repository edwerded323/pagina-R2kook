<?php

?>


<div class="modal fade" id="editar">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="login-wrap">
                <div class="login-html color:#fff;">
                    <input id="edi" type="radio" name="edi" class="sign-in" checked><label for="edi" class="tab  text-light ">Actualizar Datos</label>
                    <div class="login-form">
                        <form  method="POST">
                            <div class="group">
                                <label for="nombre" class="label">Nombre de Usuario</label>
                                <input id="nombre" type="text" class="input" name="reg_nombre">
                            </div>

                            <div class="group">
                                <label for="contraseña" class="label">Contraseña</label>
                                <input id="reg_contraseña" type="password" class="input"  name="reg_contraseña" pl>
                            </div>

                           

                            <div class="group">
                                <label for="email" class="label">Correo</label>
                                <input id="email" type="email" class="input" name="reg_email">
                            </div>
                            <div class="group">
                                <input type="submit" class="button" value="Actualizar">



                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
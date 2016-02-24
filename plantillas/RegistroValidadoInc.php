<div class="form-group">
    <label>Nombre de usuario</label>
    <input type="text" class="form-control" name="txtNombre" placeholder="Ingrese usuario." <?php $validador -> mostrarNombre(); ?>/>
    <?php 
        $validador->mostrarErrorNombre();
    ?>
</div> 
<div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" name="txtEmail" placeholder="usuario@mail.com."<?php $validador -> mostrarEmail(); ?> />
    <?php 
        $validador->mostrarErrorEmail();
    ?>
</div>
<div class="form-group">
    <label>Contraseña</label>
    <input type="password" class="form-control" name="txtClave1" placeholder="Ingrese Clave."/>
    <?php 
        $validador->mostrarErrorClave1();
    ?>
</div>
<div class="form-group">
    <label>Repite la Contraseña</label>
    <input type="password" class="form-control" name="txtClave2" placeholder="Repite Clave."/>
    <?php 
        $validador->mostrarErrorClave2();
    ?>
</div>
<br>
<button type="reset" class="btn bnt-default btn-primary">Limpiar Formulario.</button>
&nbsp;&nbsp;
<button type="submit" class="btn bnt-default btn-primary" name="btnEnviar">Envíar Datos.</button>
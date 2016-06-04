<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:47
         compiled from verifyemail.tpl */ ?>

<form action="verifyemail.php" method="post" style="display:inline;">

    <input type="hidden" name="page" value="<?php echo $this->_tpl_vars['orgpage']; ?>
" />

    <div class="content2-pagetitle">
        <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/profile/32x32-profile.png" border="0" align="middle" width="32" height="32" alt="" />
        Verificar email
    </div>

    <br />
    <p>Uno o varios correos electrónicos no pudo ser entregado a la dirección especificada en tu perfil de usuario:</p>
    <p><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><?php echo $this->_tpl_vars['emailadr']; ?>
</strong></p>
    <p><br />Por favor, confirma que esta dirección de correo electrónico es correcta, o introducir uno nuevo.</p>
    <br />

    <input type="submit" name="new" value="Introduce una nuevo email" class="formbutton" style="width:200px" onclick="submitbutton('new')" />&nbsp;&nbsp;
    <input type="submit" name="confirm" value="Confirma el email" class="formbutton" style="width:200px" onclick="submitbutton('confirm')" />
    <br />

    <?php echo $this->_tpl_vars['datalicensemail']; ?>


</form>
<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:49
         compiled from viewprofile_pics.tpl */ ?>
<div class="content2-pagetitle">
    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/cacheicon/webcam.gif" style="margin-right: 10px;" width="32" height="32" alt="" />
    Log de la imagenes de <?php echo $this->_tpl_vars['username']; ?>

</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_logpictures.tpl", 'smarty_include_vars' => array('logdate' => true,'loguser' => false,'fullyear' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<p><br />Todas las imágenes tienen derechos de autor. Incluyendo los registros de imágenes pueden utilizarse en forma inalterada en los términos de la nueva licencia <href="articles.php?page=impressum#datalicense">data license</a>.</p>
<p>En la configuración del perfil <a href="mydetails.php"> </a> se puede elegir si el registro de imágenes de estadísticas y galería es visible para otros usuarios. Las fotografías marcadas como spoiler no se muestran, por lo que el número de imágenes en esta página puede ser menor que en las estadísticas de perfil.</a></p>
<p>&nbsp;</p>
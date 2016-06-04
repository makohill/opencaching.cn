<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:42
         compiled from newlogpics.tpl */ ?>
<div class="content2-pagetitle">
    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/32x32-pictures.gif" style="margin-right: 10px;" width="24" height="24" alt="" />
    Nuevas fotos de registro
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_logpictures.tpl", 'smarty_include_vars' => array('logdate' => true,'loguser' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<p class="mediumsmalltext"><img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/hint.gif" border="0" width="15" height="11" alt="" align="middle" />Calendario de exposiciones de la fecha de la subida de imágenes, cosa que puede diferir de la fecha de registro. Máximo una foto por día y usuario se muestra aquí. La pequeña galería en la página de inicio es, además, limitada a una imagen por cache y el día.</p>

<p class="mediumsmalltext">Todas las imágenes tienen derechos de autor. Incluyendo los registros de imágenes pueden utilizarse en forma inalterada en los términos de la nueva licencia <href="articles.php?page=impressum#datalicense">data license</a>.</p>
<p>&nbsp;</p>
<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:42
         compiled from newlogpics.tpl */ ?>
<div class="content2-pagetitle">
    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/32x32-pictures.gif" style="margin-right: 10px;" width="24" height="24" alt="" />
    Neue Logbilder
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_logpictures.tpl", 'smarty_include_vars' => array('logdate' => true,'loguser' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<p class="mediumsmalltext"><img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/hint.gif" border="0" width="15" height="11" alt="" align="middle" />Es wird jeweils das Datum angezeigt, an dem das Bild hochgeladen wurde, das heißt es kann vom Logdatum abweichen. Es wird höchstens ein Bild pro Tag und Benutzer angezeigt. Die kleine Galerie auf der Startseite ist zusätzlich auf ein Bild pro Cache und Tag beschränkt.</p>

<p class="mediumsmalltext">Alle Bilder sind urheberrechtlich geschützt und unterliegen zusammen mit den Logeinträgen der <a href="articles.php?page=impressum#datalicense">Opencaching.de-Datenlizenz</a>.</p>
<p>&nbsp;</p>
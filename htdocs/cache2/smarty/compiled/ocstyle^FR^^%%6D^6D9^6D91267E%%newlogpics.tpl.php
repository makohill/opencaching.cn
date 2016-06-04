<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:42
         compiled from newlogpics.tpl */ ?>
<div class="content2-pagetitle">
    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/32x32-pictures.gif" style="margin-right: 10px;" width="24" height="24" alt="" />
    Nouveaux log images
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_logpictures.tpl", 'smarty_include_vars' => array('logdate' => true,'loguser' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<p class="mediumsmalltext"><img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/hint.gif" border="0" width="15" height="11" alt="" align="middle" />Dates montrent la date de transfert de images qui peut différer de la date de journal. Par conséquent vieilles dates peuvent apparaître dans la liste. Un maximum d'une image par jour et par utilisateur est affiché ici. La petite galerie sur la start page est limitée à une image par cache et jour.</p>

<p class="mediumsmalltext">Toutes les images sont la propriété et sous réserve de <a href="articles.php?page=impressum#datalicense">licence de données d'Opencaching.de</a>.</p>
<p>&nbsp;</p>
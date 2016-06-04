<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:49
         compiled from viewprofile_pics.tpl */ ?>
<div class="content2-pagetitle">
    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/cacheicon/webcam.gif" style="margin-right: 10px;" width="32" height="32" alt="" />
    Images de log de <?php echo $this->_tpl_vars['username']; ?>

</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_logpictures.tpl", 'smarty_include_vars' => array('logdate' => true,'loguser' => false,'fullyear' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<p><br />Toutes les images sont la propriété et sous réserve de <a href="articles.php?page=impressum#datalicense">licence de données d'Opencaching.de</a>.</p>
<p>Dans vos <a href="mydetails.php">profile settings</a> vous pouvez choisir si votre statistique des images de log et votre galerie est visible pour les autres utilisateurs. Des images marquées comme spoiler ne sont pas représentés&nbsp;; donc le nombre des images sur cette page peut être plus faible que dans les statistiques de profil.</a></p>
<p>&nbsp;</p>
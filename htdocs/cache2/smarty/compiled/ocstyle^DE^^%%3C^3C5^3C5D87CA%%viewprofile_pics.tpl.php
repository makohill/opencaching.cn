<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:49
         compiled from viewprofile_pics.tpl */ ?>
<div class="content2-pagetitle">
    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/cacheicon/webcam.gif" style="margin-right: 10px;" width="32" height="32" alt="" />
    Logbilder von <?php echo $this->_tpl_vars['username']; ?>

</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_logpictures.tpl", 'smarty_include_vars' => array('logdate' => true,'loguser' => false,'fullyear' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<p><br />Alle Bilder sind urheberrechtlich geschützt und unterliegen zusammen mit den Logeinträgen der <a href="articles.php?page=impressum#datalicense">Opencaching.de-Datenlizenz</a>.</p>
<p>In deinen <a href="mydetails.php">Profileinstellungen</a> kannst du festlegen, ob deine Logbild-Statistik und -Galerie für andere Benutzer sichtbar sein soll oder nicht. Als Spoiler markierte Bilder werden nicht angezeigt; daher kann die Zahl der Bilder auf dieser Seite geringer sein als in der Benutzerstatistik.</a></p>
<p>&nbsp;</p>
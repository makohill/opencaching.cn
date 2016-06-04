<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:42
         compiled from newlogpics.tpl */ ?>
<div class="content2-pagetitle">
    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/32x32-pictures.gif" style="margin-right: 10px;" width="24" height="24" alt="" />
    New log pictures
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_logpictures.tpl", 'smarty_include_vars' => array('logdate' => true,'loguser' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<p class="mediumsmalltext"><img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/hint.gif" border="0" width="15" height="11" alt="" align="middle" />Dates show the date of picture upload, wich can differ from the log date. Therefore old dates can appear in the list. Maximum one picture per day and user is displayed here. The small gallery on the start page is additionally limited to one picture per cache and day.</p>

<p class="mediumsmalltext">All pictures are copyrighted and subject to the <a href="articles.php?page=impressum#datalicense">Opencaching.de data license</a>.</p>
<p>&nbsp;</p>
<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:49
         compiled from viewprofile_pics.tpl */ ?>
<div class="content2-pagetitle">
    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/cacheicon/webcam.gif" style="margin-right: 10px;" width="32" height="32" alt="" />
    Log pictures of <?php echo $this->_tpl_vars['username']; ?>

</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_logpictures.tpl", 'smarty_include_vars' => array('logdate' => true,'loguser' => false,'fullyear' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<p><br />All pictures are copyrighted and subject to the <a href="articles.php?page=impressum#datalicense">Opencaching.de data license</a>.</p>
<p>In your <a href="mydetails.php">profile settings</a> you can choose if your log pictures stat and gallery is visible for other users. Pictures marked as spoiler are not shown; therefore the number of pictures on this page can be smaller than in the profile statistics.</a></p>
<p>&nbsp;</p>
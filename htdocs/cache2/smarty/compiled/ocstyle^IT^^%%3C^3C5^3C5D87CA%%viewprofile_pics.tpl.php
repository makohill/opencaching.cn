<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:49
         compiled from viewprofile_pics.tpl */ ?>
<div class="content2-pagetitle">
    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/cacheicon/webcam.gif" style="margin-right: 10px;" width="32" height="32" alt="" />
    Log immagini di <?php echo $this->_tpl_vars['username']; ?>

</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_logpictures.tpl", 'smarty_include_vars' => array('logdate' => true,'loguser' => false,'fullyear' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<p><br />Tutte le immagini sono protette da copyright. I log che includono immagini possono essere usati senza alcuna modifica secondo i termini dellla <a href="articles.php?page=impressum#datalicense">nuova licenza dati</a>.</p>
<p>Nelle tue <a href="mydetails.php">impostazioni profilo</a> puoi scegliere se le immagine di stato e la galleria sono visibili ad altri utenti. Le immagino segnalate come spoiler non sono visualizzate; pertanto il numero delle immagini in questa pagina può essere inferiore a quello nelle statistiche di profilo.</a></p>
<p>&nbsp;</p>
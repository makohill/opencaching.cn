<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:42
         compiled from newlogpics.tpl */ ?>
<div class="content2-pagetitle">
    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/32x32-pictures.gif" style="margin-right: 10px;" width="24" height="24" alt="" />
    Nuovi log immagini
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_logpictures.tpl", 'smarty_include_vars' => array('logdate' => true,'loguser' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<p class="mediumsmalltext"><img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/hint.gif" border="0" width="15" height="11" alt="" align="middle" />La data visualizza la data del caricamento dell\'immagine, che può essere diversa dalla data del log. Qui viene visualizzata al massimo una immagine al giorno per utente. La piccola galleria nella pagina di avvio è anche limitata ad una immagine per cache e per giorno.</p>

<p class="mediumsmalltext">Tutte le immagini sono protette da copyright. I log che includono immagini possono essere usati senza alcuna modifica secondo i termini dellla <a href="articles.php?page=impressum#datalicense">nuova licenza dati</a>.</p>
<p>&nbsp;</p>
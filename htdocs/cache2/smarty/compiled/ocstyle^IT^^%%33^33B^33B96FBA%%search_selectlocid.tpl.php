<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:46
         compiled from search_selectlocid.tpl */ ?>

<div class="content2-pagetitle"><img src="resource2/ocstyle/images/cacheicon/traditional.gif" style="margin-right: 10px;" width="32" height="32" alt="" />Seleziona città - Totale di <?php echo $this->_tpl_vars['resultscount']; ?>
 città corrispondenti</div>


<p>Esiste più di un risultato che soddisfa i tuoi criteri di scelta. Per favore seleziona la città corretta:</p>
<table border="0" cellspacing="0" cellpadding="0" width="100%">
    <tr><td colspan="2" style="height:4px"></td></tr>
    <tr><td colspan="2"><p><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_pager.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></p></td></tr>
    <tr><td>&nbsp;</td></td></tr>
    <?php echo $this->_tpl_vars['locations']; ?>

    <tr><td colspan="2" style="height:8px"></td></tr>
    <tr><td colspan="2"><p><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_pager.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></p></td></tr>
    <tr><td>&nbsp;</td></td></tr>
</table>
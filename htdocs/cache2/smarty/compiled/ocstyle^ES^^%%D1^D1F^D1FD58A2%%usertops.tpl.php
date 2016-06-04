<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:47
         compiled from usertops.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'usertops.tpl', 9, false),array('function', 'cycle', 'usertops.tpl', 23, false),)), $this); ?>
<div class="content2-pagetitle">
    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/<?php if ($this->_tpl_vars['oconly']): ?>is_oconly_small.png<?php else: ?>32x32-winner.png<?php endif; ?>" style="margin-right: 10px;" <?php if (! $this->_tpl_vars['oconly']): ?>width="32" height="32" alt=""<?php endif; ?> />
    Recomendación de <a href="viewprofile.php?userid=<?php echo $this->_tpl_vars['userid']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a>
</div>

<table class="null" border="0" cellspacing="0" width="98%">
    <tr>
        <td colspan="2">
            <table class="table" border="0" cellspacing="0" width="100%">
                <tr class="cachelistheader">
                    <th width="30px">Tipo</th>
                    <th width="570px">Nombre</th>
                    <th width="50px" style="text-align:center"><img src="images/rating-star-shadow.png" title="total recommendations" width="14" height="13" style="margin-top: -3px; "/></th>
                    <th width="50px">Estado</th>
                </tr>
                <?php $_from = $this->_tpl_vars['ratings']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ratingItem']):
?>
                    <?php echo smarty_function_cycle(array('assign' => 'listcolor','values' => "listcolor1,listcolor2"), $this);?>

                    <tr class="cachelistitem">
                        <td class="<?php echo $this->_tpl_vars['listcolor']; ?>
"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_cacheicon_22.tpl", 'smarty_include_vars' => array('cachetype' => ((is_array($_tmp=$this->_tpl_vars['ratingItem']['type'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
                        <td class="<?php echo $this->_tpl_vars['listcolor']; ?>
"><span style="<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_cachestatus_span.tpl", 'smarty_include_vars' => array('status' => $this->_tpl_vars['ratingItem']['status'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>"><a href="viewcache.php?cacheid=<?php echo $this->_tpl_vars['ratingItem']['cacheid']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['ratingItem']['cachename'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a></span> <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_oconly.tpl", 'smarty_include_vars' => array('oconly' => $this->_tpl_vars['ratingItem']['oconly'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> por 1</td>
                        <td class="<?php echo $this->_tpl_vars['listcolor']; ?>
" style="text-align:center"><?php echo $this->_tpl_vars['ratingItem']['countrating']; ?>
</td>
                        <td class="<?php echo $this->_tpl_vars['listcolor']; ?>
"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_cachestatus.tpl", 'smarty_include_vars' => array('status' => $this->_tpl_vars['ratingItem']['status'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
                    </tr>
                <?php endforeach; else: ?>
                    <tr><td colspan="2"><br /><?php echo ((is_array($_tmp=$this->_tpl_vars['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 no ha recomendado ningún geocache</td></tr>
                <?php endif; unset($_from); ?>
            </table>
        </td>
    </tr>
</table>
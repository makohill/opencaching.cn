<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:41
         compiled from myignores.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'myignores.tpl', 24, false),array('modifier', 'escape', 'myignores.tpl', 26, false),)), $this); ?>
 
<div class="content2-pagetitle">
    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/32x32-ignore.png" style="margin-right: 10px;" width="32" height="32" />
    Ignored geocaches
</div>

<table class="null" border="0" cellspacing="0" width="98%">
    <tr>
        <td colspan="2">
            <table class="table">
                <tr class="cachelistheader">
                    <th width="50px">Type</th>
                    <th width="50px">Status</th>
                    <th width="630px" colspan="2">Name</th>
                    <th></th>
                </tr>
                <?php $_from = $this->_tpl_vars['ignores']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ignoreItem']):
?>
                    <?php echo smarty_function_cycle(array('values' => "listcolor1,listcolor2",'assign' => 'listcolor'), $this);?>

                    <tr class="cachelistitem">
                        <td class="<?php echo $this->_tpl_vars['listcolor']; ?>
"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_cacheicon_22.tpl", 'smarty_include_vars' => array('cachetype' => ((is_array($_tmp=$this->_tpl_vars['ignoreItem']['type'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
                        <td class="<?php echo $this->_tpl_vars['listcolor']; ?>
"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_cachestatus.tpl", 'smarty_include_vars' => array('status' => $this->_tpl_vars['ignoreItem']['status'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
                        <td class="<?php echo $this->_tpl_vars['listcolor']; ?>
"><span style="<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_cachestatus_span.tpl", 'smarty_include_vars' => array('status' => $this->_tpl_vars['ignoreItem']['status'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>"><a href="viewcache.php?wp=<?php echo $this->_tpl_vars['ignoreItem']['wp']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['ignoreItem']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a></span> <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_oconly.tpl", 'smarty_include_vars' => array('oconly' => $this->_tpl_vars['ignoreItem']['oconly'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
                        <td class="<?php echo $this->_tpl_vars['listcolor']; ?>
"><nobr>[<a href="javascript:if(confirm('Do you really want to delete this entry?'))location.href='ignore.php?cacheid=<?php echo $this->_tpl_vars['ignoreItem']['cacheid']; ?>
&action=removeignore&target=myignores.php'">do not ignore</a>]</nobr></td>
                    </tr>
                <?php endforeach; else: ?>
                    <tr><td colspan="4"><br />You do not ignore any geocaches now.</td></tr>
                <?php endif; unset($_from); ?>
            </table>
        </td>
    </tr>
</table>
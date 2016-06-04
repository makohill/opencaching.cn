<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:43
         compiled from recommendations.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'recommendations.tpl', 16, false),array('modifier', 'sprintf', 'recommendations.tpl', 36, false),array('function', 'cycle', 'recommendations.tpl', 34, false),)), $this); ?>
<div class="content2-pagetitle">
    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/32x32-winner.png" style="margin-right: 10px;" width="32" height="32" alt="" />
    Cache recommendations
</div>

<table class="table">
    <tr>
        <td>
            <?php ob_start(); ?>
                <a href="viewcache.php?cacheid=<?php echo $this->_tpl_vars['cache']['id']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a>
            <?php $this->_smarty_vars['capture']['cache'] = ob_get_contents(); ob_end_clean(); ?>
            <?php ob_start(); ?>
                <a href="viewprofile.php?userid=<?php echo $this->_tpl_vars['cache']['userid']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a>
            <?php $this->_smarty_vars['capture']['user'] = ob_get_contents(); ob_end_clean(); ?>
            Users that recommended <?php echo $this->_smarty_vars['capture']['cache']; ?>
 by <?php echo $this->_smarty_vars['capture']['user']; ?>
 also recommended the following geocaches:
        </td>
    </tr>
    <tr><td class="spacer" colspan="2"></td></tr>
    <tr>
        <td colspan="2">
            <table class="table" border="0" cellspacing="0" width="100%">
                <tr>
                    <th width="50px">Quota</th>
                    <th width="10px">&nbsp;</th>
                    <th>Name</th>
                </tr>
                <?php $_from = $this->_tpl_vars['cacheRatings']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cacheRatingsItem']):
?>
                    <?php echo smarty_function_cycle(array('values' => "listcolor1,listcolor2",'assign' => 'listcolor'), $this);?>

                    <tr>
                        <td class="<?php echo $this->_tpl_vars['listcolor']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['cacheRatingsItem']['quote'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, "%0d") : smarty_modifier_sprintf($_tmp, "%0d")); ?>
%</td>
                        <td class="<?php echo $this->_tpl_vars['listcolor']; ?>
">&nbsp;</td>
                        <td class="<?php echo $this->_tpl_vars['listcolor']; ?>
">
                            <span style="<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_cachestatus_span.tpl", 'smarty_include_vars' => array('status' => $this->_tpl_vars['cacheRatingsItem']['status'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>"><a href="viewcache.php?wp=<?php echo $this->_tpl_vars['cacheRatingsItem']['wp']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['cacheRatingsItem']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a></span> by
                            <a href="viewprofile.php?userid=<?php echo $this->_tpl_vars['cacheRatingsItem']['cacheuserid']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['cacheRatingsItem']['cacheusername'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a>
                        </td>
                    </tr>
                <?php endforeach; else: ?>
                    <tr><td colspan="3">No recommendations found.</td></tr>
                <?php endif; unset($_from); ?>
            </table>
        </td>
    </tr>
</table>
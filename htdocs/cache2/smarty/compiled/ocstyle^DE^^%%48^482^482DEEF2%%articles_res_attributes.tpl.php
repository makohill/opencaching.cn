<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:38
         compiled from articles_res_attributes.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'articles_res_attributes.tpl', 10, false),)), $this); ?>

<table class="narrowtable">
    <?php $_from = $this->_tpl_vars['attributes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['attribGroupItem']):
?>
        <tr><td><div style="height:4px"></div></td></tr>
        <tr><td colspan="2" bgcolor="<?php echo ((is_array($_tmp=$this->_tpl_vars['attribGroupItem']['color'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" style="line-height:1.8em"><b><i><?php echo ((is_array($_tmp=$this->_tpl_vars['attribGroupItem']['category'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 / <?php echo ((is_array($_tmp=$this->_tpl_vars['attribGroupItem']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</i></b></td></tr>
        <tr><td><div style="height:8px"></div></td></tr>

        <?php $_from = $this->_tpl_vars['attribGroupItem']['attr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['attrItem'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['attrItem']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['attribItem']):
        $this->_foreach['attrItem']['iteration']++;
?>
            <tr id="attr<?php echo $this->_tpl_vars['attribItem']['id']; ?>
">
                <td valign="top" style="padding:6px 5px 6px 8px"><img src="resource2/ocstyle/images/attributes/<?php echo ((is_array($_tmp=$this->_tpl_vars['attribItem']['icon'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
.png" border="0" align="left" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['attribItem']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['attribItem']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></td>
                <td valign="top">
                    <p><span class="subtitle-header"><?php echo ((is_array($_tmp=$this->_tpl_vars['attribItem']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</span><br /> <?php echo $this->_tpl_vars['attribItem']['html_desc']; ?>
</p>
                </td>
            </tr>
        <?php endforeach; endif; unset($_from); ?>
    <?php endforeach; endif; unset($_from); ?>
</table>
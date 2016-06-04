<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:43
         compiled from res_attribgroup.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'res_attribgroup.tpl', 23, false),array('function', 'array_search', 'res_attribgroup.tpl', 30, false),)), $this); ?>
 

<?php $_from = $this->_tpl_vars['attriblist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['attribGroupItem']):
?>
    <div id="attribgroup<?php echo $this->_tpl_vars['attribGroupItem']['id']; ?>
" class="attribgroup">
        <table cellspacing="0">
            <tr>
                <td bgcolor="<?php echo ((is_array($_tmp=$this->_tpl_vars['attribGroupItem']['color'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" style="line-height:9px;padding-top:2px;margin:0 0 0 0;border-left:1px solid gray;border-right:1px solid gray;border-top:1px solid gray;">
                    <font size="1"><?php echo ((is_array($_tmp=$this->_tpl_vars['attribGroupItem']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</font>
                </td>
            </tr>
            <tr>
                <td bgcolor="#F8F8F8" style="margin:0 0 0 0;border-left:1px solid gray;border-right:1px solid gray;border-bottom:1px solid gray;">
                    <?php $_from = $this->_tpl_vars['attribGroupItem']['attr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['attribItem']):
?>
                        <?php echo smarty_function_array_search(array('var' => 'thisDisabled','needle' => $this->_tpl_vars['attribItem']['id'],'haystack' => $this->_tpl_vars['stateDisable']), $this);?>

                        <?php if ($this->_tpl_vars['thisDisabled'] !== false): ?>
                            <?php $this->assign('attrState', 3); ?>                         <?php else: ?>
                            <?php $this->assign('attrState', 1); ?>                         <?php endif; ?>
                                                 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_attribute.tpl", 'smarty_include_vars' => array('id' => $this->_tpl_vars['attribItem']['id'],'state' => $this->_tpl_vars['attrState'],'name' => $this->_tpl_vars['attribItem']['name'],'icon' => $this->_tpl_vars['attribItem']['icon'],'html_desc' => $this->_tpl_vars['attribItem']['html_desc'],'color' => $this->_tpl_vars['attribGroupItem']['color'],'onmousedown' => $this->_tpl_vars['onmousedown'],'inputprefix' => $this->_tpl_vars['inputprefix'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    <?php endforeach; endif; unset($_from); ?>
                </td>
            </tr>
        </table>
    </div>
<?php endforeach; endif; unset($_from); ?>
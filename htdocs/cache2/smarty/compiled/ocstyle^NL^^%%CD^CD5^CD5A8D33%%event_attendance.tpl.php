<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:38
         compiled from event_attendance.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'event_attendance.tpl', 9, false),array('modifier', 'date_format', 'event_attendance.tpl', 10, false),array('function', 'count', 'event_attendance.tpl', 15, false),)), $this); ?>
<p>
    <div style="margin-top:4px;">
        <p style="color: 5890a8"><b><?php echo ((is_array($_tmp=$this->_tpl_vars['cachename'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</b></p>
        <p style="color: 5890a8">op <?php echo ((is_array($_tmp=$this->_tpl_vars['event_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['opt']['format']['date']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['opt']['format']['date'])); ?>
</font><br />
        door <?php echo ((is_array($_tmp=$this->_tpl_vars['owner'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</p>
    </div>
    <div style="margin-top:16px;">
        <p style="color: 5890a8"><b>Wil deelnemen</b></p>
        <p style="color: 5890a8">(toaal: <?php echo smarty_function_count(array('array' => $this->_tpl_vars['willattend']), $this);?>
)</p>
        <p><?php $_from = $this->_tpl_vars['willattend']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['attendantsItem']):
?>
            <?php echo ((is_array($_tmp=$this->_tpl_vars['attendantsItem']['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<br />
        <?php endforeach; endif; unset($_from); ?></p>
    <div style="margin-top:16px;">
        <p style="color: 5890a8"><b>Deelgenomen</b></p>
        <p style="color: 5890a8">(toaal: <?php echo smarty_function_count(array('array' => $this->_tpl_vars['attended']), $this);?>
)</p>
        <p><?php $_from = $this->_tpl_vars['attended']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['attendantsItem']):
?>
            <?php echo ((is_array($_tmp=$this->_tpl_vars['attendantsItem']['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<br />
        <?php endforeach; endif; unset($_from); ?></p>
    </div>
    </div>
</p>
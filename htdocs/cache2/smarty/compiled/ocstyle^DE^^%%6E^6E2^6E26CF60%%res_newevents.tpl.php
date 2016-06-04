<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:44
         compiled from res_newevents.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'rand', 'res_newevents.tpl', 10, false),array('modifier', 'date_format', 'res_newevents.tpl', 11, false),array('modifier', 'escape', 'res_newevents.tpl', 12, false),)), $this); ?>
<ul class="nodot">
    <?php $_from = $this->_tpl_vars['events']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['events'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['events']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['eventitem']):
        $this->_foreach['events']['iteration']++;
?>
        <li class="newcache_list_multi" style="margin-bottom: 8px;">
            <table class="null" cellspacing="0" cellpadding="0"><tr>
            <td style="vertical-align:top; padding-right:2px; padding-top:2px" rowspan="2"><img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/cacheicon/event-rand<?php echo smarty_function_rand(array('min' => 1,'max' => 4), $this);?>
.gif" alt="Event-Geocache" border="0" width="22" height="22" align="left" style="margin-right: 5px;" /></td>
            <td style="vertical-align:top; "><?php echo ((is_array($_tmp=$this->_tpl_vars['eventitem']['date_hidden'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['opt']['format']['date']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['opt']['format']['date'])); ?>
&nbsp;&nbsp;</td>
            <td style="text-align:left; width:100%"><b><a class="links" href="viewcache.php?cacheid=<?php echo $this->_tpl_vars['eventitem']['cache_id']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['eventitem']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a></b> <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_oconly.tpl", 'smarty_include_vars' => array('oconly' => $this->_tpl_vars['eventitem']['oconly'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            von
            <b><a class="links" href="viewprofile.php?userid=<?php echo $this->_tpl_vars['eventitem']['user_id']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['eventitem']['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a></b></td>
            </tr>
            <tr><td colspan="2">
            <strong>
                <p class="content-title-noshade">
                    <?php echo ((is_array($_tmp=$this->_tpl_vars['eventitem']['adm1'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 <?php if ($this->_tpl_vars['eventitem']['adm1'] != null & $this->_tpl_vars['eventitem']['adm2'] != null): ?> &gt; <?php endif; ?>
                    <?php echo ((is_array($_tmp=$this->_tpl_vars['eventitem']['adm2'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 <?php if (( $this->_tpl_vars['eventitem']['adm2'] != null & $this->_tpl_vars['eventitem']['adm4'] != null ) | ( $this->_tpl_vars['eventitem']['adm1'] != null & $this->_tpl_vars['eventitem']['adm4'] != null )): ?> &gt; <?php endif; ?>
                    <?php echo ((is_array($_tmp=$this->_tpl_vars['eventitem']['adm4'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

                </p>
            </strong>
            </td>
            </tr></table>
        </li>
    <?php endforeach; endif; unset($_from); ?>
</ul>
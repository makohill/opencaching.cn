<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:44
         compiled from res_newcaches.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'res_newcaches.tpl', 15, false),array('modifier', 'escape', 'res_newcaches.tpl', 16, false),)), $this); ?>
<?php if ($this->_tpl_vars['minimap_enabled']): ?>
<div>
<img class="img-minimap" style="margin:16px 20px 16px 16px; width: 220px; height: 220px; float: right;" src="<?php echo $this->_tpl_vars['minimap_url']; ?>
<?php $_from = $this->_tpl_vars['newcaches']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['newcaches'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['newcaches']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['cacheitem']):
        $this->_foreach['newcaches']['iteration']++;
?>|<?php echo $this->_tpl_vars['cacheitem']['latitude']; ?>
,<?php echo $this->_tpl_vars['cacheitem']['longitude']; ?>
<?php endforeach; endif; unset($_from); ?>" />
<?php endif; ?>
<ul class="nodot">
    <?php $_from = $this->_tpl_vars['newcaches']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['newcaches'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['newcaches']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['cacheitem']):
        $this->_foreach['newcaches']['iteration']++;
?>
        <li class="newcache_list_multi" style="margin-bottom: 8px;">
            <table class="null" cellspacing="0" cellpadding="0"><tr>
            <td style="vertical-align:top; padding-right:2px; padding-top:2px" rowspan="2"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_cacheicon_22.tpl", 'smarty_include_vars' => array('cachetype' => $this->_tpl_vars['cacheitem']['type'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
            <td style="vertical-align:top; "><?php echo ((is_array($_tmp=$this->_tpl_vars['cacheitem']['date_created'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['opt']['format']['date']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['opt']['format']['date'])); ?>
&nbsp;&nbsp;</td>
            <td style="text-align:left; width:100%"><b><a class="links" href="viewcache.php?cacheid=<?php echo $this->_tpl_vars['cacheitem']['cache_id']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['cacheitem']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a></b> <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_oconly.tpl", 'smarty_include_vars' => array('oconly' => $this->_tpl_vars['cacheitem']['oconly'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            di
            <b><a class="links" href="viewprofile.php?userid=<?php echo $this->_tpl_vars['cacheitem']['user_id']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['cacheitem']['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a></b></td>
            </tr>
            <tr><td colspan="2">
            <strong>
                <p class="content-title-noshade">
                    <?php echo ((is_array($_tmp=$this->_tpl_vars['cacheitem']['adm1'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 <?php if ($this->_tpl_vars['cacheitem']['adm1'] != null & $this->_tpl_vars['cacheitem']['adm2'] != null): ?> &gt; <?php endif; ?>
                    <?php echo ((is_array($_tmp=$this->_tpl_vars['cacheitem']['adm2'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 <?php if (( $this->_tpl_vars['cacheitem']['adm2'] != null & $this->_tpl_vars['cacheitem']['adm4'] != null ) | ( $this->_tpl_vars['cacheitem']['adm1'] != null & $this->_tpl_vars['cacheitem']['adm4'] != null )): ?> &gt; <?php endif; ?>
                    <?php echo ((is_array($_tmp=$this->_tpl_vars['cacheitem']['adm4'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

                </p>
            </strong>
            </td>
            </tr></table>
        </li>
    <?php endforeach; endif; unset($_from); ?>
</ul>
<?php if ($this->_tpl_vars['minimap_enabled']): ?>
</div>
<?php endif; ?>
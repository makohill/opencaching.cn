<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:44
         compiled from res_logentry.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'urlencode', 'res_logentry.tpl', 15, false),array('modifier', 'escape', 'res_logentry.tpl', 15, false),)), $this); ?>
<?php if ($this->_tpl_vars['log'] != 'N'): ?>

<?php if ($this->_tpl_vars['tagloadlogs']): ?><ocloadlogs><?php endif; ?>

<?php if ($this->_tpl_vars['header_footer']): ?>
  <div class="content2-container bg-blue02" id="logentries">
      <p class="content-title-noshade-size2">
            <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/description/22x22-logs.png" style="margin-right: 10px;" width="22" height="22" alt="" />
            <?php ob_start(); ?><a href="viewcache.php?wp=<?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['wpoc'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : smarty_modifier_urlencode($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a><?php $this->_smarty_vars['capture']['cachename'] = ob_get_contents(); ob_end_clean(); ?>
            Logs van <?php echo $this->_smarty_vars['capture']['cachename']; ?>

            <span style="font-weight: 400;">&nbsp;&nbsp;
                <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/log/16x16-<?php if ($this->_tpl_vars['cache']['type'] == 6): ?>attended<?php else: ?>found<?php endif; ?>.png" width="16" height="16" align="middle" border="0" alt="<?php if ($this->_tpl_vars['cache']['type'] == 6): ?>Deelgenomen<?php else: ?>Gevonden<?php endif; ?>" title="<?php if ($this->_tpl_vars['cache']['type'] == 6): ?>Deelgenomen<?php else: ?>Gevonden<?php endif; ?>" /> <?php echo $this->_tpl_vars['cache']['found']; ?>
x
                <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/log/16x16-<?php if ($this->_tpl_vars['cache']['type'] == 6): ?>will_attend<?php else: ?>dnf<?php endif; ?>.png" width="16" height="16" align="middle" border="0" alt="<?php if ($this->_tpl_vars['cache']['type'] == 6): ?>Wil deelnemen<?php else: ?>Niet gevonden<?php endif; ?>" title="<?php if ($this->_tpl_vars['cache']['type'] == 6): ?>Wil deelnemen<?php else: ?>Niet gevonden<?php endif; ?>" /> <?php if ($this->_tpl_vars['cache']['type'] == 6): ?><?php echo $this->_tpl_vars['cache']['willattend']; ?>
<?php else: ?><?php echo $this->_tpl_vars['cache']['notfound']; ?>
<?php endif; ?>x
                <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/log/16x16-note.png" width="16" height="16" align="middle" border="0" alt="Opmerking" title="Opmerking" /> <?php echo $this->_tpl_vars['cache']['note']; ?>
x
                <?php if ($this->_tpl_vars['cache']['maintenance']): ?><img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/viewcache/16x16-maintenance_shifted.png" width="16" height="16" align="middle" border="0" alt="Maintenance" title="Maintenance"> <?php echo $this->_tpl_vars['cache']['maintenance']; ?>
x<?php endif; ?>
                <br />
            </span>
        </p>
    </div>

    <div class="content2-container">
<?php endif; ?>

<?php $_from = $this->_tpl_vars['logs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['log'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['log']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['logItem']):
        $this->_foreach['log']['iteration']++;
?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_logentry_logitem.tpl", 'smarty_include_vars' => array('logs' => $this->_tpl_vars['logs'],'cache' => $this->_tpl_vars['cache'],'morelogs' => $this->_tpl_vars['morelogs'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endforeach; endif; unset($_from); ?>

<?php if ($this->_tpl_vars['header_footer']): ?>
    <?php if ($this->_tpl_vars['footbacklink'] && ! $this->_tpl_vars['tagloadlogs']): ?>
        <p><span style="font-weight: 400;">[<a href="viewcache.php?wp=<?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['wpoc'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : smarty_modifier_urlencode($_tmp)); ?>
">Terug naar de cachebeschrijving</a>]</span></p>
    <?php endif; ?>
    </div>
<?php endif; ?>

<?php if ($this->_tpl_vars['tagloadlogs']): ?></ocloadlogs><?php endif; ?>


<script type="text/javascript">
<!--
 init_enlargeit_for_logentries();
-->
</script>

<?php endif; ?>
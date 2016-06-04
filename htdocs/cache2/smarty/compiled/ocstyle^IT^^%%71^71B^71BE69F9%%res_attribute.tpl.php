<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:43
         compiled from res_attribute.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escapejs', 'res_attribute.tpl', 42, false),)), $this); ?>
 <?php ob_start(); ?><?php echo 'resource2/'; ?><?php echo $this->_tpl_vars['opt']['template']['style']; ?><?php echo '/images/attributes/'; ?><?php echo $this->_tpl_vars['icon']; ?><?php echo ''; ?><?php if ($this->_tpl_vars['state'] == 2): ?><?php echo ''; ?><?php echo '-no.png'; ?><?php elseif ($this->_tpl_vars['state'] == 3): ?><?php echo ''; ?><?php echo '-disabled.png'; ?><?php else: ?><?php echo ''; ?><?php echo '.png'; ?><?php endif; ?><?php echo ''; ?>
<?php $this->_smarty_vars['capture']['filename'] = ob_get_contents(); ob_end_clean(); ?>

<img <?php if ($this->_tpl_vars['inputprefix'] != ''): ?>id="img<?php echo $this->_tpl_vars['inputprefix']; ?>
<?php echo $this->_tpl_vars['id']; ?>
"<?php endif; ?>
     src="<?php echo $this->_smarty_vars['capture']['filename']; ?>
"
     border="0"
     onmouseover="Tip('<?php echo ((is_array($_tmp=$this->_tpl_vars['html_desc'])) ? $this->_run_mod_handler('escapejs', true, $_tmp) : smarty_modifier_escapejs($_tmp)); ?>
', TITLE, '<?php echo ((is_array($_tmp=$this->_tpl_vars['name'])) ? $this->_run_mod_handler('escapejs', true, $_tmp) : smarty_modifier_escapejs($_tmp)); ?>
', TITLEBGCOLOR, '<?php echo ((is_array($_tmp=$this->_tpl_vars['color'])) ? $this->_run_mod_handler('escapejs', true, $_tmp) : smarty_modifier_escapejs($_tmp)); ?>
', TITLEFONTCOLOR, '#000000', BGCOLOR, '#FFFFFF', BORDERCOLOR, '<?php echo ((is_array($_tmp=$this->_tpl_vars['color'])) ? $this->_run_mod_handler('escapejs', true, $_tmp) : smarty_modifier_escapejs($_tmp)); ?>
', CLICKCLOSE, true, DELAY, 0, FADEIN, false, FADEOUT, false, FONTCOLOR, '#000080', WIDTH, 500)"
     onmouseout="UnTip()"
     <?php if ($this->_tpl_vars['onmousedown'] != ''): ?>onmousedown="<?php echo $this->_tpl_vars['onmousedown']; ?>
(<?php echo $this->_tpl_vars['id']; ?>
, '<?php echo $this->_tpl_vars['icon']; ?>
')"<?php endif; ?>
     />

<?php if ($this->_tpl_vars['inputprefix'] != ''): ?>
    <input type="hidden" id="<?php echo $this->_tpl_vars['inputprefix']; ?>
<?php echo $this->_tpl_vars['id']; ?>
" name="<?php echo $this->_tpl_vars['inputprefix']; ?>
<?php echo $this->_tpl_vars['id']; ?>
" value="<?php echo $this->_tpl_vars['state']; ?>
" />
<?php endif; ?>
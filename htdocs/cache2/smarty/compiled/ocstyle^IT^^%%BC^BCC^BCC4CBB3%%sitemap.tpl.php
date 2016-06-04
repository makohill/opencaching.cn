<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:46
         compiled from sitemap.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'sitemap.tpl', 15, false),)), $this); ?>
<div class="content2-pagetitle"><img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/32x32-world.png" style="margin-right: 10px;" width="32" height="32" alt="" />Mappa del sito</div>

<ul style="list-style-type: none; font-size: 120%">
    <?php $_from = $this->_tpl_vars['sites']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['siteItem']):
?>
            <li style="padding-left:<?php echo $this->_tpl_vars['siteItem']['sublevel']*20; ?>
px;">
                <?php if ($this->_tpl_vars['siteItem']['sitemap'] == 1): ?>
                    <a href="<?php echo $this->_tpl_vars['siteItem']['href']; ?>
" <?php if ($this->_tpl_vars['siteItem']['blanktarget'] == '1'): ?>target="_blank"<?php endif; ?>>
                <?php endif; ?>
                <?php echo ((is_array($_tmp=$this->_tpl_vars['siteItem']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

                <?php if ($this->_tpl_vars['siteItem']['sitemap'] == 1): ?>
                    </a>
                <?php endif; ?>
            </li>
    <?php endforeach; endif; unset($_from); ?>
</ul>
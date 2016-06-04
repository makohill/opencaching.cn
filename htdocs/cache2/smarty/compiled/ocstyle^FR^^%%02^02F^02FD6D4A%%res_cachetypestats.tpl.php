<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:43
         compiled from res_cachetypestats.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'res_cachetypestats.tpl', 18, false),array('modifier', 'floor', 'res_cachetypestats.tpl', 19, false),)), $this); ?>
 <?php if ($this->_tpl_vars['opt']['msie']): ?>
    <table cellspacing=0 cellpadding=0><tr>
<?php endif; ?>
<?php $_from = $this->_tpl_vars['stat']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['stats']):
?>
    <?php if ($this->_tpl_vars['opt']['msie']): ?>
        <td style="line-height:0.5em">
    <?php else: ?>
        <div style="display:inline-block; line-height:1.8em; padding-right:1em; text-align:center">
    <?php endif; ?>
        <?php echo $this->_tpl_vars['stats']['anzahl']; ?>

        <a href="search.php?showresult=1&expert=0&output=HTML&sort=byname&f_inactive=0&<?php if ($this->_tpl_vars['logs']): ?>&finderid=<?php echo $this->_tpl_vars['userid']; ?>
&searchbyfinder=<?php else: ?>&ownerid=<?php echo $this->_tpl_vars['userid']; ?>
&searchbyowner=<?php endif; ?>&cachetype=<?php echo $this->_tpl_vars['stats']['id']; ?>
<?php if ($this->_tpl_vars['oconly']): ?>&cache_attribs=6<?php endif; ?>calledbysearch=0"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_cacheicon_22.tpl", 'smarty_include_vars' => array('cachetype' => $this->_tpl_vars['stats']['id'],'alignicon' => "")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></a>
        <?php if (count($this->_tpl_vars['stat']) > 1): ?>
            <br /><span class="percent"><?php echo ((is_array($_tmp=$this->_tpl_vars['stats']['anzahl']/$this->_tpl_vars['total']*100+0.5)) ? $this->_run_mod_handler('floor', true, $_tmp) : floor($_tmp)); ?>
%&nbsp;</span>
        <?php endif; ?>
    <?php if ($this->_tpl_vars['opt']['msie']): ?>
        </td>
    <?php else: ?>
        </div>
    <?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
<?php if ($this->_tpl_vars['opt']['msie']): ?>
    </tr></table>
<?php endif; ?>
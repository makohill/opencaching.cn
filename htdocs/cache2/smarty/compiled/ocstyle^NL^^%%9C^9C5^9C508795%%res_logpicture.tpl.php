<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:44
         compiled from res_logpicture.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'replace', 'res_logpicture.tpl', 7, false),array('modifier', 'date_format', 'res_logpicture.tpl', 19, false),array('modifier', 'escape', 'res_logpicture.tpl', 19, false),)), $this); ?>
<div style="width:<?php echo $this->_tpl_vars['itemwidth']; ?>
px; height:<?php if ($this->_tpl_vars['loguser'] || $this->_tpl_vars['logdate']): ?>150<?php else: ?>120<?php endif; ?>px; overflow:hidden">
    <table width="100%" height="100%"><tr>
        <td style="text-align:center; padding:0" align="center" valign="middle">
            <div style="max-width:<?php echo $this->_tpl_vars['itemwidth']; ?>
px; overflow:hidden">
                <a id="pl<?php echo $this->_tpl_vars['picture']['pic_uuid']; ?>
" href="<?php echo $this->_tpl_vars['picture']['pic_url']; ?>
">
                    <img src="thumbs.php?type=1&uuid=<?php echo $this->_tpl_vars['picture']['pic_uuid']; ?>
" class="img-<?php if (@ $this->_tpl_vars['nopicshadow']): ?>no<?php endif; ?>shadow-loggallery" onclick="enlarge(this);" longdesc="<?php echo $this->_tpl_vars['picture']['pic_url']; ?>
" onload="document.getElementById('pl<?php echo $this->_tpl_vars['picture']['pic_uuid']; ?>
').removeAttribute('href'); this.alt='<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['picture']['title'])) ? $this->_run_mod_handler('replace', true, $_tmp, "'", "´") : smarty_modifier_replace($_tmp, "'", "´")))) ? $this->_run_mod_handler('replace', true, $_tmp, '"', '´´') : smarty_modifier_replace($_tmp, '"', '´´')); ?>
'" title="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['picture']['title'])) ? $this->_run_mod_handler('replace', true, $_tmp, "'", "´") : smarty_modifier_replace($_tmp, "'", "´")))) ? $this->_run_mod_handler('replace', true, $_tmp, '"', '´´') : smarty_modifier_replace($_tmp, '"', '´´')); ?>
" />                 </a>
                <?php if ($this->_tpl_vars['logdate'] || $this->_tpl_vars['loguser']): ?>
                    <div style="line-height:1.2em; max-height:2.4em; margin-top:5px">
                        <?php if ($this->_tpl_vars['logdate']): ?>
                            <?php if ($this->_tpl_vars['fullyear']): ?>
                                <?php $this->assign('dateformat', $this->_tpl_vars['opt']['format']['date']); ?>
                            <?php elseif ($this->_tpl_vars['picture']['oldyear'] == '1' || $this->_tpl_vars['shortyear']): ?>
                                <?php $this->assign('dateformat', $this->_tpl_vars['opt']['format']['dateshort']); ?>
                            <?php else: ?>
                                <?php $this->assign('dateformat', $this->_tpl_vars['opt']['format']['dm']); ?>
                            <?php endif; ?>
                            <?php if (! $this->_tpl_vars['loguser']): ?><a href="viewcache.php?cacheid=<?php echo $this->_tpl_vars['picture']['cache_id']; ?>
&log=A#log<?php echo $this->_tpl_vars['picture']['logid']; ?>
"><?php endif; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['picture']['picdate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateformat']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateformat'])); ?>
<?php if (! $this->_tpl_vars['loguser']): ?></a><?php endif; ?><?php endif; ?>&nbsp;<?php if ($this->_tpl_vars['loguser']): ?><a href="<?php if ($this->_tpl_vars['profilelink']): ?>viewprofile.php?userid=<?php echo $this->_tpl_vars['picture']['user_id']; ?>
<?php else: ?>viewcache.php?cacheid=<?php echo $this->_tpl_vars['picture']['cache_id']; ?>
&log=A#log<?php echo $this->_tpl_vars['picture']['logid']; ?>
<?php endif; ?>"><?php echo ((is_array($_tmp=$this->_tpl_vars['picture']['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
        </td>
    </tr></table>
</div>
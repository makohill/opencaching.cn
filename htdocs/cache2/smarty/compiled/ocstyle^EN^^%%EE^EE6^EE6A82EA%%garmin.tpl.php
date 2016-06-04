<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:38
         compiled from garmin.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'garmin.tpl', 31, false),array('modifier', 'sprintf', 'garmin.tpl', 42, false),)), $this); ?>
<table class="content">
    <tr>
        <td class="header">
            <table class="null" border="0">
                <tr>
                    <td width="30">
                        <img src="images/newlogo.png"  height="66" border="0" alt="" title="" align="left" style="margin-bottom:8px" />
                    </td>
                    <td>&nbsp;</td>
                    <td align="center"><font size="4">
                        Waypoint: <?php echo $this->_tpl_vars['cache']['wpoc']; ?>

                    </font>
                    <td class="null" border="0">
                        <?php if ($this->_tpl_vars['opt']['page']['sponsor']['popup'] != ''): ?>
                            <?php echo $this->_tpl_vars['opt']['page']['sponsor']['popup']; ?>

                        <?php endif; ?>
                    </td>
                </tr>
            </table>
            <table border="0">
                <tr>
                    <td align="right" valign="top" width="20">
                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_cacheicon.tpl", 'smarty_include_vars' => array('cachetype' => $this->_tpl_vars['cache']['type'],'status' => $this->_tpl_vars['cache']['status'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    </td>
                    <td align="left" valign="top" width="397"><font size="3"><b><?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</b></font><br />
                        <span class="garmintext">by <?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<br />
                        <?php if ($this->_tpl_vars['cache']['shortdesc'] != ''): ?>
                            <?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['shortdesc'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

                        <?php endif; ?>
                        </span>
                    </td>
                    <td class="garmintext" align= "right" valign="top" nowrap="1" width="140">
                        Difficulty:
                        <img src="./resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/difficulty/diff-<?php echo $this->_tpl_vars['cache']['difficulty']*5; ?>
.gif" border="0" width="19" height="16" hspace="2" alt="Difficulty:&nbsp;<?php echo $this->_tpl_vars['cache']['difficulty']*0.5; ?>
&nbsp;of&nbsp;5" /><br />
                        Terrain:
                        <img src="./resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/difficulty/terr-<?php echo $this->_tpl_vars['cache']['terrain']*5; ?>
.gif" border="0" width="19" height="16" hspace="2" alt="Terrain:&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['terrain']*0.5)) ? $this->_run_mod_handler('sprintf', true, $_tmp, '%01.1f') : smarty_modifier_sprintf($_tmp, '%01.1f')); ?>
&nbsp;of&nbsp;5" />
                    </td>
                </tr>
                <tr><td colspan="2" class="garmintext"><br />Waypoint download</td></tr>
            </table>
        </td>
    </tr>
</table>

<table class="table">
    <tr>
        <td width="350px">
            <div id="garminDisplay"></div>
        </td>
        <td>
            <a href="http://www.garmin.com" target="_blank"><img src="images/garmin.png" width="200px" height="78px" alt="Garmin Mobile Navigation" title="Garmin Mobile Navigation" /></a>
        </td>
    </tr>
</table>
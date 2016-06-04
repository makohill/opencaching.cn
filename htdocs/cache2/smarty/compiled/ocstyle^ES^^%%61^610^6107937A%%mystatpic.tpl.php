<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:42
         compiled from mystatpic.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'mystatpic.tpl', 24, false),)), $this); ?>
<div class="content2-pagetitle">
    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/profile/32x32-profile.png" style="margin-right: 10px;" width="32" height="32" alt="" />
    Statistics imagen
</div>

<form action="change_statpic.php">

    <table class="table">
        <tr><td class="spacer" colspan="2">&nbsp;</td></tr>
        <tr>
            <td style="vertical-align:top;">Statistics imagen<span></span>:</td>
            <td><img src="statpics/<?php echo $this->_tpl_vars['opt']['template']['locale']; ?>
/<?php echo $this->_tpl_vars['login']['userid']; ?>
.jpg" align="middle" /></td>
        </tr>
        <tr><td class="spacer" colspan="2"></td></tr>

        <tr>
            <td style="vertical-align:top;">código HTML:</td>
            <td class="help">&lt;img src="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['opt']['page']['default_absolute_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
statpics/<?php echo $this->_tpl_vars['opt']['template']['locale']; ?>
/<?php echo $this->_tpl_vars['login']['userid']; ?>
.jpg" alt="Statstics <?php echo $this->_tpl_vars['opt']['page']['sitename']; ?>
 de <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['login']['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" title="Statstics <?php echo $this->_tpl_vars['opt']['page']['sitename']; ?>
 de <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['login']['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /&gt;</td>
        </tr>
        <tr><td class="spacer" colspan="2"></td></tr>

        <tr>
            <td style="vertical-align:top;">BBCode para web foro:</td>
            <td class="help">[url=<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['opt']['page']['default_absolute_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
viewprofile.php?userid=<?php echo $this->_tpl_vars['login']['userid']; ?>
][img]<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['opt']['page']['default_absolute_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
statpics/<?php echo $this->_tpl_vars['opt']['template']['locale']; ?>
/<?php echo $this->_tpl_vars['login']['userid']; ?>
.jpg[/img][/url]</td>
        </tr>
        <tr><td class="spacer" colspan="3">&nbsp;</td></tr>

        <tr>
            <td class="header-small" colspan="3">
                <input type="submit" name="change" value="Cambiar" class="formbutton" onclick="submitbutton('change')" />
            </td>
        </tr>
    </table>

</form>
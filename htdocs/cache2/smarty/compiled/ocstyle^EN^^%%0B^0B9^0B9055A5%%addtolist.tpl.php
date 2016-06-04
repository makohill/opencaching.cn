<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:37
         compiled from addtolist.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'addtolist.tpl', 19, false),)), $this); ?>
<form method="post" action="addtolist.php">
    <input type="hidden" name="action" value="add" />
    <input type="hidden" name="submit" value="1" />
    <input type="hidden" name="cacheid" value="<?php echo $this->_tpl_vars['cacheid']; ?>
" />

    <div class="content2-pagetitle">
        <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/32x32-list.png" style="margin-right: 10px;" width="32" height="32" alt="" />
        Add geocache to list
    </div>

    <p>
        <br />
        Add the geocache <b><?php echo ((is_array($_tmp=$this->_tpl_vars['cachename'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</b> to the following list:<br />
        <br />
    </p>

    <p style="margin-left:16px">
        <input type="radio" class="radio" id="newlist" name="listid" value="0" <?php if ($this->_tpl_vars['default_list'] == 0): ?>checked="checked"<?php endif; ?> />
        <input type="text" name="newlist_name" maxlength="80" class="input400" value="<?php if ($this->_tpl_vars['newlist_name'] !== false): ?><?php echo $this->_tpl_vars['newlist_name']; ?>
<?php else: ?>New cache list<?php endif; ?>" onfocus="if (this.value == 'New cache list') this.value=''; newlist.checked=1;" onblur="if (this.value == '') this.value = 'New cache list';" />
        &nbsp;
        <input type="checkbox" class="checkbox" id="newlist_public" name="newlist_public" value="1" <?php if ($this->_tpl_vars['newlist_public']): ?>checked="checked"<?php endif; ?> /> <label for="newlist_public">public list</label>
        &nbsp;
        <input type="checkbox" class="checkbox" id="newlist_watch" name="newlist_watch" value="1" <?php if ($this->_tpl_vars['newlist_watch']): ?>checked="checked"<?php endif; ?> /> <label for="newlist_watch">watch</label>
        <?php if ($this->_tpl_vars['name_error']): ?><br /><div style="margin-left:42px"><p class="errormsg"><?php if ($this->_tpl_vars['name_error'] == ERROR_DUPLICATE_LISTNAME): ?>Another of your cache lists already has this name.<?php else: ?><?php if ($this->_tpl_vars['name_error'] == ERROR_BAD_LISTNAME): ?>Invalid name<?php if ($this->_tpl_vars['newlist_public']): ?>; minimum length for public lists is 10 characters<?php endif; ?><?php endif; ?><?php endif; ?></p></div><?php endif; ?>
    </p>

    <p style="margin-left:16px">
        <span class="radiolist">
        <?php $_from = $this->_tpl_vars['cachelists']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cachelist']):
?>
            <input type="radio" class="radio" id="list<?php echo $this->_tpl_vars['cachelist']['id']; ?>
" name="listid" value="<?php echo $this->_tpl_vars['cachelist']['id']; ?>
" <?php if ($this->_tpl_vars['default_list'] == $this->_tpl_vars['cachelist']['id']): ?>checked="checked"<?php endif; ?> />
            <label for="list<?php echo $this->_tpl_vars['cachelist']['id']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['cachelist']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

            &nbsp;<span class="greytext">(<?php if ($this->_tpl_vars['cachelist']['visibility'] < 2): ?>private<?php else: ?>public<?php if ($this->_tpl_vars['cachelist']['visibility'] == 3): ?> + listing display<?php endif; ?><?php endif; ?>)</span></label>
            <br />
        <?php endforeach; endif; unset($_from); ?>
        </span>
    </p>

    <p>
        <br />
        You can maintain your personal cache lists in your <a href="mylists.php">user profile</a>. Public lists are displayed in your <a href="viewprofile.php?userid=<?php echo $this->_tpl_vars['login']['userid']; ?>
">public user profile</a>, on the <a href="cachelists.php">lists overwiew page</a> and (if enabled) in the cache listings.<br />
        <br />
    </p>

    <input type="submit" name="cancel" value="Cancel" class="formbutton" onclick="submitbutton('cancel')" />&nbsp;&nbsp;
    <input type="submit" name="save" value="Add" class="formbutton" onclick="submitbutton('add')" />

</form>
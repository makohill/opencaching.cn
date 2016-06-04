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
        Geocache zu Liste hinzufügen
    </div>

    <p>
        <br />
        Den Geocache <b><?php echo ((is_array($_tmp=$this->_tpl_vars['cachename'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</b> zu folgender Liste hinzufügen:<br />
        <br />
    </p>

    <p style="margin-left:16px">
        <input type="radio" class="radio" id="newlist" name="listid" value="0" <?php if ($this->_tpl_vars['default_list'] == 0): ?>checked="checked"<?php endif; ?> />
        <input type="text" name="newlist_name" maxlength="80" class="input400" value="<?php if ($this->_tpl_vars['newlist_name'] !== false): ?><?php echo $this->_tpl_vars['newlist_name']; ?>
<?php else: ?>Neue Cacheliste<?php endif; ?>" onfocus="if (this.value == 'Neue Cacheliste') this.value=''; newlist.checked=1;" onblur="if (this.value == '') this.value = 'Neue Cacheliste';" />
        &nbsp;
        <input type="checkbox" class="checkbox" id="newlist_public" name="newlist_public" value="1" <?php if ($this->_tpl_vars['newlist_public']): ?>checked="checked"<?php endif; ?> /> <label for="newlist_public">öffentliche Liste</label>
        &nbsp;
        <input type="checkbox" class="checkbox" id="newlist_watch" name="newlist_watch" value="1" <?php if ($this->_tpl_vars['newlist_watch']): ?>checked="checked"<?php endif; ?> /> <label for="newlist_watch">beobachten</label>
        <?php if ($this->_tpl_vars['name_error']): ?><br /><div style="margin-left:42px"><p class="errormsg"><?php if ($this->_tpl_vars['name_error'] == ERROR_DUPLICATE_LISTNAME): ?>Eine andere deiner Cachelisten hat bereits den gleichen Name.<?php else: ?><?php if ($this->_tpl_vars['name_error'] == ERROR_BAD_LISTNAME): ?>Ungültiger Name<?php if ($this->_tpl_vars['newlist_public']): ?>; Mindestlänge für öffentliche Listen ist 10 Zeichen<?php endif; ?><?php endif; ?><?php endif; ?></p></div><?php endif; ?>
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

            &nbsp;<span class="greytext">(<?php if ($this->_tpl_vars['cachelist']['visibility'] < 2): ?>privat<?php else: ?>öffentlich<?php if ($this->_tpl_vars['cachelist']['visibility'] == 3): ?> + Listinganzeige<?php endif; ?><?php endif; ?>)</span></label>
            <br />
        <?php endforeach; endif; unset($_from); ?>
        </span>
    </p>

    <p>
        <br />
        Deine persönlichen Cachelisten kannst du in deinem <a href="mylists.php">Benutzerprofil</a> verwalten. Öffentliche Listen werden in deinem <a href="viewprofile.php?userid=<?php echo $this->_tpl_vars['login']['userid']; ?>
">öffentlichen Profil</a>, auf der <a href="cachelists.php">Listen-Sammelseite</a> und (falls eingeschaltet) in den Cachelistings angezeigt.<br />
        <br />
    </p>

    <input type="submit" name="cancel" value="Abbrechen" class="formbutton" onclick="submitbutton('cancel')" />&nbsp;&nbsp;
    <input type="submit" name="save" value="Hinzuf&uuml;gen" class="formbutton" onclick="submitbutton('add')" />

</form>
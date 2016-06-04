<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:38
         compiled from adminuser.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'adminuser.tpl', 14, false),array('modifier', 'date_format', 'adminuser.tpl', 52, false),)), $this); ?>
<div class="content2-pagetitle">
    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/32x32-tools.png" style="margin-right: 10px;" width="32" height="32" alt="" />
    View user account details
</div>

<form method="post" action="adminuser.php">
    <input type="hidden" name="action" value="searchuser" />
        <p style="line-height: 1.6em;"><strong>Username or email address:</strong> &nbsp;<input type="text" name="username" size="30" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></p>

        <?php if ($this->_tpl_vars['error'] == 'userunknown'): ?>
            <p style="line-height: 1.6em; color: red; font-weight: bold;">Gebruikersnaam onbekend</p>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['success'] == '1'): ?>
            <p style="line-height: 1.6em; color: green; font-weight: bold;">User status was successfully changed.</p>
        <?php endif; ?>

        <p style="line-height: 1.6em;"><input type="submit" name="find" value="Versturen" class="formbutton" onclick="submitbutton('find')" /></p>

</form>

<?php if ($this->_tpl_vars['showdetails'] == true): ?>
    <form method="post" action="adminuser.php">
        <input type="hidden" name="action" value="formaction" />
        <input type="hidden" name="userid" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['user']['user_id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />

        <div class="content2-pagetitle">
            <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/32x32-tools.png" style="margin-right: 10px;" width="32" height="32" alt="" />
            User account details
        </div>

        <table class="narrowtable">
            <tr>
                <td>Gebruikersnaam:</td>
                <td><a href="viewprofile.php?userid=<?php echo ((is_array($_tmp=$this->_tpl_vars['user']['user_id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" target="_blank"><?php echo ((is_array($_tmp=$this->_tpl_vars['user']['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a></td>
            </tr>
            <tr>
                <td>User-ID:</td>
                <td><a href="viewprofile.php?userid=<?php echo ((is_array($_tmp=$this->_tpl_vars['user']['user_id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" target="_blank"><?php echo ((is_array($_tmp=$this->_tpl_vars['user']['user_id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a></td>
            </tr>
            <tr>
                <td>E-Mail:</td>
                <td><?php if ($this->_tpl_vars['user']['email_problems'] > 0): ?><span class="errormsg"><?php echo ((is_array($_tmp=$this->_tpl_vars['user']['email'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</span><?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['user']['email'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?></td>
            </tr>
            <tr>
                <td>Date created:</td>
                <td><?php echo ((is_array($_tmp=$this->_tpl_vars['user']['date_created'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['opt']['format']['date']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['opt']['format']['date'])); ?>
</td>
            </tr>
            <tr>
                <td>Laatste verandering<span></span>:</td>
                <td><?php echo ((is_array($_tmp=$this->_tpl_vars['user']['last_modified'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['opt']['format']['date']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['opt']['format']['date'])); ?>
</td>
            </tr>
            <tr>
                <td>User active:</td>
                <td><?php if ($this->_tpl_vars['user']['is_active_flag']): ?>Ja<?php else: ?>Nee<?php endif; ?>
                        <?php if ($this->_tpl_vars['user']['license_declined']): ?>&nbsp;(declined data license)<?php endif; ?></td>
            </tr>
            <tr>
                <td>Activatiecode:</td>
                <td>
                    <?php echo ((is_array($_tmp=$this->_tpl_vars['user']['activation_code'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

                    <?php if ($this->_tpl_vars['user']['activation_code'] != ''): ?>
                        <a href="adminuser.php?action=sendcode&userid=<?php echo ((is_array($_tmp=$this->_tpl_vars['user']['user_id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">Code erneut senden</a>
                    <?php endif; ?>
                </td>
            </tr>
            <?php if ($this->_tpl_vars['msg'] == 'sendcodecommit'): ?>
                <tr>
                    <td>&nbsp;</td>
                    <td><span class="errormsg">A new activation mail has been sent.</class></td>
                </tr>
            <?php endif; ?>
            <tr>
                <td>Voornaam</td>
                <td><?php echo ((is_array($_tmp=$this->_tpl_vars['user']['first_name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
            </tr>
            <tr>
                <td>Achternaam:</td>
                <td><?php echo ((is_array($_tmp=$this->_tpl_vars['user']['last_name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
            </tr>
            <tr>
                <td>Log entries:</td>
                <td><?php echo $this->_tpl_vars['user']['logentries']; ?>

                    <?php if ($this->_tpl_vars['user']['deleted_logentries'] > 0): ?>&nbsp;(+ <?php echo $this->_tpl_vars['user']['deleted_logentries']; ?>
 deleted / Archived)<?php endif; ?>
                </td>
            </tr>
            <tr>
                <td>Total hidden:</td>
                <td><?php echo ((is_array($_tmp=$this->_tpl_vars['user']['hidden'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
            </tr>
            <tr>
                <td>Actieve caches:</td>
                <td><?php echo ((is_array($_tmp=$this->_tpl_vars['user']['hidden_active'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 &nbsp; &ndash; &nbsp; <a href="ownerlogs.php?userid=<?php echo ((is_array($_tmp=$this->_tpl_vars['user']['user_id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">Show log history</a></td>
            </tr>
            <tr>
                <td>Cache reports<span></span>:</td>
                <td><?php echo ((is_array($_tmp=$this->_tpl_vars['user']['reports'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
            </tr>
            <tr>
                <td>Last known login:</td>
                <td><?php if ($this->_tpl_vars['user']['last_known_login']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['user']['last_known_login'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['opt']['format']['date']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['opt']['format']['date'])); ?>
<?php else: ?>onbekend<?php endif; ?></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
            </tr>

            <tr><td class="spacer" colspan="2"></td></tr>

            <?php if ($this->_tpl_vars['licensefunctions'] == true): ?>
                <tr>
                    <td>&nbsp;</td>
                    <td><input type="checkbox" name="chkdisduelicense" value="1" /> Disable (and lock all geocaches owned) and remove all foreign licensed content</td>
                </tr>
            <?php endif; ?>

            <?php if ($this->_tpl_vars['candisable'] == true): ?>
                <tr>
                    <td>&nbsp;</td>
                    <td><input type="checkbox" name="chkdisable" value="1" /> Disable (and lock all geocaches owned)</td>
                </tr>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['candelete'] == true): ?>
                <tr>
                    <td>&nbsp;</td>
                    <td><input type="checkbox" name="chkdelete" value="1" /> Verwijderen</td>
                </tr>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['cansetemail'] == true): ?>
                <tr>
                    <td></td>
                    <td><input type="checkbox" name="chkemail" value="1" /> Mark e-mail address as invalid<?php if ($this->_tpl_vars['licensefunctions']): ?>&nbsp;&nbsp;&nbsp;<input type="checkbox" name="chkdl" value="1" /> data license mail was not delivered<?php endif; ?></td>
                </tr>
            <?php endif; ?>

            <?php if ($this->_tpl_vars['licensefunctions'] == true || $this->_tpl_vars['candelete'] == true || $this->_tpl_vars['candisable'] == true || $this->_tpl_vars['cansetemail'] == true): ?>
                <tr>
                    <td>&nbsp;</td>
                    <td><input type="checkbox" name="chkcommit" value="1" /> Zeker?</td>
                </tr>
                <tr><td class="spacer" colspan="2"></td></tr>

                <tr>
                    <td>&nbsp;</td>
                    <td><input type="submit" name="execute" value="Versturen" class="formbutton" onclick="submitbutton('execute')" /></td>
                </tr>
            <?php endif; ?>
        </table>
    </form>
<?php endif; ?>
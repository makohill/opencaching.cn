<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:41
         compiled from myprofile.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'myprofile.tpl', 30, false),array('modifier', 'date_format', 'myprofile.tpl', 208, false),array('function', 'coordinput', 'myprofile.tpl', 97, false),)), $this); ?>
<div class="content2-pagetitle">
    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/profile/32x32-profile.png" style="margin-right: 10px;" width="32" height="32" alt="" />
    My profile data
</div>

    <form action="myprofile.php" method="post" style="display:inline;">
        <input type="hidden" name="action" value="change" />
        <input type="hidden" name="showAllCountries" value="<?php echo $this->_tpl_vars['showAllCountries']; ?>
" />

        <table class="table">
            <tr>
                <td colspan="3">
                    <span class="boldtext ">The following information is stored in your user profile:</span><br />
                <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/hint.gif" border="0" width="15" height="11" alt="" align="middle" />
                <span class="systemlink" style="font-size:10px;">Only the <span class="public-setting">green entries</span> are visible to other users.</span>
                </td>
            </tr>
            <tr><td class="spacer"></td></tr>

            <tr>
                <td class="public-setting">Username:</td>
                <td class="public-setting">
                    <?php if ($this->_tpl_vars['edit'] == true): ?>
                        <input type="text" name="username" class="public-setting" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" maxlength="60" size="30" />
                        <?php if ($this->_tpl_vars['usernameErrorInvalidChars'] == true): ?>
                            <span class="errormsg">The username contains invalid characters.</span>
                        <?php elseif ($this->_tpl_vars['errorUsernameExist'] == true): ?>
                            <span class="errormsg">An account with that username already exists.</span>
                        <?php endif; ?>
                    <?php else: ?>
                        <?php echo ((is_array($_tmp=$this->_tpl_vars['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

                    <?php endif; ?>
                </td>
            </tr>

            <tr>
                <td>First name:</td>
                <td>
                    <?php if ($this->_tpl_vars['edit'] == true): ?>
                        <input type="text" name="firstName" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['firstName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" maxlength="60" size="30" />
                        <?php if ($this->_tpl_vars['firstNameError'] == true): ?>
                            <span class="errormsg">The first name is not valid.</span>
                        <?php endif; ?>
                    <?php else: ?>
                        <?php echo ((is_array($_tmp=$this->_tpl_vars['firstName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

                    <?php endif; ?>
                </td>
            </tr>

            <tr>
                <td>Last name:</td>
                <td>
                    <?php if ($this->_tpl_vars['edit'] == true): ?>
                        <input type="text" name="lastName" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lastName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" maxlength="60" size="30" />
                        <?php if ($this->_tpl_vars['lastNameError'] == true): ?>
                            <span class="errormsg">The last name is not valid.</span>
                        <?php endif; ?>
                    <?php else: ?>
                        <?php echo ((is_array($_tmp=$this->_tpl_vars['lastName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

                    <?php endif; ?>
                </td>
            </tr>

            <tr>
                <td class="public-setting">Country:</td>
                <td class="public-setting">
                    <?php if ($this->_tpl_vars['edit'] == true): ?>
                        <select name="country"class="public-setting">
                            <option value="XX" <?php if ($this->_tpl_vars['countryCode'] == 'XX'): ?>selected="selected"<?php endif; ?>>Not defined</option>
                            <?php $_from = $this->_tpl_vars['countries']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['countryItem']):
?>
                                <option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['countryItem']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" <?php if ($this->_tpl_vars['countryCode'] == $this->_tpl_vars['countryItem']['id']): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['countryItem']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</option>
                            <?php endforeach; endif; unset($_from); ?>
                        </select>
                        <?php if ($this->_tpl_vars['showAllCountries'] == false): ?>
                            &nbsp;&nbsp;<input type="submit" name="showAllCountriesSubmit" value="Show all" class="formbutton" onclick="submitbutton('showAllCountriesSubmit')" />
                        <?php endif; ?>
                        <?php if ($this->_tpl_vars['countryError'] == true): ?>
                            <span class="errormsg">The country is not valid.</span>
                        <?php endif; ?>
                    <?php else: ?>
                        <?php echo ((is_array($_tmp=$this->_tpl_vars['country'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

                    <?php endif; ?>
                </td>
            </tr>
            <tr><td class="spacer" colspan="2"></td></tr>

            <tr>
                <td valign=top>Home coordinates:</td>
                <td>
                    <?php if ($this->_tpl_vars['edit'] == true): ?>
                        <?php echo smarty_function_coordinput(array('prefix' => 'coord','lat' => $this->_tpl_vars['coordsDecimal']['lat'],'lon' => $this->_tpl_vars['coordsDecimal']['lon']), $this);?>

                    <?php else: ?>
                        <?php echo ((is_array($_tmp=$this->_tpl_vars['coords']['lat'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['coords']['lon'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

                    <?php endif; ?>
                </td>
            </tr>
            <tr><td class="spacer" colspan="2"></td></tr>

            <tr>
                <td valign=top >Notifications:</td>
                <td>
                    <?php if ($this->_tpl_vars['edit'] == true): ?>
                        <?php ob_start(); ?>
                            <input type="text" name="notifyRadius" maxlength="3" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['notifyRadius'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" class="input30" />
                        <?php $this->_smarty_vars['capture']['inputfield'] = ob_get_contents(); ob_end_clean(); ?>
                        I want to be notified about new geocaches within a radius of <?php echo $this->_smarty_vars['capture']['inputfield']; ?>
 km.<br />
                        <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/hint.gif" border="0" width="15" height="11" align="middle" />
                        <span style="font-size:10px;">
                            The notification radius must not be greater than 150 km. To deactivate notifications, set the radius to 0.
                        </span>
                        <?php if ($this->_tpl_vars['notifyRadiusError'] == true): ?>
                            <span class="errormsg">The entered radius is not valid.</span>
                        <?php endif; ?>
                        <br />
                        <input type="checkbox" name="notifyOconly" value="1" class="checkbox" <?php if ($this->_tpl_vars['notifyOconly']): ?>checked="checked"<?php endif; ?> id="notifyOconly" />
                        <label for="notifyOconly">Also notify about newly marked <?php echo $this->_tpl_vars['oconly_helpstart']; ?>
OConly<?php echo $this->_tpl_vars['oconly_helpend']; ?>
 caches.</label>
                    <?php else: ?>
                        <?php if ($this->_tpl_vars['notifyRadius'] > 0): ?>
                            Notify me about new geocaches within a radius of <?php echo ((is_array($_tmp=$this->_tpl_vars['notifyRadius'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 km.
                            <br />
                            <?php if ($this->_tpl_vars['notifyOconly']): ?>
                                Notify about newly marked <?php echo $this->_tpl_vars['oconly_helpstart']; ?>
OConly<?php echo $this->_tpl_vars['oconly_helpend']; ?>
 caches.
                            <?php else: ?>
                                Do not notify about newly marked <?php echo $this->_tpl_vars['oconly_helpstart']; ?>
OConly<?php echo $this->_tpl_vars['oconly_helpend']; ?>
 caches.
                            <?php endif; ?>
                        <?php else: ?>
                            Notification about new geocaches is disabled.
                        <?php endif; ?>
                    <?php endif; ?>
                </td>
            </tr>
            <tr><td class="spacer" colspan="2"></td></tr>

            <tr>
                <td valign="top">Newsletter:</td>
                <td valign="top">
                    <?php if ($this->_tpl_vars['edit'] == true): ?>
                        <input type="checkbox" name="accMailing" value="1" <?php if ($this->_tpl_vars['accMailing'] == true): ?>checked="checked"<?php endif; ?> id="acc_Mailing" class="checkbox" />
                        <label for="acc_Mailing">Please send me mailings about news and campaigns on <?php echo $this->_tpl_vars['opt']['page']['sitename']; ?>
. (max. 2-5 per year)</label>
                        <br />
                    <?php else: ?>
                        <?php if ($this->_tpl_vars['accMailing'] == true): ?>
                            Yes, I want to recieve mailings about news and campaigns on <?php echo $this->_tpl_vars['opt']['page']['sitename']; ?>
. (max. 2-5 per year)<br />
                        <?php else: ?>
                            No, I dont't want any mailings about news and campaigns on <?php echo $this->_tpl_vars['opt']['page']['sitename']; ?>
.
                        <?php endif; ?>
                    <?php endif; ?>
                </td>
            </tr>
            <tr><td class="spacer" colspan="2"></td></tr>

            <?php if ($this->_tpl_vars['edit'] || $this->_tpl_vars['usePMR'] || $this->_tpl_vars['permanentLogin'] || $this->_tpl_vars['noHTMLEditor'] || $this->_tpl_vars['sendUsermailAddress']): ?>
            <tr>
                <td valign="top">Others:</td>
                <td valign="top">
                    <?php if ($this->_tpl_vars['edit'] == true): ?>
                        <input type="checkbox" name="usePMR" class="public-setting" value="1" <?php if ($this->_tpl_vars['usePMR'] == true): ?>checked="checked"<?php endif; ?> id="l_using_pmr" class="checkbox" />
                        <label for="l_using_pmr" class="public-setting">I'm taking a PMR walkie talkie on channel 2 with me.</label>
                        <br />
                    <?php else: ?>
                        <?php if ($this->_tpl_vars['usePMR'] == true): ?>
                            <span class="public-setting">I'm taking a PMR walkie talkie on channel 2 with me.</span><br />
                        <?php endif; ?>
                    <?php endif; ?>
                    <?php if ($this->_tpl_vars['edit'] == true): ?>
                        <input type="checkbox" name="permanentLogin" value="1" <?php if ($this->_tpl_vars['permanentLogin'] == true): ?>checked="checked"<?php endif; ?> id="l_using_permanent_login" class="checkbox" />
                        <label for="l_using_permanent_login">Don't log me out after 15 minutes of inactivity.</label><br/>
                        <div style="padding-left:25px;">
                            <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/hint.gif" border="0" width="15" height="11" align="middle" />
                            <span style="color:red; font-size:10px; line-height:1.3em">Attention: If you are using this option, don't forget to log out before other persons have access to your computer. Otherwise, they may use and modify your personal data.</span>
                        </div>
                    <?php else: ?>
                        <?php if ($this->_tpl_vars['permanentLogin'] == true): ?>
                            Don't log me out after 15 minutes of inactivity.<br />
                        <?php endif; ?>
                    <?php endif; ?>
                    <?php if ($this->_tpl_vars['edit'] == true): ?>
                        <input type="checkbox" name="noHTMLEditor" value="1" <?php if ($this->_tpl_vars['noHTMLEditor'] == true): ?>checked="checked"<?php endif; ?> id="l_no_htmledit" class="checkbox" />
                        <label for="l_no_htmledit">Don't use the HTML editor by default.</label>
                        <br />
                    <?php else: ?>
                        <?php if ($this->_tpl_vars['noHTMLEditor']): ?>
                            Don't use the HTML editor by default.
                        <?php endif; ?>
                    <?php endif; ?>
                    <?php if ($this->_tpl_vars['edit'] == true): ?>
                        <input type="checkbox" name="sendUsermailAddress" value="1" <?php if ($this->_tpl_vars['sendUsermailAddress'] == true): ?>checked="checked"<?php endif; ?> id="l_send_usermail_address" class="checkbox" />
                        <label for="l_send_usermail_address">Disclose my e-mail address by default when sending e-mails to other users.</label>
                        <br />
                    <?php else: ?>
                        <?php if ($this->_tpl_vars['sendUsermailAddress']): ?>
                            Disclose my e-mail address by default when sending e-mails to other users.
                        <?php endif; ?>
                    <?php endif; ?>
                </td>
            </tr>
            <tr><td class="spacer" colspan="2"></td></tr>
            <?php endif; ?>

            <tr>
                <td class="public-setting">Registered since:</td>
                <td class="public-setting"><?php echo ((is_array($_tmp=$this->_tpl_vars['registeredSince'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['opt']['format']['datelong']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['opt']['format']['datelong'])); ?>
</td>
            </tr>

            <?php if ($this->_tpl_vars['errorUnknown'] == true): ?>
                <tr>
                    <td colspan="2">
                        <span class="errormsg">An unknown error occurred.</span>
                    </td>
                </tr>
            <?php endif; ?>

            <tr><td class="spacer" colspan="2"></td></tr>
            <tr>
                <td class="header-small" colspan="2">
                    <?php if ($this->_tpl_vars['edit'] == false): ?>
                        <input type="submit" name="change" value="Change" class="formbutton" onclick="flashbutton('change')" />
                    <?php else: ?>
                        <input type="submit" name="cancel" value="Cancel" class="formbutton" onclick="flashbutton('cancel')" />&nbsp;&nbsp;
                        <input type="submit" name="save" value="Submit" class="formbutton" onclick="submitbutton('save')" />
                    <?php endif; ?>
                </td>
            </tr>
        </table>
    </form>

    <?php if ($this->_tpl_vars['edit'] == false): ?>
        <form action="myprofile.php" method="post" style="display:inline;">
            <input type="hidden" name="action" value="changeemail" />
            <table class="table">
                <tr><td class="spacer" colspan="2">&nbsp;</td></tr>
                <tr>
                    <td>E-mail address:</td>
                    <td><?php echo ((is_array($_tmp=$this->_tpl_vars['email'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
                </tr>
                <tr><td class="spacer" colspan="2"></td></tr>
                <tr>
                    <td class="header-small" colspan="2">
                        <?php if ($this->_tpl_vars['edit'] == false): ?>
                            <input type="submit" name="change" value="Change" class="formbutton" onclick="flashbutton('change')" />
                        <?php endif; ?>
                    </td>
                </tr>
            </table>
        </form>
    <?php endif; ?>
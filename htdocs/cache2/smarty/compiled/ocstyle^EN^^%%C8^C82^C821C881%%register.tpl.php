<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:43
         compiled from register.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'register.tpl', 22, false),)), $this); ?>
<?php if ($this->_tpl_vars['confirm'] == 1): ?>
    <div class="content2-pagetitle">
        <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/profile/32x32-profile.png" style="margin-right: 10px;" width="32" height="32" alt="" />
        新用户注册
    </div>

    <p>
        <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/hint.gif" border="0" width="15" height="11" alt="Note" title="Note" align="middle" />
        The activation code was sent to you by e-mail.<br /> Please follow the instructions in the e-mail.<br />
        If you do not see any E-Mail, please check the spam folder of your mailbox.
    </p>

    <table class="table">
        <tr>
            <td>Username:</td>
            <td><?php echo ((is_array($_tmp=$this->_tpl_vars['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
        </tr>

        <tr>
            <td>E-mail:</td>
            <td><?php echo ((is_array($_tmp=$this->_tpl_vars['email'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
        </tr>

        <tr>
            <td>First name:</td>
            <td><?php echo ((is_array($_tmp=$this->_tpl_vars['first_name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
        </tr>

        <tr>
            <td>Last name:</td>
            <td><?php echo ((is_array($_tmp=$this->_tpl_vars['last_name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
        </tr>

        <tr>
            <td>Country:</td>
            <td><?php echo ((is_array($_tmp=$this->_tpl_vars['country_full'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
        </tr>
        <tr><td class="spacer" colspan="2"></td></tr>
    </table>

<?php else: ?>

    <form name="register" action="register.php" method="post" enctype="application/x-www-form-urlencoded" style="display: inline;">
        <input type="hidden" name="show_all_countries" value="<?php echo $this->_tpl_vars['show_all_countries']; ?>
" />
        <div class="content2-pagetitle">
            <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/profile/32x32-profile.png" style="margin-right: 10px;" width="32" height="32" alt="" />
            注册新用户
        </div>

        <div class="article">
        <table class="table">
            <tr>
                <td colspan="2" class="help">
                    <p>
                        <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/hint.gif" border="0" width="15" height="11" alt="Note" align="middle" />
                        To create an account at <?php echo $this->_tpl_vars['opt']['page']['sitename']; ?>
, you have to enter a vaild e-mail address and a user name. An activation code will be sent to the e-mail address you supplied. Only one account can be created per e-mail address. First name, last name and country are optional.
                    </p>
                    <p>
                        Only one account can be created per E-Mail address. First name, last name and country are optional.
                    </p>
                </td>
            </tr>
            <tr><td class="spacer" colspan="2"></td></tr>

            <tr>
                <td width="145" valign="top">Username:</td>
                <td valign="top">
                    <input type="text" name="username" maxlength="60" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" class="input200" /> *
                    <?php if ($this->_tpl_vars['error_username_not_ok'] == 1): ?>
                        <span class="errormsg">The username contains invalid characters.</span>
                    <?php elseif ($this->_tpl_vars['error_username_exists'] == 1): ?>
                        <span class="errormsg">An account with that username already exists.</span>
                    <?php endif; ?>
                </td>
            </tr>
            <tr><td class="spacer" colspan="2"><div class="mediumspacer"></td></tr>

            <tr>
                <td width="145" valign="top">名字：</td>
                <td valign="top">
                    <input type="text" name="first_name" maxlength="60" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['first_name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" class="input200" />
                    <?php if ($this->_tpl_vars['error_first_name_not_ok'] == 1): ?>
                        <span class="errormsg">The first name is not valid.</span>
                    <?php endif; ?>
                </td>
            </tr>
            <tr>
                <td width="145" valign="top">姓氏:</td>
                <td valign="top">
                    <input type="text" name="last_name" maxlength="60" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['last_name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" class="input200" />
                    <?php if ($this->_tpl_vars['error_last_name_not_ok'] == 1): ?>
                        <span class="errormsg">姓氏不能为空</span>
                    <?php endif; ?>
                </td>
            </tr>
            <tr>
                <td valign="top">国家:</td>
                <td valign="top">
                    <select name="country" class="input200" >
                        <option value="XX" <?php if ($this->_tpl_vars['country'] == 'XX'): ?>selected="selected"<?php endif; ?>>Not specified</option>
                        <?php $_from = $this->_tpl_vars['countries']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['countryItem']):
?>
                            <option value="<?php echo $this->_tpl_vars['countryItem']['id']; ?>
" <?php if ($this->_tpl_vars['countryItem']['id'] == $this->_tpl_vars['country']): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['countryItem']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</option>
                        <?php endforeach; endif; unset($_from); ?>
                    </select>&nbsp;&nbsp;
                    <?php if ($this->_tpl_vars['show_all_countries'] == 0): ?>
                        <input type="submit" name="show_all_countries_submit" value="Show all" class="formbutton" onclick="submitbutton('show_all_countries_submit')" />
                    <?php endif; ?>
                </td>
            </tr>
            <tr><td class="spacer" colspan="2"><div class="mediumspacer"></td></tr>

            <tr>
                <td width="145" valign="top">E-mail:</td>
                <td valign="top">
                    <input type="text" name="email" maxlength="80" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['email'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" class="input200" /> *&nbsp;
                    <?php if ($this->_tpl_vars['error_email_not_ok'] == 1): ?>
                        <span class="errormsg">The e-mail address is not valid.</span>
                    <?php elseif ($this->_tpl_vars['error_email_exists'] == 1): ?>
                        <span class="errormsg">An account with that e-mail address already exists. It is not possible to create a second account with the same e-mail address.</span>
                    <?php endif; ?>
                </td>
            </tr>
            <tr>
                <td width="145" valign="top">Your password:</td>
                <td valign="top">
                    <input type="password" name="password1" maxlength="80" value="" class="input200" /> *&nbsp;
                </td>
            </tr>
            <tr>
                <td width="145" valign="top">Please repeat:</td>
                <td valign="top">
                    <input type="password" name="password2" maxlength="80" value="" class="input200" /> *
                </td>
            </tr>
            <?php if ($this->_tpl_vars['error_password_not_ok'] == 1 || $this->_tpl_vars['error_password_diffs'] == 1): ?>
                <tr>
                    <td>&nbsp;</td>
                    <td>
                        <?php if ($this->_tpl_vars['error_password_not_ok'] == 1): ?>
                            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_passworderror.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                        <?php elseif ($this->_tpl_vars['error_password_diffs'] == 1): ?>
                            <span class="errormsg">The passwords do not match.</span>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endif; ?>
            <tr>
                <td width="145" valign="top">&nbsp;</td>
                <td valign="top">
                    * mandatory field
                    <?php if ($this->_tpl_vars['error_unkown'] == 1): ?>
                        <br />
                        <span class="errormsg">
                            The account could not be created, the reason is not known. If you cannot solve this problem by yourself, please contact us via <a href="mailto:<?php echo $this->_tpl_vars['opt']['mail']['contact']; ?>
">e-mail</a>.
                        </span>
                    <?php endif; ?>
                </td>
            </tr>
            <tr><td class="spacer" colspan="2"></td></tr>

            <tr>
                <td colspan="2" class="help">
                    <p class="article">
                        <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/hint.gif" border="0" width="15" height="11" alt="Note" title="Note" align="middle" />
                        We respect your privacy. Your personal data will be stored in our database but not disclosed to third parties. Please note our detailed <a href="articles.php?page=dsb">privacy statement</a>. If you have further questions, please <a href="mailto:<?php echo $this->_tpl_vars['opt']['mail']['contact']; ?>
">contact us</a> <b>before</b> you create an account.
                    </p>
                </td>
            </tr>

            <tr>
                <td colspan="2">
                    <input type="checkbox" name="TOS" value="ON" style="border:0;" />
                        I've read and understand the <a target="_blank" href="articles.php?page=dsb">privacy statement</a>, the <a target="_blank" href="articles.php?page=impressum#tos">terms of service</a> and the <a href="articles.php?page=impressum#datalicense" target="_blank">Data license</a> and accept them.
                    <?php if ($this->_tpl_vars['error_tos_not_ok'] == 1): ?>
                        <br /><span class="errormsg">You have to accept the privacy statement, the terms of service and the data license to register at <?php echo $this->_tpl_vars['opt']['page']['sitename']; ?>
.</span>
                    <?php endif; ?>
                </td>
            </tr>
            <tr><td class="spacer" colspan="2"></td></tr>
            <tr><td class="spacer" colspan="2"></td></tr>

            <tr>
                <td class="header-small" colspan="2">
                    <!-- <input type="reset" name="reset" value="Reset" class="formbutton" onclick="flashbutton('reset')"/>&nbsp;&nbsp; -->
                    <input type="submit" name="submit" value="Register" class="formbutton" onclick="submitbutton('submit')"/>
                </td>
            </tr>
        </table>
        </div>
    </form>
<?php endif; ?>
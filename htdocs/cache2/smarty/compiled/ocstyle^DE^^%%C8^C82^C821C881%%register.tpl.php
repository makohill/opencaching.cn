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
/images/misc/hint.gif" border="0" width="15" height="11" alt="Hinweis" title="Hinweis" align="middle" />
        Der Aktivierungscode wurde per E-Mail versendet.<br />Für den Abschluss der Registrierung folge bitte den weiteren Anweisungen in der E-Mail.<br />
        Falls du keine E-Mail sehen solltest, prüfe bitte ob sie im Spam-Ordner deines Postfachs einsortiert wurde.
    </p>

    <table class="table">
        <tr>
            <td>Benutzername:</td>
            <td><?php echo ((is_array($_tmp=$this->_tpl_vars['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
        </tr>

        <tr>
            <td>E-Mail:</td>
            <td><?php echo ((is_array($_tmp=$this->_tpl_vars['email'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
        </tr>

        <tr>
            <td>Vorname:</td>
            <td><?php echo ((is_array($_tmp=$this->_tpl_vars['first_name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
        </tr>

        <tr>
            <td>Nachname:</td>
            <td><?php echo ((is_array($_tmp=$this->_tpl_vars['last_name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
        </tr>

        <tr>
            <td>Land:</td>
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
/images/misc/hint.gif" border="0" width="15" height="11" alt="Hinweis" align="middle" />
                        Um dir einen Benutzeraccount auf <?php echo $this->_tpl_vars['opt']['page']['sitename']; ?>
 einzurichten, musst du nur eine gültige E-Mail-Adresse und einen Benutzername (&bdquo;Nickname&ldquo;) angeben. An die angegebene E-Mail-Adresse wird eine E-Mail gesendet, mit der du deinen Account aktivieren kannst.
                    </p>
                    <p>
                        Pro E-Mail-Adresse kann nur ein Benutzeraccount eingerichtet werden. Die Angabe von Vorname, Nachname und Land sind freiwillig.
                    </p>
                </td>
            </tr>
            <tr><td class="spacer" colspan="2"></td></tr>

            <tr>
                <td width="145" valign="top">Benutzername:</td>
                <td valign="top">
                    <input type="text" name="username" maxlength="60" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" class="input200" /> *
                    <?php if ($this->_tpl_vars['error_username_not_ok'] == 1): ?>
                        <span class="errormsg">Der Benutzername enthält ungültige Zeichen.</span>
                    <?php elseif ($this->_tpl_vars['error_username_exists'] == 1): ?>
                        <span class="errormsg">Es ist bereits ein Account mit diesem Benutzername vorhanden.</span>
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
                        <span class="errormsg">Der Vorname enthält ungültige Zeichen.</span>
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
                        <option value="XX" <?php if ($this->_tpl_vars['country'] == 'XX'): ?>selected="selected"<?php endif; ?>>Keine Angabe</option>
                        <?php $_from = $this->_tpl_vars['countries']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['countryItem']):
?>
                            <option value="<?php echo $this->_tpl_vars['countryItem']['id']; ?>
" <?php if ($this->_tpl_vars['countryItem']['id'] == $this->_tpl_vars['country']): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['countryItem']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</option>
                        <?php endforeach; endif; unset($_from); ?>
                    </select>&nbsp;&nbsp;
                    <?php if ($this->_tpl_vars['show_all_countries'] == 0): ?>
                        <input type="submit" name="show_all_countries_submit" value="alle anzeigen" class="formbutton" onclick="submitbutton('show_all_countries_submit')" />
                    <?php endif; ?>
                </td>
            </tr>
            <tr><td class="spacer" colspan="2"><div class="mediumspacer"></td></tr>

            <tr>
                <td width="145" valign="top">E-Mail:</td>
                <td valign="top">
                    <input type="text" name="email" maxlength="80" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['email'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" class="input200" /> *&nbsp;
                    <?php if ($this->_tpl_vars['error_email_not_ok'] == 1): ?>
                        <span class="errormsg">Die E-Mail-Adresse ist nicht gültig.</span>
                    <?php elseif ($this->_tpl_vars['error_email_exists'] == 1): ?>
                        <span class="errormsg">Es ist bereits ein Account mit dieser E-Mail-Adresse vorhanden. Es ist nicht möglich, einen zweiten Account auf diese E-Mail-Adresse zu registrieren.</span>
                    <?php endif; ?>
                </td>
            </tr>
            <tr>
                <td width="145" valign="top">Dein Passwort:</td>
                <td valign="top">
                    <input type="password" name="password1" maxlength="80" value="" class="input200" /> *&nbsp;
                </td>
            </tr>
            <tr>
                <td width="145" valign="top">Passwort&nbsp;wiederholen:</td>
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
                            <span class="errormsg">Die beiden Passwörter sind nicht identisch.</span>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endif; ?>
            <tr>
                <td width="145" valign="top">&nbsp;</td>
                <td valign="top">
                    * Pflichtangabe
                    <?php if ($this->_tpl_vars['error_unkown'] == 1): ?>
                        <br />
                        <span class="errormsg">
                            Der Benutzer konnte nicht angelegt werden. Die Ursache ist unbekannt. Sollte dieser Fehler längere Zeit bestehen und du dich nicht registrieren können, schicke uns bitte eine <a href="mailto:<?php echo $this->_tpl_vars['opt']['mail']['contact']; ?>
">E-Mail</a>.
                        </span>
                    <?php endif; ?>
                </td>
            </tr>
            <tr><td class="spacer" colspan="2"></td></tr>

            <tr>
                <td colspan="2" class="help">
                    <p class="article">
                        <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/hint.gif" border="0" width="15" height="11" alt="Hinweis" title="Hinweis" align="middle" />
                        Wir achten auf dein Recht auf informationelle Selbstbestimmung. Deine persönlichen Daten werden in unserer Datenbank gespeichert, jedoch nicht an Dritte weitergegeben. Bitte beachte die genauen Ausführungen in unserer <a target="_blank" href="articles.php?page=dsb">Datenschutzerklärung</a>. Solltest du Fragen dazu haben, möchten wir dich bitten mit uns in Kontakt zu treten, <b>bevor</b> du dich registrierst.
                    </p>
                </td>
            </tr>

            <tr>
                <td colspan="2">
                    <input type="checkbox" name="TOS" value="ON" style="border:0;" />
                        Die <a target="_blank" href="articles.php?page=dsb">Datenschutzerklärung</a>, die <a href="articles.php?page=impressum#tos" target="_blank">Nutzungsbedingungen</a> und die <a href="articles.php?page=impressum#datalicense" target="_blank">Datenlizenz</a> habe ich gelesen und bin damit einverstanden.
                    <?php if ($this->_tpl_vars['error_tos_not_ok'] == 1): ?>
                        <br /><span class="errormsg">Du musst die Datenschutzerklärung, die Nutzungsbedingungen  und die Datenlizenz akzeptieren, um dich bei <?php echo $this->_tpl_vars['opt']['page']['sitename']; ?>
 zu registrieren.</span>
                    <?php endif; ?>
                </td>
            </tr>
            <tr><td class="spacer" colspan="2"></td></tr>
            <tr><td class="spacer" colspan="2"></td></tr>

            <tr>
                <td class="header-small" colspan="2">
                    <!-- <input type="reset" name="reset" value="Zurücksetzen" class="formbutton" onclick="flashbutton('reset')"/>&nbsp;&nbsp; -->
                    <input type="submit" name="submit" value="Registrieren" class="formbutton" onclick="submitbutton('submit')"/>
                </td>
            </tr>
        </table>
        </div>
    </form>
<?php endif; ?>
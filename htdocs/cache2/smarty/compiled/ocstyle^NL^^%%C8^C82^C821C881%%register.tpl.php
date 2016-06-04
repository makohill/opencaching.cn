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
/images/misc/hint.gif" border="0" width="15" height="11" alt="Opmerking" title="Opmerking" align="middle" />
        De activeringscode werd per E-Mail verzonden.<br />Volg de aanwijzigingen in deze E=mal om de activering te voltooien.<br />
        If you do not see any E-Mail, please check the spam folder of your mailbox.
    </p>

    <table class="table">
        <tr>
            <td>Gebruikersnaam:</td>
            <td><?php echo ((is_array($_tmp=$this->_tpl_vars['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
        </tr>

        <tr>
            <td>E-Mail:</td>
            <td><?php echo ((is_array($_tmp=$this->_tpl_vars['email'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
        </tr>

        <tr>
            <td>Voornaam</td>
            <td><?php echo ((is_array($_tmp=$this->_tpl_vars['first_name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
        </tr>

        <tr>
            <td>Achternaam:</td>
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
/images/misc/hint.gif" border="0" width="15" height="11" alt="Opmerking" align="middle" />
                        Om een gebruikersaccount aan te maken op <?php echo $this->_tpl_vars['opt']['page']['sitename']; ?>
, dient je een geldig E-Mail adres en een gebruikersnaam "nickname' op te geven. Een E-Mail zal naar het opgegeven E-Mail adres verzonden worden, waarmee het account geactiveerd kan worden. Per E-Mailadres kan één account aangemaakt worden. Voornaam, achternaam en land zijn niet verplicht.
                    </p>
                    <p>
                        Only one account can be created per E-Mail address. First name, last name and country are optional.
                    </p>
                </td>
            </tr>
            <tr><td class="spacer" colspan="2"></td></tr>

            <tr>
                <td width="145" valign="top">Gebruikersnaam:</td>
                <td valign="top">
                    <input type="text" name="username" maxlength="60" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" class="input200" /> *
                    <?php if ($this->_tpl_vars['error_username_not_ok'] == 1): ?>
                        <span class="errormsg">De gebruikersnaam is niet geldig.</span>
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
                        <span class="errormsg">De voornaam bevat ongeldige tekens.</span>
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
                        <option value="XX" <?php if ($this->_tpl_vars['country'] == 'XX'): ?>selected="selected"<?php endif; ?>>Niet gespecificeerd</option>
                        <?php $_from = $this->_tpl_vars['countries']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['countryItem']):
?>
                            <option value="<?php echo $this->_tpl_vars['countryItem']['id']; ?>
" <?php if ($this->_tpl_vars['countryItem']['id'] == $this->_tpl_vars['country']): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['countryItem']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</option>
                        <?php endforeach; endif; unset($_from); ?>
                    </select>&nbsp;&nbsp;
                    <?php if ($this->_tpl_vars['show_all_countries'] == 0): ?>
                        <input type="submit" name="show_all_countries_submit" value="Toon alle" class="formbutton" onclick="submitbutton('show_all_countries_submit')" />
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
                        <span class="errormsg">Het e-mail adres is niet geldig.</span>
                    <?php elseif ($this->_tpl_vars['error_email_exists'] == 1): ?>
                        <span class="errormsg">An account with that e-mail address already exists. It is not possible to create a second account with the same e-mail address.</span>
                    <?php endif; ?>
                </td>
            </tr>
            <tr>
                <td width="145" valign="top">Jouw wachtwoord:</td>
                <td valign="top">
                    <input type="password" name="password1" maxlength="80" value="" class="input200" /> *&nbsp;
                </td>
            </tr>
            <tr>
                <td width="145" valign="top">Wachtwoord herhalen:</td>
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
                            <span class="errormsg">Beide wachtwoorden zijn niet gelijk.</span>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endif; ?>
            <tr>
                <td width="145" valign="top">&nbsp;</td>
                <td valign="top">
                    Met * aangegeven velden moeten ingevuld worden.
                    <?php if ($this->_tpl_vars['error_unkown'] == 1): ?>
                        <br />
                        <span class="errormsg">
                            Het account kon niet gemaakt worden, de reden is onbekend. Indien je het probleem niet zelf op kunt lossen, neem dan contact op via <a href="mailto:<?php echo $this->_tpl_vars['opt']['mail']['contact']; ?>
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
/images/misc/hint.gif" border="0" width="15" height="11" alt="Opmerking" title="Opmerking" align="middle" />
                        Wij respecteren jouw privacy. Jouw persoonlijke gegevens worden opgeslagen in onze database en niet doorgegeven aan derden. Let op onze gedetailleerde <a href="articles.php?page=dsb">Privacy verklaring</a>.Mochten er nog vragen zijn, kun je contact met ons opnemen via <a href="mailto:<?php echo $this->_tpl_vars['opt']['mail']['contact']; ?>
">contact us</a> <b>voordat</b> je een account aanmaakt.
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
                    <!-- <input type="reset" name="reset" value="Herstellen" class="formbutton" onclick="flashbutton('reset')"/>&nbsp;&nbsp; -->
                    <input type="submit" name="submit" value="Registreren" class="formbutton" onclick="submitbutton('submit')"/>
                </td>
            </tr>
        </table>
        </div>
    </form>
<?php endif; ?>
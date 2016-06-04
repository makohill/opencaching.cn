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
/images/misc/hint.gif" border="0" width="15" height="11" alt="Nota" title="Nota" align="middle" />
        Ti è stato spedito via email il codice di attivazione.<br />Per favore segui le istruzioni contenute nella email.<br />
        Se non ricevi nessuna email per favore verifica la casella spam della tua posta elettronica.
    </p>

    <table class="table">
        <tr>
            <td>Nome utente:</td>
            <td><?php echo ((is_array($_tmp=$this->_tpl_vars['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
        </tr>

        <tr>
            <td>email:</td>
            <td><?php echo ((is_array($_tmp=$this->_tpl_vars['email'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
        </tr>

        <tr>
            <td>Nome:</td>
            <td><?php echo ((is_array($_tmp=$this->_tpl_vars['first_name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
        </tr>

        <tr>
            <td>Cognome:</td>
            <td><?php echo ((is_array($_tmp=$this->_tpl_vars['last_name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
        </tr>

        <tr>
            <td>Nazione:</td>
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
/images/misc/hint.gif" border="0" width="15" height="11" alt="Nota" align="middle" />
                        Per creare un utente registrato su <?php echo $this->_tpl_vars['opt']['page']['sitename']; ?>
 devi inserire un indirizzo di email valido e un nome utente. Verrà spedita una email contenete un codice di attivazione all'indirizzo da te indicato.
                    </p>
                    <p>
                        Un solo utente registrato può essere creato per ciascun indirizzo email. Nome, Cognome e Nazione sono campi opzionali.
                    </p>
                </td>
            </tr>
            <tr><td class="spacer" colspan="2"></td></tr>

            <tr>
                <td width="145" valign="top">Nome utente:</td>
                <td valign="top">
                    <input type="text" name="username" maxlength="60" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" class="input200" /> *
                    <?php if ($this->_tpl_vars['error_username_not_ok'] == 1): ?>
                        <span class="errormsg">Il nome utente non è valido.</span>
                    <?php elseif ($this->_tpl_vars['error_username_exists'] == 1): ?>
                        <span class="errormsg">Esiste già un utente con questo nome.</span>
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
                        <span class="errormsg">Il Nome non è valido</span>
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
                        <option value="XX" <?php if ($this->_tpl_vars['country'] == 'XX'): ?>selected="selected"<?php endif; ?>>Non specificato</option>
                        <?php $_from = $this->_tpl_vars['countries']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['countryItem']):
?>
                            <option value="<?php echo $this->_tpl_vars['countryItem']['id']; ?>
" <?php if ($this->_tpl_vars['countryItem']['id'] == $this->_tpl_vars['country']): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['countryItem']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</option>
                        <?php endforeach; endif; unset($_from); ?>
                    </select>&nbsp;&nbsp;
                    <?php if ($this->_tpl_vars['show_all_countries'] == 0): ?>
                        <input type="submit" name="show_all_countries_submit" value="Mostra tutto" class="formbutton" onclick="submitbutton('show_all_countries_submit')" />
                    <?php endif; ?>
                </td>
            </tr>
            <tr><td class="spacer" colspan="2"><div class="mediumspacer"></td></tr>

            <tr>
                <td width="145" valign="top">email:</td>
                <td valign="top">
                    <input type="text" name="email" maxlength="80" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['email'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" class="input200" /> *&nbsp;
                    <?php if ($this->_tpl_vars['error_email_not_ok'] == 1): ?>
                        <span class="errormsg">La email non è valida.</span>
                    <?php elseif ($this->_tpl_vars['error_email_exists'] == 1): ?>
                        <span class="errormsg">Esiste già un utente registrato con questo indirizzo email. Non è possibile registrare un secondo utente con lo stesso indirizzo email.</span>
                    <?php endif; ?>
                </td>
            </tr>
            <tr>
                <td width="145" valign="top">La tua password:</td>
                <td valign="top">
                    <input type="password" name="password1" maxlength="80" value="" class="input200" /> *&nbsp;
                </td>
            </tr>
            <tr>
                <td width="145" valign="top">Per favore ripeti:</td>
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
                            <span class="errormsg">Le password non coincidono.</span>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endif; ?>
            <tr>
                <td width="145" valign="top">&nbsp;</td>
                <td valign="top">
                    * sono campi obbligatori
                    <?php if ($this->_tpl_vars['error_unkown'] == 1): ?>
                        <br />
                        <span class="errormsg">
                            L'utente non può essere creato, la ragione non è nota. Se non riesci a risolvere da solo il problema, per favore contattaci tramie <a href="mailto:<?php echo $this->_tpl_vars['opt']['mail']['contact']; ?>
">email</a>.
                        </span>
                    <?php endif; ?>
                </td>
            </tr>
            <tr><td class="spacer" colspan="2"></td></tr>

            <tr>
                <td colspan="2" class="help">
                    <p class="article">
                        <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/hint.gif" border="0" width="15" height="11" alt="Nota" title="Nota" align="middle" />
                        Noi rispettiamo la tua privacy. I tuoi dati personali verranno registrati nel nostro database e non saranno rivelati a terzi. Puoi prendere visione dei dettagli alla pagina <a href="articles.php?page=dsb">privacy statement</a>. Se ha altre domande, per favore <a href="mailto:<?php echo $this->_tpl_vars['opt']['mail']['contact']; ?>
">contattaci</a> <b>prima</b> di creare un utente.
                    </p>
                </td>
            </tr>

            <tr>
                <td colspan="2">
                    <input type="checkbox" name="TOS" value="ON" style="border:0;" />
                        Ho letto e compreso la <a target="_blank" href="articles.php?page=dsb">dichiarazione di privacy</a>, i <a target="_blank" href="articles.php?page=impressum#tos">termini del servizio</a> e la <a href="articles.php?page=impressum#datalicense" target="_blank">licnza Dati</a> e di accerrali.
                    <?php if ($this->_tpl_vars['error_tos_not_ok'] == 1): ?>
                        <br /><span class="errormsg">Devi accettare la dichiarazione di privacy, i termini del servizio e la licenza dati per registrarti su <?php echo $this->_tpl_vars['opt']['page']['sitename']; ?>
.</span>
                    <?php endif; ?>
                </td>
            </tr>
            <tr><td class="spacer" colspan="2"></td></tr>
            <tr><td class="spacer" colspan="2"></td></tr>

            <tr>
                <td class="header-small" colspan="2">
                    <!-- <input type="reset" name="reset" value="Ripristino" class="formbutton" onclick="flashbutton('reset')"/>&nbsp;&nbsp; -->
                    <input type="submit" name="submit" value="Registrazione" class="formbutton" onclick="submitbutton('submit')"/>
                </td>
            </tr>
        </table>
        </div>
    </form>
<?php endif; ?>
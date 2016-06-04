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
        El código de activación se envían por email.<br /> Por favor, siga las instrucciones del email.<br />
        If you do not see any E-Mail, please check the spam folder of your mailbox.
    </p>

    <table class="table">
        <tr>
            <td>Usuario:</td>
            <td><?php echo ((is_array($_tmp=$this->_tpl_vars['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
        </tr>

        <tr>
            <td>email:</td>
            <td><?php echo ((is_array($_tmp=$this->_tpl_vars['email'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
        </tr>

        <tr>
            <td>Nombre:</td>
            <td><?php echo ((is_array($_tmp=$this->_tpl_vars['first_name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
        </tr>

        <tr>
            <td>Apellido:</td>
            <td><?php echo ((is_array($_tmp=$this->_tpl_vars['last_name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
        </tr>

        <tr>
            <td>País:</td>
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
                        Para crear una cuenta en <?php echo $this->_tpl_vars['opt']['page']['sitename']; ?>
, tiene que introducir una dirección de email valida y un nombre de usuario. Un código de activación será enviado a la dirección de email que proporcionó.
                    </p>
                    <p>
                        Sólo una cuenta se puede crear por dirección de email. Nombre, apellido y país son opcionales.
                    </p>
                </td>
            </tr>
            <tr><td class="spacer" colspan="2"></td></tr>

            <tr>
                <td width="145" valign="top">Usuario:</td>
                <td valign="top">
                    <input type="text" name="username" maxlength="60" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" class="input200" /> *
                    <?php if ($this->_tpl_vars['error_username_not_ok'] == 1): ?>
                        <span class="errormsg">El Usuario no es valido.</span>
                    <?php elseif ($this->_tpl_vars['error_username_exists'] == 1): ?>
                        <span class="errormsg">Ya existe una cuenta con este nombre de usuario existe.</span>
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
                        <span class="errormsg">El Nombre no es valido</span>
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
                        <option value="XX" <?php if ($this->_tpl_vars['country'] == 'XX'): ?>selected="selected"<?php endif; ?>>No especificado</option>
                        <?php $_from = $this->_tpl_vars['countries']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['countryItem']):
?>
                            <option value="<?php echo $this->_tpl_vars['countryItem']['id']; ?>
" <?php if ($this->_tpl_vars['countryItem']['id'] == $this->_tpl_vars['country']): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['countryItem']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</option>
                        <?php endforeach; endif; unset($_from); ?>
                    </select>&nbsp;&nbsp;
                    <?php if ($this->_tpl_vars['show_all_countries'] == 0): ?>
                        <input type="submit" name="show_all_countries_submit" value="Mostrar todo" class="formbutton" onclick="submitbutton('show_all_countries_submit')" />
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
                        <span class="errormsg">El email no es valido</span>
                    <?php elseif ($this->_tpl_vars['error_email_exists'] == 1): ?>
                        <span class="errormsg">Una cuenta con esa dirección de email ya existe. No sera posible crear una segunda cuenta con la misma dirección de email.</span>
                    <?php endif; ?>
                </td>
            </tr>
            <tr>
                <td width="145" valign="top">Tu Password:</td>
                <td valign="top">
                    <input type="password" name="password1" maxlength="80" value="" class="input200" /> *&nbsp;
                </td>
            </tr>
            <tr>
                <td width="145" valign="top">Por favor repitalo:</td>
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
                            <span class="errormsg">El Password no coincide</span>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endif; ?>
            <tr>
                <td width="145" valign="top">&nbsp;</td>
                <td valign="top">
                    Se debe introducir los campos marcados con *
                    <?php if ($this->_tpl_vars['error_unkown'] == 1): ?>
                        <br />
                        <span class="errormsg">
                            La cuenta no se pudo crear, la razón no se conoce. Si no puede resolver este problema por sí mismo, por favor contáctenos a través de <a href="mailto:<?php echo $this->_tpl_vars['opt']['mail']['contact']; ?>
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
                        Respetamos su privacidad. Sus datos personales serán almacenados en nuestra base de datos pero no divulgación a terceros. Por favor, tome nota detallada de nuestra <a href="articles.php?page=dsb">privacy statement</a>. Si tiene más preguntas, por favor <a href="mailto:<?php echo $this->_tpl_vars['opt']['mail']['contact']; ?>
">contact us</a> <b>before</b> crear una cuenta.
                    </p>
                </td>
            </tr>

            <tr>
                <td colspan="2">
                    <input type="checkbox" name="TOS" value="ON" style="border:0;" />
                        He leído y entendido la <a target="_blank" href="articles.php?page=dsb">declaración de privacidad</a>, los <a target="_blank" href="articles.php?page=impressum#tos">terminos de servicio</a> y la <a href="articles.php?page=impressum#datalicense" target="_blank">Licencia de Datos</a> y aceptarlos.
                    <?php if ($this->_tpl_vars['error_tos_not_ok'] == 1): ?>
                        <br /><span class="errormsg">Tienes que aceptar la declaración de privacidad, términos de servicio y la licencia de datos para registrarse en <?php echo $this->_tpl_vars['opt']['page']['sitename']; ?>
.</span>
                    <?php endif; ?>
                </td>
            </tr>
            <tr><td class="spacer" colspan="2"></td></tr>
            <tr><td class="spacer" colspan="2"></td></tr>

            <tr>
                <td class="header-small" colspan="2">
                    <!-- <input type="reset" name="reset" value="Reset" class="formbutton" onclick="flashbutton('reset')"/>&nbsp;&nbsp; -->
                    <input type="submit" name="submit" value="Registrarse" class="formbutton" onclick="submitbutton('submit')"/>
                </td>
            </tr>
        </table>
        </div>
    </form>
<?php endif; ?>
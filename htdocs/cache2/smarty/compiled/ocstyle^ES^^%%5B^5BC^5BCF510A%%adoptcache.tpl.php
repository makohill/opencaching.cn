<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:38
         compiled from adoptcache.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'adoptcache.tpl', 15, false),array('modifier', 'date_format', 'adoptcache.tpl', 34, false),)), $this); ?>
<?php if ($this->_tpl_vars['action'] == 'listbycache'): ?>
    <form method="post" action="adoptcache.php">
        <input type="hidden" name="action" value="add" />
        <input type="hidden" name="submit" value="1" />
        <input type="hidden" name="cacheid" value="<?php echo $this->_tpl_vars['cacheid']; ?>
" />

        <div class="content2-pagetitle">
            <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/profile/32x32-adopt.png" style="margin-right: 10px;" width="32" height="32" alt="" />
            Lista de usuarios que se han ofrecido <?php echo ((is_array($_tmp=$this->_tpl_vars['cachename'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 en adopción
        </div>

        <table class="table">
            <tr><td class="spacer"></td></tr>
            <tr>
                <th align="left">Usuario</th>
                <th align="left">Data</th>
                <th>&nbsp;</th>
            </tr>

            <tr><td class="spacer"></td></tr>

            <?php $_from = $this->_tpl_vars['adoptions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['adoptItem']):
?>
                <tr>
                    <td>
                        <a href="viewprofile.php?userid=<?php echo $this->_tpl_vars['adoptItem']['userid']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['adoptItem']['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a>
                    </td>
                    <td>
                        <?php echo ((is_array($_tmp=$this->_tpl_vars['adoptItem']['date_created'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['opt']['format']['date']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['opt']['format']['date'])); ?>

                    </td>
                    <td>
                        <a href="adoptcache.php?action=cancel&cacheid=<?php echo $this->_tpl_vars['adoptItem']['id']; ?>
&userid=<?php echo $this->_tpl_vars['adoptItem']['userid']; ?>
">Withdraw adoption offer</a><br />
                    </td>
                </tr>
            <?php endforeach; else: ?>
                <tr><td class="spacer" colspan="3"></td></tr>
                <tr>
                    <td colspan="3">
                        No te ha invitado ningún usuario a adoptar este cache.
                    </td>
                </tr>
            <?php endif; unset($_from); ?>

            <tr><td colspan="3"></td></tr>
            <tr>
                <td class="header" colspan="3">
                    Oferta <b><?php echo ((is_array($_tmp=$this->_tpl_vars['cachename'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</b> para adopción
                </td>
            </tr>
            <tr>
                <td colspan="3">
                     <p>Cuando usted encuentra un usuario que quiere adoptar de su geocache, por favor, ponga el nombre de usuario y confirme la operación. El usuario es entonces este geocache &gt; mi perfil de adopciones. Para completar la adopción, las condiciones del usuario del servicio de Opencaching.de debera aceptar y confirmar la aprobación.</p>

                     <p>Puedes dejar un geocache a varios usuarios para ofrecer en adopción. El primer usuario de la adopción se confirma, sera el nuevo propietario de la caché. Con la aprobación que le da al usuario un derecho ilimitado para usar este contenido protegido por derechos de autor del cache, modificar y transmitir.</p>
                </td>
            </tr>
            <tr><td colspan="3">&nbsp;</td></tr>
            <tr>
                <td width="22%">Usuario:</td>
                <td colspan="2"><input type="text" name="username" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['adoptusername'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="40" /></td>
            </tr>
            <?php if ($this->_tpl_vars['error'] == 'userunknown'): ?>
                <tr><td>&nbsp;</td><td colspan="2"><span class="errormsg">Usuario desconocido</span></td></tr>
            <?php elseif ($this->_tpl_vars['error'] == 'userdisabled'): ?>
                <tr><td>&nbsp;</td><td colspan="2"><span class="errormsg">This user account is disabled.</span></td></tr>
            <?php elseif ($this->_tpl_vars['error'] == 'self'): ?>
                <tr><td>&nbsp;</td><td colspan="2"><span class="errormsg">¡Usted no puede adoptar su propio cache!</span></td></tr>
            <?php endif; ?>
            <tr><td class="spacer" colspan="3"></td></tr>
            <tr>
                <td colspan="3">
                    <input type="checkbox" name="tou" value="1" />
                    <label for="tou">
                        Sí, he leído y entendido lo anterior y lo acepto.
                    </label>
                </td>
            </tr>
            <?php if ($this->_tpl_vars['error'] == 'tou'): ?>
                <tr><td colspan="3"><span class="errormsg">¡Lo sentimos, usted tiene que leer y aceptar la parte superior para continuar!</span></td></tr>
            <?php endif; ?>
            <tr><td colspan="3">&nbsp;</td></tr>
            <tr>
                <td>&nbsp;</td>
                <td colspan="2">
                    <input type="submit" value="Entrada" class="formbutton" onclick="submitbutton('submit')" />
                </td>
            </tr>
        </table>
    </form>

<?php elseif ($this->_tpl_vars['action'] == 'listbyuser'): ?>

    <div class="content2-pagetitle">
        <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/profile/32x32-adopt.png" style="margin-right: 10px;" width="32" height="32" alt="" />
        Geocache que le han ofrecido en adopción
    </div>

    <table class="table" width="98%">
        <tr><td class="spacer"></td></tr>
        <tr>
            <th>Nombre</th>
            <th>Propietario</th>
            <th></th>
        </tr>

        <tr><td class="spacer"></td></tr>

        <?php $_from = $this->_tpl_vars['adoptions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['adoptItem']):
?>
            <tr>
                <td><a href="viewcache.php?cacheid=<?php echo $this->_tpl_vars['adoptItem']['id']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['adoptItem']['cachename'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a></td>
                <td><a href="viewprofile.php?userid=<?php echo $this->_tpl_vars['adoptItem']['ownerid']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['adoptItem']['ownername'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a></td>
                <td style="white-space:nowrap">
                    <a href="adoptcache.php?action=commit&cacheid=<?php echo $this->_tpl_vars['adoptItem']['id']; ?>
">Adoptar ahora</a>
                    &nbsp;
                    <a href="adoptcache.php?action=cancel&cacheid=<?php echo $this->_tpl_vars['adoptItem']['id']; ?>
&userid=<?php echo $this->_tpl_vars['login']['userid']; ?>
">Rechazar adopción</a><br />
                </td>
            </tr>
        <?php endforeach; else: ?>
            <tr>
                <td colspan="3">
                    <br />
                    En este momento hay caches que pueden ser adoptados.
                </td>
            </tr>
        <?php endif; unset($_from); ?>
    </table>

<?php elseif ($this->_tpl_vars['action'] == 'commit'): ?>
    <form method="post" action="adoptcache.php">
        <input type="hidden" name="action" value="commit" />
        <input type="hidden" name="submit" value="1" />
        <input type="hidden" name="cacheid" value="<?php echo $this->_tpl_vars['cacheid']; ?>
" />

        <div class="content2-pagetitle"><img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/profile/22x22-email.png" style="margin-right: 10px;" width="22" height="22" alt="" />Confirma la adopción de <?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</div>

        <p style="line-height: 1.6em;">
            Gracias por haber adoptado <strong><?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</strong>.<br />
            el <?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['date_created'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['opt']['format']['date']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['opt']['format']['date'])); ?>
, <strong><?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</strong> me dio en adopción este geocache.
        </p>

        <p style="line-height: 1.6em;">
            Para completar la adopción, debe enviar este form.<br /> Al enviar este formulario, usted se convierte en el propietario responsable de esta geocache.
        </p>

        <p style="line-height: 1.6em;">
            <br />
            <input type="checkbox" name="tou" value="1" />
            <label for="tou">Sí, lo he leído y aprobado las <a href="articles.php?page=impressum#tos">condiciones de uso</a> de Opencaching.de.</label>
        </p>

        <?php if ($this->_tpl_vars['error'] == 'tou'): ?>
            <p style="line-height: 1.6em; color: red; font-weight: bold;">
                ¡Lo sentimos, usted debe leer y aceptar las condiciones de uso para continuar!
            </p>
        <?php endif; ?>
        <p style="line-height: 1.6em;"><input type="submit" value="Entrada" class="formbutton" onclick="submitbutton('submit')" /></p>
    </form>
<?php endif; ?>
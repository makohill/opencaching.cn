<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:42
         compiled from myprofile.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'myprofile.tpl', 30, false),array('modifier', 'date_format', 'myprofile.tpl', 208, false),array('function', 'coordinput', 'myprofile.tpl', 97, false),)), $this); ?>
<div class="content2-pagetitle">
    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/profile/32x32-profile.png" style="margin-right: 10px;" width="32" height="32" alt="" />
    Mon profil de données
</div>

    <form action="myprofile.php" method="post" style="display:inline;">
        <input type="hidden" name="action" value="change" />
        <input type="hidden" name="showAllCountries" value="<?php echo $this->_tpl_vars['showAllCountries']; ?>
" />

        <table class="table">
            <tr>
                <td colspan="3">
                    <span class="boldtext ">Les informations suivantes sont stockées dans votre profil d'utilisateur&nbsp;:</span><br />
                <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/hint.gif" border="0" width="15" height="11" alt="" align="middle" />
                <span class="systemlink" style="font-size:10px;">Seulement les <span class="public-setting">entrées verts</span> sont visibles aux autres utilisateurs.</span>
                </td>
            </tr>
            <tr><td class="spacer"></td></tr>

            <tr>
                <td class="public-setting">Nom d'utilisateur&nbsp;:</td>
                <td class="public-setting">
                    <?php if ($this->_tpl_vars['edit'] == true): ?>
                        <input type="text" name="username" class="public-setting" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" maxlength="60" size="30" />
                        <?php if ($this->_tpl_vars['usernameErrorInvalidChars'] == true): ?>
                            <span class="errormsg">Le nom d'utilisateur n'est pas valide.</span>
                        <?php elseif ($this->_tpl_vars['errorUsernameExist'] == true): ?>
                            <span class="errormsg">Il existe déjà un compte avec ce nom d'utilisateur.</span>
                        <?php endif; ?>
                    <?php else: ?>
                        <?php echo ((is_array($_tmp=$this->_tpl_vars['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

                    <?php endif; ?>
                </td>
            </tr>

            <tr>
                <td>Prénom&nbsp;:</td>
                <td>
                    <?php if ($this->_tpl_vars['edit'] == true): ?>
                        <input type="text" name="firstName" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['firstName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" maxlength="60" size="30" />
                        <?php if ($this->_tpl_vars['firstNameError'] == true): ?>
                            <span class="errormsg">Le premier nom n'est pas valide.</span>
                        <?php endif; ?>
                    <?php else: ?>
                        <?php echo ((is_array($_tmp=$this->_tpl_vars['firstName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

                    <?php endif; ?>
                </td>
            </tr>

            <tr>
                <td>Nom&nbsp;:</td>
                <td>
                    <?php if ($this->_tpl_vars['edit'] == true): ?>
                        <input type="text" name="lastName" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lastName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" maxlength="60" size="30" />
                        <?php if ($this->_tpl_vars['lastNameError'] == true): ?>
                            <span class="errormsg">Le dernier nom n'est pas valide.</span>
                        <?php endif; ?>
                    <?php else: ?>
                        <?php echo ((is_array($_tmp=$this->_tpl_vars['lastName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

                    <?php endif; ?>
                </td>
            </tr>

            <tr>
                <td class="public-setting">Pays&nbsp;:</td>
                <td class="public-setting">
                    <?php if ($this->_tpl_vars['edit'] == true): ?>
                        <select name="country"class="public-setting">
                            <option value="XX" <?php if ($this->_tpl_vars['countryCode'] == 'XX'): ?>selected="selected"<?php endif; ?>>Non défini</option>
                            <?php $_from = $this->_tpl_vars['countries']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['countryItem']):
?>
                                <option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['countryItem']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" <?php if ($this->_tpl_vars['countryCode'] == $this->_tpl_vars['countryItem']['id']): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['countryItem']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</option>
                            <?php endforeach; endif; unset($_from); ?>
                        </select>
                        <?php if ($this->_tpl_vars['showAllCountries'] == false): ?>
                            &nbsp;&nbsp;<input type="submit" name="showAllCountriesSubmit" value="Montre tout" class="formbutton" onclick="submitbutton('showAllCountriesSubmit')" />
                        <?php endif; ?>
                        <?php if ($this->_tpl_vars['countryError'] == true): ?>
                            <span class="errormsg">Le pays n'est pas valide.</span>
                        <?php endif; ?>
                    <?php else: ?>
                        <?php echo ((is_array($_tmp=$this->_tpl_vars['country'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

                    <?php endif; ?>
                </td>
            </tr>
            <tr><td class="spacer" colspan="2"></td></tr>

            <tr>
                <td valign=top>Accueil Coordonnées&nbsp;:</td>
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
                <td valign=top >Notifications&nbsp;:</td>
                <td>
                    <?php if ($this->_tpl_vars['edit'] == true): ?>
                        <?php ob_start(); ?>
                            <input type="text" name="notifyRadius" maxlength="3" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['notifyRadius'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" class="input30" />
                        <?php $this->_smarty_vars['capture']['inputfield'] = ob_get_contents(); ob_end_clean(); ?>
                        Je veux être informé sur des nouveaux géocaches dans un rayon de <?php echo $this->_smarty_vars['capture']['inputfield']; ?>
 km.<br />
                        <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/hint.gif" border="0" width="15" height="11" align="middle" />
                        <span style="font-size:10px;">
                            Le rayon de notification ne doit pas être plus de 150 km. Pour désactiver des notifications, définir le rayon à 0.
                        </span>
                        <?php if ($this->_tpl_vars['notifyRadiusError'] == true): ?>
                            <span class="errormsg">Le rayon n'est pas valide.</span>
                        <?php endif; ?>
                        <br />
                        <input type="checkbox" name="notifyOconly" value="1" class="checkbox" <?php if ($this->_tpl_vars['notifyOconly']): ?>checked="checked"<?php endif; ?> id="notifyOconly" />
                        <label for="notifyOconly">Informer également sur des nouvelles caches marqués <?php echo $this->_tpl_vars['oconly_helpstart']; ?>
OConly<?php echo $this->_tpl_vars['oconly_helpend']; ?>
.</label>
                    <?php else: ?>
                        <?php if ($this->_tpl_vars['notifyRadius'] > 0): ?>
                            Notifier moi sur les nouvelles géocaches dans un rayon de <?php echo ((is_array($_tmp=$this->_tpl_vars['notifyRadius'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 km.
                            <br />
                            <?php if ($this->_tpl_vars['notifyOconly']): ?>
                                Informer sur des nouvelles caches marqués <?php echo $this->_tpl_vars['oconly_helpstart']; ?>
OConly<?php echo $this->_tpl_vars['oconly_helpend']; ?>
.
                            <?php else: ?>
                                Ne pas informer sur des nouvelles caches marqués <?php echo $this->_tpl_vars['oconly_helpstart']; ?>
OConly<?php echo $this->_tpl_vars['oconly_helpend']; ?>
.
                            <?php endif; ?>
                        <?php else: ?>
                            Alerte de nouvelles géocaches est désactivé.
                        <?php endif; ?>
                    <?php endif; ?>
                </td>
            </tr>
            <tr><td class="spacer" colspan="2"></td></tr>

            <tr>
                <td valign="top">Lettre d'information&nbsp;:</td>
                <td valign="top">
                    <?php if ($this->_tpl_vars['edit'] == true): ?>
                        <input type="checkbox" name="accMailing" value="1" <?php if ($this->_tpl_vars['accMailing'] == true): ?>checked="checked"<?php endif; ?> id="acc_Mailing" class="checkbox" />
                        <label for="acc_Mailing">S'il vous plaît envoyez-moi des e-mails sur des nouvelles et des actions sur <?php echo $this->_tpl_vars['opt']['page']['sitename']; ?>
. (max. 2-5 par an)</label>
                        <br />
                    <?php else: ?>
                        <?php if ($this->_tpl_vars['accMailing'] == true): ?>
                            Oui, je veux recevoir des emails sur des nouvelles et des actions sur <?php echo $this->_tpl_vars['opt']['page']['sitename']; ?>
. (max. 2-5 par an)<br />
                        <?php else: ?>
                            Non, je ne veux pas des e-mails sur des nouvelles et des actions sur <?php echo $this->_tpl_vars['opt']['page']['sitename']; ?>
.
                        <?php endif; ?>
                    <?php endif; ?>
                </td>
            </tr>
            <tr><td class="spacer" colspan="2"></td></tr>

            <?php if ($this->_tpl_vars['edit'] || $this->_tpl_vars['usePMR'] || $this->_tpl_vars['permanentLogin'] || $this->_tpl_vars['noHTMLEditor'] || $this->_tpl_vars['sendUsermailAddress']): ?>
            <tr>
                <td valign="top">Autres&nbsp;:</td>
                <td valign="top">
                    <?php if ($this->_tpl_vars['edit'] == true): ?>
                        <input type="checkbox" name="usePMR" class="public-setting" value="1" <?php if ($this->_tpl_vars['usePMR'] == true): ?>checked="checked"<?php endif; ?> id="l_using_pmr" class="checkbox" />
                        <label for="l_using_pmr" class="public-setting">Je prends un talkie-walkie PMR sur le canal 2 avec moi.</label>
                        <br />
                    <?php else: ?>
                        <?php if ($this->_tpl_vars['usePMR'] == true): ?>
                            <span class="public-setting">Je prends un talkie-walkie PMR sur le canal 2 avec moi.</span><br />
                        <?php endif; ?>
                    <?php endif; ?>
                    <?php if ($this->_tpl_vars['edit'] == true): ?>
                        <input type="checkbox" name="permanentLogin" value="1" <?php if ($this->_tpl_vars['permanentLogin'] == true): ?>checked="checked"<?php endif; ?> id="l_using_permanent_login" class="checkbox" />
                        <label for="l_using_permanent_login">Ne pas me déconnecter après 15 minutes d'inactivité.</label><br/>
                        <div style="padding-left:25px;">
                            <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/hint.gif" border="0" width="15" height="11" align="middle" />
                            <span style="color:red; font-size:10px; line-height:1.3em">Attention&nbsp;: Si vous utilisez cette option, ne pas oublier de se déconnecter avant que d'autres personnes peuvent utiliser votre ordinateur. Sinon, ils peuvent utiliser et modifier vos données personnelles.</span>
                        </div>
                    <?php else: ?>
                        <?php if ($this->_tpl_vars['permanentLogin'] == true): ?>
                            Ne pas me déconnecter après 15 minutes d'inactivité.<br />
                        <?php endif; ?>
                    <?php endif; ?>
                    <?php if ($this->_tpl_vars['edit'] == true): ?>
                        <input type="checkbox" name="noHTMLEditor" value="1" <?php if ($this->_tpl_vars['noHTMLEditor'] == true): ?>checked="checked"<?php endif; ?> id="l_no_htmledit" class="checkbox" />
                        <label for="l_no_htmledit">Ne pas utiliser un éditeur HTML par défaut</label>
                        <br />
                    <?php else: ?>
                        <?php if ($this->_tpl_vars['noHTMLEditor']): ?>
                            Ne pas utiliser un éditeur HTML par défaut
                        <?php endif; ?>
                    <?php endif; ?>
                    <?php if ($this->_tpl_vars['edit'] == true): ?>
                        <input type="checkbox" name="sendUsermailAddress" value="1" <?php if ($this->_tpl_vars['sendUsermailAddress'] == true): ?>checked="checked"<?php endif; ?> id="l_send_usermail_address" class="checkbox" />
                        <label for="l_send_usermail_address">Divulguer mon adresse e-mail par défaut en envoyant d'e-mails aux autres utilisateurs.</label>
                        <br />
                    <?php else: ?>
                        <?php if ($this->_tpl_vars['sendUsermailAddress']): ?>
                            Divulguer mon adresse e-mail par défaut en envoyant d'e-mails aux autres utilisateurs.
                        <?php endif; ?>
                    <?php endif; ?>
                </td>
            </tr>
            <tr><td class="spacer" colspan="2"></td></tr>
            <?php endif; ?>

            <tr>
                <td class="public-setting">Enregistrédepuis&nbsp;:</td>
                <td class="public-setting"><?php echo ((is_array($_tmp=$this->_tpl_vars['registeredSince'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['opt']['format']['datelong']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['opt']['format']['datelong'])); ?>
</td>
            </tr>

            <?php if ($this->_tpl_vars['errorUnknown'] == true): ?>
                <tr>
                    <td colspan="2">
                        <span class="errormsg">Une erreur inconnue est survenue.</span>
                    </td>
                </tr>
            <?php endif; ?>

            <tr><td class="spacer" colspan="2"></td></tr>
            <tr>
                <td class="header-small" colspan="2">
                    <?php if ($this->_tpl_vars['edit'] == false): ?>
                        <input type="submit" name="change" value="Changement" class="formbutton" onclick="flashbutton('change')" />
                    <?php else: ?>
                        <input type="submit" name="cancel" value="Annuler" class="formbutton" onclick="flashbutton('cancel')" />&nbsp;&nbsp;
                        <input type="submit" name="save" value="Soumettre" class="formbutton" onclick="submitbutton('save')" />
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
                    <td>Adresse e-mail&nbsp;:</td>
                    <td><?php echo ((is_array($_tmp=$this->_tpl_vars['email'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
                </tr>
                <tr><td class="spacer" colspan="2"></td></tr>
                <tr>
                    <td class="header-small" colspan="2">
                        <?php if ($this->_tpl_vars['edit'] == false): ?>
                            <input type="submit" name="change" value="Changement" class="formbutton" onclick="flashbutton('change')" />
                        <?php endif; ?>
                    </td>
                </tr>
            </table>
        </form>
    <?php endif; ?>
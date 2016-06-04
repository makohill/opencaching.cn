<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:38
         compiled from adminuser.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'adminuser.tpl', 14, false),array('modifier', 'date_format', 'adminuser.tpl', 52, false),)), $this); ?>
<div class="content2-pagetitle">
    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/32x32-tools.png" style="margin-right: 10px;" width="32" height="32" alt="" />
    Afficher les détails du compte d'utilisateur
</div>

<form method="post" action="adminuser.php">
    <input type="hidden" name="action" value="searchuser" />
        <p style="line-height: 1.6em;"><strong>Nom d'utilisateur ou adresse e-mail&nbsp;:</strong> &nbsp;<input type="text" name="username" size="30" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></p>

        <?php if ($this->_tpl_vars['error'] == 'userunknown'): ?>
            <p style="line-height: 1.6em; color: red; font-weight: bold;">Nom d'utilisateur inconnu</p>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['success'] == '1'): ?>
            <p style="line-height: 1.6em; color: green; font-weight: bold;">le statut de l'utilisateur a été modifié avec succès.</p>
        <?php endif; ?>

        <p style="line-height: 1.6em;"><input type="submit" name="find" value="Soumettre" class="formbutton" onclick="submitbutton('find')" /></p>

</form>

<?php if ($this->_tpl_vars['showdetails'] == true): ?>
    <form method="post" action="adminuser.php">
        <input type="hidden" name="action" value="formaction" />
        <input type="hidden" name="userid" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['user']['user_id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />

        <div class="content2-pagetitle">
            <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/32x32-tools.png" style="margin-right: 10px;" width="32" height="32" alt="" />
            Détails du compte d'utilisateur
        </div>

        <table class="narrowtable">
            <tr>
                <td>Nom d'utilisateur&nbsp;:</td>
                <td><a href="viewprofile.php?userid=<?php echo ((is_array($_tmp=$this->_tpl_vars['user']['user_id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" target="_blank"><?php echo ((is_array($_tmp=$this->_tpl_vars['user']['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a></td>
            </tr>
            <tr>
                <td>ID de l'utilisateur&nbsp;:</td>
                <td><a href="viewprofile.php?userid=<?php echo ((is_array($_tmp=$this->_tpl_vars['user']['user_id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" target="_blank"><?php echo ((is_array($_tmp=$this->_tpl_vars['user']['user_id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a></td>
            </tr>
            <tr>
                <td>E-Mail&nbsp;:</td>
                <td><?php if ($this->_tpl_vars['user']['email_problems'] > 0): ?><span class="errormsg"><?php echo ((is_array($_tmp=$this->_tpl_vars['user']['email'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</span><?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['user']['email'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?></td>
            </tr>
            <tr>
                <td>Date de création&nbsp;:</td>
                <td><?php echo ((is_array($_tmp=$this->_tpl_vars['user']['date_created'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['opt']['format']['date']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['opt']['format']['date'])); ?>
</td>
            </tr>
            <tr>
                <td>Dernière mise à jour&nbsp;:</td>
                <td><?php echo ((is_array($_tmp=$this->_tpl_vars['user']['last_modified'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['opt']['format']['date']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['opt']['format']['date'])); ?>
</td>
            </tr>
            <tr>
                <td>Utilisateur actif&nbsp;:</td>
                <td><?php if ($this->_tpl_vars['user']['is_active_flag']): ?>Oui<?php else: ?>Non<?php endif; ?>
                        <?php if ($this->_tpl_vars['user']['license_declined']): ?>&nbsp;(Refusé la licence de données)<?php endif; ?></td>
            </tr>
            <tr>
                <td>Code d'activation&nbsp;:</td>
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
                    <td><span class="errormsg">Un nouveau message d'activation a été envoyé.</class></td>
                </tr>
            <?php endif; ?>
            <tr>
                <td>Prénom&nbsp;:</td>
                <td><?php echo ((is_array($_tmp=$this->_tpl_vars['user']['first_name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
            </tr>
            <tr>
                <td>Nom&nbsp;:</td>
                <td><?php echo ((is_array($_tmp=$this->_tpl_vars['user']['last_name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
            </tr>
            <tr>
                <td>Logs&nbsp;:</td>
                <td><?php echo $this->_tpl_vars['user']['logentries']; ?>

                    <?php if ($this->_tpl_vars['user']['deleted_logentries'] > 0): ?>&nbsp;(+ <?php echo $this->_tpl_vars['user']['deleted_logentries']; ?>
 supprimé / archivé)<?php endif; ?>
                </td>
            </tr>
            <tr>
                <td>Total caché&nbsp;:</td>
                <td><?php echo ((is_array($_tmp=$this->_tpl_vars['user']['hidden'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
            </tr>
            <tr>
                <td>Géocaches actives&nbsp;:</td>
                <td><?php echo ((is_array($_tmp=$this->_tpl_vars['user']['hidden_active'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 &nbsp; &ndash; &nbsp; <a href="ownerlogs.php?userid=<?php echo ((is_array($_tmp=$this->_tpl_vars['user']['user_id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">Afficher l'historique du logs</a></td>
            </tr>
            <tr>
                <td>Rapports de cache&nbsp;:</td>
                <td><?php echo ((is_array($_tmp=$this->_tpl_vars['user']['reports'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
            </tr>
            <tr>
                <td>Dernière connexion connue&nbsp;:</td>
                <td><?php if ($this->_tpl_vars['user']['last_known_login']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['user']['last_known_login'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['opt']['format']['date']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['opt']['format']['date'])); ?>
<?php else: ?>inconnu<?php endif; ?></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
            </tr>

            <tr><td class="spacer" colspan="2"></td></tr>

            <?php if ($this->_tpl_vars['licensefunctions'] == true): ?>
                <tr>
                    <td>&nbsp;</td>
                    <td><input type="checkbox" name="chkdisduelicense" value="1" /> Désactiver (et verrouiller toutes les propres géocaches) et supprimer tout le contenu sous licence étrangère</td>
                </tr>
            <?php endif; ?>

            <?php if ($this->_tpl_vars['candisable'] == true): ?>
                <tr>
                    <td>&nbsp;</td>
                    <td><input type="checkbox" name="chkdisable" value="1" /> Désactiver (et verrouiller toutes les géocaches appartenant)</td>
                </tr>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['candelete'] == true): ?>
                <tr>
                    <td>&nbsp;</td>
                    <td><input type="checkbox" name="chkdelete" value="1" /> effacer</td>
                </tr>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['cansetemail'] == true): ?>
                <tr>
                    <td></td>
                    <td><input type="checkbox" name="chkemail" value="1" /> Marquer l'adresse e-mail comme non valide<?php if ($this->_tpl_vars['licensefunctions']): ?>&nbsp;&nbsp;&nbsp;<input type="checkbox" name="chkdl" value="1" /> mail de licence de données n'a pas été livré<?php endif; ?></td>
                </tr>
            <?php endif; ?>

            <?php if ($this->_tpl_vars['licensefunctions'] == true || $this->_tpl_vars['candelete'] == true || $this->_tpl_vars['candisable'] == true || $this->_tpl_vars['cansetemail'] == true): ?>
                <tr>
                    <td>&nbsp;</td>
                    <td><input type="checkbox" name="chkcommit" value="1" /> Sûr&nbsp;?</td>
                </tr>
                <tr><td class="spacer" colspan="2"></td></tr>

                <tr>
                    <td>&nbsp;</td>
                    <td><input type="submit" name="execute" value="Soumettre" class="formbutton" onclick="submitbutton('execute')" /></td>
                </tr>
            <?php endif; ?>
        </table>
    </form>
<?php endif; ?>
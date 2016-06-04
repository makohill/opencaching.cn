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
            Liste des utilisateurs auxquels vous avez offert <?php echo ((is_array($_tmp=$this->_tpl_vars['cachename'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 pour adoption
        </div>

        <table class="table">
            <tr><td class="spacer"></td></tr>
            <tr>
                <th align="left">Utilisateur</th>
                <th align="left">Date</th>
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
">Retirer l'offre d'adoption</a><br />
                    </td>
                </tr>
            <?php endforeach; else: ?>
                <tr><td class="spacer" colspan="3"></td></tr>
                <tr>
                    <td colspan="3">
                        Vous n' avez pas invité tous les utilisateurs à adopter cette cache.
                    </td>
                </tr>
            <?php endif; unset($_from); ?>

            <tr><td colspan="3"></td></tr>
            <tr>
                <td class="header" colspan="3">
                    Offre <b><?php echo ((is_array($_tmp=$this->_tpl_vars['cachename'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</b> pour adoption
                </td>
            </tr>
            <tr>
                <td colspan="3">
                     <p>Si vous trouvez un utilisateur qui veut adopter votre géocache, remplissez le nom d'utilisateur. L'utilisateur verra alors ce géocache sous Mon profil &gt; Adoptions. Pour terminer, l'utilisateur doit accepter nos conditions d'utilisation et commettre l'adoption.</p>

                     <p>Vous pouvez offrir ce géocache à plus qu'un utilisateur. Le premier utilisateur commettant l'adoption deviendra le nouveau propriétaire de ce géocache. Avec l'adoption, vous allez donner à l'utilisateur un droit illimité d'utiliser, de modifier, et de publier le contenu géocache.</p>
                </td>
            </tr>
            <tr><td colspan="3">&nbsp;</td></tr>
            <tr>
                <td width="22%">Nom d'utilisateur&nbsp;:</td>
                <td colspan="2"><input type="text" name="username" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['adoptusername'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="40" /></td>
            </tr>
            <?php if ($this->_tpl_vars['error'] == 'userunknown'): ?>
                <tr><td>&nbsp;</td><td colspan="2"><span class="errormsg">Nom d'utilisateur inconnu</span></td></tr>
            <?php elseif ($this->_tpl_vars['error'] == 'userdisabled'): ?>
                <tr><td>&nbsp;</td><td colspan="2"><span class="errormsg">Ce compte d'utilisateur est désactivé.</span></td></tr>
            <?php elseif ($this->_tpl_vars['error'] == 'self'): ?>
                <tr><td>&nbsp;</td><td colspan="2"><span class="errormsg">Vous ne pouvez pas adopter votre propre cache&nbsp;!</span></td></tr>
            <?php endif; ?>
            <tr><td class="spacer" colspan="3"></td></tr>
            <tr>
                <td colspan="3">
                    <input type="checkbox" name="tou" value="1" />
                    <label for="tou">
                        Oui, j'ai lu et compris ce qui est précède et je suis d'accord.
                    </label>
                </td>
            </tr>
            <?php if ($this->_tpl_vars['error'] == 'tou'): ?>
                <tr><td colspan="3"><span class="errormsg">Désolé, il faut lire et accepter le dessus pour continuer&nbsp;!</span></td></tr>
            <?php endif; ?>
            <tr><td colspan="3">&nbsp;</td></tr>
            <tr>
                <td>&nbsp;</td>
                <td colspan="2">
                    <input type="submit" value="Soumettre" class="formbutton" onclick="submitbutton('submit')" />
                </td>
            </tr>
        </table>
    </form>

<?php elseif ($this->_tpl_vars['action'] == 'listbyuser'): ?>

    <div class="content2-pagetitle">
        <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/profile/32x32-adopt.png" style="margin-right: 10px;" width="32" height="32" alt="" />
        Des géocaches qui le propriétaire vous propose pour adoption
    </div>

    <table class="table" width="98%">
        <tr><td class="spacer"></td></tr>
        <tr>
            <th>Nom</th>
            <th>Propriétaire</th>
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
">Adopter maintenant</a>
                    &nbsp;
                    <a href="adoptcache.php?action=cancel&cacheid=<?php echo $this->_tpl_vars['adoptItem']['id']; ?>
&userid=<?php echo $this->_tpl_vars['login']['userid']; ?>
">Rejeter l'adoption</a><br />
                </td>
            </tr>
        <?php endforeach; else: ?>
            <tr>
                <td colspan="3">
                    <br />
                    Il n'y a pas de caches qui peuvent être adoptées par vous en ce moment.
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
/images/profile/22x22-email.png" style="margin-right: 10px;" width="22" height="22" alt="" />Engager l'adoption de <?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</div>

        <p style="line-height: 1.6em;">
            Merci pour l'adoption de <strong><?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</strong>.<br />
            <strong><?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</strong> vous offert cette géocache pour adoption à <?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['date_created'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['opt']['format']['date']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['opt']['format']['date'])); ?>
.
        </p>

        <p style="line-height: 1.6em;">
            Pour compléter l'adoption, vous devez soumettre ce formulaire.<br />Avec soumettant ce formulaire, vous êtes le propriétaire responsable de ce géocache.
        </p>

        <p style="line-height: 1.6em;">
            <br />
            <input type="checkbox" name="tou" value="1" />
            <label for="tou">Oui, je l'ai lu et je respecterai les Opencaching.de <a href="articles.php?page=impressum#tos">termes d'utilisation</a>.</label>
        </p>

        <?php if ($this->_tpl_vars['error'] == 'tou'): ?>
            <p style="line-height: 1.6em; color: red; font-weight: bold;">
                Désolé, il faut lire et accepter les conditions d'utilisation pour continuer&nbsp;!
            </p>
        <?php endif; ?>
        <p style="line-height: 1.6em;"><input type="submit" value="Soumettre" class="formbutton" onclick="submitbutton('submit')" /></p>
    </form>
<?php endif; ?>
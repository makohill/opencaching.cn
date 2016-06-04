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
            Benutzer, denen du <?php echo ((is_array($_tmp=$this->_tpl_vars['cachename'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 zur Adoption angeboten hast
        </div>

        <table class="table">
            <tr><td class="spacer"></td></tr>
            <tr>
                <th align="left">Benutzer</th>
                <th align="left">Datum</th>
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
">Adoptionsangebot zurückziehen</a><br />
                    </td>
                </tr>
            <?php endforeach; else: ?>
                <tr><td class="spacer" colspan="3"></td></tr>
                <tr>
                    <td colspan="3">
                        Du hast diesen Geocache keinem Benutzer zur Adoption angeboten.
                    </td>
                </tr>
            <?php endif; unset($_from); ?>

            <tr><td colspan="3"></td></tr>
            <tr>
                <td class="header" colspan="3">
                    <b><?php echo ((is_array($_tmp=$this->_tpl_vars['cachename'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</b> zur Adoption anbieten
                </td>
            </tr>
            <tr>
                <td colspan="3">
                     <p>Wenn du einen Benutzer gefunden hast, der deinen Geocache adoptieren möchte, trage bitte unten den Benutzername ein und bestätige den Vorgang. Dem Benutzer wird diesen Geocache dann unter Mein Profil &gt; Adoptionen angezeigt. Um die Adoption abzuschließen, muss der Benutzer die Nutzungsbedingungen von Opencaching.de akzeptieren und die Adoption bestätigen.</p>

                     <p>Du kannst einen Geocache mehreren Benutzern zur Adoption anbieten. Der erste Benutzer, der die Adoption bestätigt, wird der neue Besitzer des Geocaches. Mit der Adoption gibst du dem Benutzer ein unbeschränktes Recht, urheberrechtlich geschützte Inhalte dieses Geocaches zu nutzen, zu modifizieren und weiterzugeben.</p>
                </td>
            </tr>
            <tr><td colspan="3">&nbsp;</td></tr>
            <tr>
                <td width="22%">Benutzername:</td>
                <td colspan="2"><input type="text" name="username" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['adoptusername'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="40" /></td>
            </tr>
            <?php if ($this->_tpl_vars['error'] == 'userunknown'): ?>
                <tr><td>&nbsp;</td><td colspan="2"><span class="errormsg">Benutzername unbekannt</span></td></tr>
            <?php elseif ($this->_tpl_vars['error'] == 'userdisabled'): ?>
                <tr><td>&nbsp;</td><td colspan="2"><span class="errormsg">Dieser Benutzer ist deaktiviert.</span></td></tr>
            <?php elseif ($this->_tpl_vars['error'] == 'self'): ?>
                <tr><td>&nbsp;</td><td colspan="2"><span class="errormsg">Du kannst nicht deinen eigenen Geocache adoptieren!</span></td></tr>
            <?php endif; ?>
            <tr><td class="spacer" colspan="3"></td></tr>
            <tr>
                <td colspan="3">
                    <input type="checkbox" name="tou" value="1" />
                    <label for="tou">
                        Ja, ich habe obige Bedingungen gelesen, verstanden und bin damit einverstanden.
                    </label>
                </td>
            </tr>
            <?php if ($this->_tpl_vars['error'] == 'tou'): ?>
                <tr><td colspan="3"><span class="errormsg">Entschuldigung, du musst dies lesen und akzeptieren, um fortzufahren!</span></td></tr>
            <?php endif; ?>
            <tr><td colspan="3">&nbsp;</td></tr>
            <tr>
                <td>&nbsp;</td>
                <td colspan="2">
                    <input type="submit" value="Bestätigen" class="formbutton" onclick="submitbutton('submit')" />
                </td>
            </tr>
        </table>
    </form>

<?php elseif ($this->_tpl_vars['action'] == 'listbyuser'): ?>

    <div class="content2-pagetitle">
        <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/profile/32x32-adopt.png" style="margin-right: 10px;" width="32" height="32" alt="" />
        Geocaches, die dir zur Adoption angeboten werden
    </div>

    <table class="table" width="98%">
        <tr><td class="spacer"></td></tr>
        <tr>
            <th>Name</th>
            <th>Besitzer</th>
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
">Adoptieren</a>
                    &nbsp;
                    <a href="adoptcache.php?action=cancel&cacheid=<?php echo $this->_tpl_vars['adoptItem']['id']; ?>
&userid=<?php echo $this->_tpl_vars['login']['userid']; ?>
">Adoption ablehnen</a><br />
                </td>
            </tr>
        <?php endforeach; else: ?>
            <tr>
                <td colspan="3">
                    <br />
                    Es werden dir derzeit keine Geocaches zur Adoption angeboten.
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
/images/profile/22x22-email.png" style="margin-right: 10px;" width="22" height="22" alt="" />Die Adoption von <?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 bestätigen</div>

        <p style="line-height: 1.6em;">
            Vielen Dank für die Adoption von <strong><?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</strong>.<br />
            <strong><?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</strong> hat dir diesen Geocache am <?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['date_created'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['opt']['format']['date']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['opt']['format']['date'])); ?>
 zur Adoption angeboten.
        </p>

        <p style="line-height: 1.6em;">
            Um die Adoption abzuschließen, musst du diese Seite bestätigen.<br />
Nachdem du die Seite bestätigt hast, bist du für diesen Geocache als Besitzer verantwortlich.
        </p>

        <p style="line-height: 1.6em;">
            <br />
            <input type="checkbox" name="tou" value="1" />
            <label for="tou">Ja, ich habe die <a href="articles.php?page=impressum#tos">Nutzungsbedingungen</a> von Opencaching.de gelesen und werde sie befolgen.</label>
        </p>

        <?php if ($this->_tpl_vars['error'] == 'tou'): ?>
            <p style="line-height: 1.6em; color: red; font-weight: bold;">
                Entschuldigung, du musst die Nutzungsbedingungen lesen und akzeptieren, um fortzufahren!
            </p>
        <?php endif; ?>
        <p style="line-height: 1.6em;"><input type="submit" value="Bestätigen" class="formbutton" onclick="submitbutton('submit')" /></p>
    </form>
<?php endif; ?>
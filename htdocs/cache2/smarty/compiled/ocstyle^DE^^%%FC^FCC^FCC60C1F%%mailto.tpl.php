<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:39
         compiled from mailto.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'mailto.tpl', 8, false),array('modifier', 'nl2br', 'mailto.tpl', 27, false),)), $this); ?>
<?php ob_start(); ?>
    <a href="viewprofile.php?userid=<?php echo $this->_tpl_vars['userid']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a>
<?php $this->_smarty_vars['capture']['userlink'] = ob_get_contents(); ob_end_clean(); ?>
<?php if ($this->_tpl_vars['success'] == true): ?>
    <div class="content2-pagetitle">
        <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/22x22-email.png" style="margin-right: 10px;" width="32" height="32" alt="" />
        E-Mail an <?php echo $this->_smarty_vars['capture']['userlink']; ?>
 versendet
    </div>

    <table class="table">
        <tr>
            <td colspan="2">
                Betreff: <?php echo ((is_array($_tmp=$this->_tpl_vars['subject'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

            </td>
        </tr>
        <tr><td colspan="2">&nbsp;</td></tr>

        <tr><td colspan="2">Inhalt:</td></tr>
        <tr>
            <td colspan="2">
                <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['text'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

            </td>
        </tr>
    </table>
<?php else: ?>
    <form action="mailto.php" method="post">
        <input type="hidden" name="userid" value="<?php echo $this->_tpl_vars['userid']; ?>
"/>
        <div class="content2-pagetitle">
            <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/22x22-email.png" style="margin-right: 10px;" width="32" height="32" alt="" />
            E-Mail an <?php echo $this->_smarty_vars['capture']['userlink']; ?>
 schicken
        </div>

        <table class="table">
            <?php if ($this->_tpl_vars['email_problems'] > 0): ?>
            <tr><!-- Tag for external page processing: email problems -->
                <td colspan="2" class="redtext">
                    <p>Eine oder mehrere Emails an diesen Benutzer konnten nicht zugestellt werden. Es könnte ratsam sein, Hinweise zu seinen Caches zusätzlich zu loggen und/oder weitere Kontaktmöglichkeiten wie z.B. Forenaccounts oder andere Geocaching-Plattformen zu nutzen.</p>
                </td>
            </tr>
            <?php endif; ?>

            <tr>
                <td colspan="2">Betreff:&nbsp; <input type="text" name="subject" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['subject'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" class="input500" /></td>
            </tr>
            <tr><td class="spacer" colspan="2"></td></tr>

            <?php if ($this->_tpl_vars['errorSubjectEmpty'] == true): ?>
                <tr><td colspan="2" class="errormsg">Du musst einen Betreff angeben!</td></tr>
            <?php endif; ?>

            <tr>
                <td colspan="2">Inhalt:</td>
            </tr>
            <tr>
                <td colspan="2">
                    <textarea class="logs" name="text" cols="68" rows="15"><?php echo ((is_array($_tmp=$this->_tpl_vars['text'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea>
                </td>
            </tr>
            <tr><td class="spacer" colspan="2"></td></tr>
            <?php if ($this->_tpl_vars['errorBodyEmpty'] == true): ?>
                <tr><td colspan="2" class="errormsg">Du musst einen Inhalt eingeben!</td></tr>
            <?php endif; ?>

            <tr>
                <td colspan="2">
                    <input type="checkbox" name="emailaddress" value="1" id="l_send_emailaddress" class="checkbox" <?php if ($this->_tpl_vars['emailaddress'] == true): ?>checked="checked" <?php endif; ?>/>
                    <label for="l_send_emailaddress">Meine E-Mail-Adresse soll mit dieser E-Mail mitgesendet werden</label>
                </td>
            </tr>
            <tr>
                <td class="help" colspan="2">
                    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/hint.gif" border="0" width="15" height="11" align="middle" />
                    Damit kennt der Empfänger deine E-Mail-Adresse und hat die Möglichkeit, direkt auf die E-Mail zu antworten. Diese Option kannst du in deinem <a href="myprofile.php">Benutzerprofil</a> standardmäßig einschalten.<br />
                    <div style="padding: 10px 0 10px 0">
                        <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/hint.gif" border="0" width="15" height="11" align="middle" />
                        <span class="smalltext">Um Missbrauch zu verhindern, müssen wir zu eurem und auch unserem Schutz folgende Maßnahmen treffen:</span>
                        <ul style="margin:0; line-height:1.1em">
                            <li class="smalltext">Es dürfen nur Emails zum Thema versendet werden; jede Form nicht notwendiger Belästigung &ndash; z.B. Spam &ndash; ist nicht erlaubt.</li>
                            <li class="smalltext">Es werden alle relevanten Informationen protokolliert (Datum/Uhrzeit, Absender/Empfänger und IP-Adresse).</li>
                            <li class="smalltext">Alle Daten werden selbstverständlich vertraulich behandelt und keinen Dritten zugänglich gemacht!</li>
                        </ul>
                    </div>
                </td>
            </tr>
            <tr><td class="spacer" colspan="2"></td></tr>

            <?php if ($this->_tpl_vars['errorUnkown'] == true): ?>
                <tr><td colspan="2" class="errormsg">Die E-Mail konnte wegen eines unbekannten Fehlers nicht versendet werden.</td></tr>
            <?php endif; ?>

            <tr>
                <td class="header-small" colspan="2">
                    <!-- <input type="reset" name="cancel" value="Zurücksetzen" class="formbutton" onclick="flashbutton('cancel')" />&nbsp;&nbsp; -->
                    <input type="submit" name="ok" value="Senden" class="formbutton" onclick="submitbutton('ok')" />
                </td>
            </tr>
            <tr><td class="spacer" colspan="2"></td></tr>
        </table>
    </form>
<?php endif; ?>
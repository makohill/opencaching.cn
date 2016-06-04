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
            Lista di utenti a cui hai offerto <?php echo ((is_array($_tmp=$this->_tpl_vars['cachename'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 in adozione
        </div>

        <table class="table">
            <tr><td class="spacer"></td></tr>
            <tr>
                <th align="left">Utente</th>
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
">Ritira offerta adozione</a><br />
                    </td>
                </tr>
            <?php endforeach; else: ?>
                <tr><td class="spacer" colspan="3"></td></tr>
                <tr>
                    <td colspan="3">
                        Non hai invitato nessun utente ad adottare questa cache.
                    </td>
                </tr>
            <?php endif; unset($_from); ?>

            <tr><td colspan="3"></td></tr>
            <tr>
                <td class="header" colspan="3">
                    Offri <b><?php echo ((is_array($_tmp=$this->_tpl_vars['cachename'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</b> in adozione
                </td>
            </tr>
            <tr>
                <td colspan="3">
                     <p>Quando hai trovato un utente che voglia adottare la tua geocache, inserisci il nome utente e invia. L'utente vedrà questa geocache in "il mio Profilo &gt; Adozioni". Per completare l'adozioni, l'utente deve accettare le condizioni d'uso e confermare l'adozione.</p>

                     <p>Puoi offrire questa geocache a più di un utente. Il primo utente che conferma l'adozione diventa il nuovo proprietario di questa cache. Con l'adozione, concedi all'utente diritti illimitati di utilizzo, modifica, pubblicazione e licenza sulla geocache.</p>
                </td>
            </tr>
            <tr><td colspan="3">&nbsp;</td></tr>
            <tr>
                <td width="22%">Nome utente:</td>
                <td colspan="2"><input type="text" name="username" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['adoptusername'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="40" /></td>
            </tr>
            <?php if ($this->_tpl_vars['error'] == 'userunknown'): ?>
                <tr><td>&nbsp;</td><td colspan="2"><span class="errormsg">Nome utente sconosciuto</span></td></tr>
            <?php elseif ($this->_tpl_vars['error'] == 'userdisabled'): ?>
                <tr><td>&nbsp;</td><td colspan="2"><span class="errormsg">Quest account utente è disabilitato.</span></td></tr>
            <?php elseif ($this->_tpl_vars['error'] == 'self'): ?>
                <tr><td>&nbsp;</td><td colspan="2"><span class="errormsg">Non puoi adottare le tue cache!</span></td></tr>
            <?php endif; ?>
            <tr><td class="spacer" colspan="3"></td></tr>
            <tr>
                <td colspan="3">
                    <input type="checkbox" name="tou" value="1" />
                    <label for="tou">
                        Si, ho letto e compreso quanto sopra e lo approvo.
                    </label>
                </td>
            </tr>
            <?php if ($this->_tpl_vars['error'] == 'tou'): ?>
                <tr><td colspan="3"><span class="errormsg">Spiacente, devi leggere e accettare quanto sopra per continuare!</span></td></tr>
            <?php endif; ?>
            <tr><td colspan="3">&nbsp;</td></tr>
            <tr>
                <td>&nbsp;</td>
                <td colspan="2">
                    <input type="submit" value="Invia" class="formbutton" onclick="submitbutton('submit')" />
                </td>
            </tr>
        </table>
    </form>

<?php elseif ($this->_tpl_vars['action'] == 'listbyuser'): ?>

    <div class="content2-pagetitle">
        <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/profile/32x32-adopt.png" style="margin-right: 10px;" width="32" height="32" alt="" />
        Geocache che ti sono state offerte in adozione
    </div>

    <table class="table" width="98%">
        <tr><td class="spacer"></td></tr>
        <tr>
            <th>Nome</th>
            <th>Proprietario</th>
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
">Adotta adesso</a>
                    &nbsp;
                    <a href="adoptcache.php?action=cancel&cacheid=<?php echo $this->_tpl_vars['adoptItem']['id']; ?>
&userid=<?php echo $this->_tpl_vars['login']['userid']; ?>
">Rifiuta l'adozione</a><br />
                </td>
            </tr>
        <?php endforeach; else: ?>
            <tr>
                <td colspan="3">
                    <br />
                    Non ci sono al momento attuale cache che possano essere adottate.
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
/images/profile/22x22-email.png" style="margin-right: 10px;" width="22" height="22" alt="" />Conferma l'adozione di <?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</div>

        <p style="line-height: 1.6em;">
            Grazie per avere adottato <strong><?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</strong>.<br />
            il <?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['date_created'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['opt']['format']['date']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['opt']['format']['date'])); ?>
, <strong><?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</strong> ti ha offerto questa geocache in adozione.
        </p>

        <p style="line-height: 1.6em;">
            Per completare l'adozione, devi inviare questa form.<br /> Inviando questa form, diventi il proprietario responsabile per questa geocache.
        </p>

        <p style="line-height: 1.6em;">
            <br />
            <input type="checkbox" name="tou" value="1" />
            <label for="tou">Si, ho letto e approvato le <a href="articles.php?page=impressum#tos">condizioni d'uso</a> di Opencaching.de.</label>
        </p>

        <?php if ($this->_tpl_vars['error'] == 'tou'): ?>
            <p style="line-height: 1.6em; color: red; font-weight: bold;">
                Spiacente, devi leggere e accettare le condizioni d'uso per continuare!
            </p>
        <?php endif; ?>
        <p style="line-height: 1.6em;"><input type="submit" value="Invia" class="formbutton" onclick="submitbutton('submit')" /></p>
    </form>
<?php endif; ?>
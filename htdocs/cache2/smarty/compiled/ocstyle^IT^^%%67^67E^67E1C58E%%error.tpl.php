<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:38
         compiled from error.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'error.tpl', 16, false),array('modifier', 'nl2br', 'error.tpl', 64, false),)), $this); ?>
<div class="content2-pagetitle">
    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/32x32-gears.png" style="margin-right: 10px;" width="32" height="32" alt="" />
    Si è verificato un errore elaborando la pagina.
</div>

<div class="content-txtbox-noshade">
    <p style="line-height: 1.6em;">Si è verificato un errore elaborando la pagina. Se sei arrivato a questa pagina da un collegamento sul nostro sito e questo errore si ripete per un certo tempo, per favore contattaci via email.</p>
    <p style="line-height: 1.6em;"><strong>Si è verificato l'errore seguente:</strong></p>
    <p style="line-height: 1.6em;">
        Pagina: <?php echo ((is_array($_tmp=$this->_tpl_vars['page'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<br/>
        Messaggio di errore<span></span>:

        <?php if ($this->_tpl_vars['id'] == ERROR_UNKNOWN): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Si è verificato un errore imprevisto.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_TEMPLATE_NOT_FOUND): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Il Template non esiste.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_COMPILATION_FAILED): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Fallimento nella compilazione del template. Potrebbe trattarsi di un problema temporaneo. Per favore riprova tra qualche minuto.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_NO_ACCESS): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Spiacente, non hai i diritti per vedere questa pagina.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_CACHE_NOT_EXISTS): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Spiacente, la cache richiesta non esiste.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_CACHELOG_NOT_EXISTS): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Spiacente, il log richiesto non esiste.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_INVALID_OPERATION): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Spiacente, l'operazione richiesta non può essere eseguita.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_LOGIN_REQUIRED): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Spiacente, l'operazione richiesta non può essere eseguita perché non sei connesso come utente registrato:&nbsp; <a href="login.php">Accesso
        <?php elseif ($this->_tpl_vars['id'] == ERROR_USER_NOT_EXISTS): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Spiacente, l'utente richiesto non esiste.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_USER_NOT_ACTIVE): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Spiacente, l'utente richiesto è disattivato.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_USER_NO_EMAIL): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Spiacente, non esiste un indirizzo email per questo utente.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_CACHE_NOT_PUBLISHED): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Spiacente, questa geocache non è pubblicata.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_CACHE_LOCKED): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Spiacente, la geocache è chiusa e non può essere vista.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_MAIL_TEMPLATE_NOT_FOUND): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Il Template per la email non esiste.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_NO_COOKIES): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Il tuo browser ha rifiutato il nostro cookie.<br/> Puoi trovare ulteriori informazioni su questo argomento in <a href="<?php echo $this->_tpl_vars['opt']['cms']['login']; ?>
">Opencaching-help</a>.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_ALREADY_LOGGEDIN): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Se già autenticato.<br /> Per favore <a href="login.php?action=logout">esci</a> per autenticarti di nuovo.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_SEARCHPLUGIN_WAYPOINT_FORMAT): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Formato sconosciuto per il waypoint. I seguenti sono formati noti: OCxxxx, NCxxxx e GCxxxx dove xxx può essere un qualsiasi numero di lettere o cifre
        <?php elseif ($this->_tpl_vars['id'] == ERROR_SEARCHPLUGIN_WAYPOINT_MANY): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Esiste più di una cache con il waypoint &quot;<?php echo ((is_array($_tmp=$this->_tpl_vars['p1'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
&quot
        <?php elseif ($this->_tpl_vars['id'] == ERROR_SEARCHPLUGIN_WAYPOINT_NOTFOUND): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Il waypoint &quot;<?php echo ((is_array($_tmp=$this->_tpl_vars['p1'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
&quot; non è stato trovato.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_DB_COULD_NOT_RECONNECT): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Impossibile riconnettersi al database
        <?php elseif ($this->_tpl_vars['id'] == ERROR_DB_NO_ROOT): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Impossibile cambiare a DB root
        <?php elseif ($this->_tpl_vars['id'] == ERROR_PICTURE_NOT_EXISTS): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Spiacente, l'immagine richiesta non esiste.
        <?php else: ?>
            <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

        <?php endif; ?>
    </p>
</div>
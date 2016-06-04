<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:38
         compiled from error.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'error.tpl', 16, false),array('modifier', 'nl2br', 'error.tpl', 65, false),)), $this); ?>
<div class="content2-pagetitle">
    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/32x32-gears.png" style="margin-right: 10px;" width="32" height="32" alt="" />
    Beim Aufruf der Seite ist ein Fehler aufgetreten.
</div>

<div class="content-txtbox-noshade">
    <p style="line-height: 1.6em;">Bei dem Versuch die Seite zu erstellen ist ein Fehler aufgetreten. Sollten Sie durch einen Link auf unserer Seite hierher gekommen sein und dieses Problem längere Zeit bestehen, weisen Sie uns bitte per E-Mail darauf hin.</p>
    <p style="line-height: 1.6em;"><strong>Der folgende Fehler ist aufgetreten:</strong></p>
    <p style="line-height: 1.6em;">
        Seite: <?php echo ((is_array($_tmp=$this->_tpl_vars['page'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<br/>
        Fehlermeldung<span></span>:

        <?php if ($this->_tpl_vars['id'] == ERROR_UNKNOWN): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Ein unbekannter Fehler ist aufgetreten.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_TEMPLATE_NOT_FOUND): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Das Template existiert nicht.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_COMPILATION_FAILED): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Die Erstellung der Seite ist fehlgeschlagen. Dieser Fehler sollte nur kurzzeitig auftreten, bitte rufe die Seite in wenigen Minuten nochmals auf.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_NO_ACCESS): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Entschuldigung, aber diese Seite darfst du nicht sehen.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_CACHE_NOT_EXISTS): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Entschuldigung, aber der angeforderte Cache existiert nicht.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_CACHELOG_NOT_EXISTS): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Der angegebene Logeintrag existiert nicht.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_INVALID_OPERATION): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Entschuldigung, aber der angeforderte Vorgang konnte nicht ausgeführt werden.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_LOGIN_REQUIRED): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Melde dich an, um fortzufahren:&nbsp; <a href="login.php">Anmelden
        <?php elseif ($this->_tpl_vars['id'] == ERROR_USER_NOT_EXISTS): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Entschuldigung, aber der angeforderte Benutzer existiert nicht.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_USER_NOT_ACTIVE): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Entschuldigung, aber der Benutzer ist deaktiviert.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_USER_NO_EMAIL): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Entschuldigung, für den angegebenen Benutzer ist keine E-Mail-Adresse hinterlegt.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_CACHE_NOT_PUBLISHED): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Entschuldigung, der Geocache ist noch nicht veröffentlicht.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_CACHE_LOCKED): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Entschuldigung, der Geocache wurde gesperrt und kann nicht angezeigt werden.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_MAIL_TEMPLATE_NOT_FOUND): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Das E-Mail Template existiert nicht.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_NO_COOKIES): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Dein Browser hat das Cookie von <?php echo $this->_tpl_vars['opt']['page']['sitename']; ?>
 nicht gespeichert.<br /> Mehr Informationen findest du in der <a href="<?php echo $this->_tpl_vars['opt']['cms']['login']; ?>
">Opencaching-Hilfe</a>.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_ALREADY_LOGGEDIN): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Du bist bereits eingeloggt.<br />
Du musst duch erst <a href="login.php?action=logout">abmelden</a>, um dich erneut anzumelden.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_SEARCHPLUGIN_WAYPOINT_FORMAT): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Unbekanntes Wegpunkt-Format. Zulässig sind die Formate OCxxxx, NCxxxx und GCxxxx, wobei xxxx jeweils für beliebige Zahlen und Buchstaben steht.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_SEARCHPLUGIN_WAYPOINT_MANY): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Mehrere Caches mit dem Wegpunkt &quot;<?php echo ((is_array($_tmp=$this->_tpl_vars['p1'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
&quot; gefunden.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_SEARCHPLUGIN_WAYPOINT_NOTFOUND): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Kein Cache mit dem Wegpunkt &quot;<?php echo ((is_array($_tmp=$this->_tpl_vars['p1'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
&quot; gefunden.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_DB_COULD_NOT_RECONNECT): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Die Verbindung mit der Datenbank konnte nicht wiederhergestellt werden.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_DB_NO_ROOT): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Die Anmeldung an der Datenbank als root ist fehlgeschlagen.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_PICTURE_NOT_EXISTS): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Das angegebene Bild existiert nicht.
        <?php else: ?>
            <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

        <?php endif; ?>
    </p>
</div>
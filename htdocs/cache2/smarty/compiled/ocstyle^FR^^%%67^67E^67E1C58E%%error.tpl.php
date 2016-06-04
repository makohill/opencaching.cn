<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:38
         compiled from error.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'error.tpl', 16, false),array('modifier', 'nl2br', 'error.tpl', 64, false),)), $this); ?>
<div class="content2-pagetitle">
    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/32x32-gears.png" style="margin-right: 10px;" width="32" height="32" alt="" />
    Une erreur est survenue lors du traitement de la page.
</div>

<div class="content-txtbox-noshade">
    <p style="line-height: 1.6em;">Une erreur est survenue lors du traitement de la page. Si vous avez appelé cette page d'un lien hypertexte sur notre site et cette erreur persiste un certain temps, s'il vous plaît nous contacter par e-mail.</p>
    <p style="line-height: 1.6em;"><strong>L'Erreur suivante est survenue&nbsp;:</strong></p>
    <p style="line-height: 1.6em;">
        Page&nbsp;: <?php echo ((is_array($_tmp=$this->_tpl_vars['page'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<br/>
        Indication d'erreur&nbsp;:

        <?php if ($this->_tpl_vars['id'] == ERROR_UNKNOWN): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Une erreur inconnue est survenue.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_TEMPLATE_NOT_FOUND): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Le modèle n'existe pas.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_COMPILATION_FAILED): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) La compilation de ce modèle ratée. Cela devrait être un échec temporaire. S'il vous plaît essayer de nouveau dans quelques minutes.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_NO_ACCESS): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Désolé, vous n'êtes pas autorisé à accéder à cette page.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_CACHE_NOT_EXISTS): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Désolé, le cache demandé n'existe pas.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_CACHELOG_NOT_EXISTS): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Désolé, le cachelog demandé n'existe pas.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_INVALID_OPERATION): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Désolé, l'opération demandée ne peut pas être effectuée.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_LOGIN_REQUIRED): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) S'il vous plaît connectez-vous à continuer&nbsp;:&nbsp; <a href="login.php">Connexion
        <?php elseif ($this->_tpl_vars['id'] == ERROR_USER_NOT_EXISTS): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Désolé, l'utilisateur demandé n'existe pas.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_USER_NOT_ACTIVE): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Désolé, le compte d'utilisateur demandé est désactivé.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_USER_NO_EMAIL): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Désolé, il n'y a pas d'adresse e-mail pour cet utilisateur.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_CACHE_NOT_PUBLISHED): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Désolé, la géocache n'est pas publiée.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_CACHE_LOCKED): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Désolé, la géocache est verrouillé et ne peut pas être consulté.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_MAIL_TEMPLATE_NOT_FOUND): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Le modèle mail n'est pas existe.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_NO_COOKIES): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Votre navigateur a rejeté notre cookie.<br />Vous pouvez trouver plus d'informations sur ce sujet dans le <a href="<?php echo $this->_tpl_vars['opt']['cms']['login']; ?>
">Opencaching-help</a>.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_ALREADY_LOGGEDIN): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Vous êtes déjà connecté.<br /> S'il vous plaît <a href="login.php?action=logout">déconnecter</a> pour se connecter à nouveau.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_SEARCHPLUGIN_WAYPOINT_FORMAT): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Un format inconnu du waypoint. Les formats suivants sont connus OCxxxx, NCxxxx et GCxxxx, tandis que xxxx peut être un nombre quelconque ou char.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_SEARCHPLUGIN_WAYPOINT_MANY): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Il existe plus d'une cache avec le waypoint &quot;<?php echo ((is_array($_tmp=$this->_tpl_vars['p1'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
&quot;.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_SEARCHPLUGIN_WAYPOINT_NOTFOUND): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Le waypoint &quot;<?php echo ((is_array($_tmp=$this->_tpl_vars['p1'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
&quot; n'est pas trouvé.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_DB_COULD_NOT_RECONNECT): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) La base de données n'a pas pu être connecté.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_DB_NO_ROOT): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Passage à db-root échoué.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_PICTURE_NOT_EXISTS): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Désolé, l'image demandée n'existe pas.
        <?php else: ?>
            <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

        <?php endif; ?>
    </p>
</div>
<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:38
         compiled from error.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'error.tpl', 16, false),array('modifier', 'nl2br', 'error.tpl', 65, false),)), $this); ?>
<div class="content2-pagetitle">
    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/32x32-gears.png" style="margin-right: 10px;" width="32" height="32" alt="" />
    Er is een fout opgetreden bij het laden van de pagina.
</div>

<div class="content-txtbox-noshade">
    <p style="line-height: 1.6em;">Er is een fout opgetreden bij het laden van de pagina. Indien deze pagina via een link bereikt is en de fout blijft zich voordoen gelieve ons een e-mail te sturen.</p>
    <p style="line-height: 1.6em;"><strong>De volgende fout is opgetreden:</strong></p>
    <p style="line-height: 1.6em;">
        Page: <?php echo ((is_array($_tmp=$this->_tpl_vars['page'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<br/>
        Foutmelding<span></span>:

        <?php if ($this->_tpl_vars['id'] == ERROR_UNKNOWN): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Een onbekende fout is opgetreden.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_TEMPLATE_NOT_FOUND): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) De Template bestaat niet.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_COMPILATION_FAILED): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) The compilation of the template failed. This should be a temporary failure. Please try again in some minutes.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_NO_ACCESS): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Sorry, Je bent niet gemachtigd om deze pagina te bekijken.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_CACHE_NOT_EXISTS): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Sorry, de gevraagde cache bestaat niet.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_CACHELOG_NOT_EXISTS): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) De aangegeven log bestaat niet.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_INVALID_OPERATION): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Sorry, de gevraagde handeling kan niet uitgevoerd worden.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_LOGIN_REQUIRED): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Sorry, de gevraagde handeling kan niet uitgevoerd worden omdat er niet is ingelogt:&nbsp; <a href="login.php">Inloggen
        <?php elseif ($this->_tpl_vars['id'] == ERROR_USER_NOT_EXISTS): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Sorry, de gevraagde gebruiker bestaat niet.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_USER_NOT_ACTIVE): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Sorry, maar de gebruiker is gedeactiveerd.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_USER_NO_EMAIL): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Sorry, er is geen E-Mail adres voor de gebruiker gevraagd.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_CACHE_NOT_PUBLISHED): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Sorry, deze cache is niet gepubliceerd.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_CACHE_LOCKED): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Sorry, da cache is geblokkerd en kan niet bekeken worden.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_MAIL_TEMPLATE_NOT_FOUND): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) E-mail adres bestaat niet.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_NO_COOKIES): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Your browser has rejected our cookie.<br /> For more information on this topic, see <a href="<?php echo $this->_tpl_vars['opt']['cms']['login']; ?>
">Opencaching help</a>.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_ALREADY_LOGGEDIN): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Je bent al inglogt.<br />
Je moet eerst <a href="login.php?action=logout">uitloggen</a>, om je opnieuw in te loggen.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_SEARCHPLUGIN_WAYPOINT_FORMAT): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Onbekend waypointformaat. Toegestane formaten zijn: OCxxxx, NCxxxx en GC, waarbij de xxxx elk cijfer en letter kan zijn.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_SEARCHPLUGIN_WAYPOINT_MANY): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Meerdere caches met waypoint &quot;<?php echo ((is_array($_tmp=$this->_tpl_vars['p1'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
&quot; gevonden.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_SEARCHPLUGIN_WAYPOINT_NOTFOUND): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Geen cache met waipoint &quot;<?php echo ((is_array($_tmp=$this->_tpl_vars['p1'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
&quot; gevonden.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_DB_COULD_NOT_RECONNECT): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) De verbinding met de database kon niet hersteld worden.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_DB_NO_ROOT): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) De aanmelding aan de database als root is mislukt.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_PICTURE_NOT_EXISTS): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) De aangegeven afbeelding bestaat niet.
        <?php else: ?>
            <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

        <?php endif; ?>
    </p>
</div>
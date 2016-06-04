<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:38
         compiled from error.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'error.tpl', 16, false),array('modifier', 'nl2br', 'error.tpl', 64, false),)), $this); ?>
<div class="content2-pagetitle">
    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/32x32-gears.png" style="margin-right: 10px;" width="32" height="32" alt="" />
    Al llamar a la página se ha producido un error.
</div>

<div class="content-txtbox-noshade">
    <p style="line-height: 1.6em;">Se ha producido un error al cargar la página. Si llegó a esta página desde un enlace en nuestra página web y este error se repite desde hace algún tiempo, por favor comuníquese con nosotros a través del correo electrónico.</p>
    <p style="line-height: 1.6em;"><strong>Ocurrió el siguiente error:</strong></p>
    <p style="line-height: 1.6em;">
        Página <?php echo ((is_array($_tmp=$this->_tpl_vars['page'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<br/>
        Mensaje de error<span></span>:

        <?php if ($this->_tpl_vars['id'] == ERROR_UNKNOWN): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Ocurrió un error imprevisto.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_TEMPLATE_NOT_FOUND): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) La plantilla no existe.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_COMPILATION_FAILED): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) La creación del sitio ha fallado. Este error se produce sólo por un corto tiempo, por favor llame a la página de nuevo en unos minutos.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_NO_ACCESS): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Lo sentimos, pero no se puede ver esta página.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_CACHE_NOT_EXISTS): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Lo sentimos, la cache solicitada no existe.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_CACHELOG_NOT_EXISTS): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Lo sentimos, el cachelog solicitada no existe.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_INVALID_OPERATION): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Lo sentimos, la operación solicitada no pudo ser ejecutada.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_LOGIN_REQUIRED): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Perdón, la operación solicitada no pudo realizarse debido a que no está registrado:&nbsp; <a href="login.php">Acceso
        <?php elseif ($this->_tpl_vars['id'] == ERROR_USER_NOT_EXISTS): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Lo sentimos, el usuario solicitado no existe.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_USER_NOT_ACTIVE): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Lo sentimos, pero el usuario está deshabilitado.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_USER_NO_EMAIL): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Lo siento, para el usuario especificado no es una dirección de correo electrónico proporcionada.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_CACHE_NOT_PUBLISHED): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Lo sentimos, este geocache no se publica.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_CACHE_LOCKED): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Lo sentimos, este geocache está cerrado y no se puede ver.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_MAIL_TEMPLATE_NOT_FOUND): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) La plantilla de email no existe.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_NO_COOKIES): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Su navegador ha rechazado nuestra cookie.<br /> Para obtener más información sobre este tema, véase <a href="<?php echo $this->_tpl_vars['opt']['cms']['login']; ?>
">Opencaching-help</a>.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_ALREADY_LOGGEDIN): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Usted ha iniciado sesión .<br /> Por favor <a href="login.php?action=logout">logout</a> primero debera iniciar sesión.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_SEARCHPLUGIN_WAYPOINT_FORMAT): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Formato desconocido de waypoint. Los siguientes formatos son válidos: OCxxxx, NCxxxx y GCxxxx, donde xxxx es cualquier número o caracteres.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_SEARCHPLUGIN_WAYPOINT_MANY): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Existe más de un caché con el waypoint &quot;<?php echo ((is_array($_tmp=$this->_tpl_vars['p1'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
&quot
        <?php elseif ($this->_tpl_vars['id'] == ERROR_SEARCHPLUGIN_WAYPOINT_NOTFOUND): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) El waypoint &quot;<?php echo ((is_array($_tmp=$this->_tpl_vars['p1'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
&quot; no fue encontrado.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_DB_COULD_NOT_RECONNECT): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) La base de datos no se pudo conectar.
        <?php elseif ($this->_tpl_vars['id'] == ERROR_DB_NO_ROOT): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) No se puede cambiar la raíz DB
        <?php elseif ($this->_tpl_vars['id'] == ERROR_PICTURE_NOT_EXISTS): ?>
            (<?php echo $this->_tpl_vars['id']; ?>
) Lo sentimos, la imagen solicitada no existe.
        <?php else: ?>
            <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

        <?php endif; ?>
    </p>
</div>
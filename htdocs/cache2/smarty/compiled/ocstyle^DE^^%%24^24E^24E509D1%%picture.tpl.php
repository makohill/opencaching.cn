<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:42
         compiled from picture.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'string_format', 'picture.tpl', 22, false),array('modifier', 'escape', 'picture.tpl', 33, false),array('modifier', 'upper', 'picture.tpl', 91, false),array('modifier', 'replace', 'picture.tpl', 91, false),)), $this); ?>
<script type="text/javascript">
<!--
<?php echo '
    function checkForm()
    {
        if (document.fpicture.title.value == "")
        {
            alert(\''; ?>
Kein Titel angegeben!<?php echo '\');
            resetbutton(\'ok\');
            return false;
        }
        if (typeof FileReader !== "undefined") {
            var size = document.fpicture.file.files[0].size;
            var maxsize=+document.fpicture.MAX_FILE_SIZE.value;
            if (size>maxsize){
                alert(\''; ?>
Die Datei war zu groß. Es sind maximal <?php echo ((is_array($_tmp=$this->_tpl_vars['siteSettings']['logic']['pictures']['maxsize']/1024)) ? $this->_run_mod_handler('string_format', true, $_tmp, "%d") : smarty_modifier_string_format($_tmp, "%d")); ?>
 KB erlaubt.<?php echo '\');
                return false;
            }
        }
       return true;
    }
'; ?>

//-->
</script>

<form action="picture.php" method="post" enctype="multipart/form-data" name="fpicture" dir="ltr" onsubmit="return checkForm();">
    <input type="hidden" name="action" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['action'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
    <?php if ($this->_tpl_vars['action'] == 'add'): ?>
        <?php if ($this->_tpl_vars['objecttype'] == OBJECT_CACHE): ?>
            <input type="hidden" name="cacheuuid" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['cacheuuid'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
        <?php elseif ($this->_tpl_vars['objecttype'] == OBJECT_CACHELOG): ?>
            <input type="hidden" name="loguuid" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['loguuid'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
        <?php endif; ?>
    <?php else: ?>
        <input type="hidden" name="uuid" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['uuid'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
    <?php endif; ?>

    <div class="content2-pagetitle">
        <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/description/22x22-image.png" style="margin-right: 10px;" width="22" height="22" alt="Bild bearbeiten" title="Bild bearbeiten" />
        <?php ob_start(); ?>
            <a href="viewcache.php?wp=<?php echo ((is_array($_tmp=$this->_tpl_vars['cachewp'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['cachename'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a>
        <?php $this->_smarty_vars['capture']['name'] = ob_get_contents(); ob_end_clean(); ?>

        <?php if ($this->_tpl_vars['action'] == 'add'): ?>
            <?php if ($this->_tpl_vars['objecttype'] == OBJECT_CACHE): ?>
                Bild für Geocache <?php echo $this->_smarty_vars['capture']['name']; ?>
 hinzufügen
            <?php else: ?>
                Bild für Logeintrag <?php echo $this->_smarty_vars['capture']['name']; ?>
 hinzufügen
            <?php endif; ?>
        <?php else: ?>
            <?php if ($this->_tpl_vars['objecttype'] == OBJECT_CACHE): ?>
                Bild für Geocache <?php echo $this->_smarty_vars['capture']['name']; ?>
 bearbeiten
            <?php else: ?>
                Bild für Logeintrag <?php echo $this->_smarty_vars['capture']['name']; ?>
 bearbeiten
            <?php endif; ?>
        <?php endif; ?>
    </div>

    <table class="table">
        <tr><td class="spacer" colspan="2"></td></tr>
        <tr>
            <td valign="top">Titel:</td>
            <td colspan="2">
                <input class="input300" name="title" type="text" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="43" />
                <?php if ($this->_tpl_vars['errortitle'] == true): ?>
                    <span class="errormsg">Kein Titel angegeben!</span>
                <?php endif; ?>
            </td>
        </tr>
        <?php if ($this->_tpl_vars['action'] == 'add'): ?>
            <tr>
                <td valign="top">Dateiname:</td>
                <td colspan="2">
                    <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $this->_tpl_vars['siteSettings']['logic']['pictures']['maxsize']; ?>
" />
                    <input class="input300" name="file" type="file" />
                </td>
            </tr>
   <?php if ($this->_tpl_vars['errorfile'] == ERROR_UPLOAD_ERR_NO_FILE): ?>
                <tr><td>&nbsp;</td><td colspan="2"><span class="errormsg">Kein Bild angegeben.</span></td></tr>
            <?php elseif ($this->_tpl_vars['errorfile'] == ERROR_UPLOAD_ERR_SIZE): ?>
                <tr><td>&nbsp;</td><td colspan="2"><span class="errormsg">Die Datei war zu groß. Es sind maximal <?php echo ((is_array($_tmp=$this->_tpl_vars['siteSettings']['logic']['pictures']['maxsize']/1024)) ? $this->_run_mod_handler('string_format', true, $_tmp, "%d") : smarty_modifier_string_format($_tmp, "%d")); ?>
 KB erlaubt.</span></td></tr>
            <?php elseif ($this->_tpl_vars['errorfile'] == ERROR_UPLOAD_UNKNOWN): ?>
                <tr><td>&nbsp;</td><td colspan="2"><span class="errormsg">Bei der Dateiübertragung ist ein Fehler aufgetreten.</span></td></tr>
            <?php elseif ($this->_tpl_vars['errorfile'] == ERROR_UPLOAD_ERR_TYPE): ?>
                <tr><td>&nbsp;</td><td colspan="2"><span class="errormsg">Nur die folgenden Dateiformate sind für Bilder erlaubt: <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['siteSettings']['logic']['pictures']['extensions'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, ";", ", ") : smarty_modifier_replace($_tmp, ";", ", ")); ?>
.</span></td></tr>
            <?php endif; ?>
        <?php endif; ?>

        <tr><td class="spacer" colspan="2"></td></tr>

        <tr>
            <td></td>
            <td style="width:1%"><input class="checkbox" type="checkbox" name="spoiler" value="1" <?php if ($this->_tpl_vars['spoilerchecked'] == true): ?>checked="checked"<?php endif; ?> /></td>
            <td>Dieses Bild ist ein Spoiler - keine Vorschau anzeigen.</td>
        </tr>

        <?php if ($this->_tpl_vars['objecttype'] == OBJECT_CACHELOG): ?>
            <tr><td class="spacer" colspan="2"></td></tr>
            <tr>
                <td colspan="3">
                    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/hint.gif" border="0" width="15" height="11" alt="Hinweis" title="Hinweis" />
                    Es sollten möglichst keine Spoilerbilder geloggt werden. In Ausnahmefällen, wo es sinnvoll erscheint &ndash; z.B. um den Fund nachzuweisen oder Probleme mit dem Versteck zu dokumentieren &ndash; kennzeichne sie bitte als Spoiler, damit sie nicht in Bildgalerien erscheinen.
                 </td>
             </tr>
        <?php endif; ?>

        <?php if ($this->_tpl_vars['objecttype'] == OBJECT_CACHE): ?>
            <tr>
                <td></td>
                <td style="width:1%"><input class="checkbox" type="checkbox" name="notdisplay" value="1" <?php if ($this->_tpl_vars['displaychecked'] == false): ?>checked="checked"<?php endif; ?> /></td>
                <td>Dieses Bild nicht separat anzeigen (Hintergrundbild in HTML-Beschreibung o.ä.)</td>
            </tr>
            <tr>
            <td></td>
                <td style="width:1%"><input class="checkbox" type="checkbox" name="mappreview" value="1" <?php if ($this->_tpl_vars['mappreviewchecked'] == true): ?>checked="checked"<?php endif; ?> /></td>
                <td>Kartenvorschaubild &ndash; wird angezeigt, wenn dieser Cache auf der Karte angeklickt wird.<br />Es ist maximal <em>ein</em> Vorschaubild pro Cache wählbar.</td>
            </tr>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['action'] == 'add'): ?>
            <tr><td class="spacer" colspan="2"></td></tr>
            <tr>
                <td class="help" colspan="3">
                    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/hint.gif" border="0" width="15" height="11" alt="Hinweis" title="Hinweis" />
                    Es sind nur die Bildformate <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['siteSettings']['logic']['pictures']['extensions'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, ";", ", ") : smarty_modifier_replace($_tmp, ";", ", ")); ?>
 erlaubt; für Fotos wird JPEG empfohlen.<br />
                    Außerdem ist eine maximale Dateigröße von <?php echo $this->_tpl_vars['siteSettings']['logic']['pictures']['maxsize']/1024; ?>
 KB zu beachten. Als Bildgröße sind 640 Pixel Breite und 480 Pixel Höhe empfohlen.<br />
                    Nach dem Bestätigen kann der nächste Seitenaufbau je nach Bildgröße eine Weile dauern.
                </td>
            </tr>

            <tr><td class="spacer" colspan="2"></td></tr>

            <tr>
                <td colspan="3">
                    Mit dem Absenden akzeptiere ich die <a href="articles.php?page=impressum#tos" target="_blank">Opencaching.de-Nutzungsbedingungen</a> und -<a href="articles.php?page=impressum#datalicense" target="_blank">Datenlizenz</a>.
                </td>
            </tr>
        <?php endif; ?>

        <tr><td class="spacer" colspan="3"></td></tr>

        <tr>
            <td class="header-small" colspan="3">
                <!-- <input type="reset" name="reset" value="Zurücksetzen" class="formbutton" onclick="flashbutton('reset')" />&nbsp;&nbsp; -->
    <input type="submit" name="ok" value="<?php if ($this->_tpl_vars['action'] == 'add'): ?>Hinzufügen<?php else: ?>Bestätigen<?php endif; ?>" class="formbutton" onclick="submitbutton('ok')" />
   </td>
  </tr>
    </table>
</form>
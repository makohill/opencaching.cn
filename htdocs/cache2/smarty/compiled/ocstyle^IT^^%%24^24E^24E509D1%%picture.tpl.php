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
Per favore dai un titolo all'immagine!<?php echo '\');
            resetbutton(\'ok\');
            return false;
        }
        if (typeof FileReader !== "undefined") {
            var size = document.fpicture.file.files[0].size;
            var maxsize=+document.fpicture.MAX_FILE_SIZE.value;
            if (size>maxsize){
                alert(\''; ?>
Il file è troppo grande. La dimensione massima è <?php echo ((is_array($_tmp=$this->_tpl_vars['siteSettings']['logic']['pictures']['maxsize']/1024)) ? $this->_run_mod_handler('string_format', true, $_tmp, "%d") : smarty_modifier_string_format($_tmp, "%d")); ?>
 KB.<?php echo '\');
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
/images/description/22x22-image.png" style="margin-right: 10px;" width="22" height="22" alt="Modifica immagine" title="Modifica immagine" />
        <?php ob_start(); ?>
            <a href="viewcache.php?wp=<?php echo ((is_array($_tmp=$this->_tpl_vars['cachewp'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['cachename'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a>
        <?php $this->_smarty_vars['capture']['name'] = ob_get_contents(); ob_end_clean(); ?>

        <?php if ($this->_tpl_vars['action'] == 'add'): ?>
            <?php if ($this->_tpl_vars['objecttype'] == OBJECT_CACHE): ?>
                Aggiungi immagine per la geocache <?php echo $this->_smarty_vars['capture']['name']; ?>

            <?php else: ?>
                Aggiungi immagine per il log <?php echo $this->_smarty_vars['capture']['name']; ?>

            <?php endif; ?>
        <?php else: ?>
            <?php if ($this->_tpl_vars['objecttype'] == OBJECT_CACHE): ?>
                Modifica immagine per la geocache <?php echo $this->_smarty_vars['capture']['name']; ?>

            <?php else: ?>
                Modifica immagine per il log <?php echo $this->_smarty_vars['capture']['name']; ?>

            <?php endif; ?>
        <?php endif; ?>
    </div>

    <table class="table">
        <tr><td class="spacer" colspan="2"></td></tr>
        <tr>
            <td valign="top">Titolo:</td>
            <td colspan="2">
                <input class="input300" name="title" type="text" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="43" />
                <?php if ($this->_tpl_vars['errortitle'] == true): ?>
                    <span class="errormsg">Dai un titolo all'immagine!</span>
                <?php endif; ?>
            </td>
        </tr>
        <?php if ($this->_tpl_vars['action'] == 'add'): ?>
            <tr>
                <td valign="top">Nome file:</td>
                <td colspan="2">
                    <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $this->_tpl_vars['siteSettings']['logic']['pictures']['maxsize']; ?>
" />
                    <input class="input300" name="file" type="file" />
                </td>
            </tr>
   <?php if ($this->_tpl_vars['errorfile'] == ERROR_UPLOAD_ERR_NO_FILE): ?>
                <tr><td>&nbsp;</td><td colspan="2"><span class="errormsg">File per l'immagine non definito.</span></td></tr>
            <?php elseif ($this->_tpl_vars['errorfile'] == ERROR_UPLOAD_ERR_SIZE): ?>
                <tr><td>&nbsp;</td><td colspan="2"><span class="errormsg">Il file è troppo grande. La dimensione massima è <?php echo ((is_array($_tmp=$this->_tpl_vars['siteSettings']['logic']['pictures']['maxsize']/1024)) ? $this->_run_mod_handler('string_format', true, $_tmp, "%d") : smarty_modifier_string_format($_tmp, "%d")); ?>
 KB.</span></td></tr>
            <?php elseif ($this->_tpl_vars['errorfile'] == ERROR_UPLOAD_UNKNOWN): ?>
                <tr><td>&nbsp;</td><td colspan="2"><span class="errormsg">Il file non è stato caricato correttamente.</span></td></tr>
            <?php elseif ($this->_tpl_vars['errorfile'] == ERROR_UPLOAD_ERR_TYPE): ?>
                <tr><td>&nbsp;</td><td colspan="2"><span class="errormsg">Sono ammesse solo le immagini nei seguenti formati: <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['siteSettings']['logic']['pictures']['extensions'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, ";", ", ") : smarty_modifier_replace($_tmp, ";", ", ")); ?>
.</span></td></tr>
            <?php endif; ?>
        <?php endif; ?>

        <tr><td class="spacer" colspan="2"></td></tr>

        <tr>
            <td></td>
            <td style="width:1%"><input class="checkbox" type="checkbox" name="spoiler" value="1" <?php if ($this->_tpl_vars['spoilerchecked'] == true): ?>checked="checked"<?php endif; ?> /></td>
            <td>Questa immagine è uno spoiler - non visualizzare l'anteprima.</td>
        </tr>

        <?php if ($this->_tpl_vars['objecttype'] == OBJECT_CACHELOG): ?>
            <tr><td class="spacer" colspan="2"></td></tr>
            <tr>
                <td colspan="3">
                    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/hint.gif" border="0" width="15" height="11" alt="Nota" title="Nota" />
                    Generalmente le immagini spiler non possono essere loggate. Nel caso in cui abbia senso un'eccezione a questa regola, per es. per documentare un ritrovamento  o problemi con il nascondiglio, per favore segnala l'immagine come spoiler in modo che non appaia nelle gallerie.
                 </td>
             </tr>
        <?php endif; ?>

        <?php if ($this->_tpl_vars['objecttype'] == OBJECT_CACHE): ?>
            <tr>
                <td></td>
                <td style="width:1%"><input class="checkbox" type="checkbox" name="notdisplay" value="1" <?php if ($this->_tpl_vars['displaychecked'] == false): ?>checked="checked"<?php endif; ?> /></td>
                <td>Non visualizzare questa immagine (che è utilizzata solo nella descrizione HTML ecc.)</td>
            </tr>
            <tr>
            <td></td>
                <td style="width:1%"><input class="checkbox" type="checkbox" name="mappreview" value="1" <?php if ($this->_tpl_vars['mappreviewchecked'] == true): ?>checked="checked"<?php endif; ?> /></td>
                <td>Anteprima immagine per la mappa &ndash; è visualizzata quando queta cache è selezionata sulla mappa.<br />Puoi avere solo <em>una</em> immagine di anteprima per cache</td>
            </tr>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['action'] == 'add'): ?>
            <tr><td class="spacer" colspan="2"></td></tr>
            <tr>
                <td class="help" colspan="3">
                    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/hint.gif" border="0" width="15" height="11" alt="Nota" title="Nota" />
                    Sono ammessi solo i seguenti formati per le immagini: <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['siteSettings']['logic']['pictures']['extensions'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, ";", ", ") : smarty_modifier_replace($_tmp, ";", ", ")); ?>
. Raccomandiamo JPEG per le foto.<br />
                    La dimensione dell'immagine non deve essere superiore a <?php echo $this->_tpl_vars['siteSettings']['logic']['pictures']['maxsize']/1024; ?>
kB. Raccomandiamo immagini di 640 pixel di larghezza per 480 di altezza.<br />
                    Quando premi <i>carica</i> può essere necessario un certo tempo prima che venga visualizzata la pagina successiva.
                </td>
            </tr>

            <tr><td class="spacer" colspan="2"></td></tr>

            <tr>
                <td colspan="3">
                    Inviando accetto i <a href="articles.php?page=impressum#tos" target="_blank">Termini del Servizio Opencaching.de</a> e la <a href="articles.php?page=impressum#datalicense" target="_blank">Lecenza dati Opencaching.de</a>.
                </td>
            </tr>
        <?php endif; ?>

        <tr><td class="spacer" colspan="3"></td></tr>

        <tr>
            <td class="header-small" colspan="3">
                <!-- <input type="reset" name="reset" value="Ripristino" class="formbutton" onclick="flashbutton('reset')" />&nbsp;&nbsp; -->
    <input type="submit" name="ok" value="<?php if ($this->_tpl_vars['action'] == 'add'): ?>Carica<?php else: ?>Invia<?php endif; ?>" class="formbutton" onclick="submitbutton('ok')" />
   </td>
  </tr>
    </table>
</form>
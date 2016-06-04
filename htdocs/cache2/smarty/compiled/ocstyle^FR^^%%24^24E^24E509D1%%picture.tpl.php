<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:43
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
S'il vous plaît donner un nom à cette image&nbsp;!<?php echo '\');
            resetbutton(\'ok\');
            return false;
        }
        if (typeof FileReader !== "undefined") {
            var size = document.fpicture.file.files[0].size;
            var maxsize=+document.fpicture.MAX_FILE_SIZE.value;
            if (size>maxsize){
                alert(\''; ?>
Le fichier était trop grand. La taille maximale d'un fichier est de <?php echo ((is_array($_tmp=$this->_tpl_vars['siteSettings']['logic']['pictures']['maxsize']/1024)) ? $this->_run_mod_handler('string_format', true, $_tmp, "%d") : smarty_modifier_string_format($_tmp, "%d")); ?>
 Ko.<?php echo '\');
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
/images/description/22x22-image.png" style="margin-right: 10px;" width="22" height="22" alt="Modifier l'image" title="Modifier l'image" />
        <?php ob_start(); ?>
            <a href="viewcache.php?wp=<?php echo ((is_array($_tmp=$this->_tpl_vars['cachewp'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['cachename'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a>
        <?php $this->_smarty_vars['capture']['name'] = ob_get_contents(); ob_end_clean(); ?>

        <?php if ($this->_tpl_vars['action'] == 'add'): ?>
            <?php if ($this->_tpl_vars['objecttype'] == OBJECT_CACHE): ?>
                Ajouter une image pour ces géocaches <?php echo $this->_smarty_vars['capture']['name']; ?>

            <?php else: ?>
                Ajouter une image pour log <?php echo $this->_smarty_vars['capture']['name']; ?>

            <?php endif; ?>
        <?php else: ?>
            <?php if ($this->_tpl_vars['objecttype'] == OBJECT_CACHE): ?>
                Modifier l'image pour ces géocaches <?php echo $this->_smarty_vars['capture']['name']; ?>

            <?php else: ?>
                Modifier l'image pour log <?php echo $this->_smarty_vars['capture']['name']; ?>

            <?php endif; ?>
        <?php endif; ?>
    </div>

    <table class="table">
        <tr><td class="spacer" colspan="2"></td></tr>
        <tr>
            <td valign="top">Titre&nbsp;:</td>
            <td colspan="2">
                <input class="input300" name="title" type="text" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="43" />
                <?php if ($this->_tpl_vars['errortitle'] == true): ?>
                    <span class="errormsg">Donner un nom à cette image&nbsp;!</span>
                <?php endif; ?>
            </td>
        </tr>
        <?php if ($this->_tpl_vars['action'] == 'add'): ?>
            <tr>
                <td valign="top">Fichier&nbsp;:</td>
                <td colspan="2">
                    <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $this->_tpl_vars['siteSettings']['logic']['pictures']['maxsize']; ?>
" />
                    <input class="input300" name="file" type="file" />
                </td>
            </tr>
   <?php if ($this->_tpl_vars['errorfile'] == ERROR_UPLOAD_ERR_NO_FILE): ?>
                <tr><td>&nbsp;</td><td colspan="2"><span class="errormsg">Aucun fichier d'image donné.</span></td></tr>
            <?php elseif ($this->_tpl_vars['errorfile'] == ERROR_UPLOAD_ERR_SIZE): ?>
                <tr><td>&nbsp;</td><td colspan="2"><span class="errormsg">Le fichier était trop grand. La taille maximale d'un fichier est de <?php echo ((is_array($_tmp=$this->_tpl_vars['siteSettings']['logic']['pictures']['maxsize']/1024)) ? $this->_run_mod_handler('string_format', true, $_tmp, "%d") : smarty_modifier_string_format($_tmp, "%d")); ?>
 Ko.</span></td></tr>
            <?php elseif ($this->_tpl_vars['errorfile'] == ERROR_UPLOAD_UNKNOWN): ?>
                <tr><td>&nbsp;</td><td colspan="2"><span class="errormsg">Le fichier n'est pas téléchargé correctement.</span></td></tr>
            <?php elseif ($this->_tpl_vars['errorfile'] == ERROR_UPLOAD_ERR_TYPE): ?>
                <tr><td>&nbsp;</td><td colspan="2"><span class="errormsg">Seulement les formats d'image suivants sont autorisés&nbsp;: <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['siteSettings']['logic']['pictures']['extensions'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, ";", ", ") : smarty_modifier_replace($_tmp, ";", ", ")); ?>
.</span></td></tr>
            <?php endif; ?>
        <?php endif; ?>

        <tr><td class="spacer" colspan="2"></td></tr>

        <tr>
            <td></td>
            <td style="width:1%"><input class="checkbox" type="checkbox" name="spoiler" value="1" <?php if ($this->_tpl_vars['spoilerchecked'] == true): ?>checked="checked"<?php endif; ?> /></td>
            <td>Cette image est un spoiler - ne montre pas une vignette.</td>
        </tr>

        <?php if ($this->_tpl_vars['objecttype'] == OBJECT_CACHELOG): ?>
            <tr><td class="spacer" colspan="2"></td></tr>
            <tr>
                <td colspan="3">
                    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/hint.gif" border="0" width="15" height="11" alt="Note" title="Note" />
                    Généralement, des images de spoiler ne doivent pas être enregistrés. Dans le cas où une exception à cette règle est logique, par exemple, pour documenter votre conclusion ou des problèmes avec la planque, s'il vous plaît marquer l'image de sorte de spoiler qu'il ne sera pas apparaître dans des galeries.
                 </td>
             </tr>
        <?php endif; ?>

        <?php if ($this->_tpl_vars['objecttype'] == OBJECT_CACHE): ?>
            <tr>
                <td></td>
                <td style="width:1%"><input class="checkbox" type="checkbox" name="notdisplay" value="1" <?php if ($this->_tpl_vars['displaychecked'] == false): ?>checked="checked"<?php endif; ?> /></td>
                <td>Ne pas afficher séparément cette image (utilisée dans la description HTML, etc.)</td>
            </tr>
            <tr>
            <td></td>
                <td style="width:1%"><input class="checkbox" type="checkbox" name="mappreview" value="1" <?php if ($this->_tpl_vars['mappreviewchecked'] == true): ?>checked="checked"<?php endif; ?> /></td>
                <td>L'image d'aperçu pour la carte &ndash; est affiché lorsque ce cache est sélectionnée sur la carte.<br />Vous ne pouvez avoir qu'un <em>un</em> image d'aperçu pour chaque cache.</td>
            </tr>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['action'] == 'add'): ?>
            <tr><td class="spacer" colspan="2"></td></tr>
            <tr>
                <td class="help" colspan="3">
                    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/hint.gif" border="0" width="15" height="11" alt="Note" title="Note" />
                    Seuls les formats d'image suivants sont autorisés&nbsp;: <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['siteSettings']['logic']['pictures']['extensions'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, ";", ", ") : smarty_modifier_replace($_tmp, ";", ", ")); ?>
. Nous recommandons JPEG pour les images.<br />
                    La taille de fichier des image ne doit pas <?php echo $this->_tpl_vars['siteSettings']['logic']['pictures']['maxsize']/1024; ?>
 Ko. Nous recommandons 640x480 pixel de la taille de l'image.<br />
                    Après cliquer <i>télécharger</i>, il peut prendre un certain temps jusqu'à ce que la page suivante est démontrée.
                </td>
            </tr>

            <tr><td class="spacer" colspan="2"></td></tr>

            <tr>
                <td colspan="3">
                    En soumettant j'accepte les <a href="articles.php?page=impressum#tos" target="_blank">conditions de service d'Opencaching.de</a> et la <a href="articles.php?page=impressum#datalicense" target="_blank">licence de données d'Opencaching.de</a>.
                </td>
            </tr>
        <?php endif; ?>

        <tr><td class="spacer" colspan="3"></td></tr>

        <tr>
            <td class="header-small" colspan="3">
                <!-- <input type="reset" name="reset" value="Réinitialiser" class="formbutton" onclick="flashbutton('reset')" />&nbsp;&nbsp; -->
    <input type="submit" name="ok" value="<?php if ($this->_tpl_vars['action'] == 'add'): ?>Télécharger<?php else: ?>Soumettre<?php endif; ?>" class="formbutton" onclick="submitbutton('ok')" />
   </td>
  </tr>
    </table>
</form>
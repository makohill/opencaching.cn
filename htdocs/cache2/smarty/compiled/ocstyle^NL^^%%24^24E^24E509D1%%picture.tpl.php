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
Geen titel opgegeven!<?php echo '\');
            resetbutton(\'ok\');
            return false;
        }
        if (typeof FileReader !== "undefined") {
            var size = document.fpicture.file.files[0].size;
            var maxsize=+document.fpicture.MAX_FILE_SIZE.value;
            if (size>maxsize){
                alert(\''; ?>
Het bestand is te groot, de maximale grootte is <?php echo ((is_array($_tmp=$this->_tpl_vars['siteSettings']['logic']['pictures']['maxsize']/1024)) ? $this->_run_mod_handler('string_format', true, $_tmp, "%d") : smarty_modifier_string_format($_tmp, "%d")); ?>
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
/images/description/22x22-image.png" style="margin-right: 10px;" width="22" height="22" alt="Afbeelding bewerken" title="Afbeelding bewerken" />
        <?php ob_start(); ?>
            <a href="viewcache.php?wp=<?php echo ((is_array($_tmp=$this->_tpl_vars['cachewp'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['cachename'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a>
        <?php $this->_smarty_vars['capture']['name'] = ob_get_contents(); ob_end_clean(); ?>

        <?php if ($this->_tpl_vars['action'] == 'add'): ?>
            <?php if ($this->_tpl_vars['objecttype'] == OBJECT_CACHE): ?>
                Afbeelding voor cache <?php echo $this->_smarty_vars['capture']['name']; ?>
 toevoegen
            <?php else: ?>
                Afbeelding voor log <?php echo $this->_smarty_vars['capture']['name']; ?>
 toevoegen
            <?php endif; ?>
        <?php else: ?>
            <?php if ($this->_tpl_vars['objecttype'] == OBJECT_CACHE): ?>
                Afbeelding voor cache <?php echo $this->_smarty_vars['capture']['name']; ?>
 bewerken
            <?php else: ?>
                Afbeelding voor log <?php echo $this->_smarty_vars['capture']['name']; ?>
 bewerken
            <?php endif; ?>
        <?php endif; ?>
    </div>

    <table class="table">
        <tr><td class="spacer" colspan="2"></td></tr>
        <tr>
            <td valign="top">Title:</td>
            <td colspan="2">
                <input class="input300" name="title" type="text" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="43" />
                <?php if ($this->_tpl_vars['errortitle'] == true): ?>
                    <span class="errormsg">Geen titel opgegeven!</span>
                <?php endif; ?>
            </td>
        </tr>
        <?php if ($this->_tpl_vars['action'] == 'add'): ?>
            <tr>
                <td valign="top">Bestandsnaam:</td>
                <td colspan="2">
                    <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $this->_tpl_vars['siteSettings']['logic']['pictures']['maxsize']; ?>
" />
                    <input class="input300" name="file" type="file" />
                </td>
            </tr>
   <?php if ($this->_tpl_vars['errorfile'] == ERROR_UPLOAD_ERR_NO_FILE): ?>
                <tr><td>&nbsp;</td><td colspan="2"><span class="errormsg">Geen afbeelding opgegeven.</span></td></tr>
            <?php elseif ($this->_tpl_vars['errorfile'] == ERROR_UPLOAD_ERR_SIZE): ?>
                <tr><td>&nbsp;</td><td colspan="2"><span class="errormsg">Het bestand is te groot, de maximale grootte is <?php echo ((is_array($_tmp=$this->_tpl_vars['siteSettings']['logic']['pictures']['maxsize']/1024)) ? $this->_run_mod_handler('string_format', true, $_tmp, "%d") : smarty_modifier_string_format($_tmp, "%d")); ?>
 KB.</span></td></tr>
            <?php elseif ($this->_tpl_vars['errorfile'] == ERROR_UPLOAD_UNKNOWN): ?>
                <tr><td>&nbsp;</td><td colspan="2"><span class="errormsg">Bij de dataoverdracht is een fout opgetreden.</span></td></tr>
            <?php elseif ($this->_tpl_vars['errorfile'] == ERROR_UPLOAD_ERR_TYPE): ?>
                <tr><td>&nbsp;</td><td colspan="2"><span class="errormsg">Only the following picture formats are allowed: <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['siteSettings']['logic']['pictures']['extensions'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, ";", ", ") : smarty_modifier_replace($_tmp, ";", ", ")); ?>
.</span></td></tr>
            <?php endif; ?>
        <?php endif; ?>

        <tr><td class="spacer" colspan="2"></td></tr>

        <tr>
            <td></td>
            <td style="width:1%"><input class="checkbox" type="checkbox" name="spoiler" value="1" <?php if ($this->_tpl_vars['spoilerchecked'] == true): ?>checked="checked"<?php endif; ?> /></td>
            <td>This picture is a spoiler - don't show a thumbnail.</td>
        </tr>

        <?php if ($this->_tpl_vars['objecttype'] == OBJECT_CACHELOG): ?>
            <tr><td class="spacer" colspan="2"></td></tr>
            <tr>
                <td colspan="3">
                    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/hint.gif" border="0" width="15" height="11" alt="Opmerking" title="Opmerking" />
                    Generally, spoiler pictures should not be logged. In the case that en exception from this rule makes sense, e.g. to document your finding or problems with the stash, please mark the picture als spoiler so that it won't appear in galleries.
                 </td>
             </tr>
        <?php endif; ?>

        <?php if ($this->_tpl_vars['objecttype'] == OBJECT_CACHE): ?>
            <tr>
                <td></td>
                <td style="width:1%"><input class="checkbox" type="checkbox" name="notdisplay" value="1" <?php if ($this->_tpl_vars['displaychecked'] == false): ?>checked="checked"<?php endif; ?> /></td>
                <td>Do not separately display this picture (which is only used in HTML description etc.)</td>
            </tr>
            <tr>
            <td></td>
                <td style="width:1%"><input class="checkbox" type="checkbox" name="mappreview" value="1" <?php if ($this->_tpl_vars['mappreviewchecked'] == true): ?>checked="checked"<?php endif; ?> /></td>
                <td>Preview picture for map &ndash; is shown when this cache is selected on the map.<br />You can have only <em>one</em> preview picture per cache.</td>
            </tr>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['action'] == 'add'): ?>
            <tr><td class="spacer" colspan="2"></td></tr>
            <tr>
                <td class="help" colspan="3">
                    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/hint.gif" border="0" width="15" height="11" alt="Opmerking" title="Opmerking" />
                    Only the following picture formats are allowed: <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['siteSettings']['logic']['pictures']['extensions'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, ";", ", ") : smarty_modifier_replace($_tmp, ";", ", ")); ?>
. We recommend JPEG for photos.<br />
                    The file size of the picture must not exeed <?php echo $this->_tpl_vars['siteSettings']['logic']['pictures']['maxsize']/1024; ?>
 KB. We recommend 640x480 pixels picture size.<br />
                    After clicking <i>upload</i>, it may take a while until the next page appears.
                </td>
            </tr>

            <tr><td class="spacer" colspan="2"></td></tr>

            <tr>
                <td colspan="3">
                    By submitting I accept the <a href="articles.php?page=impressum#tos" target="_blank">Opencaching.de Terms of Service</a> and the <a href="articles.php?page=impressum#datalicense" target="_blank">Opencaching.de Data license</a>.
                </td>
            </tr>
        <?php endif; ?>

        <tr><td class="spacer" colspan="3"></td></tr>

        <tr>
            <td class="header-small" colspan="3">
                <!-- <input type="reset" name="reset" value="Herstellen" class="formbutton" onclick="flashbutton('reset')" />&nbsp;&nbsp; -->
    <input type="submit" name="ok" value="<?php if ($this->_tpl_vars['action'] == 'add'): ?>Upload<?php else: ?>Versturen<?php endif; ?>" class="formbutton" onclick="submitbutton('ok')" />
   </td>
  </tr>
    </table>
</form>
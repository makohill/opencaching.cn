<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:46
         compiled from search.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'search.tpl', 14, false),array('modifier', 'sprintf', 'search.tpl', 417, false),array('modifier', 'escape', 'search.tpl', 450, false),)), $this); ?>

<script type="text/javascript" src="resource2/ocstyle/js/wz_tooltip.js"></script>
<script type="text/javascript">
<!--
var mnAttributesShowCat2 = 1;
var maAttributes = new Array(<?php echo $this->_tpl_vars['attributes_jsarray']; ?>
);
var cachetypes = <?php echo count($this->_tpl_vars['cachetypes']); ?>
;
var cachesizes = <?php echo count($this->_tpl_vars['cachesizes']); ?>
;

<?php echo '

function textonfocus (arrayid) {
    document.searchbydistance.searchto[arrayid].checked = "checked";
}

function _radio_click(){

        if (isNaN(document.searchbydistance.distance.value))
        {
            alert("'; ?>
La distance maximale doit être un nombre !<?php echo '");
            resetbutton(\'submit_dist\');
            return false;
        }
        else if (document.searchbydistance.distance.value <= 0 || document.searchbydistance.distance.value > 9999)
        {
            alert("'; ?>
La distance doit être entre 0 et 9999<?php echo '");
            resetbutton(\'submit_dist\');
            return false;
        }

        if (document.getElementById(\'sbortplz\').checked) {
            if (_sbortplz_click() == true){
                return true;
            }
            else {
                resetbutton(\'submit_dist\');
                return false;
            }
        }
        else if (document.getElementById(\'sbwaypoint\').checked) {
            if (_sbwaypoint_click() == true){
                return true;
            }
            else {
                resetbutton(\'submit_dist\');
                return false;
            }
        }
        else if (document.getElementById(\'sbdis\').checked) {
            if (_sbd_click() == true){
                return true;
            }
            else {
                resetbutton(\'submit_dist\');
                return false;
            }
        }
        else {
            alert("Select a search button, please!");
            resetbutton(\'submit_dist\');
            return false;
        }
}

function _sbn_click()
{
    if (document.searchbyname.cachename.value == "")
    {
        alert("'; ?>
Entrez un nom, s'il vous plaît !<?php echo '");
        resetbutton(\'submit_cachename\');
        return false;
    }
    return true;
}

function _sbft_click()
{
    if (document.searchbyfulltext.fulltext.value == "")
    {
        alert("'; ?>
Remplissez le champ de texte, s'il vous plaît !<?php echo '");
        resetbutton(\'submit_ft\');
        return false;
    }

    if ((document.searchbyfulltext.ft_name.checked == false) &&
       (document.searchbyfulltext.ft_desc.checked == false) &&
       (document.searchbyfulltext.ft_logs.checked == false) &&
       (document.searchbyfulltext.ft_pictures.checked == false))
    {
        alert("'; ?>
Vous devez vérifier au moins un champ !<?php echo '");
        resetbutton(\'submit_ft\');
        return false;
    }

    return true;
}

function _sbd_click()
{
    if (isNaN(document.searchbydistance.lon_h.value) || isNaN(document.searchbydistance.lon_min.value) || document.searchbydistance.lon_h.value == "" || document.searchbydistance.lon_min.value == "")
    {
        alert("'; ?>
La longitude doit être un nombre !\nFormat : hh ° mm.mmm<?php echo '");
        resetbutton(\'submit_dist\');
        return false;
    }
    else if (isNaN(document.searchbydistance.lat_h.value) || isNaN(document.searchbydistance.lat_min.value) || document.searchbydistance.lat_h.value == "" || document.searchbydistance.lat_min.value == "")
    {
        alert("'; ?>
La latitude doit être un nombre !\nFormat : hh ° mm.mmm<?php echo '");
        resetbutton(\'submit_dist\');
        return false;
    }
    return true;
}

function _sbortplz_click()
{
    if (document.searchbydistance.ortplz.value == "")
    {
        alert("'; ?>
Enter a postal code or city, please!<?php echo '");
        resetbutton(\'submit_dist\');
        return false;
    }
    return true;
}

function _sbwaypoint_click()
{
    if (document.searchbydistance.waypoint.value == "")
    {
        alert("'; ?>
Enter a valid waypoint, please!<?php echo '");
        resetbutton(\'submit_dist\');
        return false;
    }
    else if ((!document.searchbydistance.waypoint.value.toLowerCase().startsWith("oc") && document.searchbydistance.waypoint.value.length<=2) || (!document.searchbydistance.waypoint.value.toLowerCase().startsWith("gc") && document.searchbydistance.waypoint.value.length<=5) || (!document.searchbydistance.waypoint.value.toLowerCase().startsWith("oc") && !document.searchbydistance.waypoint.value.toLowerCase().startsWith("gc")) )
    {
        alert("'; ?>
Enter a valid waypoint, please!\nFormat: OCxxxx(x) / GCx(xxxx)<?php echo '");
        resetbutton(\'submit_dist\');
        return false;
    }
    return true;
}

function _sbo_click()
{
    if (document.searchbyowner.owner.value == "")
    {
        alert("'; ?>
Entrez le propriétaire, s'il vous plaît !<?php echo '");
        resetbutton(\'submit_owner\');
        return false;
    }
    return true;
}

function _sbf_click()
{
    if (document.searchbyfinder.finder.value == "")
    {
        alert("'; ?>
Entrez le nom d'utilisateur, s'il vous plaît !<?php echo '");
        resetbutton(\'submit_finder\');
        return false;
    }
    return true;
}

function sync_options(element)
{
    var formnames = new Array(
        "searchbyname",
        "searchbydistance",
        "searchbyowner",
        "searchbyfinder",
        "searchbyfulltext"
        '; ?>
<?php if ($this->_tpl_vars['logged_in']): ?>,"searchall"<?php endif; ?><?php echo '
    );

    var sortby = "";
    if (document.optionsform.sort[0].checked == true)
        sortby = "byname";
    else if (document.optionsform.sort[1].checked == true)
        sortby = "bydistance";
    else if (document.optionsform.sort[2].checked == true)
        sortby = "bycreated";
    else if (document.optionsform.sort[3].checked == true)
        sortby = "bylastlog";
    else if (document.optionsform.sort[4].checked == true)
        sortby = "bymylastlog";

    var tmpattrib = "";
    for (i = 0; i < maAttributes.length; i++)
        if (maAttributes[i][1] == 1)
            tmpattrib = \'\' + tmpattrib + maAttributes[i][0] + \';\';
    if(tmpattrib.length > 0)
        tmpattrib = tmpattrib.substr(0, tmpattrib.length-1);

    var tmpattrib_not = "";
    for (i = 0; i < maAttributes.length; i++)
        if (maAttributes[i][1] == 2)
            tmpattrib_not = \'\' + tmpattrib_not + maAttributes[i][0] + \';\';
    if(tmpattrib_not.length > 0)
        tmpattrib_not = tmpattrib_not.substr(0, tmpattrib_not.length-1);

    var tmpcachetype = "";
    for (i = 1; i <= cachetypes; i++)
    {
        if (document.getElementById(\'cachetype\' + i).checked == true)
        {
            if (tmpcachetype != "") tmpcachetype = tmpcachetype + ";";
            tmpcachetype = tmpcachetype + i;
        }
    }
    if (tmpcachetype == "") tmpcachetype = "none";

    var tmpcachesize = "";
    for (i = 1; i <= cachesizes; i++)
    {
        if (document.getElementById(\'cachesize\' + i).checked == true)
        {
            if (tmpcachesize != "") tmpcachesize = tmpcachesize + ";";
            tmpcachesize = tmpcachesize + i;
        }
    }
    if (tmpcachesize == "") tmpcachesize = "none";

    for (var i in formnames)
    {
        document.forms[formnames[i]].sort.value = sortby;
        document.forms[formnames[i]].orderRatingFirst.value = document.optionsform.orderRatingFirst.checked ? 1 : 0;
        document.forms[formnames[i]].f_userowner.value = document.optionsform.f_userowner.checked ? 1 : 0;
        document.forms[formnames[i]].f_userfound.value = document.optionsform.f_userfound.checked ? 1 : 0;
        document.forms[formnames[i]].f_inactive.value = document.optionsform.f_inactive.checked ? 1 : 0;
        document.forms[formnames[i]].f_disabled.value = document.optionsform.f_disabled.checked ? 1 : 0;
        document.forms[formnames[i]].f_ignored.value = document.optionsform.f_ignored.checked ? 1 : 0;
        document.forms[formnames[i]].f_otherPlatforms.value = document.optionsform.f_otherPlatforms.checked ? 1 : 0;
        document.forms[formnames[i]].f_geokrets.value = document.optionsform.f_geokrets.checked ? 1 : 0;
        document.forms[formnames[i]].country.value = document.optionsform.country.value;
        document.forms[formnames[i]].language.value = document.optionsform.language.value;
        document.forms[formnames[i]].difficultymin.value = document.optionsform.difficultymin.value;
        document.forms[formnames[i]].difficultymax.value = document.optionsform.difficultymax.value;
        document.forms[formnames[i]].terrainmin.value = document.optionsform.terrainmin.value;
        document.forms[formnames[i]].terrainmax.value = document.optionsform.terrainmax.value;
        document.forms[formnames[i]].cachetype.value = tmpcachetype;
        document.forms[formnames[i]].cachesize.value = tmpcachesize;
        document.forms[formnames[i]].cache_attribs.value = tmpattrib;
        document.forms[formnames[i]].cache_attribs_not.value = tmpattrib_not;
    }
}

function toggleCachetype(id)
{
    var ctcb = document.getElementById(\'cachetype\' + id);
    ctcb.checked = !ctcb.checked;
    sync_options(null);

    var icon = document.getElementById(\'cacheicon\' + id);
    var iconpath = icon.src;
    greyed = iconpath.indexOf(\'-grey\');
    if (greyed > 0)
        iconpath = iconpath.substr(0,greyed) + iconpath.substring(greyed+5);
    else
    {
        var extpos = iconpath.indexOf(\'.gif\');
        if (extpos < 0) extpos = iconpath.indexOf(\'.png\');
        iconpath = iconpath.substr(0,extpos) + "-grey" + iconpath.substring(extpos);
    }
    icon.src = iconpath;
}

function alltypes(enable)
{
    '; ?>

    <?php $_from = $this->_tpl_vars['cachetypes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ct']):
?>
        if (document.getElementById('cachetype<?php echo $this->_tpl_vars['ct']['id']; ?>
').checked != enable)
            toggleCachetype(<?php echo $this->_tpl_vars['ct']['id']; ?>
);
    <?php endforeach; endif; unset($_from); ?>
    <?php echo '
}

function allsizes(enable)
{
    '; ?>

    <?php $_from = $this->_tpl_vars['cachesizes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['size_id'] => $this->_tpl_vars['dummy']):
?>
        document.getElementById('cachesize<?php echo $this->_tpl_vars['size_id']; ?>
').checked = enable;
    <?php endforeach; endif; unset($_from); ?>
    <?php echo '
    sync_options();
}

function switchAttribute(id)
{
    var attrImg1 = document.getElementById("attrimg1_" + id);
    var attrImg2 = document.getElementById("attrimg2_" + id);
    var nArrayIndex = 0;

    for (nArrayIndex = 0; nArrayIndex < maAttributes.length; nArrayIndex++)
    {
        if (maAttributes[nArrayIndex][0] == id)
            break;
    }

    if (maAttributes[nArrayIndex][1] == 0)
    {
        if (attrImg1) attrImg1.src = maAttributes[nArrayIndex][3];
        if (attrImg2) attrImg2.src = maAttributes[nArrayIndex][3];
        maAttributes[nArrayIndex][1] = 1;
    }
    else if (maAttributes[nArrayIndex][1] == 1)
    {
        if (attrImg1) attrImg1.src = maAttributes[nArrayIndex][4];
        if (attrImg2) attrImg2.src = maAttributes[nArrayIndex][4];
        maAttributes[nArrayIndex][1] = 2;
    }
    else if (maAttributes[nArrayIndex][1] == 2)
    {
        if (attrImg1) attrImg1.src = maAttributes[nArrayIndex][5];
        if (attrImg2) attrImg2.src = maAttributes[nArrayIndex][5];
        maAttributes[nArrayIndex][1] = 0;
    }

    sync_options(null);
}

function hideAttributesCat2()
{
    mnAttributesShowCat2 = 0;
    document.getElementById(\'attributesCat1\').style.display = "block";
    document.getElementById(\'attributesCat2\').style.display = "none";
    document.getElementById(\'toggleAttributesCaption\').firstChild.nodeValue = "'; ?>
Montre tout<?php echo '";
}

function showAttributesCat2()
{
    mnAttributesShowCat2 = 1;
    document.getElementById(\'attributesCat1\').style.display = "none";
    document.getElementById(\'attributesCat2\').style.display = "block";
    document.getElementById(\'toggleAttributesCaption\').firstChild.nodeValue = "'; ?>
Moins<?php echo '";
}

function switchAttributeCat2()
{
    if (mnAttributesShowCat2 != 0)
        hideAttributesCat2();
    else
        showAttributesCat2();
}
//-->
</script>
'; ?>


<div class="content2-pagetitle"><img src="resource2/ocstyle/images/misc/32x32-search.png" style="margin-right: 10px;" width="32" height="32" alt="" />Recherche de caches</div>

<form name="optionsform" style="display:inline;">

<div class="searchdiv2">
    <table class="table">
        <tr>
            <td class="formlabel">Cacher des caches suivants&nbsp;:</td>
            <td colspan="4">
                <input type="checkbox" name="f_userowner" value="1" id="l_userowner" class="checkbox" onclick="sync_options(this)" <?php if ($this->_tpl_vars['f_userowner_checked']): ?>checked="checked"<?php endif; ?> <?php if (! $this->_tpl_vars['logged_in']): ?>disabled="disabled"<?php endif; ?> /> <label for="l_userowner" <?php if (! $this->_tpl_vars['logged_in']): ?>class="disabled"<?php endif; ?>>mes propriété</label> &nbsp;
                <input type="checkbox" name="f_userfound" value="1" id="l_userfound" class="checkbox" onclick="sync_options(this)" <?php if ($this->_tpl_vars['f_userfound_checked']): ?>checked="checked"<?php endif; ?> <?php if (! $this->_tpl_vars['logged_in']): ?>disabled="disabled"<?php endif; ?> /> <label for="l_userfound" <?php if (! $this->_tpl_vars['logged_in']): ?>class="disabled"<?php endif; ?>>mes trouvailles</label> &nbsp;
                <input type="checkbox" name="f_ignored" value="1" id="l_ignored" class="checkbox" onclick="sync_options(this)" <?php if ($this->_tpl_vars['f_ignored_checked']): ?>checked="checked"<?php endif; ?> <?php if (! $this->_tpl_vars['logged_in']): ?>disabled="disabled"<?php endif; ?> /> <label for="l_ignored" <?php if (! $this->_tpl_vars['logged_in']): ?>class="disabled"<?php endif; ?>>mes ignoré</label> &nbsp;
                <input type="checkbox" name="f_disabled" value="1" id="l_disabled" class="checkbox" onclick="sync_options(this)" <?php if ($this->_tpl_vars['f_disabled_checked']): ?>checked="checked"<?php endif; ?> /> <label for="l_disabled">désactivé</label> &nbsp;
                <nobr><input type="checkbox" name="f_inactive" value="1" id="l_inactive" class="checkbox" onclick="sync_options(this)" <?php if ($this->_tpl_vars['f_inactive_checked']): ?>checked="checked"<?php endif; ?> /> <label for="l_inactive">archivé</label></nobr> &nbsp;
                <br />
                <nobr><input type="checkbox" name="f_otherPlatforms" value="1" id="l_otherPlatforms" class="checkbox" onclick="sync_options(this)" <?php if ($this->_tpl_vars['f_otherPlatforms_checked']): ?>checked="checked"<?php endif; ?> /> <label for="l_otherPlatforms">également enregistré sur GC.com</label></nobr> &nbsp;
                <nobr><input type="checkbox" name="f_geokrets" value="1" id="l_geokrets" class="checkbox" onclick="sync_options(this)" <?php if ($this->_tpl_vars['f_geokrets_checked']): ?>checked="checked"<?php endif; ?> /> <label for="l_geokrets">sans Geokrets</label></nobr>
            </td>
        </tr>

        <tr><td class="separator"></td></tr>

        <tr>
            <td class="formlabel">Types de géocaches&nbsp;:</td>
            <td>
                <?php $_from = $this->_tpl_vars['cachetypes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ct']):
?>
                    <input style="display:none" type="checkbox" id="cachetype<?php echo $this->_tpl_vars['ct']['id']; ?>
" name="cachetype<?php echo $this->_tpl_vars['ct']['id']; ?>
" value="<?php echo $this->_tpl_vars['ct']['id']; ?>
" class="checkbox" <?php if ($this->_tpl_vars['ct']['checked']): ?>checked="checked"<?php endif; ?> />
                    <?php ob_start(); ?>toggleCachetype(<?php echo $this->_tpl_vars['ct']['id']; ?>
)<?php $this->_smarty_vars['capture']['onclick'] = ob_get_contents();  $this->assign('onclick', ob_get_contents());ob_end_clean(); ?>
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_cacheicon.tpl", 'smarty_include_vars' => array('cachetype' => $this->_tpl_vars['ct']['id'],'typeid' => true,'greyed' => $this->_tpl_vars['ct']['unchecked'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>&nbsp;
                <?php endforeach; endif; unset($_from); ?>
                &nbsp;&nbsp;<a href="javascript:alltypes(true)">tous</a>
                &nbsp;&nbsp;<a href="javascript:alltypes(false)">rien</a>
            </td>
        </tr>

        <tr><td class="separator"></td></tr>

        <tr>
            <td class="formlabel">Taille de cache&nbsp;:</td>
            <td colspan="4">
                <input type="checkbox" id="cachesize8" name="cachesize8" value="8" onclick="sync_options(this)" class="checkbox" <?php if ($this->_tpl_vars['cachesizes']['8']['checked']): ?>checked="checked"<?php endif; ?> /> <label for="cachesize8" style="font-size:0.72em">nano</label> &nbsp;
                <input type="checkbox" id="cachesize2" name="cachesize2" value="2" onclick="sync_options(this)" class="checkbox" <?php if ($this->_tpl_vars['cachesizes']['2']['checked']): ?>checked="checked"<?php endif; ?> /> <label for="cachesize2" style="font-size:0.86em">micro</label> &nbsp;
                <input type="checkbox" id="cachesize3" name="cachesize3" value="3" onclick="sync_options(this)" class="checkbox" <?php if ($this->_tpl_vars['cachesizes']['3']['checked']): ?>checked="checked"<?php endif; ?> /> <label for="cachesize3" style="font-size:1.0em">petit</label> &nbsp;
                <input type="checkbox" id="cachesize4" name="cachesize4" value="4" onclick="sync_options(this)" class="checkbox" <?php if ($this->_tpl_vars['cachesizes']['4']['checked']): ?>checked="checked"<?php endif; ?> /> <label for="cachesize4" style="font-size:1.14em">normal</label> &nbsp;
                <input type="checkbox" id="cachesize5" name="cachesize5" value="5" onclick="sync_options(this)" class="checkbox" <?php if ($this->_tpl_vars['cachesizes']['5']['checked']): ?>checked="checked"<?php endif; ?> /> <label for="cachesize5" style="font-size:1.28em">grand</label> &nbsp;
                <nobr><input type="checkbox" id="cachesize6" name="cachesize6" value="6" onclick="sync_options(this)" class="checkbox" <?php if ($this->_tpl_vars['cachesizes']['6']['checked']): ?>checked="checked"<?php endif; ?> /> <label for="cachesize6" style="font-size:1.42em">très grand</label></nobr>
                <br />
                <input type="checkbox" id="cachesize1" name="cachesize1" value="1" onclick="sync_options(this)" class="checkbox" <?php if ($this->_tpl_vars['cachesizes']['1']['checked']): ?>checked="checked"<?php endif; ?> /> <label for="cachesize1">autre taille</label> &nbsp; <input type="checkbox" id="cachesize7" name="cachesize7" value="7" onclick="sync_options(this)" class="checkbox" <?php if ($this->_tpl_vars['cachesizes']['7']['checked']): ?>checked="checked"<?php endif; ?> /> <label for="cachesize7">aucune boîte</label>
                &nbsp;
                &nbsp;&nbsp;<a href="javascript:allsizes(true)">tous</a>
                &nbsp;&nbsp;<a href="javascript:allsizes(false)">rien</a>
            </td>
        </tr>

        <tr><td class="separator"></td></tr>

        <tr>
            <td class="formlabel">Difficulté&nbsp;:</td>
            <td colspan="4">
                <select name="difficultymin" class="input80" onchange="sync_options(this)">
                    <?php $_from = $this->_tpl_vars['difficulty_options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['difficulty_option']):
?>
                        <option value="<?php echo $this->_tpl_vars['difficulty_option']; ?>
" <?php if ($this->_tpl_vars['difficultymin'] == $this->_tpl_vars['difficulty_option']): ?>selected="selected"<?php endif; ?>><?php if ($this->_tpl_vars['difficulty_option'] == 0): ?>-<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['difficulty_option']/2)) ? $this->_run_mod_handler('sprintf', true, $_tmp, "%1.1f") : smarty_modifier_sprintf($_tmp, "%1.1f")); ?>
<?php endif; ?></option>
                    <?php endforeach; endif; unset($_from); ?>
                </select>
                &nbsp;à&nbsp;
                <select name="difficultymax" class="input80" onchange="sync_options(this)">
                    <?php $_from = $this->_tpl_vars['difficulty_options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['difficulty_option']):
?>
                        <option value="<?php echo $this->_tpl_vars['difficulty_option']; ?>
" <?php if ($this->_tpl_vars['difficultymax'] == $this->_tpl_vars['difficulty_option']): ?>selected="selected"<?php endif; ?>><?php if ($this->_tpl_vars['difficulty_option'] == 0): ?>-<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['difficulty_option']/2)) ? $this->_run_mod_handler('sprintf', true, $_tmp, "%1.1f") : smarty_modifier_sprintf($_tmp, "%1.1f")); ?>
<?php endif; ?></option>
                    <?php endforeach; endif; unset($_from); ?>
                </select>
                &nbsp; &nbsp; &nbsp; &nbsp;
                <span class="formlabel">Terrain&nbsp;:</span> &nbsp;
                <select name="terrainmin" class="input80" onchange="sync_options(this)">
                    <?php $_from = $this->_tpl_vars['terrain_options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['terrain_option']):
?>
                        <option value="<?php echo $this->_tpl_vars['terrain_option']; ?>
" <?php if ($this->_tpl_vars['terrainmin'] == $this->_tpl_vars['terrain_option']): ?>selected="selected"<?php endif; ?>><?php if ($this->_tpl_vars['terrain_option'] == 0): ?>-<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['terrain_option']/2)) ? $this->_run_mod_handler('sprintf', true, $_tmp, "%1.1f") : smarty_modifier_sprintf($_tmp, "%1.1f")); ?>
<?php endif; ?></option>
                    <?php endforeach; endif; unset($_from); ?>
                </select>
                &nbsp;à&nbsp;
                <select name="terrainmax" class="input80" onchange="sync_options(this)">
                    <?php $_from = $this->_tpl_vars['terrain_options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['terrain_option']):
?>
                        <option value="<?php echo $this->_tpl_vars['terrain_option']; ?>
" <?php if ($this->_tpl_vars['terrainmax'] == $this->_tpl_vars['terrain_option']): ?>selected="selected"<?php endif; ?>><?php if ($this->_tpl_vars['terrain_option'] == 0): ?>-<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['terrain_option']/2)) ? $this->_run_mod_handler('sprintf', true, $_tmp, "%1.1f") : smarty_modifier_sprintf($_tmp, "%1.1f")); ?>
<?php endif; ?></option>
                    <?php endforeach; endif; unset($_from); ?>
                </select>
            </td>
        </tr>

        <tr><td class="separator"></td></tr>

        <tr>
            <td class="formlabel">Pays&nbsp;:&nbsp;&nbsp;</td>
            <td>
                <select name="country" onchange="sync_options(this)">
                    <option value="" <?php if ($this->_tpl_vars['all_countries']): ?>selected="selected"<?php endif; ?>>Tous les pays</option>
                    <?php $_from = $this->_tpl_vars['countryoptions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['countryoption']):
?>
                        <option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['countryoption']['short'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" <?php if ($this->_tpl_vars['countryoption']['selected']): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['countryoption']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</option>
                    <?php endforeach; endif; unset($_from); ?>
                </select>
                &nbsp; &nbsp; &nbsp; &nbsp;
                <span class="formlabel">Langue&nbsp;:&nbsp;&nbsp;</span>
                <select name="language" onchange="sync_options(this)">
                    <option value="" <?php if ($this->_tpl_vars['all_languages']): ?>selected="selected"<?php endif; ?>>Tous les langues</option>
                    <?php $_from = $this->_tpl_vars['languageoptions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['languageoption']):
?>
                        <option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['languageoption']['short'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" <?php if ($this->_tpl_vars['languageoption']['selected']): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['languageoption']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</option>
                    <?php endforeach; endif; unset($_from); ?>
                </select>
            </td>
        </tr>

        <tr><td class="separator"></td></tr>

        <tr>
            <td valign="top">
                <span class="formlabel">Cache attributs&nbsp;:</span>&nbsp;<br />
                (<a href="javascript:switchAttributeCat2()"><span id="toggleAttributesCaption" style="white-space:nowrap">Montre tout</span></a>)
            </td>
            <td colspan="4" width="90%">
                <div id="attributesCat1" style="display:none;"><?php echo $this->_tpl_vars['cache_attribCat1_list']; ?>
</div>
                <div id="attributesCat2" style="display:block;"><?php echo $this->_tpl_vars['cache_attribCat2_list']; ?>
</div>
            </td>
        </tr>
    </table>
</div>

<div class="searchdiv2">
    <table class="table">
        <tr>
            <td class="formlabel" rowspan="2">Tri des résultats&nbsp;:</td>
            <td colspan="4" style="padding-bottom:0">
                <input type="radio" name="sort" value="byname" index="0" id="l_sortbyname" class="radio" onclick="sync_options(this)" <?php if ($this->_tpl_vars['byname_checked']): ?>checked="checked"<?php endif; ?> /> <label for="l_sortbyname">Nom&nbsp;de&nbsp;cache</label> &nbsp;
                <input type="radio" name="sort" value="bydistance" index="1" id="l_sortbydistance" class="radio" onclick="sync_options(this)" <?php if ($this->_tpl_vars['bydistance_checked']): ?>checked="checked"<?php endif; ?> /> <label for="l_sortbydistance">Distance</label> &nbsp;
                <input type="radio" name="sort" value="bycreated" index="2" id="l_sortbycreated" class="radio" onclick="sync_options(this)" <?php if ($this->_tpl_vars['bycreated_checked']): ?>checked="checked"<?php endif; ?> /> <label for="l_sortbycreated">Listé depuis</label> &nbsp;
                <nobr><input type="radio" name="sort" value="bylastlog" index="3" id="l_sortbylastlog" class="radio" onclick="sync_options(this)" <?php if ($this->_tpl_vars['bylastlog_checked']): ?>checked="checked"<?php endif; ?> /> <label for="l_sortbylastlog" >Dernier log</label> &nbsp;
                <input type="radio" name="sort" value="bymylastlog" index="4" id="l_sortbymylastlog" class="radio" onclick="sync_options(this)" <?php if ($this->_tpl_vars['bymylastlog_checked']): ?>checked="checked"<?php endif; ?> <?php if (! $this->_tpl_vars['logged_in']): ?>disabled="disabled"<?php endif; ?> /> <label for="l_sortbymylastlog" <?php if (! $this->_tpl_vars['logged_in']): ?>class="disabled"<?php endif; ?>>Mon dernier log</label></nobr>
            </td>
        </tr>
        <tr>
            <td style="padding-top:0">
                <input id="orderRatingFirst" type="checkbox" name="orderRatingFirst" class="checkbox" value="1" onclick="sync_options(this)" <?php if ($this->_tpl_vars['orderRatingFirst_checked']): ?>checked="checked"<?php endif; ?> />
                <label for="orderRatingFirst">Afficher les caches recommandées par d'autres utilisateurs premier</label>
            </td>
        </tr>
    </table>
</div>

</form>

<div id="scriptwarning" style="margin:0 5px 0 5px;">
    <p><span class="errormsg">Javascript est désactivé, vous ne pouvez pas utiliser les options ci-dessus (caches masquer .. résultats de tri) - recherche de base fonctionne néanmoins.</span></p>
</div>

<?php echo '
<script type="text/javascript">
<!--
    document.getElementById("scriptwarning").style.display = "none";

    // hide advanced attributes if none is selected
    var i = 0;
    var bHide = true;
    for (i = 0; i < maAttributes.length; i++)
    {
        if (maAttributes[i][1] != 0 && maAttributes[i][6] != 1)
        {
            bHide = false;
            break;
        }
    }

    if (bHide == true)
        hideAttributesCat2();
-->
</script>
'; ?>


<div class="searchdiv2">
    <table class="table">

    <?php echo $this->_tpl_vars['ortserror']; ?>

    <tr><td class="separator"></td></tr>

    <form action="search.php" onsubmit="return(_radio_click());" method="<?php echo $this->_tpl_vars['formmethod']; ?>
" enctype="application/x-www-form-urlencoded" name="searchbydistance" dir="ltr" style="display:inline;">
        <input type="hidden" name="showresult" value="1" />
        <input type="hidden" name="expert" value="0" />
        <input type="hidden" name="output" value="HTML" />
        <input type="hidden" name="utf8" value="1" />

        <input type="hidden" name="sort" value="<?php echo $this->_tpl_vars['hidopt_sort']; ?>
" />
        <input type="hidden" name="orderRatingFirst" value="<?php echo $this->_tpl_vars['hidopt_orderRatingFirst']; ?>
" />
        <input type="hidden" name="f_userowner" value="<?php echo $this->_tpl_vars['hidopt_userowner']; ?>
" />
        <input type="hidden" name="f_userfound" value="<?php echo $this->_tpl_vars['hidopt_userfound']; ?>
" />
        <input type="hidden" name="f_inactive" value="<?php echo $this->_tpl_vars['hidopt_inactive']; ?>
" />
        <input type="hidden" name="f_disabled" value="<?php echo $this->_tpl_vars['hidopt_disabled']; ?>
" />
        <input type="hidden" name="f_ignored" value="<?php echo $this->_tpl_vars['hidopt_ignored']; ?>
" />
        <input type="hidden" name="f_otherPlatforms" value="<?php echo $this->_tpl_vars['hidopt_otherPlatforms']; ?>
" />
        <input type="hidden" name="f_geokrets" value="<?php echo $this->_tpl_vars['hidopt_geokrets']; ?>
" />
        <input type="hidden" name="country" value="<?php echo $this->_tpl_vars['country']; ?>
" />
        <input type="hidden" name="language" value="<?php echo $this->_tpl_vars['language']; ?>
" />
        <input type="hidden" name="cachetype" value="<?php echo $this->_tpl_vars['cachetype']; ?>
" />
        <input type="hidden" name="cachesize" value="<?php echo $this->_tpl_vars['cachesize']; ?>
" />
        <input type="hidden" name="difficultymin" value="<?php echo $this->_tpl_vars['difficultymin']; ?>
" />
        <input type="hidden" name="difficultymax" value="<?php echo $this->_tpl_vars['difficultymax']; ?>
" />
        <input type="hidden" name="terrainmin" value="<?php echo $this->_tpl_vars['terrainmin']; ?>
" />
        <input type="hidden" name="terrainmax" value="<?php echo $this->_tpl_vars['terrainmax']; ?>
" />
        <input type="hidden" name="cache_attribs" value="<?php echo $this->_tpl_vars['hidopt_attribs']; ?>
" />
        <input type="hidden" name="cache_attribs_not" value="<?php echo $this->_tpl_vars['hidopt_attribs_not']; ?>
" />

        <tr>
            <td class="formlabel">Périmètre&nbsp;:</td>
            <td>
                <input type="text" name="distance" value="<?php echo $this->_tpl_vars['distance']; ?>
" maxlength="4" class="input50" />&nbsp;
                <select name="unit" class="input100">
                    <option value="km" <?php if ($this->_tpl_vars['sel_km']): ?>selected="selected"<?php endif; ?>>Kilomètre</option>
                    <option value="sm" <?php if ($this->_tpl_vars['sel_sm']): ?>selected="selected"<?php endif; ?>>Milles</option>
                    <option value="nm" <?php if ($this->_tpl_vars['sel_nm']): ?>selected="selected"<?php endif; ?>>Milles marins</option>
                </select>
            </td>
        </tr>
        <tr>
            <td class=""><input type="radio" id="sbortplz" name="searchto" value="searchbyortplz" <?php if ($this->_tpl_vars['dbyortplz_checked']): ?>checked="checked"<?php endif; ?>><label for="sbortplz">... from City / Postal Code:</label></td>
            <td><input type="text" name="ortplz" value="<?php echo $this->_tpl_vars['ortplz']; ?>
" class="input200" onfocus="textonfocus(0)"/> &nbsp;</td>
            <td></td>          </tr>
        <tr>
            <td class=""><input type="radio" id="sbwaypoint" name="searchto" value="searchbywaypoint" <?php if ($this->_tpl_vars['dbywaypoint_checked']): ?>checked="checked"<?php endif; ?>><label for="sbwaypoint">... from Waypoint:</label></td>
            <td><input type="text" name="waypoint" value="<?php echo $this->_tpl_vars['waypoint']; ?>
" maxlength="7" class="input70" onfocus="textonfocus(1)"/></td>
        </tr>
        <tr>
            <td valign="top"><input type="radio" id="sbdis" name="searchto" value="searchbydistance" <?php if ($this->_tpl_vars['dbydistance_checked']): ?>checked="checked"<?php endif; ?>><label for="sbdis">... de coordonnées&nbsp;:</label></td>
            <td valign="top">
                <select name="latNS" onfocus="textonfocus(2)">
                    <option value="N" <?php if ($this->_tpl_vars['latN_sel']): ?>selected="selected"<?php endif; ?>>N</option>
                    <option value="S" <?php if ($this->_tpl_vars['latS_sel']): ?>selected="selected"<?php endif; ?>>S</option>
                </select>&nbsp;
                <input type="text" name="lat_h" maxlength="2" value="<?php echo $this->_tpl_vars['lat_h']; ?>
" class="input30" onfocus="textonfocus(2)"/>&nbsp;°&nbsp;
                <input type="text" name="lat_min" maxlength="6" value="<?php echo $this->_tpl_vars['lat_min']; ?>
" class="input50" onfocus="textonfocus(2)"/>&nbsp;'&nbsp;
                <br />
                <select name="lonEW" onfocus="textonfocus(2)">
                    <option value="E" <?php if ($this->_tpl_vars['lonE_sel']): ?>selected="selected"<?php endif; ?>>E</option>
                    <option value="W" <?php if ($this->_tpl_vars['lonW_sel']): ?>selected="selected"<?php endif; ?>>O</option>
                </select>&nbsp;
                <input type="text" name="lon_h" maxlength="3" value="<?php echo $this->_tpl_vars['lon_h']; ?>
" class="input30" onfocus="textonfocus(2)"/>&nbsp;°&nbsp;
                <input type="text" name="lon_min" maxlength="6" value="<?php echo $this->_tpl_vars['lon_min']; ?>
" class="input50" onfocus="textonfocus(2)"/>&nbsp;'&nbsp;
            </td>
            <td><input type="submit" name="submit_dist" value="Chercher" class="formbutton" onclick="submitbutton('submit_dist')" /></td>
        </tr>
    </form>

    <tr><td class="separator"></td></tr>

    <form action="search.php" onsubmit="return(_sbn_click());" method="<?php echo $this->_tpl_vars['formmethod']; ?>
" enctype="application/x-www-form-urlencoded" name="searchbyname" dir="ltr" style="display:inline;">
        <input type="hidden" name="searchto" value="searchbyname" />
        <input type="hidden" name="showresult" value="1" />
        <input type="hidden" name="expert" value="0" />
        <input type="hidden" name="output" value="HTML" />
        <input type="hidden" name="utf8" value="1" />

        <input type="hidden" name="sort" value="<?php echo $this->_tpl_vars['hidopt_sort']; ?>
" />
        <input type="hidden" name="orderRatingFirst" value="<?php echo $this->_tpl_vars['hidopt_orderRatingFirst']; ?>
" />
        <input type="hidden" name="f_userowner" value="<?php echo $this->_tpl_vars['hidopt_userowner']; ?>
" />
        <input type="hidden" name="f_userfound" value="<?php echo $this->_tpl_vars['hidopt_userfound']; ?>
" />
        <input type="hidden" name="f_inactive" value="<?php echo $this->_tpl_vars['hidopt_inactive']; ?>
" />
        <input type="hidden" name="f_disabled" value="<?php echo $this->_tpl_vars['hidopt_disabled']; ?>
" />
        <input type="hidden" name="f_ignored" value="<?php echo $this->_tpl_vars['hidopt_ignored']; ?>
" />
        <input type="hidden" name="f_otherPlatforms" value="<?php echo $this->_tpl_vars['hidopt_otherPlatforms']; ?>
" />
        <input type="hidden" name="f_geokrets" value="<?php echo $this->_tpl_vars['hidopt_geokrets']; ?>
" />
        <input type="hidden" name="country" value="<?php echo $this->_tpl_vars['country']; ?>
" />
        <input type="hidden" name="language" value="<?php echo $this->_tpl_vars['language']; ?>
" />
        <input type="hidden" name="cachetype" value="<?php echo $this->_tpl_vars['cachetype']; ?>
" />
        <input type="hidden" name="cachesize" value="<?php echo $this->_tpl_vars['cachesize']; ?>
" />
        <input type="hidden" name="difficultymin" value="<?php echo $this->_tpl_vars['difficultymin']; ?>
" />
        <input type="hidden" name="difficultymax" value="<?php echo $this->_tpl_vars['difficultymax']; ?>
" />
        <input type="hidden" name="terrainmin" value="<?php echo $this->_tpl_vars['terrainmin']; ?>
" />
        <input type="hidden" name="terrainmax" value="<?php echo $this->_tpl_vars['terrainmax']; ?>
" />
        <input type="hidden" name="cache_attribs" value="<?php echo $this->_tpl_vars['hidopt_attribs']; ?>
" />
        <input type="hidden" name="cache_attribs_not" value="<?php echo $this->_tpl_vars['hidopt_attribs_not']; ?>
" />

        <tr>
            <td class="formlabel">Nom&nbsp;de&nbsp;cache&nbsp;:</td>
            <td><input type="text" name="cachename" value="<?php echo $this->_tpl_vars['cachename']; ?>
" class="input200" /></td>
            <td><input type="submit" name="submit_cachename" value="Chercher" class="formbutton" onclick="submitbutton('submit_cachename')" /></td>
        </tr>
    </form>

    <tr><td class="separator"></td></tr>

    <form action="search.php" onsubmit="return(_sbft_click());" method="<?php echo $this->_tpl_vars['formmethod']; ?>
" enctype="application/x-www-form-urlencoded" name="searchbyfulltext" dir="ltr" style="display:inline;">
        <input type="hidden" name="searchto" value="searchbyfulltext" />
        <input type="hidden" name="showresult" value="1" />
        <input type="hidden" name="expert" value="0" />
        <input type="hidden" name="output" value="HTML" />
        <input type="hidden" name="utf8" value="1" />

        <input type="hidden" name="sort" value="<?php echo $this->_tpl_vars['hidopt_sort']; ?>
" />
        <input type="hidden" name="orderRatingFirst" value="<?php echo $this->_tpl_vars['hidopt_orderRatingFirst']; ?>
" />
        <input type="hidden" name="f_userowner" value="<?php echo $this->_tpl_vars['hidopt_userowner']; ?>
" />
        <input type="hidden" name="f_userfound" value="<?php echo $this->_tpl_vars['hidopt_userfound']; ?>
" />
        <input type="hidden" name="f_inactive" value="<?php echo $this->_tpl_vars['hidopt_inactive']; ?>
" />
        <input type="hidden" name="f_disabled" value="<?php echo $this->_tpl_vars['hidopt_disabled']; ?>
" />
        <input type="hidden" name="f_ignored" value="<?php echo $this->_tpl_vars['hidopt_ignored']; ?>
" />
        <input type="hidden" name="f_otherPlatforms" value="<?php echo $this->_tpl_vars['hidopt_otherPlatforms']; ?>
" />
        <input type="hidden" name="f_geokrets" value="<?php echo $this->_tpl_vars['hidopt_geokrets']; ?>
" />
        <input type="hidden" name="country" value="<?php echo $this->_tpl_vars['country']; ?>
" />
        <input type="hidden" name="language" value="<?php echo $this->_tpl_vars['language']; ?>
" />
        <input type="hidden" name="difficultymin" value="<?php echo $this->_tpl_vars['difficultymin']; ?>
" />
        <input type="hidden" name="difficultymax" value="<?php echo $this->_tpl_vars['difficultymax']; ?>
" />
        <input type="hidden" name="terrainmin" value="<?php echo $this->_tpl_vars['terrainmin']; ?>
" />
        <input type="hidden" name="terrainmax" value="<?php echo $this->_tpl_vars['terrainmax']; ?>
" />
        <input type="hidden" name="cachetype" value="<?php echo $this->_tpl_vars['cachetype']; ?>
" />
        <input type="hidden" name="cachesize" value="<?php echo $this->_tpl_vars['cachesize']; ?>
" />
        <input type="hidden" name="cache_attribs" value="<?php echo $this->_tpl_vars['hidopt_attribs']; ?>
" />
        <input type="hidden" name="cache_attribs_not" value="<?php echo $this->_tpl_vars['hidopt_attribs_not']; ?>
" />

        <tr>
            <td class="formlabel">Texte&nbsp;:</td>
            <td><input type="text" name="fulltext" value="<?php echo $this->_tpl_vars['fulltext']; ?>
" class="input200" /></td>
            <td><input type="submit" name="submit_ft" value="Chercher" class="formbutton" onclick="submitbutton('submit_ft')" /></td>
        </tr>
        <tr>
            <td>... dans&nbsp;:</td>
            <td colspan="4">
                <input type="checkbox" name="ft_desc" id="ft_desc" class="checkbox" value="1" <?php if ($this->_tpl_vars['ft_desc_checked']): ?>checked="checked"<?php endif; ?> /> <label for="ft_desc">Description</label> &nbsp;
                <input type="checkbox" name="ft_name" id="ft_name" class="checkbox" value="1" <?php if ($this->_tpl_vars['ft_name_checked']): ?>checked="checked"<?php endif; ?> /> <label for="ft_name">Nom&nbsp;de&nbsp;cache</label> &nbsp;
                <input type="checkbox" name="ft_pictures" id="ft_pictures" class="checkbox" value="1" <?php if ($this->_tpl_vars['ft_pictures_checked']): ?>checked="checked"<?php endif; ?> /> <label for="ft_pictures">Images</label> &nbsp;
                <input type="checkbox" name="ft_logs" id="ft_logs" class="checkbox" value="1" <?php if ($this->_tpl_vars['ft_logs_checked']): ?>checked="checked"<?php endif; ?> /> <label for="ft_logs">Logs</label>
            </td>
        </tr>
    </form>

    <?php echo $this->_tpl_vars['fulltexterror']; ?>

    <tr><td class="separator"></td></tr>

    <form action="search.php" onsubmit="return(_sbo_click());" method="<?php echo $this->_tpl_vars['formmethod']; ?>
" enctype="application/x-www-form-urlencoded" name="searchbyowner" dir="ltr" style="display:inline;">
        <input type="hidden" name="searchto" value="searchbyowner" />
        <input type="hidden" name="showresult" value="1" />
        <input type="hidden" name="expert" value="0" />
        <input type="hidden" name="output" value="HTML" />
        <input type="hidden" name="utf8" value="1" />

        <input type="hidden" name="sort" value="<?php echo $this->_tpl_vars['hidopt_sort']; ?>
" />
        <input type="hidden" name="orderRatingFirst" value="<?php echo $this->_tpl_vars['hidopt_orderRatingFirst']; ?>
" />
        <input type="hidden" name="f_userowner" value="<?php echo $this->_tpl_vars['hidopt_userowner']; ?>
" />
        <input type="hidden" name="f_userfound" value="<?php echo $this->_tpl_vars['hidopt_userfound']; ?>
" />
        <input type="hidden" name="f_inactive" value="<?php echo $this->_tpl_vars['hidopt_inactive']; ?>
" />
        <input type="hidden" name="f_disabled" value="<?php echo $this->_tpl_vars['hidopt_disabled']; ?>
" />
        <input type="hidden" name="f_ignored" value="<?php echo $this->_tpl_vars['hidopt_ignored']; ?>
" />
        <input type="hidden" name="f_otherPlatforms" value="<?php echo $this->_tpl_vars['hidopt_otherPlatforms']; ?>
" />
        <input type="hidden" name="f_geokrets" value="<?php echo $this->_tpl_vars['hidopt_geokrets']; ?>
" />
        <input type="hidden" name="country" value="<?php echo $this->_tpl_vars['country']; ?>
" />
        <input type="hidden" name="language" value="<?php echo $this->_tpl_vars['language']; ?>
" />
        <input type="hidden" name="difficultymin" value="<?php echo $this->_tpl_vars['difficultymin']; ?>
" />
        <input type="hidden" name="difficultymax" value="<?php echo $this->_tpl_vars['difficultymax']; ?>
" />
        <input type="hidden" name="terrainmin" value="<?php echo $this->_tpl_vars['terrainmin']; ?>
" />
        <input type="hidden" name="terrainmax" value="<?php echo $this->_tpl_vars['terrainmax']; ?>
" />
        <input type="hidden" name="cachetype" value="<?php echo $this->_tpl_vars['cachetype']; ?>
" />
        <input type="hidden" name="cachesize" value="<?php echo $this->_tpl_vars['cachesize']; ?>
" />
        <input type="hidden" name="cache_attribs" value="<?php echo $this->_tpl_vars['hidopt_attribs']; ?>
" />
        <input type="hidden" name="cache_attribs_not" value="<?php echo $this->_tpl_vars['hidopt_attribs_not']; ?>
" />

        <tr>
            <td class="formlabel">Propriétaire&nbsp;:</td>
            <td><input type="text" name="owner" value="<?php echo $this->_tpl_vars['owner']; ?>
" maxlength="40" class="input200" /></td>
            <td><input type="submit" name="submit_owner" value="Chercher" class="formbutton" onclick="submitbutton('submit_owner')" /></td>
        </tr>
    </form>

    <tr><td class="separator"></td></tr>

    <form action="search.php" onsubmit="return(_sbf_click());" method="<?php echo $this->_tpl_vars['formmethod']; ?>
" enctype="application/x-www-form-urlencoded" name="searchbyfinder" dir="ltr" style="display:inline;">
        <input type="hidden" name="searchto" value="searchbyfinder" />
        <input type="hidden" name="showresult" value="1" />
        <input type="hidden" name="expert" value="0" />
        <input type="hidden" name="output" value="HTML" />
        <input type="hidden" name="utf8" value="1" />

        <input type="hidden" name="sort" value="<?php echo $this->_tpl_vars['hidopt_sort']; ?>
" />
        <input type="hidden" name="orderRatingFirst" value="<?php echo $this->_tpl_vars['hidopt_orderRatingFirst']; ?>
" />
        <input type="hidden" name="f_userowner" value="<?php echo $this->_tpl_vars['hidopt_userowner']; ?>
" />
        <input type="hidden" name="f_userfound" value="<?php echo $this->_tpl_vars['hidopt_userfound']; ?>
" />
        <input type="hidden" name="f_inactive" value="<?php echo $this->_tpl_vars['hidopt_inactive']; ?>
" />
        <input type="hidden" name="f_disabled" value="<?php echo $this->_tpl_vars['hidopt_disabled']; ?>
" />
        <input type="hidden" name="f_ignored" value="<?php echo $this->_tpl_vars['hidopt_ignored']; ?>
" />
        <input type="hidden" name="f_otherPlatforms" value="<?php echo $this->_tpl_vars['hidopt_otherPlatforms']; ?>
" />
        <input type="hidden" name="f_geokrets" value="<?php echo $this->_tpl_vars['hidopt_geokrets']; ?>
" />
        <input type="hidden" name="country" value="<?php echo $this->_tpl_vars['country']; ?>
" />
        <input type="hidden" name="language" value="<?php echo $this->_tpl_vars['language']; ?>
" />
        <input type="hidden" name="difficultymin" value="<?php echo $this->_tpl_vars['difficultymin']; ?>
" />
        <input type="hidden" name="difficultymax" value="<?php echo $this->_tpl_vars['difficultymax']; ?>
" />
        <input type="hidden" name="terrainmin" value="<?php echo $this->_tpl_vars['terrainmin']; ?>
" />
        <input type="hidden" name="terrainmax" value="<?php echo $this->_tpl_vars['terrainmax']; ?>
" />
        <input type="hidden" name="cachetype" value="<?php echo $this->_tpl_vars['cachetype']; ?>
" />
        <input type="hidden" name="cachesize" value="<?php echo $this->_tpl_vars['cachesize']; ?>
" />
        <input type="hidden" name="cache_attribs" value="<?php echo $this->_tpl_vars['hidopt_attribs']; ?>
" />
        <input type="hidden" name="cache_attribs_not" value="<?php echo $this->_tpl_vars['hidopt_attribs_not']; ?>
" />

        <tr>
            <td class="formlabel">Logs&nbsp;:</td>
            <td colspan="2">
                <select name="logtype">
                    <?php $_from = $this->_tpl_vars['logtype_options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['logtype_option']):
?>
                        <option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['logtype_option']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" <?php if ($this->_tpl_vars['logtype_option']['selected']): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['logtype_option']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</option>
                    <?php endforeach; endif; unset($_from); ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>... par l'utilisateur&nbsp;:</td>
            <td><input type="text" name="finder" value="<?php echo $this->_tpl_vars['finder']; ?>
" maxlength="40" class="input200" /></td>
            <td><input type="submit" name="submit_finder" value="Chercher" class="formbutton" onclick="submitbutton('submit_finder')" /></td>
        </tr>
    </form>

    <?php if ($this->_tpl_vars['logged_in']): ?>
    <tr><td class="separator"></td></tr>

    <form action="search.php" method="<?php echo $this->_tpl_vars['formmethod']; ?>
" enctype="application/x-www-form-urlencoded" name="searchall" dir="ltr" style="display:inline;">
        <input type="hidden" name="searchto" value="searchall" />
        <input type="hidden" name="showresult" value="1" />
        <input type="hidden" name="expert" value="0" />
        <input type="hidden" name="output" value="HTML" />
        <input type="hidden" name="utf8" value="1" />

        <input type="hidden" name="sort" value="<?php echo $this->_tpl_vars['hidopt_sort']; ?>
" />
        <input type="hidden" name="orderRatingFirst" value="<?php echo $this->_tpl_vars['hidopt_orderRatingFirst']; ?>
" />
        <input type="hidden" name="f_userowner" value="<?php echo $this->_tpl_vars['hidopt_userowner']; ?>
" />
        <input type="hidden" name="f_userfound" value="<?php echo $this->_tpl_vars['hidopt_userfound']; ?>
" />
        <input type="hidden" name="f_inactive" value="<?php echo $this->_tpl_vars['hidopt_inactive']; ?>
" />
        <input type="hidden" name="f_disabled" value="<?php echo $this->_tpl_vars['hidopt_disabled']; ?>
" />
        <input type="hidden" name="f_ignored" value="<?php echo $this->_tpl_vars['hidopt_ignored']; ?>
" />
        <input type="hidden" name="f_otherPlatforms" value="<?php echo $this->_tpl_vars['hidopt_otherPlatforms']; ?>
" />
        <input type="hidden" name="f_geokrets" value="<?php echo $this->_tpl_vars['hidopt_geokrets']; ?>
" />
        <input type="hidden" name="country" value="<?php echo $this->_tpl_vars['country']; ?>
" />
        <input type="hidden" name="language" value="<?php echo $this->_tpl_vars['language']; ?>
" />
        <input type="hidden" name="difficultymin" value="<?php echo $this->_tpl_vars['difficultymin']; ?>
" />
        <input type="hidden" name="difficultymax" value="<?php echo $this->_tpl_vars['difficultymax']; ?>
" />
        <input type="hidden" name="terrainmin" value="<?php echo $this->_tpl_vars['terrainmin']; ?>
" />
        <input type="hidden" name="terrainmax" value="<?php echo $this->_tpl_vars['terrainmax']; ?>
" />
        <input type="hidden" name="cachetype" value="<?php echo $this->_tpl_vars['cachetype']; ?>
" />
        <input type="hidden" name="cachesize" value="<?php echo $this->_tpl_vars['cachesize']; ?>
" />
        <input type="hidden" name="cache_attribs" value="<?php echo $this->_tpl_vars['hidopt_attribs']; ?>
" />
        <input type="hidden" name="cache_attribs_not" value="<?php echo $this->_tpl_vars['hidopt_attribs_not']; ?>
" />

        <tr>
            <td class="formlabel">Tous les caches</td>
            <td></td>
            <td><input type="submit" name="submit_all" value="Chercher" class="formbutton" onclick="submitbutton('submit_all')" /></td>
        </tr>
    </form>
    <?php endif; ?>

    </table>
</div>

<div class="buffer" style="width: 500px;">&nbsp;</div>
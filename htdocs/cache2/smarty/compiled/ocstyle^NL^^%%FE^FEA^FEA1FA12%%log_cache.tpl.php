<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:39
         compiled from log_cache.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'log_cache.tpl', 186, false),)), $this); ?>
<script type="text/javascript" src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/js/wz_tooltip.js"></script>
<script type="text/javascript" src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/js/tip_balloon.js"></script>
<script type="text/javascript" src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/js/tip_centerwindow.js"></script>
<script type="text/javascript">
<!--
var cache_needs_maintenance = <?php echo $this->_tpl_vars['cache_needs_maintenance']; ?>
;
var cachetype = <?php echo $this->_tpl_vars['cachetype']; ?>
;
var logtype_allows_nm = [<?php echo $this->_tpl_vars['logtype_allows_nm']; ?>
];
var tip_general_nm = "Select <i>needs maintenance</i> if the geocache was in poor condition at the<br />specified date and in urgent need of maintenance. Please explain why.<br /><div style='height:0.3em'></div>Select <i>ok</i> if you have found or checked the cache and everything is ok.";
var tip_general_lo = "<?php if ($this->_tpl_vars['gcwp']): ?>Select <i>is outdated</i> if the geocache search is hampered by outdated information<br />in the description, e.g. the location has severely changed or the description lacks<br />important information which has been added at another geocaching website.<br />Please give details in your log.<?php else: ?>Select <i>is outdated</i> if the geocache search is hampered by outdated information<br />in the description, e.g. because the location has severely changed. Please give<br />details in your log.<?php endif; ?><?php if ($this->_tpl_vars['ownerlog'] || $this->_tpl_vars['cache_listing_is_outdated']): ?><br /><div style='height:0.3em'></div><?php if ($this->_tpl_vars['gcwp']): ?>Select <i>up to date</i> if you have checked the complete description &ndash; from the<br />container size to encoded hints and additoional wayoints &ndash;, have compared<br />it to the geocaching.com listing (<?php echo $this->_tpl_vars['gcwp']; ?>
) and can confirm that everything is<br />up-to-date.<?php else: ?>Select <i>up to date</i> if you have checked the complete description &ndash; from the<br />container size to encoded hints and additoional wayoints &ndash; and can confirm<br />that everything is up-to-date.<?php endif; ?><?php endif; ?>";
var tip_activate_nm = 'By logging "Available", you also confirm that the geocache is in good condition.';
var tip_activate_lo = 'By logging "Available", you also confirm that the geocache description is up-to-date.';
var tip_disable_nm = "You may indicate here what is the current maintenance state of the geocache.";
var tip_disable_lo = "You may indicate here if the cache description is up-to-date.";
var tip_dnf_nm = "If you are sure that the geocache is gone, and the owner does not<br />react to your log entry, you may report it to the Opencaching team.<br />Use the 'Report this cache' button above the cache description.";

var cache_listing_is_outdated = <?php echo $this->_tpl_vars['cache_listing_is_outdated']; ?>
 + 0;
var ownerlog = <?php echo $this->_tpl_vars['ownerlog']; ?>
 + 0;
var dnf_by_logger = <?php echo $this->_tpl_vars['dnf_by_logger']+0; ?>
 && !ownerlog;

<?php echo '

function insertSmiley(smileySymbol, smileyPath)
{
  var myText = document.editform.logtext;
  var insertText = (descMode == 1 ? smileySymbol : \'<img src="\' + smileyPath + \'" alt="" border="0" width="18px" height="18px" />\');
  myText.focus();

  /* for IE and Webkit */
  if(typeof document.selection != \'undefined\') {
    var range = document.selection.createRange();
    var selText = range.text;
    range.text = insertText + selText;
  }
  /* for Firefox/Mozilla */
  else if (typeof myText.selectionStart != \'undefined\')
  {
    var start = myText.selectionStart;
    var end = myText.selectionEnd;
    var selText = myText.value.substring(start, end);
    myText.value = myText.value.substr(0, start) + insertText + selText + myText.value.substr(end);
    /* Cursorposition hinter Smiley setzen */
    myText.selectionStart = start + insertText.length;
    myText.selectionEnd = start + insertText.length;
  }
  /* other Browsers */
  else
  {
    alert(navigator.appName + ": '; ?>
Setting smilies is not supported.<?php echo '");
  }
}

function logtype_changed()
{
    '; ?>

    var logtype = parseInt(document.editform.logtype.value);
    var datecomment = document.getElementById('datecomment');
    var hint = '<img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/hint.gif" border="0" width="15" height="11" />';

    if (logtype == 1)
        datecomment.innerHTML = hint + "When did you find the geocache?";
    else if (logtype == 2)
        datecomment.innerHTML = hint + "When did you abort the cache search?";
    else
        datecomment.innerHTML = "";
    <?php echo '

    if (logtype == 1 || logtype == 7)
    {
        if (document.editform.rating)
            document.editform.rating.disabled = false;
    }
    else
    {
        if (document.editform.rating)
            document.editform.rating.disabled = true;
    }

    var condition_logging = false;
    if (cachetype != 6 && logtype_allows_nm.indexOf(logtype) >= 0)
    {
        document.getElementById(\'cache_condition\').style.display = \'\';
        document.getElementById(\'cache_condition_spacer\').style.display = \'\';
        condition_logging = true;
    }
    else
    {
        document.getElementById(\'cache_condition\').style.display = \'none\';
        document.getElementById(\'cache_condition_spacer\').style.display = \'none\';
    }

    var new_logtype = parseInt(document.editform.logtype.value);
    var nm = document.getElementById(\'needs_maintenance\');
    var lo = document.getElementById(\'listing_outdated\');
    var confirm_Lo = document.getElementById(\'confirm_listing_ok\');

    if (((new_logtype == 2) != (old_logtype == 2)) ||
        (dnf_by_logger && (new_logtype == 3) != (old_logtype == 3)))
    {
        nm.value = "0";
        var nmdisable = !ownerlog && ((new_logtype == 2) || (new_logtype == 3 && dnf_by_logger));
        nm.disabled = nmdisable;
        nm.className = (nmdisable ? \'disabled\' : \'\');

        lo.value = "0";
        lo.disabled = (!ownerlog && new_logtype == 2);
        lo.className = (!ownerlog && new_logtype == 2 ? \'disabled\' : \'\');
    }

    if ((new_logtype == 10) != (old_logtype == 10))
    {
        nm.value = (old_logtype == 10 ? "0" : "1");
        nm.disabled = (new_logtype == 10);
        nm.className = (new_logtype == 10 ? \'disabled\' : \'\');

        lo.value = (old_logtype == 10 ? "0" : "1");
        lo.disabled = (new_logtype == 10);
        lo.className = (new_logtype == 10 ? \'disabled\' : \'\');
        confirm_Lo.value = (new_logtype == 10 ? "1" : "0");
    }

    old_logtype = new_logtype;

    // This allows us to post also disabled fields\' values:
    document.getElementById(\'needs_maintenance2\').value = nm.value;
    document.getElementById(\'listing_outdated2\').value = lo.value;

    var clo_spacer = document.getElementById(\'confirm_listing_ok_spacer\');
    var clo_row = document.getElementById(\'confirm_listing_ok_row\');

    if (!condition_logging || lo.value != 1 || ownerlog || !cache_listing_is_outdated)
    {
        clo_spacer.style.display = \'none\';
        clo_row.style.display = \'none\';
    }
    else
    {
        clo_spacer.style.display = \'\';
        clo_row.style.display = \'\';
    }

    return false;
}

function show_nm_tip()
{
    var logtype = document.editform.logtype.value;
    if (logtype == "10")
        show_tip(tip_activate_nm);
    else if (logtype == "11")
        show_tip(tip_disable_nm);
    else if (!ownerlog && (logtype == "2" || (dnf_by_logger && logtype == 3)))
        show_tip(tip_dnf_nm);
    else
        show_tip(tip_general_nm);
}

function show_lo_tip()
{
    var logtype = document.editform.logtype.value;
    if (logtype == "10")
        show_tip(tip_activate_lo);
    else if (logtype == "11")
        show_tip(tip_disable_lo);
    else if (logtype != "2" || ownerlog)
        show_tip(tip_general_lo);
}

function show_tip(text)
{
    Tip(text, DELAY, 0, FADEIN, false, FADEOUT, false, BGCOLOR, "#fffedf", BORDERCOLOR, "grey");
}

//-->
'; ?>

<?php ob_start(); ?><a href="viewcache.php?cacheid=<?php echo $this->_tpl_vars['cacheid']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['cachename'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a><?php $this->_smarty_vars['capture']['cachelink'] = ob_get_contents();  $this->assign('cachelink', ob_get_contents());ob_end_clean(); ?>
</script>

<div class="content2-pagetitle">
    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/description/22x22-logs.png" style="margin-right: 10px;" width="22" height="22" alt="" />
    Add log-entry for the cache <?php echo $this->_tpl_vars['cachelink']; ?>

</div>
<form action="log.php" method="post" enctype="application/x-www-form-urlencoded" name="editform" dir="ltr">
<?php if ($this->_tpl_vars['masslog'] == true): ?>
<p class="redtext">
    You submitted more than <?php echo $this->_tpl_vars['masslogCount']; ?>
 identical logs. Please make sure that you are entering the date of your cache visit, not the current date - also when "late logging" old finds.
</p>
<p>
    Wrong log dates can impair several OC functions like searching by last log date. Also, the owner and other caches may think that the cache has been currently found (date and type of the last log are shown in the owner's caches list!), which can adversely affect cache maintenance and lead to more DNFs.
</p>
<p class="spacer_before">
    <input type="checkbox" name="suppressMasslogWarning" value="1" class="checkbox" id="suppressMasslogWarning" /> <label for="suppressMasslogWarning">I know what I am doing, do not show this advice again today.</label>
</p>
<?php endif; ?>
<?php if ($this->_tpl_vars['showstatfounds'] == true): ?>
<p class="align-right">
    <b>You found <?php echo $this->_tpl_vars['userFound']; ?>
 caches until now.</b>
</p>
<?php endif; ?>
<input type="hidden" name="cacheid" value="<?php echo $this->_tpl_vars['cacheid']; ?>
"/>
<input type="hidden" name="version3" value="1"/>
<input id="descMode" type="hidden" name="descMode" value="1" />
<input id="oldDescMode" type="hidden" name="oldDescMode" value="1" />
<input type="hidden" name="scrollposx" value="<?php echo $this->_tpl_vars['scrollposx']; ?>
" />
<input type="hidden" name="scrollposy" value="<?php echo $this->_tpl_vars['scrollposy']; ?>
" />
<input type="hidden" id="needs_maintenance2" name="needs_maintenance2" value="0" />
<input type="hidden" id="listing_outdated2" name="listing_outdated2" value="0" />
<table class="table">
    <tr><td class="spacer" colspan="2"></td></tr>
    <tr><td colspan="2"></td></tr>
    <tr>
        <td width="180px">Type of log-entry:</td>
        <td>
            <select name="logtype" onChange="return logtype_changed()">
                <?php $_from = $this->_tpl_vars['logtypes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['logtypeoption']):
?>
                <option value="<?php echo $this->_tpl_vars['logtypeoption']['id']; ?>
"<?php if ($this->_tpl_vars['logtypeoption']['selected']): ?> selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['logtypeoption']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
            </select>
            <?php if ($this->_tpl_vars['octeamcommentallowed']): ?>
            &nbsp; <input type="checkbox" name="teamcomment" value="1" class="checkbox" <?php if ($this->_tpl_vars['octeamcomment']): ?>checked<?php endif; ?> id="teamcomment" /> <label for="teamcomment"><span class="<?php echo $this->_tpl_vars['octeamcommentclass']; ?>
">OC team comment</span></label>
            <?php endif; ?>
        </td>
    </tr>
    <tr><td class="spacer" colspan="2"></td></tr>
    <tr>
        <td width="180px">Date / time:</td>
        <td>
            <input class="input20" type="text" id="logday" name="logday" maxlength="2" value="<?php echo $this->_tpl_vars['logday']; ?>
" />.
            <input class="input20" type="text" id="logmonth" name="logmonth" maxlength="2" value="<?php echo $this->_tpl_vars['logmonth']; ?>
" />.
            <input class="input40" type="text" id="logyear" name="logyear" maxlength="4" value="<?php echo $this->_tpl_vars['logyear']; ?>
" />
            &nbsp;&nbsp;&nbsp;
            <input class="input20" type="text" id="loghour" name="loghour" maxlength="2" value="<?php echo $this->_tpl_vars['loghour']; ?>
" /> :
            <input class="input20" type="text" id="logminute" name="logminute" maxlength="2" value="<?php echo $this->_tpl_vars['logminute']; ?>
" />
            &nbsp;&nbsp;&nbsp; <span id="datecomment"></span>
            <?php if ($this->_tpl_vars['validate']['dateOk'] == false): ?><br /><span class="errormsg">date or time is invalid</span><?php endif; ?>
        </td>
    </tr>
    <tr><td class="spacer" colspan="2"></td></tr>
    <tr id="cache_condition">
        <td>Geocache condition:</td>
        <td>
            <span id="nmtip" onmouseover='show_nm_tip()' onmouseout="UnTip()">
            <select id="needs_maintenance" name="needs_maintenance" onchange="logtype_changed()">
                <option value="0" <?php if ($this->_tpl_vars['needs_maintenance'] == 0): ?>selected="selected"<?php endif; ?>>not specified</option>
                <option value="2" <?php if ($this->_tpl_vars['needs_maintenance'] == 2): ?>selected="selected"<?php endif; ?>>needs maintenance</option>
                <option value="1" <?php if ($this->_tpl_vars['needs_maintenance'] == 1): ?>selected="selected"<?php endif; ?>>ok</option>
            </select>
            </span>
            &nbsp; &nbsp; &nbsp; &nbsp;
            Description:&nbsp;
            <span id="lotip" onmouseover='show_lo_tip()' onmouseout="UnTip()">
            <select id="listing_outdated" name="listing_outdated" onchange="logtype_changed()">
                <option value="0" <?php if ($this->_tpl_vars['listing_outdated'] == 0): ?>selected="selected"<?php endif; ?>>not specified</option>
                <option value="2" <?php if ($this->_tpl_vars['listing_outdated'] == 2): ?>selected="selected"<?php endif; ?>>outdated</option>
                <?php if ($this->_tpl_vars['ownerlog'] || $this->_tpl_vars['cache_listing_is_outdated']): ?><option value="1" <?php if ($this->_tpl_vars['listing_outdated'] == 1): ?>selected="selected"<?php endif; ?>>up to date</option><?php endif; ?>
            </select>
            </span>
        </td>
    </tr>
    <tr><td class="spacer" colspan="2" id="confirm_listing_ok_spacer" style="display:none"></td></tr>
    <tr id="confirm_listing_ok_row" style="display:none">
        <td style="vertical-align:top">
            <?php if ($this->_tpl_vars['validate']['confirmListingOk'] === false): ?><span class="errormsg">Please confirm:</span><?php endif; ?>
        </td>
        <td>
            <input type="checkbox" id="confirm_listing_ok" name="confirm_listing_ok" value="1" class="checkbox" <?php if ($this->_tpl_vars['ownerlog']): ?>checked<?php endif; ?>/> <label for="confirm_listing_ok">The problems of the cache description as mentioned in the <a href="<?php echo $this->_tpl_vars['cache_listing_outdated_log']; ?>
" target="_blank"><img src="resource2/ocstyle/images/log/16x16-listing-outdated.png" /> log entries</a> do no longer exist. <?php if ($this->_tpl_vars['gcwp']): ?>All information (coordinates, container size, difficulty, terrain, description text, encoded hints, additional waypoints) is at least up-to-date with <a href="http://www.geocaching.com/seek/cache_details.aspx?wp=<?php echo $this->_tpl_vars['gcwp']; ?>
" target="_blank"><?php echo $this->_tpl_vars['gcwp']; ?>
</a>.<?php endif; ?>
        </td>
    </tr>
    <tr id="cache_condition_spacer"><td class="spacer" colspan="2"></td></tr>
    <?php if ($this->_tpl_vars['isowner'] == false): ?>
    <tr>
        <td valign="top">Aanbeveling:</td>
        <td valign="top">
            <?php if (( $this->_tpl_vars['ratingallowed'] == true || $this->_tpl_vars['israted'] == true )): ?><input type="hidden" name="ratingoption" value="1"><input type="checkbox" id="rating" name="rating" value="1" class="checkbox" <?php if ($this->_tpl_vars['israted'] == true): ?>checked<?php endif; ?>/>&nbsp;<label for="rating">This cache is one of my recommendations.</label><br />
                Je hebt <?php echo $this->_tpl_vars['givenratings']; ?>
 van de <?php echo $this->_tpl_vars['maxratings']; ?>
 mogelijke aanbevelingen gegeven.
            <?php else: ?>
                U dient nog <?php echo $this->_tpl_vars['foundsuntilnextrating']; ?>
 cache(s) te vinden om een aanbeveling te geven.
                <?php if (( $this->_tpl_vars['givenratings'] > 0 && $this->_tpl_vars['givenratings'] == $this->_tpl_vars['maxratings'] && $this->_tpl_vars['israted'] == false )): ?><br />Alternatively, you can withdraw a <a href="mytop5.php">existing recommendation</a>.<?php endif; ?>
            <?php endif; ?>
            <noscript><br />A recommendation can only be made with a "found" or "attended" log!</noscript>
        </td>
    </tr>
    <?php endif; ?>
</table>

<table class="table">
    <tr>
        <td colspan="2">
            <div class="menuBar">
                <span id="descHtmlEdit" class="buttonNormal" onclick="btnSelect(3)" onmouseover="btnMouseOver(3)" onmouseout="btnMouseOut(3)">Editor</span>
                <span class="buttonSplitter">|</span>
                <span id="descHtml" class="buttonNormal" onclick="btnSelect(2)" onmouseover="btnMouseOver(2)" onmouseout="btnMouseOut(2)">&lt;html&gt;</span>
                <span class="buttonSplitter">|</span>
                <span id="descText" class="buttonNormal" onclick="btnSelect(1)" onmouseover="btnMouseOver(1)" onmouseout="btnMouseOut(1)">Tekst</span>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <span id="scriptwarning" class="errormsg">JavaScript is disabled in your browser, you can enter text only. To use HTML, or the editor, please enable JavaScript.</span>
        </td>
    </tr>
    <tr>
        <td>
            <textarea name="logtext" id="logtext" cols="68" rows="15" class="logs"><?php echo ((is_array($_tmp=$this->_tpl_vars['logtext'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea>
    </td>
    </tr>
    <?php if ($this->_tpl_vars['descMode'] != 3): ?>
    <tr>
        <td colspan="2">
            <?php echo ''; ?><?php $_from = $this->_tpl_vars['smilies']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['smiley']):
?><?php echo ''; ?><?php if ($this->_tpl_vars['smiley']['show']): ?><?php echo '<a href="javascript:insertSmiley(\''; ?><?php echo $this->_tpl_vars['smiley']['text']; ?><?php echo '\',\''; ?><?php echo $this->_tpl_vars['smileypath']; ?><?php echo ''; ?><?php echo $this->_tpl_vars['smiley']['file']; ?><?php echo '\')">'; ?><?php echo $this->_tpl_vars['smiley']['image']; ?><?php echo '</a> &nbsp;'; ?><?php endif; ?><?php echo ''; ?><?php endforeach; endif; unset($_from); ?><?php echo ''; ?>

        </td>
    </tr>
    <?php endif; ?>
    <tr><td class="spacer" colspan="2"></td></tr>
    <?php if ($this->_tpl_vars['logpw']): ?>
    <tr>
        <td colspan="2">Passwort to log:
            <input class="input100" type="text" name="log_pw" maxlength="20" value="" /> <?php if (! $this->_tpl_vars['validate']['logPw']): ?><span class="errormsg">Invalid password!</span><?php else: ?>(<?php if ($this->_tpl_vars['cachetype'] == 6): ?>only for 'attended' logs<?php else: ?>only for found logs<?php endif; ?>)<?php endif; ?>
        </td>
    </tr>
    <tr><td class="spacer" colspan="2"></td></tr>
    <?php endif; ?>
    <tr><td class="spacer" colspan="2"></td></tr>
    <tr>
        <td colspan="2">
            By submitting I accept the <a href="articles.php?page=impressum#tos" target="_blank">Opencaching.de Terms of Service</a> and the <a href="articles.php?page=impressum#datalicense" target="_blank">Opencaching.de Data license</a>.
        </td>
    </tr>
    <tr><td class="spacer" colspan="2"></td></tr>
    <tr>
        <td class="header-small" colspan="2">
            <input type="submit" name="submitform" value="Log deze cache" class="formbutton" onclick="submitbutton('submitform')" />
        </td>
    </tr>
</table>
</form>

<script type="text/javascript">
<!--
    var descMode = <?php echo $this->_tpl_vars['descMode']; ?>
;
    OcInitEditor();
    var old_logtype = parseInt(document.editform.logtype.value);
    logtype_changed();
//-->
</script>
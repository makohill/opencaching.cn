<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:38
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
var tip_general_nm = "Wähle <i>benötigt Wartung</i>, wenn der Cache zum angegebenen Zeitpunkt in<br />schlechtem Zustand war und dringend Wartung benötigte. Bitte erkläre<br />Genaueres in deinem Logeintrag.<br /><div style='height:0.3em'></div>Wähle <i>ok</i>, wenn du den Cache gefunden oder kontrolliert hast und alles ok ist.";
var tip_general_lo = "<?php if ($this->_tpl_vars['gcwp']): ?>Wähle <i>veraltet</i>, wenn die Cachesuche durch veraltete Angaben in der Beschreibung<br />erheblich erschwert ist, z.&nbsp;B. weil der Ort sich stark verändert hat, oder weil wichtige<br />Informationen fehlen, die auf einer anderen Geocaching-Website vorhanden sind.<br />Bitte erkläre in deinem Logeintrag Genaueres.<?php else: ?>Wähle <i>veraltet</i>, wenn die Cachesuche durch veraltete Angaben in der Beschreibung<br />erheblich erschwert ist, zum Beispiel weil der Ort sich stark verändert hat. Bitte<br />erkläre in deinem Logeintrag Genaueres.<?php endif; ?><?php if ($this->_tpl_vars['ownerlog'] || $this->_tpl_vars['cache_listing_is_outdated']): ?><br /><div style='height:0.3em'></div><?php if ($this->_tpl_vars['gcwp']): ?>Wähle <i>in Ordnung</i>, wenn du die vollständige Beschreibung &ndash; von der Behältergroße<br />bis zu verschlüsselten Hinweisen und zusätzlichen Wegpunkten &ndash; geprüft und mit dem<br />GC-Listing (<?php echo $this->_tpl_vars['gcwp']; ?>
) verglichen hast, und alles auf aktuellem Stand ist.<?php else: ?>Wähle <i>in Ordnung</i>, wenn du die vollständige Beschreibung &ndash; von der Behältergroße<br />bis zu verschlüsselten Hinweisen und zusätzlichen Wegpunkten &ndash; geprüft hast,<br >und alles auf aktuellem Stand ist.<?php endif; ?><?php endif; ?>";
var tip_activate_nm = 'Mit einem &bdquo;kann-gesucht-werden&ldquo;-Log bestätigst du auch,<br />dass der Cache in guten Zustand ist.';
var tip_activate_lo = 'Mit einem &bdquo;kann-gesucht-werden&ldquo;-Log bestätigst du auch,<br />dass die Cachebeschreibung aktuell ist.';
var tip_disable_nm = "Hier kannst du den aktuellen Wartungszustand des Caches angeben.";
var tip_disable_lo = "Hier kannst du den aktuellen Zustand der Cachebeschreibung angeben.";
var tip_dnf_nm = "Wenn du sicher bist, dass der Cache nicht mehr da ist, und der Besitzer <br />nicht auf dein Log reagiert, kannst du eine Meldung an das Opencaching-<br />Team senden. Verwende dazu den Knopf 'Cache melden' oberhalb der <br />Cachebeschreibung.";

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
Smilies werden nicht unterstützt.<?php echo '");
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
        datecomment.innerHTML = hint + "Wann hast du den Cache gefunden?";
    else if (logtype == 2)
        datecomment.innerHTML = hint + "Wann hast du die Suche abgebrochen?";
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
    Logeintrag f&uuml;r den Cache <?php echo $this->_tpl_vars['cachelink']; ?>
 hinzuf&uuml;gen
</div>
<form action="log.php" method="post" enctype="application/x-www-form-urlencoded" name="editform" dir="ltr">
<?php if ($this->_tpl_vars['masslog'] == true): ?>
<p class="redtext">
    Du hast bereits mehr als <?php echo $this->_tpl_vars['masslogCount']; ?>
 identische Logs eingetragen. Bitte überprüfe, ob du das Datum deiner Cachesuchen eingibst, nicht das heutige Datum &ndash; auch beim &bdquo;Nachloggen&ldquo; alter Funde.
</p>
<p>
    Ein falsches Logdatum kann verschiedene Funktionen der OC-Software beeinträchtigen, wie z.&nbsp;B. die Suchsortierung nach letzten Logdatum. Außerdem kann der Eindruck entstehen, der Cache sei kürzlich gefunden worden (Datum und Art des letzten Logs erscheinen in der Cacheübersicht des Owners!), was die Cachewartung beeinträchtigt und zu mehr DNF führen kann.
</p>
<p class="spacer_before">
    <input type="checkbox" name="suppressMasslogWarning" value="1" class="checkbox" id="suppressMasslogWarning" /> <label for="suppressMasslogWarning">Ich weiß was ich tue &ndash; diesen Hinweis heute nicht mehr anzeigen.</label>
</p>
<?php endif; ?>
<?php if ($this->_tpl_vars['showstatfounds'] == true): ?>
<p class="align-right">
    <b>Du hast bis jetzt <?php echo $this->_tpl_vars['userFound']; ?>
 Caches gefunden.</b>
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
        <td width="180px">Art des Logeintrages:</td>
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
">OC-Team-Kommentar</span></label>
            <?php endif; ?>
        </td>
    </tr>
    <tr><td class="spacer" colspan="2"></td></tr>
    <tr>
        <td width="180px">Datum / Uhrzeit:</td>
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
            <?php if ($this->_tpl_vars['validate']['dateOk'] == false): ?><br /><span class="errormsg">Datum oder Uhrzeit ist ungültig</span><?php endif; ?>
        </td>
    </tr>
    <tr><td class="spacer" colspan="2"></td></tr>
    <tr id="cache_condition">
        <td>Zustand des Caches:</td>
        <td>
            <span id="nmtip" onmouseover='show_nm_tip()' onmouseout="UnTip()">
            <select id="needs_maintenance" name="needs_maintenance" onchange="logtype_changed()">
                <option value="0" <?php if ($this->_tpl_vars['needs_maintenance'] == 0): ?>selected="selected"<?php endif; ?>>keine Angabe</option>
                <option value="2" <?php if ($this->_tpl_vars['needs_maintenance'] == 2): ?>selected="selected"<?php endif; ?>>benötigt Wartung</option>
                <option value="1" <?php if ($this->_tpl_vars['needs_maintenance'] == 1): ?>selected="selected"<?php endif; ?>>ok</option>
            </select>
            </span>
            &nbsp; &nbsp; &nbsp; &nbsp;
            Beschreibung:&nbsp;
            <span id="lotip" onmouseover='show_lo_tip()' onmouseout="UnTip()">
            <select id="listing_outdated" name="listing_outdated" onchange="logtype_changed()">
                <option value="0" <?php if ($this->_tpl_vars['listing_outdated'] == 0): ?>selected="selected"<?php endif; ?>>keine Angabe</option>
                <option value="2" <?php if ($this->_tpl_vars['listing_outdated'] == 2): ?>selected="selected"<?php endif; ?>>veraltet</option>
                <?php if ($this->_tpl_vars['ownerlog'] || $this->_tpl_vars['cache_listing_is_outdated']): ?><option value="1" <?php if ($this->_tpl_vars['listing_outdated'] == 1): ?>selected="selected"<?php endif; ?>>in Ordnung</option><?php endif; ?>
            </select>
            </span>
        </td>
    </tr>
    <tr><td class="spacer" colspan="2" id="confirm_listing_ok_spacer" style="display:none"></td></tr>
    <tr id="confirm_listing_ok_row" style="display:none">
        <td style="vertical-align:top">
            <?php if ($this->_tpl_vars['validate']['confirmListingOk'] === false): ?><span class="errormsg">Bitte bestätigen:</span><?php endif; ?>
        </td>
        <td>
            <input type="checkbox" id="confirm_listing_ok" name="confirm_listing_ok" value="1" class="checkbox" <?php if ($this->_tpl_vars['ownerlog']): ?>checked<?php endif; ?>/> <label for="confirm_listing_ok">Die in den <a href="<?php echo $this->_tpl_vars['cache_listing_outdated_log']; ?>
" target="_blank"><img src="resource2/ocstyle/images/log/16x16-listing-outdated.png" />-Logeinträgen</a> erwähnten Probleme mit der Cachebeschreibung bestehen nicht mehr. <?php if ($this->_tpl_vars['gcwp']): ?>Alle Angaben (Koordinaten, Behältergröße, Schwierigkeit, Geländewertung, Beschreibungstext, verschlüsselte Hinweise, zusätzliche Wegpunkte) sind mindestens auf dem Stand von <a href="http://www.geocaching.com/seek/cache_details.aspx?wp=<?php echo $this->_tpl_vars['gcwp']; ?>
" target="_blank"><?php echo $this->_tpl_vars['gcwp']; ?>
</a>.<?php endif; ?>
        </td>
    </tr>
    <tr id="cache_condition_spacer"><td class="spacer" colspan="2"></td></tr>
    <?php if ($this->_tpl_vars['isowner'] == false): ?>
    <tr>
        <td valign="top">Empfehlung:</td>
        <td valign="top">
            <?php if (( $this->_tpl_vars['ratingallowed'] == true || $this->_tpl_vars['israted'] == true )): ?><input type="hidden" name="ratingoption" value="1"><input type="checkbox" id="rating" name="rating" value="1" class="checkbox" <?php if ($this->_tpl_vars['israted'] == true): ?>checked<?php endif; ?>/>&nbsp;<label for="rating">Dieser Cache gehört zu meinen Empfehlungen.</label><br />
                Du hast <?php echo $this->_tpl_vars['givenratings']; ?>
 von <?php echo $this->_tpl_vars['maxratings']; ?>
 möglichen Empfehlungen abgegeben.
            <?php else: ?>
                Du benötigst noch <?php echo $this->_tpl_vars['foundsuntilnextrating']; ?>
 Funde, um eine weitere Empfehlung vorzunehmen.
                <?php if (( $this->_tpl_vars['givenratings'] > 0 && $this->_tpl_vars['givenratings'] == $this->_tpl_vars['maxratings'] && $this->_tpl_vars['israted'] == false )): ?><br />Alternativ kannst du eine <a href="mytop5.php">vorhandene Empfehlung</a> zurückziehen.<?php endif; ?>
            <?php endif; ?>
            <noscript><br />Eine Empfehlung kann nur bei einem Gefunden- oder Teilgenommen-Logeintrag vorgenommen werden!</noscript>
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
                <span id="descText" class="buttonNormal" onclick="btnSelect(1)" onmouseover="btnMouseOver(1)" onmouseout="btnMouseOut(1)">Text</span>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <span id="scriptwarning" class="errormsg">JavaScript ist bei deinem Browser deaktiviert, du kannst nur Text eingeben. Um HTML oder den Editor zu verwenden, aktiviere bitte JavaScript.</span>
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
        <td colspan="2">Kennwort zum Loggen:
            <input class="input100" type="text" name="log_pw" maxlength="20" value="" /> <?php if (! $this->_tpl_vars['validate']['logPw']): ?><span class="errormsg">Das Kennwort stimmt nicht!</span><?php else: ?>(<?php if ($this->_tpl_vars['cachetype'] == 6): ?>nur für Teilgenommen-Logs<?php else: ?>nur für Gefunden-Logs<?php endif; ?>)<?php endif; ?>
        </td>
    </tr>
    <tr><td class="spacer" colspan="2"></td></tr>
    <?php endif; ?>
    <tr><td class="spacer" colspan="2"></td></tr>
    <tr>
        <td colspan="2">
            Mit dem Absenden akzeptiere ich die <a href="articles.php?page=impressum#tos" target="_blank">Opencaching.de-Nutzungsbedingungen</a> und -<a href="articles.php?page=impressum#datalicense" target="_blank">Datenlizenz</a>.
        </td>
    </tr>
    <tr><td class="spacer" colspan="2"></td></tr>
    <tr>
        <td class="header-small" colspan="2">
            <input type="submit" name="submitform" value="Log eintragen" class="formbutton" onclick="submitbutton('submitform')" />
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
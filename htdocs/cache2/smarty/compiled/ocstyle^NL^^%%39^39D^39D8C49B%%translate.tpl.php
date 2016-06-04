<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:47
         compiled from translate.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'translate.tpl', 77, false),array('modifier', 'base64encode', 'translate.tpl', 184, false),array('function', 'count', 'translate.tpl', 164, false),)), $this); ?>
<?php if ($this->_tpl_vars['action'] == 'selectlang'): ?>
    <p>Selecteer gewenste taal:</p>
    <?php $_from = $this->_tpl_vars['languages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['languageItem']):
?>
        <a href="translate.php?translang=<?php echo $this->_tpl_vars['languageItem']; ?>
"><?php echo $this->_tpl_vars['languageItem']; ?>
</a><br />
    <?php endforeach; endif; unset($_from); ?>
<?php else: ?>
    <p>
        Talen:&nbsp;
        <?php $_from = $this->_tpl_vars['languages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['languageItem']):
?>
            <?php if ($this->_tpl_vars['languageItem'] == $this->_tpl_vars['translang']): ?>
                <b><?php echo $this->_tpl_vars['languageItem']; ?>
</b>
            <?php else: ?>
                <a href="translate.php?translang=<?php echo $this->_tpl_vars['languageItem']; ?>
"><?php echo $this->_tpl_vars['languageItem']; ?>
</a>
            <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?>
    </p>

    <?php if ($this->_tpl_vars['datasqlfailed']): ?>
        <div class="errormsg">
            sql/static-data/data.sql has been changed with last CVS checkout.<br /> Before you change translastions, update database with data.sql!<br /> &nbsp;
        </div>
    <?php endif; ?>

    <p>
        Quick translation<br />
        <a href="translate.php?translang=<?php echo $this->_tpl_vars['translang']; ?>
&action=quicknone">Disable</a><br />
        <a href="translate.php?translang=<?php echo $this->_tpl_vars['translang']; ?>
&action=quicknew">Enable - new</a><br />
        <a href="translate.php?translang=<?php echo $this->_tpl_vars['translang']; ?>
&action=quickall">Enable - all</a><br />
        <br />
        <a href="translate.php?translang=<?php echo $this->_tpl_vars['translang']; ?>
&action=scan">Scan source codes</a><br />
        <br />
        <a href="translate.php?translang=<?php echo $this->_tpl_vars['translang']; ?>
&action=listnew">Laat nieuwe vertalingen zien</a><br />
        <a href="translate.php?translang=<?php echo $this->_tpl_vars['translang']; ?>
&action=listall">Laat alle vertalingen zien</a><br />
        <a href="translate.php?translang=<?php echo $this->_tpl_vars['translang']; ?>
&action=listfaults">Bekijk zonder verwijzende vertaling</a><br />
        <br />
        <a href="translate.php?translang=<?php echo $this->_tpl_vars['translang']; ?>
&action=verify">Show inconsistencies</a> (EN)<br />
        <a href="translate.php?translang=<?php echo $this->_tpl_vars['translang']; ?>
&action=clearcache">Smarty-Cache wissen</a><br />
        <a href="translate.php?translang=<?php echo $this->_tpl_vars['translang']; ?>
&action=resetids">ID's opnieuw sorteren</a> (voor een export)<br />
        <a href="translate.php?translang=<?php echo $this->_tpl_vars['translang']; ?>
&action=export">SQL Export</a><br />
        <br />
        <a href="translate.php?translang=<?php echo $this->_tpl_vars['translang']; ?>
&action=xmlexport">XML Download</a><br />
        <a href="translate.php?translang=<?php echo $this->_tpl_vars['translang']; ?>
&action=xmlimport">XML Import</a><br />
        <br />
        <a href="translate.php?translang=<?php echo $this->_tpl_vars['translang']; ?>
&action=textexportnew">Text download (new) <?php echo $this->_tpl_vars['translang']; ?>
</a><br />
        <a href="translate.php?translang=<?php echo $this->_tpl_vars['translang']; ?>
&action=textexportall">Text download (all) <?php echo $this->_tpl_vars['translang']; ?>
</a><br />
        <a href="translate.php?translang=<?php echo $this->_tpl_vars['translang']; ?>
&action=textimport">Text import <?php echo $this->_tpl_vars['translang']; ?>
</a><br />
        <?php if ($this->_tpl_vars['translang'] == 'EN'): ?>
            <a href="translate.php?translang=<?php echo $this->_tpl_vars['translang']; ?>
&action=copy_en">Copy EN</a><br />
        <?php endif; ?>
        <br />
    </p>

    <?php if ($this->_tpl_vars['action'] == 'listnew' || $this->_tpl_vars['action'] == 'listfaults' || $this->_tpl_vars['action'] == 'listall'): ?>
        <?php if ($this->_tpl_vars['action'] == 'listnew'): ?>
            <p>Nieuwe vertalingen:</p>
        <?php elseif ($this->_tpl_vars['action'] == 'listfaults'): ?>
            <p>Vertalingen zonder referentie:</p>
            <p><small>This table contains some false positives. References from the "libse" code (personal cache notes, additional waypoints) are not detected, as well as textes which are passed by variable to translation functions and multiline texts. "Help", "Forum", "Teamblog" and "Informations" are referenced in local configuration files. So be very careful before deleting anything.
              </small></p>
        <?php elseif ($this->_tpl_vars['action'] == 'listall'): ?>
            <p>Alle vertalingen:</p>
        <?php endif; ?>
        <table class="table">
            <tr><td></td></td></tr>
            <?php $_from = $this->_tpl_vars['trans']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['transItem']):
?>
                <tr>
                    <td valign="top"><a href="translate.php?translang=<?php echo $this->_tpl_vars['translang']; ?>
&action=edit&id=<?php echo $this->_tpl_vars['transItem']['id']; ?>
"><?php echo $this->_tpl_vars['transItem']['id']; ?>
</a></td>

                    <td valign="top"><a href="translate.php?translang=<?php echo $this->_tpl_vars['translang']; ?>
&action=remove&id=<?php echo $this->_tpl_vars['transItem']['id']; ?>
">X</a></td>

                    <td><?php echo ((is_array($_tmp=$this->_tpl_vars['transItem']['text'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
                </tr>
                <?php if ($this->_tpl_vars['action'] == 'listall'): ?>
                    <tr>
                        <td valign="top"><?php echo $this->_tpl_vars['translang']; ?>
</td>
                        <td>&nbsp;</td>
                        <td><?php echo ((is_array($_tmp=$this->_tpl_vars['transItem']['trans'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?>
        </table>
    <?php elseif ($this->_tpl_vars['action'] == 'edit'): ?>
        <form action="translate.php" method="post">
            <input type="hidden" name="action" value="edit" />
            <input type="hidden" name="translang" value="<?php echo $this->_tpl_vars['translang']; ?>
" />
            <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['id']; ?>
" />
            <table class="table">
                <tr>
                    <td><?php echo ((is_array($_tmp=$this->_tpl_vars['text'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
                </tr>
                <?php $_from = $this->_tpl_vars['transRef']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['refItem']):
?>
                    <tr>
                        <td>@ <?php echo $this->_tpl_vars['refItem']['style']; ?>
 <?php echo $this->_tpl_vars['refItem']['resource_name']; ?>
 <?php echo $this->_tpl_vars['refItem']['line']; ?>
</td>
                    </tr>
                <?php endforeach; endif; unset($_from); ?>
                <tr>
                    <td>
                        <textarea name="transText" cols="70" rows="10"><?php echo ((is_array($_tmp=$this->_tpl_vars['transText'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea>
                    </td>
                </tr>
                <tr>
                    <td align="right">
                        <input type="submit" name="submit2" value="Speichern" class="formbuttons" onclick="submitbutton('submit2')" />
                    <td>
                </tr>
                <tr><td>Gebruik bestaande vertalingen:</td></tr>
                <tr>
                    <td>
                        <table class="table">
                            <?php $_from = $this->_tpl_vars['trans']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['transItem']):
?>
                                <tr>
                                    <td valign="top"><a href="translate.php?translang=<?php echo $this->_tpl_vars['translang']; ?>
&action=edit&id=<?php echo $this->_tpl_vars['id']; ?>
&usetrans=<?php echo $this->_tpl_vars['transItem']['id']; ?>
"><?php echo $this->_tpl_vars['transItem']['id']; ?>
</a></td>
                                    <td><?php echo $this->_tpl_vars['transItem']['text']; ?>
</td>
                                </tr>
                            <?php endforeach; endif; unset($_from); ?>
                        </table>
                    </td>
                </tr>
            </table>
        </form>
    <?php elseif ($this->_tpl_vars['action'] == 'xmlimport'): ?>
        <form action="translate.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="action" value="xmlimport2" />
            <input type="hidden" name="translang" value="<?php echo $this->_tpl_vars['translang']; ?>
" />

            XML file containing the translations:<br />
            <input name="xmlfile" type="file" size="50" /><br />
            <br />
            Check the following languages in the XML file:<br />
            <?php $_from = $this->_tpl_vars['languages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['languageItem']):
?>
                <input type="checkbox" name="lang<?php echo $this->_tpl_vars['languageItem']; ?>
" value="1" class="radio" />
                <?php echo $this->_tpl_vars['languageItem']; ?>

                &nbsp;&nbsp;&nbsp;
            <?php endforeach; endif; unset($_from); ?>
            <br />
            <br />
            <input type="submit" name="submitfile1" value="Scan file" class="formbutton" onclick="submitbutton('submitfile1')" />
        </form>
    <?php elseif ($this->_tpl_vars['action'] == 'textimport'): ?>
        <form action="translate.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="action" value="textimport2" />
            <input type="hidden" name="translang" value="<?php echo $this->_tpl_vars['translang']; ?>
" />

            Text file containing the translations: <?php echo $this->_tpl_vars['translang']; ?>
<br />
            <input name="textfile" type="file" size="50" /><br />
            <br />
            <input type="submit" name="submitfile2" value="Scan file" class="formbutton" onclick="submitbutton('submitfile2')" />
        </form>
    <?php elseif ($this->_tpl_vars['action'] == 'xmlimport2' || $this->_tpl_vars['action'] == 'textimport2'): ?>
        <form action="translate.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="action" value="xmlimport3" />
            <input type="hidden" name="translang" value="<?php echo $this->_tpl_vars['translang']; ?>
" />
            <input type="hidden" name="count" value="<?php echo smarty_function_count(array('array' => $this->_tpl_vars['texts']), $this);?>
" />

            <table>
                <?php $_from = $this->_tpl_vars['texts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['textItem']):
?>
                    <tr>
                        <td>
                            <?php if ($this->_tpl_vars['textItem']['type'] != 1): ?>
                                <input type="checkbox" id="useitem<?php echo $this->_tpl_vars['textItem']['count']; ?>
" name="useitem<?php echo $this->_tpl_vars['textItem']['count']; ?>
" value="1" class="radio" />
                            <?php endif; ?>
                        </td>
                        <td>
                            <?php if ($this->_tpl_vars['textItem']['type'] == 1): ?>
                                Source code changed, text no longer used
                            <?php elseif ($this->_tpl_vars['textItem']['type'] == 2): ?>
                                Nieuwe vertaling
                            <?php elseif ($this->_tpl_vars['textItem']['type'] == 3): ?>
                                Veranderde vertaling
                            <?php endif; ?>
                        </td>
                        <td>
                            <input type="hidden" name="code<?php echo $this->_tpl_vars['textItem']['count']; ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['textItem']['code'])) ? $this->_run_mod_handler('base64encode', true, $_tmp) : smarty_modifier_base64encode($_tmp)); ?>
" />
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><b>ID</b> <?php echo ((is_array($_tmp=$this->_tpl_vars['textItem']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
                    </tr>
                    <?php if ($this->_tpl_vars['textItem']['code']): ?>
                    <tr>
                        <td></td>
                        <td><b>CODE</b> <?php echo ((is_array($_tmp=$this->_tpl_vars['textItem']['code'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
                    </tr>
                    <?php endif; ?>
                    <?php if ($this->_tpl_vars['textItem']['en'] && ( ! $this->_tpl_vars['textItem']['code'] || $this->_tpl_vars['textItem']['en'] != $this->_tpl_vars['textItem']['code'] )): ?>
                    <tr>
                        <td></td>
                        <td><b>EN</b> <?php echo ((is_array($_tmp=$this->_tpl_vars['textItem']['en'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
                    </tr>
                    <?php endif; ?>
                    <?php $_from = $this->_tpl_vars['languages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['languageItem']):
?>
                        <?php if ($this->_tpl_vars['textItem'][$this->_tpl_vars['languageItem']]): ?>
                            <?php if ($this->_tpl_vars['textItem']['type'] == 3): ?>
                                <tr>
                                    <td></td>
                                    <td><b><?php echo $this->_tpl_vars['languageItem']; ?>
</b> (oud) <?php echo ((is_array($_tmp=$this->_tpl_vars['textItem'][$this->_tpl_vars['languageItem']]['old'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
                                </tr>
                            <?php endif; ?>
                            <tr>
                                <td>
                                    <input type="hidden" name="<?php echo $this->_tpl_vars['languageItem']; ?>
<?php echo $this->_tpl_vars['textItem']['count']; ?>
old" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['textItem'][$this->_tpl_vars['languageItem']]['old'])) ? $this->_run_mod_handler('base64encode', true, $_tmp) : smarty_modifier_base64encode($_tmp)); ?>
" />
                                    <input type="hidden" name="<?php echo $this->_tpl_vars['languageItem']; ?>
<?php echo $this->_tpl_vars['textItem']['count']; ?>
new" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['textItem'][$this->_tpl_vars['languageItem']]['new'])) ? $this->_run_mod_handler('base64encode', true, $_tmp) : smarty_modifier_base64encode($_tmp)); ?>
" />
                                </td>
                                <td><b><?php echo $this->_tpl_vars['languageItem']; ?>
</b> (new) <?php echo ((is_array($_tmp=$this->_tpl_vars['textItem'][$this->_tpl_vars['languageItem']]['new'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; endif; unset($_from); ?>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                <?php endforeach; endif; unset($_from); ?>
            </table>
            <a href="javascript:toggleAll()">Toggle all</a><br />
            <br />
            <input type="submit" value="Commit" class="formbuttons"/>
        </form>
        <script type="text/javascript">
            <?php echo '
            <!--
                function toggleAll()
                {
                    var nCount = '; ?>
<?php echo smarty_function_count(array('array' => $this->_tpl_vars['texts']), $this);?>
<?php echo ';
                    for (var nIndex = 1; nIndex <= nCount; nIndex++)
                    {
                        var oCheckbox = document.getElementById(\'useitem\' + nIndex);
                        if (oCheckbox != null)
                        {
                            oCheckbox.checked = !oCheckbox.checked;
                        }
                    }
                }
            //-->
            '; ?>

        </script>
    <?php elseif ($this->_tpl_vars['action'] == 'scan'): ?>
        <p>
            <input type="button" id="scanbutton" class="formbutton" value="Scan" onclick="scanFiles()" /><br />
            <br />Current file: <span id="currentfile">-</span>
        </p>
        <?php $_from = $this->_tpl_vars['files']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['fileKey'] => $this->_tpl_vars['fileItem']):
?>
            <input type="hidden" id="filename<?php echo $this->_tpl_vars['fileKey']; ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['fileItem'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
            <?php echo $this->_tpl_vars['fileKey']+1; ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['fileItem'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

            <img id="fileimg<?php echo $this->_tpl_vars['fileKey']; ?>
" src="" height="16" width="16" style="display:none;" />
            <br />
        <?php endforeach; endif; unset($_from); ?>
        <?php echo '
            <script type="text/javascript">
            <!--
                var nFileMax = 0;
                var nFileIndex = 0;

                function scanFiles()
                {
                    document.getElementById(\'scanbutton\').disabled = true;

                    nFileMax = -1;
                    while (document.getElementById(\'filename\' + (nFileMax+1)) != null)
                        nFileMax++;

                    nFileIndex = 0;
                    callURL(\'translate.php\', \'action=scanstart\');
                    scanNext();
                }

                function scanNext()
                {
                    var oImgElement = document.getElementById(\'fileimg\' + nFileIndex);
                    var oNameElement = document.getElementById(\'filename\' + nFileIndex);;
                    var sFilename = \'\';

                    if (oImgElement == null)
                    {
                        document.getElementById(\'currentfile\').firstChild.nodeValue = \''; ?>
Scan complete<?php echo '\';
                        return;
                    }

                    sFilename = oNameElement.value;
                    document.getElementById(\'currentfile\').firstChild.nodeValue = (nFileIndex+1) + \' '; ?>
van<?php echo ' \' + (nFileMax+1) + \' \' + sFilename;

                    callURL(\'translate.php\', \'action=scanfile&filename=\' + sFilename);

                    oImgElement.src = \'resource2/ocstyle/images/log/16x16-found.png\';
                    oImgElement.style.display = \'inline\';
                    nFileIndex++;

                    window.setTimeout("scanNext()", 0);
                }

                function callURL(url, params)
                {
                    var xmlReq = createXMLHttp();
                    if (!xmlReq) return;

                    xmlReq.open(\'POST\', url, false);
                    xmlReq.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    xmlReq.setRequestHeader("Content-length", params.length);
                    xmlReq.setRequestHeader("Connection", "close");
                    xmlReq.send(params);
                }
            //-->
            </script>
        '; ?>

    <?php elseif ($this->_tpl_vars['action'] == 'verify'): ?>
        <p>Discrepancies in <code>sys_menu</code> are uncritical, because the original
            strings never get displayed. Discrepancies in <code>towns</code> can be intentionally,
            because the default name to be displayed is the local name, not the English.</p>
        <p>Before changing any original text in <code>cache_type</code>,
            <code>cache_status</code>, <code>log_type</code> etc., take care that this will not
            break the downward compatibility of any API.
            When changing <code>sys_trans</code> entries, grep the source code (especially
            templates) for these text and adjust the original text there, too.
            <br /><br /></p>
        <table class="table">
            <tr>
                <th>column</th>
                <th>ID</th>
                <th>original text</th>
                <th>sys_trans</th>
                <th>sys_trans_text/EN</th>
            </tr>
            <?php $_from = $this->_tpl_vars['inconsistencies']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['problem']):
?>
                <tr>
                    <td style="vertical-align:top;"><?php echo ((is_array($_tmp=$this->_tpl_vars['problem']['col'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
                    <td style="vertical-align:top; text-align:right"><?php echo ((is_array($_tmp=$this->_tpl_vars['problem']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
                    <td style="vertical-align:top;"><?php echo ((is_array($_tmp=$this->_tpl_vars['problem']['org_text'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
                    <td style="vertical-align:top;"><?php if ($this->_tpl_vars['problem']['sys_trans'] != $this->_tpl_vars['problem']['org_text']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['problem']['sys_trans'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?></td>
                    <td style="vertical-align:top;"><?php if ($this->_tpl_vars['problem']['en_text'] != $this->_tpl_vars['problem']['org_text']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['problem']['en_text'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?></td>
                </tr>
            <?php endforeach; endif; unset($_from); ?>
        </table>
    <?php endif; ?>
<?php endif; ?>
<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:47
         compiled from sys_sqldebugger.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'sys_sqldebugger.tpl', 13, false),array('modifier', 'replace', 'sys_sqldebugger.tpl', 218, false),array('modifier', 'sprintf', 'sys_sqldebugger.tpl', 321, false),array('modifier', 'date_format', 'sys_sqldebugger.tpl', 350, false),array('function', 'counter', 'sys_sqldebugger.tpl', 199, false),)), $this); ?>
 <!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <title>
            SQL Debugger -
            <?php if (( $this->_tpl_vars['opt']['template']['title'] == "" )): ?>
                <?php echo ((is_array($_tmp=$this->_tpl_vars['opt']['page']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

            <?php else: ?>
                <?php echo ((is_array($_tmp=$this->_tpl_vars['opt']['template']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 - <?php echo ((is_array($_tmp=$this->_tpl_vars['opt']['page']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

            <?php endif; ?>
        </title>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <meta http-equiv="Content-Style-Type" content="text/css" />
        <meta http-equiv="Content-Language" content="<?php echo $this->_tpl_vars['opt']['template']['locale']; ?>
" />
        <meta http-equiv="gallerimg" content="no" />
        <link rel="SHORTCUT ICON" href="favicon.ico" />
        <style type="text/css">
        <!--
            <?php echo '
                .sqlno
                {
                    font-size:medium;
                }

                .sqlcommand
                {
                }

                .selrows
                {
                    margin-bottom:15px;
                }

                .firstresultrow
                {
                }

                .result
                {
                    display:none;
                }

                .explain
                {
                }

                .runtime
                {
                }

                .affectedrows
                {
                }

                .allruntime
                {
                    font-size:medium;
                }

                .comments
                {
                 color:gray;
                }

                .white
                {
                    color:white;
                }

                .error
                {
                    color:red;
                    font-size:medium;
                }

                .errormsg
                {
                }

                table
                {
                 margin-bottom:15px;
                }

                td
                {
                    color:gray;
                    font-size:x-small;
                    white-space:nowrap;
                    padding:1px 5px 1px 5px;
                }

                .allruntime td
                {
                    color:black;
                    font-size:medium;
                    white-space:nowrap;
                }

                th
                {
                    color:gray;
                }

                .framework
                {
                    display:none;
                }

                .businesslayer
                {
                    display:none;
                }

                .slave_title
                {
                    font-style:italic;
                    color:blue;
                }

                .slave_sql
                {
                    color:blue;
                }
            '; ?>

        -->
        </style>
        <script type="text/javascript">
        <!--
            <?php echo '
                function switchOpt(id)
                {
                    var cssRules = "";
                    if (document.all)
                        cssRules = "rules";
                    else
                        cssRules = "cssRules";

                    var value = document.getElementById(id).checked ? "" : "none";

                    for (var i = 0; i < document.styleSheets.length; i++)
                        for (var j = 0; j < document.styleSheets[i][cssRules].length; j++)
                            if (document.styleSheets[i][cssRules][j].selectorText == "." + id)
                                document.styleSheets[i][cssRules][j].style["display"] = value;
                }
            '; ?>

        //-->
        </script>
    </head>
    <body>
        <div class="white">/*</div>
        <table class="table">
            <tr>
                <td><input checked="checked" onclick="switchOpt('sqlno')" id="sqlno" type="checkbox" /><label for="sqlno">Command number</label></td>
                <td><input checked="checked" onclick="switchOpt('sqlcommand')" id="sqlcommand" type="checkbox" /><label for="sqlcommand">Sql command</label></td>
                <td><input checked="checked" onclick="switchOpt('selrows')" id="selrows" type="checkbox" /><label for="selrows">Selected rows</label></td>
                <td><input checked="checked" onclick="switchOpt('firstresultrow')" id="firstresultrow" type="checkbox" /><label for="firstresultrow">First result row</label></td>
            </tr>
            <tr>
                <td><input onclick="switchOpt('result')" id="result" type="checkbox" /><label for="result">Result rows 2-25</label></td>
                <td><input checked="checked" onclick="switchOpt('explain')" id="explain" type="checkbox" /><label for="explain">Explain query</label></td>
                <td><input checked="checked" onclick="switchOpt('runtime')" id="runtime" type="checkbox" /><label for="runtime">Runtime</label></td>
                <td><input checked="checked" onclick="switchOpt('affectedrows')" id="affectedrows" type="checkbox" /><label for="affectedrows">Affected rows</label></td>
            </tr>
            <tr>
                <td><input checked="checked" onclick="switchOpt('allruntime')" id="allruntime" type="checkbox" /><label for="allruntime">Runtime sum</label></td>
                <td><input checked="checked" onclick="switchOpt('comments')" id="comments" type="checkbox" /><label for="comments">Comments</label></td>
                <td><input onclick="switchOpt('framework')" id="framework" type="checkbox" /><label for="framework">Framework</label></td>
                <td><input onclick="switchOpt('businesslayer')" id="businesslayer" type="checkbox" /><label for="businesslayer">Business layer</label></td>
            </tr>
        </table>
        <div class="white">*/</div>

        <?php $this->assign('framwork_count', 0); ?>
        <?php $this->assign('businesslayer_count', 0); ?>
        <?php $this->assign('user_count', 0); ?>
        <?php $this->assign('total_count', 0); ?>

        <?php if ($this->_tpl_vars['cancel']): ?>
            <div class="error">SQL Debugger canceled analyzing after 1000 sql commands</div>
        <?php endif; ?>

        <?php $_from = $this->_tpl_vars['commands']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['command']):
?>
            <?php if ($this->_tpl_vars['command']['mode'] == DB_MODE_FRAMEWORK): ?>
                <div class="framework">
            <?php elseif ($this->_tpl_vars['command']['mode'] == DB_MODE_BUSINESSLAYER): ?>
                <div class="businesslayer">
            <?php else: ?>
                <div>
            <?php endif; ?>
                <p class="sqlno">
                    <span class="white">/*</span>
                        <b>SQL command <?php echo smarty_function_counter(array(), $this);?>
</b>
                        <?php if ($this->_tpl_vars['command']['slave']): ?>
                            <span class="slave_title">(slave query executed on <?php echo ((is_array($_tmp=$this->_tpl_vars['command']['server'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
, <?php echo ((is_array($_tmp=$this->_tpl_vars['command']['dblink'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
)
                        <?php endif; ?>
                        <?php if ($this->_tpl_vars['command']['mode'] == DB_MODE_FRAMEWORK): ?>
                            (framework)
                        <?php elseif ($this->_tpl_vars['command']['mode'] == DB_MODE_BUSINESSLAYER): ?>
                            (business layer)
                        <?php endif; ?>
                        <?php if ($this->_tpl_vars['command']['slave']): ?>
                            </span>
                        <?php endif; ?>
                    <span class="white">*/</span>
                </p>
                <p class="sqlcommand">
                    <?php if ($this->_tpl_vars['command']['slave']): ?>
                        <span class="slave_sql">
                    <?php endif; ?>

                    <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['command']['sql'])) ? $this->_run_mod_handler('replace', true, $_tmp, '*/', '* /') : smarty_modifier_replace($_tmp, '*/', '* /')))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 ;

                    <?php if ($this->_tpl_vars['command']['slave']): ?>
                        </span>
                    <?php endif; ?>
                </p>

                <div class="comments">
                    <div class="white">/*</div>
                    <br />
                    <?php if ($this->_tpl_vars['command']['count'] != -1): ?>
                        <div class="selrows">Number of selected rows: <?php echo $this->_tpl_vars['command']['count']; ?>
</div>
                    <?php endif; ?>

                                        <?php $_from = $this->_tpl_vars['command']['result']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['result'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['result']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['row']):
        $this->_foreach['result']['iteration']++;
?>
                        <?php if (($this->_foreach['result']['iteration'] <= 1)): ?>
                            <table class="firstresultrow" border="1">
                                <tr>
                                    <?php $_from = $this->_tpl_vars['row']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['column'] => $this->_tpl_vars['value']):
?>
                                        <th><?php echo $this->_tpl_vars['column']; ?>
</th>
                                    <?php endforeach; endif; unset($_from); ?>
                                </tr>
                                <tr>
                        <?php else: ?>
                                <tr class="result">
                        <?php endif; ?>

                                    <?php $_from = $this->_tpl_vars['row']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['column'] => $this->_tpl_vars['value']):
?>
                                        <td>
                                            <?php if ($this->_tpl_vars['value'] == null): ?>
                                                NULL
                                            <?php else: ?>
                                                <?php echo ((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

                                            <?php endif; ?>
                                        </td>
                                    <?php endforeach; endif; unset($_from); ?>
                                </tr>

                        <?php if (($this->_foreach['result']['iteration'] == $this->_foreach['result']['total'])): ?>
                            </table>
                        <?php endif; ?>
                    <?php endforeach; endif; unset($_from); ?>

                                        <?php $_from = $this->_tpl_vars['command']['explain']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['explain'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['explain']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['row']):
        $this->_foreach['explain']['iteration']++;
?>
                        <?php if (($this->_foreach['explain']['iteration'] <= 1)): ?>
                            <table class="explain" border="1">
                                <tr>
                                    <?php $_from = $this->_tpl_vars['row']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['column'] => $this->_tpl_vars['value']):
?>
                                        <th><?php echo $this->_tpl_vars['column']; ?>
</th>
                                    <?php endforeach; endif; unset($_from); ?>
                                </tr>
                        <?php endif; ?>

                            <tr>
                                <?php $_from = $this->_tpl_vars['row']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['column'] => $this->_tpl_vars['value']):
?>
                                    <td>
                                        <?php if ($this->_tpl_vars['value'] == null): ?>
                                            NULL
                                        <?php else: ?>
                                            <?php echo ((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

                                        <?php endif; ?>
                                    </td>
                                <?php endforeach; endif; unset($_from); ?>
                            </tr>

                        <?php if (($this->_foreach['explain']['iteration'] == $this->_foreach['explain']['total'])): ?>
                            </table>
                        <?php endif; ?>
                    <?php endforeach; endif; unset($_from); ?>

                                        <?php $_from = $this->_tpl_vars['command']['warnings']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['warnings'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['warnings']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['row']):
        $this->_foreach['warnings']['iteration']++;
?>
                        <?php if (($this->_foreach['warnings']['iteration'] <= 1)): ?>
                            <div class="error">MySQL warning:</div>
                            <div class="errormsg">
                                <table class="table">
                        <?php endif; ?>

                            <tr><td style="font-size:1em"><?php echo ((is_array($_tmp=$this->_tpl_vars['row'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td></tr>

                        <?php if (($this->_foreach['warnings']['iteration'] == $this->_foreach['warnings']['total'])): ?>
                                </table>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; endif; unset($_from); ?>

                    <?php if ($this->_tpl_vars['command']['mode'] == DB_MODE_FRAMEWORK): ?>
                        <?php $this->assign('framwork_runtime', ($this->_tpl_vars['framwork_runtime']+$this->_tpl_vars['command']['runtime'])); ?>
                        <?php $this->assign('framwork_count', ($this->_tpl_vars['framwork_count']+1)); ?>
                    <?php elseif ($this->_tpl_vars['command']['mode'] == DB_MODE_BUSINESSLAYER): ?>
                        <?php $this->assign('businesslayer_runtime', ($this->_tpl_vars['businesslayer_runtime']+$this->_tpl_vars['command']['runtime'])); ?>
                        <?php $this->assign('businesslayer_count', ($this->_tpl_vars['businesslayer_count']+1)); ?>
                    <?php else: ?>
                        <?php $this->assign('user_runtime', ($this->_tpl_vars['user_runtime']+$this->_tpl_vars['command']['runtime'])); ?>
                        <?php $this->assign('user_count', ($this->_tpl_vars['user_count']+1)); ?>
                    <?php endif; ?>
                    <?php $this->assign('total_runtime', ($this->_tpl_vars['total_runtime']+$this->_tpl_vars['command']['runtime'])); ?>
                    <?php $this->assign('total_count', ($this->_tpl_vars['total_count']+1)); ?>
                    <div class="runtime">Runtime: <?php echo ((is_array($_tmp=$this->_tpl_vars['command']['runtime'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, "%1.5f") : smarty_modifier_sprintf($_tmp, "%1.5f")); ?>
 sek.</div>
                    <div class="affectedrows">Number of affected rows: <?php echo $this->_tpl_vars['command']['affected']; ?>
</div>
                    <div class="white">*/</div>
                </div>
            </div>
        <?php endforeach; endif; unset($_from); ?>

        <span class="white">/*</span>
        <div class="allruntime">
            <hr />
            <table class="table">
                <tr>
                    <td>Tiempo de ejecución del usuario</td>
                    <td><?php echo ((is_array($_tmp=$this->_tpl_vars['user_runtime'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, "%1.5f") : smarty_modifier_sprintf($_tmp, "%1.5f")); ?>
 sec (<?php echo $this->_tpl_vars['user_count']; ?>
 comando)</td>
                </tr>
                <tr>
                    <td>Tiempo de framework:</td>
                    <td><?php echo ((is_array($_tmp=$this->_tpl_vars['framwork_runtime'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, "%1.5f") : smarty_modifier_sprintf($_tmp, "%1.5f")); ?>
 sec (<?php echo $this->_tpl_vars['framwork_count']; ?>
 comando)</td>
                </tr>
                <tr>
                    <td style="border-bottom:1px black solid">Business layer runtime:</td>
                    <td style="border-bottom:1px black solid"><?php echo ((is_array($_tmp=$this->_tpl_vars['businesslayer_runtime'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, "%1.5f") : smarty_modifier_sprintf($_tmp, "%1.5f")); ?>
 sec (<?php echo $this->_tpl_vars['businesslayer_count']; ?>
 comando)</td>
                </tr>
                <tr>
                    <td>Tiempo de ejecución total:</td>
                    <td><?php echo ((is_array($_tmp=$this->_tpl_vars['total_runtime'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, "%1.5f") : smarty_modifier_sprintf($_tmp, "%1.5f")); ?>
 sec (<?php echo $this->_tpl_vars['total_count']; ?>
 comando)</td>
                </tr>
                <tr>
                    <td>Creada el:</td>
                    <td><?php echo ((is_array($_tmp='0')) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['opt']['format']['datetimesec']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['opt']['format']['datetimesec'])); ?>
</td>
                </tr>
            </table>
        </div>
        <span class="white">*/</span>
    </body>
</html>
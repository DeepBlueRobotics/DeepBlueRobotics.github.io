<?php /* Smarty version Smarty-3.1.13, created on 2015-12-04 07:39:44
         compiled from "/home/dbrobotic/public_html/colab/templates/standard/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21248779865661b3c03ff030-59073596%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc4877d7db0ad04df941ed8eb44b7d75aa255467' => 
    array (
      0 => '/home/dbrobotic/public_html/colab/templates/standard/index.tpl',
      1 => 1423596668,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21248779865661b3c03ff030-59073596',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mode' => 0,
    'settings' => 0,
    'isUpdated' => 0,
    'projectnum' => 0,
    'myprojects' => 0,
    'userpermissions' => 0,
    'closedProjectnum' => 0,
    'oldprojects' => 0,
    'tasknum' => 0,
    'userid' => 0,
    'tasks' => 0,
    'msgnum' => 0,
    'messages' => 0,
    'cl_config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5661b3c07dd334_26717908',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5661b3c07dd334_26717908')) {function content_5661b3c07dd334_26717908($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/home/dbrobotic/public_html/colab/include/plugins/modifier.truncate.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('jsload'=>"ajax",'jsload1'=>"tinymce",'jsload3'=>"lightbox",'stage'=>"index"), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("tabsmenue-desk.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('desktab'=>"active"), 0);?>


<div id="content-left">
	<div id="content-left-in">

		
		<div class="infowin_left" style="display:none;" id="systemmsg">
			<?php if ($_smarty_tpl->tpl_vars['mode']->value=="projectadded"){?>
				<span class="info_in_green">
					<img src="templates/<?php echo $_smarty_tpl->tpl_vars['settings']->value['template'];?>
/theme/<?php echo $_smarty_tpl->tpl_vars['settings']->value['theme'];?>
/images/symbols/projects.png" alt="" /><?php echo $_smarty_tpl->getConfigVariable('projectwasadded');?>

				</span>
			<?php }?>

			
			<span id="closed" style="display:none;" class="info_in_green">
				<img src="templates/<?php echo $_smarty_tpl->tpl_vars['settings']->value['template'];?>
/theme/<?php echo $_smarty_tpl->tpl_vars['settings']->value['theme'];?>
/images/symbols/projects.png" alt="" /><?php echo $_smarty_tpl->getConfigVariable('projectwasclosed');?>

			</span>
			<span id="deleted" style="display:none;" class="info_in_red">
				<img src="templates/<?php echo $_smarty_tpl->tpl_vars['settings']->value['template'];?>
/theme/<?php echo $_smarty_tpl->tpl_vars['settings']->value['theme'];?>
/images/symbols/projects.png" alt="" /><?php echo $_smarty_tpl->getConfigVariable('projectwasdeleted');?>

			</span>
		</div>

		
			<script type="text/javascript">
				systemMsg('systemmsg');
			</script>
		

		<?php if ((($tmp = @$_smarty_tpl->tpl_vars['isUpdated']->value)===null||$tmp==='' ? '' : $tmp)){?>
			<?php echo $_smarty_tpl->getSubTemplate ("updateNotify.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<br />
		<?php }?>

		<h1><?php echo $_smarty_tpl->getConfigVariable('desktop');?>
</h1>
<div id="block_index" class="block">
		
		<?php if ($_smarty_tpl->tpl_vars['projectnum']->value>0){?>

			<div class="projects"  style = "padding-bottom:2px;">
				<div class="headline">
					<a href="javascript:void(0);" id="projecthead_toggle" class="win_block" onclick="changeElements('a.win_block','win_none');toggleBlock('projecthead');"></a>

					<h2><img src="./templates/<?php echo $_smarty_tpl->tpl_vars['settings']->value['template'];?>
/theme/<?php echo $_smarty_tpl->tpl_vars['settings']->value['theme'];?>
/images/symbols/projects.png" alt="" /><?php echo $_smarty_tpl->getConfigVariable('myprojects');?>
</h2>
				</div>
				<div class = "acc_toggle"></div>
				<div class="block acc_content" id="projecthead" style = "overflow:hidden;" >
					<div id="form_addmyproject" class="addmenue" style="display:none;">
						<?php echo $_smarty_tpl->getSubTemplate ("addproject.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('myprojects'=>"1"), 0);?>

					</div>

					<div class="nosmooth" id="sm_deskprojects">
						<table id="desktopprojects" cellpadding="0" cellspacing="0" border="0">

							<thead>
								<tr>
									<th class="a"></th>
									<th class="b" style="cursor:pointer;" onclick="sortBlock('desktopprojects','');"><?php echo $_smarty_tpl->getConfigVariable('project');?>
</th>
									<th class="c" style="cursor:pointer" onclick="sortBlock('desktopprojects','done');"><?php echo $_smarty_tpl->getConfigVariable('done');?>
</th>
									<th class="d" style="text-align:right" onclick="sortBlock('desktopprojects','daysleft');"><?php echo $_smarty_tpl->getConfigVariable('daysleft');?>
&nbsp;&nbsp;</th>
									<th class="tools"></th>
								</tr>
							</thead>

							<tfoot>
								<tr>
									<td colspan="5"></td>
								</tr>
							</tfoot>

							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['project'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['project']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['project']['name'] = 'project';
$_smarty_tpl->tpl_vars['smarty']->value['section']['project']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['myprojects']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['project']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['project']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['project']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['project']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['project']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['project']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['project']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['project']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['project']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['project']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['project']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['project']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['project']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['project']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['project']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['project']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['project']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['project']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['project']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['project']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['project']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['project']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['project']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['project']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['project']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['project']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['project']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['project']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['project']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['project']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['project']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['project']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['project']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['project']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['project']['total']);
?>

								
								<?php if ($_smarty_tpl->getVariable('smarty')->value['section']['project']['index']%2==0){?>
									<tbody class="color-a" id="proj_<?php echo $_smarty_tpl->tpl_vars['myprojects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['project']['index']]['ID'];?>
" rel="<?php echo $_smarty_tpl->tpl_vars['myprojects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['project']['index']]['ID'];?>
,<?php echo $_smarty_tpl->tpl_vars['myprojects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['project']['index']]['name'];?>
,<?php echo $_smarty_tpl->tpl_vars['myprojects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['project']['index']]['daysleft'];?>
,0,0,<?php echo $_smarty_tpl->tpl_vars['myprojects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['project']['index']]['done'];?>
">
								<?php }else{ ?>
									<tbody class="color-b" id="proj_<?php echo $_smarty_tpl->tpl_vars['myprojects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['project']['index']]['ID'];?>
" rel="<?php echo $_smarty_tpl->tpl_vars['myprojects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['project']['index']]['ID'];?>
,<?php echo $_smarty_tpl->tpl_vars['myprojects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['project']['index']]['name'];?>
,<?php echo $_smarty_tpl->tpl_vars['myprojects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['project']['index']]['daysleft'];?>
,0,0,<?php echo $_smarty_tpl->tpl_vars['myprojects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['project']['index']]['done'];?>
">
								<?php }?>

									<tr <?php if ($_smarty_tpl->tpl_vars['myprojects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['project']['index']]['daysleft']<0&&$_smarty_tpl->tpl_vars['myprojects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['project']['index']]['daysleft']!=''){?> class="marker-late" <?php }elseif($_smarty_tpl->tpl_vars['myprojects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['project']['index']]['daysleft']=="0"){?> class="marker-today" <?php }?> >
										<td>

											<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['projects']['close']){?>
												<a class="butn_check" href="javascript:closeElement('proj_<?php echo $_smarty_tpl->tpl_vars['myprojects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['project']['index']]['ID'];?>
','manageproject.php?action=close&amp;id=<?php echo $_smarty_tpl->tpl_vars['myprojects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['project']['index']]['ID'];?>
');" title="<?php echo $_smarty_tpl->getConfigVariable('close');?>
"></a>
											<?php }?>

										</td>
										<td>
											<div class="toggle-in">
												<span id="desktopprojectstoggle<?php echo $_smarty_tpl->tpl_vars['myprojects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['project']['index']]['ID'];?>
" class="acc-toggle" onclick="javascript:accord_projects.activate($$('#projecthead .accordion_toggle')[<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['project']['index'];?>
]);toggleAccordeon('projecthead',this);"></span>
												<a href="manageproject.php?action=showproject&amp;id=<?php echo $_smarty_tpl->tpl_vars['myprojects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['project']['index']]['ID'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['myprojects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['project']['index']]['name'];?>
">
													<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['myprojects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['project']['index']]['name'],33,"...",true);?>

												</a>
											</div>
										</td>
										<td>
											<div class="statusbar_b">
												<div class="complete" id="completed" style="width:<?php echo $_smarty_tpl->tpl_vars['myprojects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['project']['index']]['done'];?>
%;"></div>
											</div>
											<span><?php echo $_smarty_tpl->tpl_vars['myprojects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['project']['index']]['done'];?>
%</span>
										</td>
										<td style="text-align:right"><?php echo $_smarty_tpl->tpl_vars['myprojects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['project']['index']]['daysleft'];?>
&nbsp;&nbsp;</td>
										<td class="tools">

											<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['projects']['edit']){?>
												<a class="tool_edit" href="javascript:void(0);" onclick="change('manageproject.php?action=editform&amp;id=<?php echo $_smarty_tpl->tpl_vars['myprojects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['project']['index']]['ID'];?>
','form_addmyproject');toggleClass(this,'tool_edit_active','tool_edit');blindtoggle('form_addmyproject');" title="<?php echo $_smarty_tpl->getConfigVariable('edit');?>
"></a>
											<?php }?>

											<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['projects']['del']){?>
												<a class="tool_del" href="javascript:confirmfunction('<?php echo $_smarty_tpl->getConfigVariable('confirmdel');?>
','deleteElement(\'proj_<?php echo $_smarty_tpl->tpl_vars['myprojects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['project']['index']]['ID'];?>
\',\'manageproject.php?action=del&amp;id=<?php echo $_smarty_tpl->tpl_vars['myprojects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['project']['index']]['ID'];?>
\')');"  title="<?php echo $_smarty_tpl->getConfigVariable('delete');?>
"></a>
											<?php }?>

										</td>
									</tr>

									<tr class="acc">
										<td colspan="5">
											<div class="accordion_toggle"></div>
											<div class="accordion_content">
												<div class="acc-in">
													<div class="message-in">
														<?php echo $_smarty_tpl->tpl_vars['myprojects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['project']['index']]['desc'];?>

													</div>
												</div>
											</div>
										</td>
									</tr>
								</tbody>
							<?php endfor; endif; ?>

						</table>
<?php if ($_smarty_tpl->tpl_vars['closedProjectnum']->value>0){?>

				<div id="doneblock" class="projects" style="display: none;">
				<table class="second-thead" cellpadding="0" cellspacing="0" border="0" onclick="blindtoggle('doneblock');toggleClass('donebutn','butn_link_active','butn_link');toggleClass('toggle-done','acc-toggle','acc-toggle-active');">

						<tr>
							<td class="a"></td>
							<td class="b"><span id="toggle-done" class="acc-toggle"><?php echo $_smarty_tpl->getConfigVariable('closedprojects');?>
</span></td>
							<td class="c"></td>
							<td class="d"></td>
							<td class="tools"></td>
						</tr>

				</table>


				<div class="toggleblock">
					<table cellpadding="0" cellspacing="0" border="0" id="acc-oldprojects">
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['clopro'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['clopro']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['clopro']['name'] = 'clopro';
$_smarty_tpl->tpl_vars['smarty']->value['section']['clopro']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['oldprojects']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['clopro']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['clopro']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['clopro']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['clopro']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['clopro']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['clopro']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['clopro']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['clopro']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['clopro']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['clopro']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['clopro']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['clopro']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['clopro']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['clopro']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['clopro']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['clopro']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['clopro']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['clopro']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['clopro']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['clopro']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['clopro']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['clopro']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['clopro']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['clopro']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['clopro']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['clopro']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['clopro']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['clopro']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['clopro']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['clopro']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['clopro']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['clopro']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['clopro']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['clopro']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['clopro']['total']);
?>

					
					<?php if ($_smarty_tpl->getVariable('smarty')->value['section']['clopro']['index']%2==0){?>
					<tbody class="color-a" id="proj_<?php echo $_smarty_tpl->tpl_vars['oldprojects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['clopro']['index']]['ID'];?>
">
					<?php }else{ ?>
					<tbody class="color-b" id="proj_<?php echo $_smarty_tpl->tpl_vars['oldprojects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['clopro']['index']]['ID'];?>
">
					<?php }?>
						<tr>
							<td class="a"><?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['projects']['add']){?><a class="butn_checked" href="manageproject.php?action=open&amp;id=<?php echo $_smarty_tpl->tpl_vars['oldprojects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['clopro']['index']]['ID'];?>
" title="<?php echo $_smarty_tpl->getConfigVariable('open');?>
"></a><?php }?></td>
							<td class="b">
								<div class="toggle-in">
								<span class="acc-toggle" onclick="javascript:accord_oldprojects.activate($$('#acc-oldprojects .accordion_toggle')[<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['clopro']['index'];?>
]);toggleAccordeon('acc-oldprojects',this);"></span>
									<a href="manageproject.php?action=showproject&amp;id=<?php echo $_smarty_tpl->tpl_vars['oldprojects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['clopro']['index']]['ID'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['oldprojects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['clopro']['index']]['name'];?>
">
										<?php if ($_smarty_tpl->tpl_vars['oldprojects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['clopro']['index']]['name']!=''){?>
										<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['oldprojects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['clopro']['index']]['name'],30,"...",true);?>

										<?php }else{ ?>
										<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['oldprojects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['clopro']['index']]['desc'],30,"...",true);?>

										<?php }?>
									</a>
								</div>
							</td>
							<td class="c"></td>
							<td class="d" style="text-align:right"><?php echo $_smarty_tpl->tpl_vars['oldprojects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['clopro']['index']]['daysleft'];?>
&nbsp;&nbsp;</td>
							<td class="tools">
								<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['projects']['edit']){?>
								<a class="tool_edit" href="manageproject.php?action=editform&amp;id=<?php echo $_smarty_tpl->tpl_vars['oldprojects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['clopro']['index']]['ID'];?>
" title="<?php echo $_smarty_tpl->getConfigVariable('edit');?>
"></a>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['projects']['del']){?>
								<a class="tool_del" href="javascript:confirmfunction('<?php echo $_smarty_tpl->getConfigVariable('confirmdel');?>
','deleteElement(\'proj_<?php echo $_smarty_tpl->tpl_vars['oldprojects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['clopro']['index']]['ID'];?>
\',\'manageproject.php?action=del&amp;id=<?php echo $_smarty_tpl->tpl_vars['oldprojects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['clopro']['index']]['ID'];?>
\')');"  title="<?php echo $_smarty_tpl->getConfigVariable('delete');?>
" ></a>
								<?php }?>
							</td>
						</tr>

						<tr class="acc">
							<td colspan="5">
								<div class="accordion_toggle"></div>
								<div class="accordion_content">
									<div class="acc-in">
										<?php echo $_smarty_tpl->tpl_vars['oldprojects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['clopro']['index']]['desc'];?>

									</div>
								</div>
							</td>
						</tr>
					</tbody>
					<?php endfor; endif; ?>


				</table>
				</div> 
				</div> 
<?php }?>


						<div class="tablemenue">
							<div class="tablemenue-in">
								<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['projects']['add']){?>
									<a class="butn_link" href="javascript:blindtoggle('form_addmyproject');" id="add_butn_myprojects" onclick="toggleClass('add_myprojects','add-active','add');toggleClass(this,'butn_link_active','butn_link');toggleClass('sm_deskprojects','smooth','nosmooth');"><?php echo $_smarty_tpl->getConfigVariable('addproject');?>
</a>
								<?php }?>
						      <?php if ($_smarty_tpl->tpl_vars['closedProjectnum']->value>0){?>
							 	 	<a class="butn_link" href="javascript:blindtoggle('doneblock');" id="donebutn" onclick="toggleClass(this,'butn_link_active','butn_link');toggleClass('toggle-done','acc-toggle','acc-toggle-active');"><?php echo $_smarty_tpl->getConfigVariable('closedprojects');?>
</a>
							  <?php }?>
							</div>
						</div>
					<div class="content-spacer"></div>
					</div> 
			   </div> 
			</div> 



		<?php }?> 

		
		<?php if ($_smarty_tpl->tpl_vars['tasknum']->value>0){?>

			<div class="tasks" style = "padding-bottom:2px;">
				<div class="headline">
				<a href="javascript:void(0);" id="taskhead_toggle" class="win_none" onclick="changeElements('a.win_block','win_none');toggleBlock('taskhead');"></a>

					<div class="wintools">
						<div class="export-main">
							<a class="export"><span><?php echo $_smarty_tpl->getConfigVariable('export');?>
</span></a>
							<div class="export-in" style="width:69px;left: -69px;"> 
								<a class="rss" href="managerss.php?action=rss-tasks&user=<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
"><span><?php echo $_smarty_tpl->getConfigVariable('rssfeed');?>
</span></a>
								<!--<a class="ical" href="managetask.php?action=ical"><span><?php echo $_smarty_tpl->getConfigVariable('icalexport');?>
</span></a>-->
								<a class="pdf" href="mytasks.php?action=pdf"><span><?php echo $_smarty_tpl->getConfigVariable('pdfexport');?>
</span></a>
							</div>
						</div>
					</div>

					<h2><img src="./templates/<?php echo $_smarty_tpl->tpl_vars['settings']->value['template'];?>
/theme/<?php echo $_smarty_tpl->tpl_vars['settings']->value['theme'];?>
/images/symbols/tasklist.png" alt="" /><?php echo $_smarty_tpl->getConfigVariable('mytasks');?>
</h2>
				</div>

				<div class = "acc_toggle"></div>
				<div class="block acc_content" id="taskhead" style = "overflow:hidden;" >
					<div id="form_addmytask" class="addmenue" style="display:none;">
						<?php echo $_smarty_tpl->getSubTemplate ("addmytask_index.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

					</div>

					<div class="nosmooth" id="sm_desktoptasks">

						<table id="desktoptasks" cellpadding="0" cellspacing="0" border="0">

							<thead>
								<tr>
									<th class="a"></th>
									<th class="b" style="cursor:pointer;" onclick="sortBlock('desktoptasks','');"><?php echo $_smarty_tpl->getConfigVariable('task');?>
</th>
									<th class="c" style="cursor:pointer;" onclick="sortBlock('desktoptasks','project');"><?php echo $_smarty_tpl->getConfigVariable('project');?>
</th>
									<th class="d" style="cursor:pointer;text-align:right" onclick="sortBlock('desktoptasks','daysleft');"><?php echo $_smarty_tpl->getConfigVariable('daysleft');?>
&nbsp;&nbsp;</th>
									<th class="tools"></th>
								</tr>
							</thead>

							<tfoot>
								<tr>
									<td colspan="5"></td>
								</tr>
							</tfoot>

							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['task'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['task']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['task']['name'] = 'task';
$_smarty_tpl->tpl_vars['smarty']->value['section']['task']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['tasks']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['task']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['task']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['task']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['task']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['task']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['task']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['task']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['task']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['task']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['task']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['task']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['task']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['task']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['task']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['task']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['total']);
?>

								
								<?php if ($_smarty_tpl->getVariable('smarty')->value['section']['task']['index']%2==0){?>
									<tbody class="color-a" id="task_<?php echo $_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['ID'];?>
" rel="<?php echo $_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['ID'];?>
,<?php echo $_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['title'];?>
,<?php echo $_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['daysleft'];?>
,<?php echo $_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['pname'];?>
">
								<?php }else{ ?>
									<tbody class="color-b" id="task_<?php echo $_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['ID'];?>
" rel="<?php echo $_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['ID'];?>
,<?php echo $_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['title'];?>
,<?php echo $_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['daysleft'];?>
,<?php echo $_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['pname'];?>
">
								<?php }?>

									<tr <?php if ($_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['daysleft']<0){?> class="marker-late" <?php }elseif($_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['daysleft']==0){?> class="marker-today" <?php }?> >
										<td>
											<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['tasks']['close']){?>
												<a class="butn_check" href="javascript:closeElement('task_<?php echo $_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['ID'];?>
','managetask.php?action=close&amp;tid=<?php echo $_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['ID'];?>
&amp;id=<?php echo $_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['project'];?>
');" title="<?php echo $_smarty_tpl->getConfigVariable('close');?>
"></a>
											<?php }?>

										</td>
										<td>
											<div class="toggle-in">
												<span id="desktoptaskstoggle<?php echo $_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['ID'];?>
" class="acc-toggle" onclick="javascript:accord_tasks.activate($$('#taskhead .accordion_toggle')[<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['task']['index'];?>
]);toggleAccordeon('taskhead',this);"></span>
												<a href="managetask.php?action=showtask&amp;id=<?php echo $_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['project'];?>
&amp;tid=<?php echo $_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['ID'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['title'];?>
">
													<?php if ($_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['title']!=''){?>
														<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['title'],33,"...",true);?>

													<?php }else{ ?>
														<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['text'],33,"...",true);?>

													<?php }?>
												</a>
											</div>
										</td>
										<td>
											<a href="managetask.php?action=showproject&amp;id=<?php echo $_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['project'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['pname'],30,"...",true);?>
</a>
										</td>
										<td style="text-align:right"><?php echo $_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['daysleft'];?>
&nbsp;&nbsp;</td>
										<td class="tools">

											<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['tasks']['edit']){?>
												<a class="tool_edit" href="javascript:void(0);" onclick="change('managetask.php?action=editform&amp;tid=<?php echo $_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['ID'];?>
&amp;id=<?php echo $_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['project'];?>
','form_addmytask');toggleClass(this,'tool_edit_active','tool_edit');blindtoggle('form_addmytask');" title="<?php echo $_smarty_tpl->getConfigVariable('edit');?>
"></a>
											<?php }?>

											<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['tasks']['del']){?>
												<a class="tool_del" href="javascript:confirmfunction('<?php echo $_smarty_tpl->getConfigVariable('confirmdel');?>
','deleteElement(\'task_<?php echo $_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['ID'];?>
\',\'managetask.php?action=del&amp;tid=<?php echo $_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['ID'];?>
&amp;id=<?php echo $_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['project'];?>
\')');"  title="<?php echo $_smarty_tpl->getConfigVariable('delete');?>
"></a>
											<?php }?>

										</td>
									</tr>

									<tr class="acc">
										<td colspan="5">
											<div class="accordion_toggle"></div>
											<div class="accordion_content">
												<div class="acc-in">
													<div class="message-in">
														<?php echo nl2br($_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['text']);?>

													</div>
												</div>
											</div>
										</td>
									</tr>
								</tbody>
							<?php endfor; endif; ?>

						</table>


						<div class="tablemenue">
							<div class="tablemenue-in">
								<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['tasks']['add']){?>

									<a class="butn_link" href="javascript:void(0);" id="add_butn_mytasks" onclick="blindtoggle('form_addmytask');toggleClass(this,'butn_link_active','butn_link');toggleClass('sm_desktoptasks','smooth','nosmooth');"><?php echo $_smarty_tpl->getConfigVariable('addtask');?>
</a>
								<?php }?>
							</div>
						</div>
					<div class="content-spacer"></div>
					</div> 
				</div> 
			</div> 


		<?php }?> 

		
		<?php if ($_smarty_tpl->tpl_vars['tasknum']->value){?>
			<div class="miles" style = "padding-bottom:2px;">
				<div class="headline">
					<a href="javascript:void(0);" id="mileshead_toggle" class="win_none" onclick="changeElements('a.win_block','win_none');toggleBlock('mileshead');"></a>

					<div class="wintools">
						<div class="progress" id="progress" style="display:none;">
							<img src="templates/<?php echo $_smarty_tpl->tpl_vars['settings']->value['template'];?>
/theme/<?php echo $_smarty_tpl->tpl_vars['settings']->value['theme'];?>
/images/symbols/loader-cal.gif" />
						</div>
					</div>

					<h2>
						<img src="./templates/<?php echo $_smarty_tpl->tpl_vars['settings']->value['template'];?>
/theme/<?php echo $_smarty_tpl->tpl_vars['settings']->value['theme'];?>
/images/symbols/miles.png" alt="" /><?php echo $_smarty_tpl->getConfigVariable('calendar');?>

					</h2>
				</div>

				<div class = "acc_toggle"></div>
				<div class="block acc_content" id="mileshead" style = "overflow:hidden;" >
					<div id="thecal" class="bigcal" style = "height:270px;"></div>
				<div class="content-spacer"></div>
				</div> 
			</div> 
		 
		<?php }?>

		
		<?php if ($_smarty_tpl->tpl_vars['msgnum']->value>0){?>
			<div class="msgs" style = "padding-bottom:2px;">
				<div class="headline">
					<a href="javascript:void(0);" id="activityhead_toggle" class="win_none" onclick="changeElements('a.win_block','win_none');toggleBlock('activityhead');"></a>

					<div class="wintools">
						<div class="export-main">
							<a class="export"><span><?php echo $_smarty_tpl->getConfigVariable('export');?>
</span></a>
							<div class="export-in" style="width:46px;left: -46px;"> 
								<a class="rss" href="managerss.php?action=mymsgs-rss&amp;user=<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
"><span><?php echo $_smarty_tpl->getConfigVariable('rssfeed');?>
</span></a>
								<a class="pdf" href="managemessage.php?action=mymsgs-pdf&amp;id=<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
"><span><?php echo $_smarty_tpl->getConfigVariable('pdfexport');?>
</span></a>
							</div>
						</div>
					</div>

					<h2>
						<img src="./templates/<?php echo $_smarty_tpl->tpl_vars['settings']->value['template'];?>
/theme/<?php echo $_smarty_tpl->tpl_vars['settings']->value['theme'];?>
/images/symbols/msgs.png" alt="" /><?php echo $_smarty_tpl->getConfigVariable('mymessages');?>

					</h2>
				</div>
				<div class = "acc_toggle"></div>
				<div class="block acc_content" id="activityhead" style = "overflow:hidden;" >
				<div id = "addmsg" class="addmenue" style = "display:none;">
				</div>
					<table id="desktopmessages" cellpadding="0" cellspacing="0" border="0">

						<thead>
							<tr>
								<th class="a"></th>
								<th class="b" ><?php echo $_smarty_tpl->getConfigVariable('message');?>
</th>
								<th class="ce"><?php echo $_smarty_tpl->getConfigVariable('project');?>
</th>
								<th class="de"><?php echo $_smarty_tpl->getConfigVariable('by');?>
</th>
								<th class="e"><?php echo $_smarty_tpl->getConfigVariable('on');?>
</th>
								<th class="tools"></th>
							</tr>
						</thead>

						<tfoot>
							<tr>
								<td colspan="6"></td>
							</tr>
						</tfoot>

						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['message'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['message']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['message']['name'] = 'message';
$_smarty_tpl->tpl_vars['smarty']->value['section']['message']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['messages']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['message']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['message']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['message']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['message']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['message']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['message']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['message']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['message']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['message']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['message']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['message']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['message']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['message']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['message']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['message']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['message']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['message']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['message']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['message']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['message']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['message']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['message']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['message']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['message']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['message']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['message']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['message']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['message']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['message']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['message']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['message']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['message']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['message']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['message']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['message']['total']);
?>

							
							<?php if ($_smarty_tpl->getVariable('smarty')->value['section']['message']['index']%2==0){?>
								<tbody class="color-a" id="messages_<?php echo $_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['ID'];?>
" rel="<?php echo $_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['ID'];?>
,<?php echo $_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['title'];?>
,<?php echo $_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['posted'];?>
,0,0,0">
							<?php }else{ ?>
								<tbody class="color-b" id="messages_<?php echo $_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['ID'];?>
" rel="<?php echo $_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['ID'];?>
,<?php echo $_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['title'];?>
,<?php echo $_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['posted'];?>
,0,0,0">
							<?php }?>

								<tr>
									<td>
										<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['messages']['close']){?>
											<a class="butn_reply" href="javascript:void(0);" onclick="change('managemessage.php?action=replyform&amp;mid=<?php echo $_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['ID'];?>
&amp;id=<?php echo $_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['project'];?>
','addmsg');toggleClass(this,'butn_reply_active','butn_reply');blindtoggle('addmsg');"  title="<?php echo $_smarty_tpl->getConfigVariable('answer');?>
"></a>
										<?php }?>
									</td>
									<td>
										<div class="toggle-in">
											<span class="acc-toggle" onclick="javascript:accord_msgs.activate($$('#activityhead .accordion_toggle')[<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['message']['index'];?>
]);toggleAccordeon('activityhead',this);"></span>
											<a href="managemessage.php?action=showmessage&amp;mid=<?php echo $_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['ID'];?>
&amp;id=<?php echo $_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['project'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['title'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['title'],35,"...",true);?>
</a>
										</div>
									</td>
									<td>
										<a href="managemessage.php?action=showproject&amp;id=<?php echo $_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['project'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['pname'],20,"...",true);?>
</a>
									</td>
									<td>
										<a href="manageuser.php?action=profile&amp;id=<?php echo $_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['user'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['username'],20,"...",true);?>
</a>
									</td>
									<td><?php echo $_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['postdate'];?>
</td>
									<td class="tools">
										<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['messages']['edit']){?>
											<a class="tool_edit" href="javascript:void(0);" onclick="change('managemessage.php?action=editform&amp;mid=<?php echo $_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['ID'];?>
&amp;id=<?php echo $_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['project'];?>
','addmsg');toggleClass(this,'tool_edit_active','tool_edit');blindtoggle('addmsg');" title="<?php echo $_smarty_tpl->getConfigVariable('edit');?>
"></a>
										<?php }?>
										<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['messages']['del']){?>
											<a class="tool_del" href="javascript:confirmfunction('<?php echo $_smarty_tpl->getConfigVariable('confirmdel');?>
','deleteElement(\'messages_<?php echo $_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['ID'];?>
\',\'managemessage.php?action=del&amp;mid=<?php echo $_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['ID'];?>
&amp;id=<?php echo $_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['project'];?>
\')');"  title="<?php echo $_smarty_tpl->getConfigVariable('delete');?>
"></a>
										<?php }?>
									</td>
								</tr>

								<tr class="acc">
									<td colspan="6">
										<div class="accordion_toggle"></div>
										<div class="accordion_content">
											<div class="acc-in">

												<?php if ($_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['avatar']!=''){?>
													<div class="avatar"><img src="thumb.php?width=80&amp;height=80&amp;pic=files/<?php echo $_smarty_tpl->tpl_vars['cl_config']->value;?>
/avatar/<?php echo $_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['avatar'];?>
" alt="" /></div>
												<?php }else{ ?>
													<?php if ($_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['gender']=="f"){?>
														<div class="avatar"><img src="thumb.php?width=80&amp;height=80&amp;pic=templates/<?php echo $_smarty_tpl->tpl_vars['settings']->value['template'];?>
/theme/<?php echo $_smarty_tpl->tpl_vars['settings']->value['theme'];?>
/images/no-avatar-female.jpg" alt="" /></div>
													<?php }else{ ?>
														<div class="avatar"><img src="thumb.php?width=80&amp;height=80&amp;pic=templates/<?php echo $_smarty_tpl->tpl_vars['settings']->value['template'];?>
/theme/<?php echo $_smarty_tpl->tpl_vars['settings']->value['theme'];?>
/images/no-avatar-male.jpg" alt="" /></div>
													<?php }?>
												<?php }?>

												<div class="message">
													<div class="message-in">
														<?php echo nl2br($_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['text']);?>

													</div>

													
													<?php if ($_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['tagnum']>1||$_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['milestones'][0]!=''){?>
														<div class="content-spacer-b"></div>

														
														<?php if ($_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['milestones'][0]!=''){?>
															<p>
																<strong><?php echo $_smarty_tpl->getConfigVariable('milestone');?>
:</strong>
																<a href="managemilestone.php?action=showmilestone&amp;msid=<?php echo $_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['milestones']['ID'];?>
&amp;id=<?php echo $_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['project'];?>
"><?php echo $_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['milestones']['name'];?>
</a>
															</p>
														<?php }?>

														
														<?php if ($_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['tagnum']>1){?>
															<p>
																<strong><?php echo $_smarty_tpl->getConfigVariable('tags');?>
:</strong>
																<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['tag'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['tag']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['name'] = 'tag';
$_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['tagsarr']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['total']);
?>
																	<a href="managetags.php?action=gettag&tag=<?php echo $_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['tagsarr'][$_smarty_tpl->getVariable('smarty')->value['section']['tag']['index']];?>
&amp;id=<?php echo $_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['project'];?>
"><?php echo $_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['tagsarr'][$_smarty_tpl->getVariable('smarty')->value['section']['tag']['index']];?>
</a>,
																<?php endfor; endif; ?>
															</p>
														<?php }?>
													<?php }?>

													
													<?php if ($_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['files'][0][0]>0){?>
														<p class="tags-miles">
															<strong><?php echo $_smarty_tpl->getConfigVariable('files');?>
:</strong>
														</p>

														<div class="inwrapper">
															<ul>

																<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['file'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['file']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['file']['name'] = 'file';
$_smarty_tpl->tpl_vars['smarty']->value['section']['file']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['files']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['file']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['file']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['file']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['file']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['file']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['file']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['file']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['file']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['file']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['file']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['file']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['file']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['file']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['file']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['file']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['file']['total']);
?>
																	<li>
																		<div class="itemwrapper" id="iw_<?php echo $_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['files'][$_smarty_tpl->getVariable('smarty')->value['section']['file']['index']]['ID'];?>
">

																			<table cellpadding="0" cellspacing="0" border="0">
																				<tr>
																					<td class="leftmen" valign="top">
																						<div class="inmenue"></div>
																					</td>
																					<td class="thumb">

																								<a href = "managefile.php?action=downloadfile&amp;id=<?php echo $_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['files'][$_smarty_tpl->getVariable('smarty')->value['section']['file']['index']]['project'];?>
&amp;file=<?php echo $_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['files'][$_smarty_tpl->getVariable('smarty')->value['section']['file']['index']]['ID'];?>
"<?php if ($_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['files'][$_smarty_tpl->getVariable('smarty')->value['section']['file']['index']]['imgfile']==1){?> rel="lytebox[img<?php echo $_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['ID'];?>
]"<?php }?> title="<?php echo $_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['files'][$_smarty_tpl->getVariable('smarty')->value['section']['file']['index']]['name'];?>
">	<img src="templates/<?php echo $_smarty_tpl->tpl_vars['settings']->value['template'];?>
/theme/<?php echo $_smarty_tpl->tpl_vars['settings']->value['theme'];?>
/images/files/<?php echo $_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['files'][$_smarty_tpl->getVariable('smarty')->value['section']['file']['index']]['type'];?>
.png" alt="<?php echo $_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['files'][$_smarty_tpl->getVariable('smarty')->value['section']['file']['index']]['name'];?>
" />
																		<
																						</a>
																					</td>
																					<td class="rightmen" valign="top">
																						<div class="inmenue">
																							<a class="del" href="managefile.php?action=delete&amp;id=<?php echo $_smarty_tpl->tpl_vars['myprojects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['project']['index']]['ID'];?>
&amp;file=<?php echo $_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['files'][$_smarty_tpl->getVariable('smarty')->value['section']['file']['index']]['ID'];?>
" title="<?php echo $_smarty_tpl->getConfigVariable('delete');?>
" onclick="fadeToggle('iw_<?php echo $_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['files'][$_smarty_tpl->getVariable('smarty')->value['section']['file']['index']]['ID'];?>
');"></a>
																						</div>
																					</td>
																				</tr>
																				<tr>
																					<td colspan="3"><span class="name">
																							<a href = "managefile.php?action=downloadfile&amp;id=<?php echo $_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['files'][$_smarty_tpl->getVariable('smarty')->value['section']['file']['index']]['project'];?>
&amp;file=<?php echo $_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['files'][$_smarty_tpl->getVariable('smarty')->value['section']['file']['index']]['ID'];?>
"<?php if ($_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['files'][$_smarty_tpl->getVariable('smarty')->value['section']['file']['index']]['imgfile']==1){?> rel="lytebox[img<?php echo $_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['ID'];?>
]"<?php }?> title="<?php echo $_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['files'][$_smarty_tpl->getVariable('smarty')->value['section']['file']['index']]['name'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['files'][$_smarty_tpl->getVariable('smarty')->value['section']['file']['index']]['name'],15,"...",true);?>
</a></span>
																					</td>
																				<tr/>
																			</table>

																		</div> 
																	</li>
																<?php endfor; endif; ?>

															</ul>
														</div> 
														<div style="clear:both"></div>
													<?php }?>

												</div> 

											</div>
										</div>
									</td>
								</tr>
							</tbody>
						<?php endfor; endif; ?>
					</table>

					<div class="tablemenue"></div>

				</div> 
			</div> 

		<?php }?>

		
			<script type="text/javascript">
				//initialize accordeons
				try{
					var accord_projects = new accordion('projecthead');
				}
				catch(e)
				{}
				try{
					var accord_tasks = new accordion('taskhead');
				}
				catch(e)
				{}
				try{
					var accord_msgs = new accordion('activityhead');
				}
				catch(e)
				{}
				//load calendar
				changeshow('manageajax.php?action=newcal','thecal','progress');

				//create blocks accordeon
				var accordIndex = new accordion('block_index', {
			    classNames : {
			        toggle : 'acc_toggle',
			        toggleActive : 'acctoggle_active',
			        content : 'acc_content'
			    }
			});

				/**
				 *
				 * This will activate the accordion with the supplied index
				 *
				 **/
				function activateAccordeon(theAccord){
					//activate the block in the block accordion
					accordIndex.activate($$('#block_index .acc_toggle')[theAccord]);
					//change the state of the arrow in the titlebar
					changeElements("#"+blockIds[theAccord]+" > a.win_block","win_none");
					//set a cookie to save the accordeon last clicked
					setCookie("activeSlideIndex",theAccord);
				}
				//get the blocks
				var theBlocks = $$("#block_index > div .headline > a");
				//console.log(theBlocks);

				//loop through the blocks and add the accordion toggle link
				openSlide = 0;
				blockIds = [];
				for(i=0;i<theBlocks.length;i++)
				{
					//get the id of the current html element
					var theId = theBlocks[i].getAttribute("id");

					blockIds.push(theId);
					//get the index of the last opened block
					theCook = readCookie("activeSlideIndex");
					//console.log(theCook);
					if(theCook > 0)
					{
						openSlide = theCook;
					}

					//get the onclick action of the current block
					var theAction = theBlocks[i].getAttribute("onclick");
					//add a call to activate accordeon
					theAction += "activateAccordeon("+i+");";
					theBlocks[i].setAttribute("onclick",theAction);
					//console.log(theBlocks[i].getAttribute("onclick"));
				}


				//accordIndex.activate($$('#block_index .acc_toggle')[0]);
				//activateAccordeon(openSlide);
				activateAccordeon(0);



			</script>
		
</div> 
<div class="content-spacer"></div>
	</div> 
</div> 

<?php echo $_smarty_tpl->getSubTemplate ("sidebar-a.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>
<?php /* Smarty version Smarty-3.1.13, created on 2015-12-04 01:36:26
         compiled from "/home/dbrobotic/public_html/colab/templates/standard/task.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6402491156615e9a0901b5-28123973%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '637e575a60a9274fe5453caf69aa04ae1674c90c' => 
    array (
      0 => '/home/dbrobotic/public_html/colab/templates/standard/task.tpl',
      1 => 1414597114,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6402491156615e9a0901b5-28123973',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'project' => 0,
    'settings' => 0,
    'projectname' => 0,
    'task' => 0,
    'userpermissions' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_56615e9a1277b4_53244629',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56615e9a1277b4_53244629')) {function content_56615e9a1277b4_53244629($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/home/dbrobotic/public_html/colab/include/plugins/modifier.truncate.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('jsload'=>"ajax",'jsload1'=>"tinymce"), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("tabsmenue-project.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('taskstab'=>"active"), 0);?>


<div id="content-left">
	<div id="content-left-in">

		<div class="tasks">
			<div class="breadcrumb">
				<a href="manageproject.php?action=showproject&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
"><img src="./templates/<?php echo $_smarty_tpl->tpl_vars['settings']->value['template'];?>
/theme/<?php echo $_smarty_tpl->tpl_vars['settings']->value['theme'];?>
/images/symbols/projects.png" alt="" /><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['projectname']->value,40,"...",true);?>
</a>
				<a href="managetask.php?action=showproject&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
"><img src="./templates/<?php echo $_smarty_tpl->tpl_vars['settings']->value['template'];?>
/theme/<?php echo $_smarty_tpl->tpl_vars['settings']->value['theme'];?>
/images/symbols/tasklist.png" alt="" /><?php echo $_smarty_tpl->getConfigVariable('tasklists');?>
</a>
				<a href="managetasklist.php?action=showtasklist&id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
&tlid=<?php echo $_smarty_tpl->tpl_vars['task']->value['liste'];?>
" title="<?php echo $_smarty_tpl->getConfigVariable('tasklist');?>
 / <?php echo $_smarty_tpl->tpl_vars['task']->value['list'];?>
"><img src="./templates/<?php echo $_smarty_tpl->tpl_vars['settings']->value['template'];?>
/theme/<?php echo $_smarty_tpl->tpl_vars['settings']->value['theme'];?>
/images/symbols/tasklist.png" alt="" /><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['task']->value['list'],50,"...",true);?>
</a>
				<span>&nbsp;/...</span>
			</div>

			<h1 class="second"><img src="./templates/<?php echo $_smarty_tpl->tpl_vars['settings']->value['template'];?>
/theme/<?php echo $_smarty_tpl->tpl_vars['settings']->value['theme'];?>
/images/symbols/task.png" alt="" /><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['task']->value['title'],40,"...",true);?>
</h1>

			<div class="statuswrapper">
				<ul>
					<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['tasks']['close']){?>
						<li class="link" id="closetoggle">
						<?php if ($_smarty_tpl->tpl_vars['task']->value['status']==1){?>
							<a class="close" href="javascript:closeElement('closetoggle','managetask.php?action=close&amp;tid=<?php echo $_smarty_tpl->tpl_vars['task']->value['ID'];?>
&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
');" title="<?php echo $_smarty_tpl->getConfigVariable('close');?>
"></a></li>
						<?php }else{ ?>
							<a class="close" href="javascript:closeElement('closetoggle','managetask.php?action=open&amp;tid=<?php echo $_smarty_tpl->tpl_vars['task']->value['ID'];?>
&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
');" title="<?php echo $_smarty_tpl->getConfigVariable('open');?>
"></a></li>
						<?php }?>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['tasks']['edit']){?>
						<li class="link"><a class="edit" href="javascript:void(0);" id="edit_butn" onclick="blindtoggle('form_edit');toggleClass(this,'edit-active','edit');toggleClass('sm_task','smooth','nosmooth');" title="<?php echo $_smarty_tpl->getConfigVariable('edit');?>
"></a></li>
					<?php }?>
					<li><a><?php echo $_smarty_tpl->getConfigVariable('user');?>
: <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['task']->value['user'],25,"...",true);?>
</a></li>
					<li><a><?php echo $_smarty_tpl->getConfigVariable('start');?>
: <?php echo $_smarty_tpl->tpl_vars['task']->value['startstring'];?>
</a></li>
					<li><a><?php echo $_smarty_tpl->getConfigVariable('end');?>
: <?php echo $_smarty_tpl->tpl_vars['task']->value['endstring'];?>
</a></li>
				</ul>
			</div>

			
			<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['tasks']['edit']){?>
				<div id="form_edit" class="addmenue" style="display:none;clear:both;">
					<div class="content-spacer"></div>
					<?php echo $_smarty_tpl->getSubTemplate ("edittask.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('showhtml'=>"no"), 0);?>

				</div>
			<?php }?>

			<div class="content-spacer"></div>

			<div class="nosmooth" id="sm_task">
				<div id="descript" class="descript">
					<h2><?php echo $_smarty_tpl->getConfigVariable('description');?>
</h2>
					<?php echo $_smarty_tpl->tpl_vars['task']->value['text'];?>

					<div class="content-spacer"></div>
				</div>
			</div>

		</div> 
	</div> 
</div> 

<?php echo $_smarty_tpl->getSubTemplate ("sidebar-a.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>
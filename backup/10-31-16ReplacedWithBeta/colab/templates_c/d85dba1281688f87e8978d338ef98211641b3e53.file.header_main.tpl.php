<?php /* Smarty version Smarty-3.1.13, created on 2015-12-04 01:27:28
         compiled from "/home/dbrobotic/public_html/colab/templates/standard/header_main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30828465656615c801ee802-79945190%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd85dba1281688f87e8978d338ef98211641b3e53' => 
    array (
      0 => '/home/dbrobotic/public_html/colab/templates/standard/header_main.tpl',
      1 => 1414597114,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30828465656615c801ee802-79945190',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
    'loggedin' => 0,
    'mainclasses' => 0,
    'usergender' => 0,
    'userid' => 0,
    'userpermissions' => 0,
    'classes' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_56615c80268232_34245771',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56615c80268232_34245771')) {function content_56615c80268232_34245771($_smarty_tpl) {?><div id="sitebody">

	<div id="header-wrapper">
		<div id="header">
			<div class="header-in">

				<div class="left">
					<div class="logo">
						<h1>
							<a href="index.php" title="<?php echo $_smarty_tpl->getConfigVariable('desktop');?>
">
								<img src="./templates/<?php echo $_smarty_tpl->tpl_vars['settings']->value['template'];?>
/theme/<?php echo $_smarty_tpl->tpl_vars['settings']->value['theme'];?>
/images/logo-b.png" alt="" />
							</a>
							<span class="title"><?php echo $_smarty_tpl->tpl_vars['settings']->value['name'];?>

								<span class="subtitle"> <?php if ($_smarty_tpl->tpl_vars['settings']->value['subtitle']){?>/ <?php echo $_smarty_tpl->tpl_vars['settings']->value['subtitle'];?>
 <?php }?> </span>
							</span>
						</h1>
					</div>
				</div> 

				<div class="right">

					<?php if ($_smarty_tpl->tpl_vars['loggedin']->value==1){?>
						<ul id="mainmenue">
							<li class="desktop">
								<a class="<?php echo $_smarty_tpl->tpl_vars['mainclasses']->value['desktop'];?>
" href="index.php"><span><?php echo $_smarty_tpl->getConfigVariable('desktop');?>
</span></a>
							</li>

							<?php if ($_smarty_tpl->tpl_vars['usergender']->value=="f"){?>
								<li class="profil-female">
									<a class="<?php echo $_smarty_tpl->tpl_vars['mainclasses']->value['profil'];?>
" href="manageuser.php?action=profile&amp;id=<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
"><span><?php echo $_smarty_tpl->getConfigVariable('myaccount');?>
</span></a>
								</li>
							<?php }else{ ?>
								<li class="profil-male">
									<a class="<?php echo $_smarty_tpl->tpl_vars['mainclasses']->value['profil'];?>
" href="manageuser.php?action=profile&amp;id=<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
"><span><?php echo $_smarty_tpl->getConfigVariable('myaccount');?>
</span></a>
								</li>
							<?php }?>

							<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['admin']['add']){?>
								<li class="admin">
									<a class="<?php echo $_smarty_tpl->tpl_vars['mainclasses']->value['admin'];?>
" href="admin.php?action=projects"><span><?php echo $_smarty_tpl->getConfigVariable('administration');?>
</span><span class="submenarrow"></span></a>
									<div class="submen">
										<ul>
											<li class="project-settings"><a class="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['classes']->value['overview'])===null||$tmp==='' ? '' : $tmp);?>
" href="admin.php?action=projects"><span><?php echo $_smarty_tpl->getConfigVariable('projectadministration');?>
</span></a></li>
											<li class="customer-settings"><a class="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['classes']->value['customer'])===null||$tmp==='' ? '' : $tmp);?>
" href="admin.php?action=customers"><span><?php echo $_smarty_tpl->getConfigVariable('customeradministration');?>
</span></a></li>
											<li class="user-settings"><a class="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['classes']->value['users'])===null||$tmp==='' ? '' : $tmp);?>
" href="admin.php?action=users"><span><?php echo $_smarty_tpl->getConfigVariable('useradministration');?>
</span></a></li>
											<li class="system-settings"><a class="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['classes']->value['system'])===null||$tmp==='' ? '' : $tmp);?>
" href="admin.php?action=system"><span><?php echo $_smarty_tpl->getConfigVariable('systemadministration');?>
</span></a></li>
										</ul>
									</div>
								</li>
							<?php }?>

							<li class="logout"><a href="manageuser.php?action=logout"><span><?php echo $_smarty_tpl->getConfigVariable('logout');?>
</span></a></li>
						</ul>
					<?php }?>

				</div> <!-- right END -->

			</div> <!-- header-in END -->
		</div> <!-- header END -->
	</div> <!-- header-wrapper END -->

	<div id="contentwrapper">
<?php }} ?>
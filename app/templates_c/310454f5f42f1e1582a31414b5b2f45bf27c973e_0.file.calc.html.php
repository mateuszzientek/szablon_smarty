<?php
/* Smarty version 3.1.30, created on 2022-03-22 02:05:02
  from "E:\xampp\htdocs\szablon_smarty\app\calc.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_623920beb05326_40516378',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '310454f5f42f1e1582a31414b5b2f45bf27c973e' => 
    array (
      0 => 'E:\\xampp\\htdocs\\szablon_smarty\\app\\calc.html',
      1 => 1647909936,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../templates/main.html' => 1,
  ),
),false)) {
function content_623920beb05326_40516378 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_643593688623920beb04f38_24674291', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../templates/main.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_643593688623920beb04f38_24674291 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

 <section>
	<form form action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php" method="post">
									<div class="fields">
										<div class="field half">
											<label for="kwota">Podaj kwote</label>
											<input type="text" name="kwota" id="kwota" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['kwota'];?>
" />
										</div>
										<div class="field half">
											<label for="lata">Podaj ilosc lat</label>
											<input type="text" name="lata" id="lata" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['lata'];?>
"/>
										</div>
										<div class="field half">
											<label for="opr">Podaj oprocentowanie</label>
											<input type="text" name="opr" id="opr" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['opr'];?>
"/>
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Oblicz" class="primary" /></li>
										<li><input type="reset" value="Wyczysc" /></li>
									</ul>
								</form>
                            </section>
							<section class="split">
								<section>
									<div class="contact-method">
										
<?php if (isset($_smarty_tpl->tpl_vars['messages']->value)) {?>
	<?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?> 
		<h4>Wyst??pi??y b????dy: </h4>
		<ol>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
?>
		<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		</ol>
	<?php }
}?>


<?php if (isset($_smarty_tpl->tpl_vars['result']->value)) {?>
	<h4>Wynik:</h4>
	<p>
	<?php echo $_smarty_tpl->tpl_vars['result']->value;?>
 z??
	</p>
<?php }?>

</div>
</section>									
</section>
<?php
}
}
/* {/block 'content'} */
}

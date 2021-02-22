<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-17 11:15:19
  from '/Applications/MAMP/htdocs/aryilo/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_602cecb7758180_63151686',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c5d01f1a54f4c185d49059ea0f703fb481f7d7e' => 
    array (
      0 => '/Applications/MAMP/htdocs/aryilo/themes/classic/templates/index.tpl',
      1 => 1613555543,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_602cecb7758180_63151686 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1604758810602cecb7742a39_82941510', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_1680543259602cecb7744a60_16702164 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_1270425983602cecb77493f0_93089513 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_1590562452602cecb77476c1_16398212 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1270425983602cecb77493f0_93089513', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_1604758810602cecb7742a39_82941510 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_1604758810602cecb7742a39_82941510',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_1680543259602cecb7744a60_16702164',
  ),
  'page_content' => 
  array (
    0 => 'Block_1590562452602cecb77476c1_16398212',
  ),
  'hook_home' => 
  array (
    0 => 'Block_1270425983602cecb77493f0_93089513',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1680543259602cecb7744a60_16702164', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1590562452602cecb77476c1_16398212', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}

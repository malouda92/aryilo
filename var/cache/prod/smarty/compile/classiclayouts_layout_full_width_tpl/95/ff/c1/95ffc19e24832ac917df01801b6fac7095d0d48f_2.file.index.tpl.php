<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-10 16:38:35
  from '/Applications/MAMP/htdocs/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6023fdfbc63644_59332617',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95ffc19e24832ac917df01801b6fac7095d0d48f' => 
    array (
      0 => '/Applications/MAMP/htdocs/themes/classic/templates/index.tpl',
      1 => 1612943137,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6023fdfbc63644_59332617 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21435294546023fdfbc5bd42_47272874', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_17870470826023fdfbc5d002_12783986 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_10483056226023fdfbc5f9d6_78071645 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_14402450936023fdfbc5e906_41701591 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10483056226023fdfbc5f9d6_78071645', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_21435294546023fdfbc5bd42_47272874 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_21435294546023fdfbc5bd42_47272874',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_17870470826023fdfbc5d002_12783986',
  ),
  'page_content' => 
  array (
    0 => 'Block_14402450936023fdfbc5e906_41701591',
  ),
  'hook_home' => 
  array (
    0 => 'Block_10483056226023fdfbc5f9d6_78071645',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17870470826023fdfbc5d002_12783986', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14402450936023fdfbc5e906_41701591', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}

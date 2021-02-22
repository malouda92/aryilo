<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-17 11:15:19
  from '/Applications/MAMP/htdocs/aryilo/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_602cecb7785197_38918746',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4c5ee0bdb73c55f952779f92451c6079e0730be' => 
    array (
      0 => '/Applications/MAMP/htdocs/aryilo/themes/classic/templates/page.tpl',
      1 => 1613555543,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_602cecb7785197_38918746 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_425591306602cecb776ec10_16137302', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_627307774602cecb77722d1_88878982 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_108101440602cecb7770367_91235450 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_627307774602cecb77722d1_88878982', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_1959721946602cecb777a931_20558265 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_902981986602cecb777cad7_67171446 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_1071790701602cecb7779156_16008820 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1959721946602cecb777a931_20558265', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_902981986602cecb777cad7_67171446', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_1810543195602cecb77811c4_65569826 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_1088567468602cecb777fc04_80281114 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1810543195602cecb77811c4_65569826', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_425591306602cecb776ec10_16137302 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_425591306602cecb776ec10_16137302',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_108101440602cecb7770367_91235450',
  ),
  'page_title' => 
  array (
    0 => 'Block_627307774602cecb77722d1_88878982',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_1071790701602cecb7779156_16008820',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_1959721946602cecb777a931_20558265',
  ),
  'page_content' => 
  array (
    0 => 'Block_902981986602cecb777cad7_67171446',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_1088567468602cecb777fc04_80281114',
  ),
  'page_footer' => 
  array (
    0 => 'Block_1810543195602cecb77811c4_65569826',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_108101440602cecb7770367_91235450', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1071790701602cecb7779156_16008820', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1088567468602cecb777fc04_80281114', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}

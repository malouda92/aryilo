<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-10 16:38:35
  from '/Applications/MAMP/htdocs/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6023fdfbc82961_01731718',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7415a6123adc02e1e10792473e14e67d5fc7e48' => 
    array (
      0 => '/Applications/MAMP/htdocs/themes/classic/templates/page.tpl',
      1 => 1612943137,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6023fdfbc82961_01731718 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2370443836023fdfbc748d7_80542743', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_7732195466023fdfbc77d19_13373151 extends Smarty_Internal_Block
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
class Block_1827937746023fdfbc75c90_43182125 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7732195466023fdfbc77d19_13373151', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_16014831146023fdfbc7d695_14377998 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_217678756023fdfbc7e818_65182762 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_12705555726023fdfbc7c989_80006730 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16014831146023fdfbc7d695_14377998', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_217678756023fdfbc7e818_65182762', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_8827747566023fdfbc80dd2_38499523 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_7701356816023fdfbc801e7_90031073 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8827747566023fdfbc80dd2_38499523', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_2370443836023fdfbc748d7_80542743 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2370443836023fdfbc748d7_80542743',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_1827937746023fdfbc75c90_43182125',
  ),
  'page_title' => 
  array (
    0 => 'Block_7732195466023fdfbc77d19_13373151',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_12705555726023fdfbc7c989_80006730',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_16014831146023fdfbc7d695_14377998',
  ),
  'page_content' => 
  array (
    0 => 'Block_217678756023fdfbc7e818_65182762',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_7701356816023fdfbc801e7_90031073',
  ),
  'page_footer' => 
  array (
    0 => 'Block_8827747566023fdfbc80dd2_38499523',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1827937746023fdfbc75c90_43182125', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12705555726023fdfbc7c989_80006730', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7701356816023fdfbc801e7_90031073', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}

<?php /* Smarty version Smarty-3.0.8, created on 2015-06-25 12:04:56
         compiled from "/home/work/user/guojl/carlovers/application/views/index/index.phtml" */ ?>
<?php /*%%SmartyHeaderCode:1327694173558b7de80749e9-13329405%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67e534296ab02bd264af8ef856410fcf3ab0ef3f' => 
    array (
      0 => '/home/work/user/guojl/carlovers/application/views/index/index.phtml',
      1 => 1435204987,
      2 => 'file',
    ),
    '0d91e70f0030797d29659b9ece11622e45b9a526' => 
    array (
      0 => '/home/work/user/guojl/carlovers/application/views/common/page.phtml',
      1 => 1435204519,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1327694173558b7de80749e9-13329405',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (@MODULE=='Index'){?>
	<?php $_template = new Smarty_Internal_Template('common/header.phtml', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<?php }else{ ?>
	<?php $_template = new Smarty_Internal_Template('../../../views/common/header.phtml', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<?php }?>
</head>
<body class="page">

    <div id="main-wraper">
        
<a href="javascript:;" id="ajax-event">Ajax事件写法</a>

    </div>

    
<script>
    require(['home/index'], function (main) {
        main.init();
    }); 
</script>


    <?php if (@MODULE=='Index'){?>
		<?php $_template = new Smarty_Internal_Template('common/footer.phtml', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
	<?php }else{ ?>
		<?php $_template = new Smarty_Internal_Template('../../../views/common/footer.phtml', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
	<?php }?>
    
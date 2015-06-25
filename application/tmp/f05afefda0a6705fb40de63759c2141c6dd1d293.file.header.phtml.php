<?php /* Smarty version Smarty-3.0.8, created on 2015-06-25 11:56:23
         compiled from "/home/work/user/guojl/carlovers/application/views/common/header.phtml" */ ?>
<?php /*%%SmartyHeaderCode:638419249558b7be78ef1f6-23470373%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f05afefda0a6705fb40de63759c2141c6dd1d293' => 
    array (
      0 => '/home/work/user/guojl/carlovers/application/views/common/header.phtml',
      1 => 1435204530,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '638419249558b7be78ef1f6-23470373',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>爱车玩家</title>
    <!--[if lt IE 7]>
    <script>
        // window.location.href = '<?php echo $_smarty_tpl->getVariable('webroot')->value;?>
/static/ieup/index.html';
    </script>
    <![endif]-->
    <link rel="icon" href="<?php echo $_smarty_tpl->getVariable('webroot')->value;?>
/favicon.ico" type="image/x-icon" />

    <script src="<?php echo $_smarty_tpl->getVariable('feroot')->value;?>
/common/extra/esl.js"></script>

    <script>
        require.config({
            'baseUrl': '<?php echo $_smarty_tpl->getVariable('feroot')->value;?>
',
            'paths': {
            },
            'packages': [
                {
                    'name': 'echarts',
                    'location': '../dep/echarts/2.1.9/asset',
                    'main': 'echarts'
                },
                {
                    'name': 'est',
                    'location': '../dep/est/1.3.0/asset'
                },
                {
                    'name': 'etpl',
                    'location': '../dep/etpl/3.0.0/asset',
                    'main': 'main'
                },
                {
                    'name': 'jquery',
                    'location': '../dep/jquery/1.9.1/asset',
                    'main': 'jquery.min'
                },
                {
                    'name': 'moment',
                    'location': '../dep/moment/2.7.0/asset',
                    'main': 'moment'
                },
                {
                    'name': 'saber-emitter',
                    'location': '../dep/saber-emitter/1.0.0/asset',
                    'main': 'emitter'
                },
                {
                    'name': 'zrender',
                    'location': '../dep/zrender/2.0.6/asset',
                    'main': 'zrender'
                } 
            ]
        });

        window.GLOBAL = {
            token: '<?php echo $_smarty_tpl->getVariable('token')->value;?>
'
        };
    </script>

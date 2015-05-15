<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <script type="text/javascript" src="<?php echo U('Min/index?g=admin_js');?>"></script>
    <link href="<?php echo U('Min/index?g=admin_css');?>" rel="stylesheet" type="text/css"/>
    <script type="text/javascript">
        $(function () {
            /* $.messager.confirm("请您确认...","您确认要删除这条信息么?",function(r){
             if(r){
             $.messager.alert("删除成功","删除成功！","error");
             }
             });*/
        })
    </script>
</head>
<body class="easyui-layout">
<div region="north" border="true" split="true" style="height: 80px;">

</div>
<div region="south" border="true" split="true" style="height: 40px;">

</div>
<div region="west" split="true" title="导航菜单" style="width: 170px;">
    <div class="easyui-accordion">
        <div title="账号管理" iconcls="icon-save">
            <ul class="easyui-tree">
                <li>
                    <span><a href="#">账号列表</a></span>
                </li>
                <li>
                    <span><a href="#">添加账号</a></span>
                </li>
            </ul>
        </div>
        <div title="服务器管理" iconcls="icon-save">
            <ul class="easyui-tree">
                <li>
                    <span><a href="#">服务器列表</a></span>
                </li>
                <li>
                    <span><a href="#">添加服务器</a></span>
                </li>
            </ul>
        </div>
        <div title="CP管理" iconcls="icon-save">
            <ul class="easyui-tree">
                <li>
                    <span><a href="#">CP列表</a></span>
                </li>
                <li>
                    <span><a href="#">添加CP</a></span>
                </li>
            </ul>
        </div>
        <div title="游戏类型&标签管理" iconcls="icon-save">
            <ul class="easyui-tree">
                <li>
                    <span><a href="#">类型列表</a></span>
                </li>
                <li>
                    <span><a href="#">标签列表</a></span>
                </li>
                <li>
                    <span><a href="#">添加类型</a></span>
                </li>
                <li>
                    <span><a href="#">添加标签</a></span>
                </li>
            </ul>
        </div>

    </div>
</div>
<div region="center" id="mainPanle">

</div>
</body>
</html>
<?php if (!defined('THINK_PATH')) exit();?><!--<html>-->
<!--<head>-->
    <!--<meta charset="UTF-8">-->
<!--</head>-->
<!--<body align="center">-->
<!--<h1>44444444</h1>-->
<!--你的文件目录：-->

<!--<?php if(is_array($result)): foreach($result as $key=>$li): ?>-->
    <!--文件名：-->
    <!--<a href="<?php echo U('File/downloadFile',array('folders'=>$li['filesavefolder'],'file'=>$li['filesavename'],'reallyfile'=>$li['filename']));?>"><?php echo ($li["filename"]); ?></a>-->
    <!--&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($li["upfile_time"]); ?>-->
    <!--&nbsp;&nbsp;&nbsp;&nbsp;-->
    <!--下载次数：-->
    <!--<?php echo ($li["count"]); ?>-->
    <!--<a href="<?php echo U('User/deleteFile',array('filesavename'=>$li['filesavename']));?>">删除</a>-->
    <!--<br/>-->
<!--<?php endforeach; endif; ?>-->

<!--</body>-->
<!--</html>-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/test/Public/CSS/index.css">
</head>
<body>
<article class="">
    <div class="list">
        <form method="post" action="<?php echo U('User/UserinfoSearch');?>">
        <span>文件名</span>
        <span>上传时间</span>
        <span>标签</span>
        <span>下载次数</span>
        <span>删除</span>
        <span style="width:325px;">标签
                <select name="label">
                    <option value ="所有">所有</option>
                    <?php if(is_array($label)): foreach($label as $key=>$li): ?><option value ="<?php echo ($li["filelabel"]); ?>"><?php echo ($li["filelabel"]); ?></option><?php endforeach; endif; ?>
                </select>
        搜索:<input type="text" name="search" size="15"><input type="submit" name="submit" value="搜索"></span>
        </form>
    </div>
    <hr />

    <section>

        <ul>
            <?php if(is_array($result)): foreach($result as $key=>$li): ?><li>
                    <div class="list">
                        <span><a href="<?php echo U('File/downloadFile',array('folders'=>$li['filesavefolder'],'file'=>$li['filesavename'],'reallyfile'=>$li['filename']));?>" style="color:blue;"><?php echo ($li["filename"]); ?></a></span>
                        <span><a href=""><?php echo ($li["upfile_time"]); ?></a></span>
                        <span><a href=""><?php echo ($li["filelabel"]); ?></a></span>
                        <span><a href=""><?php echo ($li["count"]); ?></a></span>
                        <span><a href="<?php echo U('User/deleteFile',array('filesavename'=>$li['filesavename']));?>"><i class="icon"> &nbsp&nbsp&nbsp&nbsp</i></a></span>
                    </div>
                </li><?php endforeach; endif; ?>
        </ul>
        <div class="pages">
            <?php echo ($page); ?>
        </div>
    </section>
</article>
</body>
</html>
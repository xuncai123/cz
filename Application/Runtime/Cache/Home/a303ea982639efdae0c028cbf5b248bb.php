<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML><HEAD>
<META http-equiv=Content-Type content="text/html; charset=utf8">
<LINK href="<?php echo (ROOT); ?>/css/admin.css" type="text/css" rel="stylesheet">
<SCRIPT language=javascript>
	function expand(el)
	{
		childObj = document.getElementById("child" + el);

		if (childObj.style.display == 'none')
		{
			childObj.style.display = 'block';
		}
		else
		{
			childObj.style.display = 'none';
		}
		return;
	}
</SCRIPT>
</HEAD>
<BODY>
<TABLE height="100%" cellSpacing=0 cellPadding=0 width=170 
background=images/menu_bg.jpg border=0>
  <TR>
    <TD vAlign=top align=middle>
      <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
        
        <TR>
          <TD height=10></TD></TR></TABLE>
      <TABLE cellSpacing=0 cellPadding=0 width=150 border=0>
        
        <TR height=22>
          <TD style="PADDING-LEFT: 30px" background="<?php echo (ROOT); ?>/images/menu_bt.jpg"><A 
            class="menuParent" onclick="expand(1)" 
            href="javascript:void(0);">系统订单</A></TD></TR>
        <TR height=4>
          <TD></TD></TR></TABLE>
      <TABLE id=child1 style="DISPLAY: none" cellSpacing=0 cellPadding=0 
      width=150 border=0>
        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="<?php echo (ROOT); ?>/images/menu_icon.gif" width=9></TD>
          <TD><A class="menuChild" 
            href="<?php echo U('Order/user_order');?>" 
            target="main">总充值订单</A></TD></TR>
        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="<?php echo (ROOT); ?>/images/menu_icon.gif" width=9></TD>
          <TD><A class="menuChild" 
            href="<?php echo U('Order/agent');?>"" 
            target=main>代理商订单</A></TD></TR>
        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="<?php echo (ROOT); ?>/images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild 
            href="#" 
            target=main>分类管理</A></TD></TR>
        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="<?php echo (ROOT); ?>/images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild 
            href="#" 
            target=main>子类管理</A></TD></TR>
        <TR height=4>
          <TD colSpan=2></TD></TR></TABLE>
      <TABLE cellSpacing=0 cellPadding=0 width=150 border=0>
        <TR height=22>
          <TD style="PADDING-LEFT: 30px" background="<?php echo (ROOT); ?>/images/menu_bt.jpg"><A 
            class=menuParent onclick=expand(2) 
            href="javascript:void(0);">新闻中心</A></TD></TR>
        <TR height=4>
          <TD></TD></TR></TABLE>
      <TABLE id=child2 style="DISPLAY: none" cellSpacing=0 cellPadding=0 
      width=150 border=0>
        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="<?php echo (ROOT); ?>/images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild 
            href="#" 
            target=main>公司新闻</A></TD></TR>
        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="<?php echo (ROOT); ?>/images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild 
            href="#" 
            target=main>分类管理</A></TD></TR>
        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="<?php echo (ROOT); ?>/images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild 
            href="#" 
            target=main>子类管理</A></TD></TR>
        <TR height=4>
          <TD colSpan=2></TD></TR></TABLE>
      <TABLE cellSpacing=0 cellPadding=0 width=150 border=0>
        <TR height=22>
          <TD style="PADDING-LEFT: 30px" background="<?php echo (ROOT); ?>/images/menu_bt.jpg"><A 
            class="menuParent" onclick="expand(3)" 
            href="javascript:void(0);">产品中心</A></TD></TR>
        <TR height=4>
          <TD></TD></TR></TABLE>
      <TABLE id=child3 style="DISPLAY: none" cellSpacing=0 cellPadding=0 
      width=150 border=0>
        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="<?php echo (ROOT); ?>/images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild 
            href="#" 
            target=main>产品展示</A></TD></TR>
        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="<?php echo (ROOT); ?>/images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild 
            href="#" 
            target=main>最新产品</A></TD></TR>
        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="<?php echo (ROOT); ?>/images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild 
            href="#" 
            target=main>分类管理</A></TD></TR>
        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="<?php echo (ROOT); ?>/images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild 
            href="#" 
            target=main>子类管理</A></TD></TR>
        <TR height=4>
          <TD colspan=2></TD></TR></TABLE>
      <TABLE cellSpacing=0 cellPadding=0 width=150 border=0>
        <TR height=22>
          <TD style="PADDING-LEFT: 30px" background="<?php echo (ROOT); ?>/images/menu_bt.jpg"><A 
            class=menuParent onclick=expand(4) 
            href="javascript:void(0);">客户服务</A></TD></TR>
        <TR height=4>
          <TD></TD></TR></TABLE>
      <TABLE id="child4" style="DISPLAY: none" cellSpacing=0 cellPadding=0 
      width=150 border=0>
        <TR height=20>
          <TD align="middle" width=30><IMG height=9 
            src="<?php echo (ROOT); ?>/images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild 
            href="#" 
            target=main>客户服务</A></TD></TR>
        <TR height=20>
          <TD align="middle" width=30><IMG height=9 
            src="<?php echo (ROOT); ?>/images/menu_icon.gif" width=9></TD>
          <TD><A class="menuChild" 
            href="#" 
            target=main>分类管理</A></TD></TR>
        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="<?php echo (ROOT); ?>/images/menu_icon.gif" width=9></TD>
          <TD><A class="menuChild" 
            href="#" 
            target=main>子类管理</A></TD></TR>
        <TR height=4>
          <TD colSpan=2></TD></TR></TABLE>
      <TABLE cellSpacing=0 cellPadding=0 width=150 border=0>
        <TR height=22>
          <TD style="PADDING-LEFT: 30px" background="<?php echo (ROOT); ?>/images/menu_bt.jpg"><A 
            class=menuParent onclick="expand(5)"
            href="javascript:void(0);">经典案例</A></TD></TR>
        <TR height=4>
          <TD></TD></TR></TABLE>
      <TABLE id="child5" style="DISPLAY: none" cellSpacing=0 cellPadding=0 
      width=150 border=0>
        
        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="<?php echo (ROOT); ?>/images/menu_icon.gif" width=9></TD>
          <TD><A class="menuChild" 
            href="#" 
            target="main">分类管理</A></TD></TR>
        <TR height=20>
          <TD align="middle" width=30><IMG height=9 
            src="<?php echo (ROOT); ?>/images/menu_icon.gif" width=9></TD>
          <TD><A class="menuChild" 
            href="#" 
            target=main>子类管理</A></TD></TR>
        <TR height=4>
          <TD colSpan=2></TD></TR></TABLE>
      <TABLE cellSpacing=0 cellPadding=0 width=150 border=0>
        
        <TR height=22>
          <TD style="PADDING-LEFT: 30px" background="<?php echo (ROOT); ?>/images/menu_bt.jpg"><A 
            class="menuParent" onclick=expand(6) 
            href="javascript:void(0);">高级管理</A></TD></TR>
        <TR height=4>
          <TD></TD></TR></TABLE>
      <TABLE id=child6 style="DISPLAY: none" cellSpacing=0 cellPadding=0 
      width=150 border=0>
        
        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="<?php echo (ROOT); ?>/images/menu_icon.gif" width=9></TD>
          <TD><A class="menuChild" 
            href="#" 
            target=main>广告管理</A></TD></TR>
        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="<?php echo (ROOT); ?>/images/menu_icon.gif" width=9></TD>
          <TD><A class="menuChild" 
            href="#" 
            target="main">访问统计</A></TD></TR>
        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="<?php echo (ROOT); ?>/images/menu_icon.gif" width=9></TD>
          <TD><A class="menuChild" 
            href="#" 
            target="main">邮件发送设置</A></TD></TR>
        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="<?php echo (ROOT); ?>/images/menu_icon.gif" width=9></TD>
          <TD><A class="menuChild" 
            href="#" 
            target=main>联系部门</A></TD></TR>
        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="<?php echo (ROOT); ?>/images/menu_icon.gif" width=9></TD>
          <TD><A class="menuChild" 
            href="#" 
            target=main>用户留言</A></TD></TR>
        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="<?php echo (ROOT); ?>/images/menu_icon.gif" width=9></TD>
          <TD><A class="menuChild" 
            href="#" 
            target=main>招聘职位</A></TD></TR>
        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="<?php echo (ROOT); ?>/images/menu_icon.gif" width=9></TD>
          <TD><A class="menuChild" 
            href="#" 
            target=main>应聘人员</A></TD></TR>
        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="<?php echo (ROOT); ?>/images/menu_icon.gif" width=9></TD>
          <TD><A class="menuChild" 
            href="#" 
            target=main>留言簿</A></TD></TR>
        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="<?php echo (ROOT); ?>/images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild 
            href="#" 
            target=main>产品订购</A></TD></TR>
        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="<?php echo (ROOT); ?>/images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild 
            href="#" 
            target=main>链接管理</A></TD></TR>
        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="<?php echo (ROOT); ?>/images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild 
            href="#" 
            target=main>文件管理</A></TD></TR>
        <TR height=20>
          <TD align="middle" width=30><IMG height='9' 
            src="<?php echo (ROOT); ?>/images/menu_icon.gif" width=9></TD>
          <TD><A class="menuChild"
            href="#" 
            target=main>信息转移</A></TD></TR>
        <TR height=4>
          <TD colSpan=2></TD></TR></TABLE>
      <TABLE cellSpacing=0 cellPadding=0 width=150 border=0>
        
        <TR height=22>
          <TD style="PADDING-LEFT: 30px" background="<?php echo (ROOT); ?>/images/menu_bt.jpg"><A 
            class="menuParent" onclick=expand(7) 
            href="javascript:void(0);">系统管理</A></TD></TR>
        <TR height=4>
          <TD></TD></TR></TABLE>
      <TABLE id=child7 style="DISPLAY: none" cellSpacing=0 cellPadding=0 
      width=150 border=0>
        
        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="<?php echo (ROOT); ?>/images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild 
            href="#" 
            target=main>基本设置</A></TD></TR>
        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="<?php echo (ROOT); ?>/images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild 
            href="#" 
            target=main>样式管理</A></TD></TR>
        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="<?php echo (ROOT); ?>/images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild 
            href="#" 
            target=main>栏目管理</A></TD></TR>
        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="<?php echo (ROOT); ?>/images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild 
            href="#" 
            target=main>功能管理</A></TD></TR>
        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="<?php echo (ROOT); ?>/images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild 
            href="#" 
            target=main>菜单管理</A></TD></TR>
        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="<?php echo (ROOT); ?>/images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild 
            href="#" 
            target=main>首页设置</A></TD></TR>
        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="<?php echo (ROOT); ?>/images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild 
            href="#" 
            target=main>管理员列表</A></TD></TR>
        <TR height=4>
          <TD colSpan=2></TD></TR></TABLE>
      <TABLE cellSpacing=0 cellPadding=0 width=150 border=0>
        
        <TR height=22>
          <TD style="PADDING-LEFT: 30px" background="<?php echo (ROOT); ?>/images/menu_bt.jpg"><A 
            class=menuParent onclick=expand(0) 
            href="javascript:void(0);">个人管理</A></TD></TR>
        <TR height=4>
          <TD></TD></TR></TABLE>
      <TABLE id=child0 style="DISPLAY: none" cellSpacing=0 cellPadding=0 
      width=150 border=0>
        
        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="<?php echo (ROOT); ?>/images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild 
            href="#" 
            target=main>修改口令</A></TD></TR>
        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="<?php echo (ROOT); ?>/images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild 
            onclick="if (confirm('确定要退出吗？')) return true; else return false;" 
            href="http://www.865171.cn" 
            target=_top>退出系统</A></TD></TR></TABLE></TD>
    <TD width=1 bgColor=#d1e6f7></TD></TR></TABLE></BODY></HTML>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GD2折线图分析网站月访问量走势</title>
<style type="text/css">
<!--
td{
font-size:9pt;
}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}

-->
</style>
</head>
<body>

<script language="javascript">
function chkinput(form){
    if(form.T1.value=='' || form.T2.value=='' || form.T3.value=='' || form.T4.value=='' || form.T5.value=='' || form.T6.value=='' || form.T7.value=='' || form.T8.value=='' || form.T9.value=='' || form.T10.value=='' || form.T11.value=='' || form.T12.value==''){
	    alert("表单中数值不能为空！");
		return false;
	}
	return true;
}

</script>


<form method="post" name="myform" action="img.php" onSubmit="return chkinput(this)">
  <div align="left">
    <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="423" height="304" background="images/bg.gif">
      <tr align="center">
        <td height="73">&nbsp;</td>
      </tr>
      <tr>
        <td width="193"><p align="right"><font face="Tahoma" size="2">1月：
          <input type="text" name="T1" size="12" />
        </font></p></td>
        <td width="230" height="28"><font face="Tahoma" size="2">&nbsp;&nbsp;&nbsp;&nbsp;7月：&nbsp;&nbsp;
              <input name="T7" type="text" id="T7" size="12" />
        </font></td>
      </tr>
      <tr>
        <td width="193"><p align="right"><font face="Tahoma" size="2">2月：
          <input name="T2" type="text" id="T2" size="12" />
        </font></p></td>
        <td height="28"><font face="Tahoma" size="2">&nbsp;&nbsp;&nbsp;&nbsp;8月：&nbsp;&nbsp;
              <input name="T8" type="text" id="T8" size="12" />
        </font></td>
      </tr>
      <tr>
        <td width="193"><p align="right"><font face="Tahoma" size="2">3月：
          <input name="T3" type="text" id="T3" size="12" />
        </font> </p></td>
        <td height="28"><font face="Tahoma" size="2">&nbsp;&nbsp;&nbsp;&nbsp;9月：&nbsp;&nbsp;
              <input name="T9" type="text" id="T9" size="12" />
        </font></td>
      </tr>
      <tr>
        <td width="193"><p align="right"><font face="Tahoma" size="2">4月：
          <input name="T4" type="text" id="T4" size="12" />
        </font></p></td>
        <td height="28"><font face="Tahoma" size="2">&nbsp;&nbsp;&nbsp;&nbsp;10月：
          <input name="T10" type="text" id="T10" size="12" />
        </font></td>
      </tr>
      <tr>
        <td width="193"><p align="right"><font face="Tahoma" size="2">5月：
          <input name="T5" type="text" id="T5" size="12" />
        </font></p></td>
        <td height="28"><font face="Tahoma" size="2">&nbsp;&nbsp;&nbsp;&nbsp;11月：
          <input name="T11" type="text" id="T11" size="12" />
        </font></td>
      </tr>
      <tr>
        <td width="193"><p align="right"><font face="Tahoma" size="2">6月：
          <input name="T6" type="text" id="T6" size="12" />
        </font></p></td>
        <td height="28"><font face="Tahoma" size="2">&nbsp;&nbsp;&nbsp;&nbsp;12月：
          <input name="T12" type="text" id="T12" size="12" />
        </font></td>
      </tr>
      <tr align="center">
        <td height="63" colspan="4"><p align="center"><font face="Tahoma">
            <input type="hidden" name="flag" value="1" />
            <input type="submit" value="提交" name="submit" />
        </font></p></td>
      </tr>
    </table>
  </div>
</form>
</body>
</html>


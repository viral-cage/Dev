## Welcome to Viral Cage GitHub Pages!
<html>  <head> <title>Html Tester</title> </head>  <body alink="#ff0000" bgcolor="#ffffff" link="#0000ff" text="#000000" vlink="#800080">  <script language="JavaScript">
function preview() { 
temp = document.tester.box.value; 
preWindow = open("", 
"preWindow"," menubar=yes, scrollbars=yes"); 
preWindow.document.open(); 
preWindow.document.write(temp); 
preWindow.document.close(); 
}; 
</script>  <center>
<table bgcolor="#FFFFFF" border="5" cellpadding="5" cellspacing="0">
<tr><td align="left" bgcolor="#FF6600">  <form name="tester">
<textarea cols="180" name="box" rows="30" wrap="physical">  </textarea>  <input onclick="preview()" type="button" value="Test The Code" />  <input type="reset" value="Reset" />  </form>
</td></tr>
</table>
</center>
</body></html> 

<html>
<head>
<script language="javascript1.1">
function doit()
{
document.upload.filename.value = opener. document.upload.filename.value 

sList=window.showModalDialog("ind.html","upo","");
}
</script>
</head>
<body>
<form name="upload" method="post" action="">
<input type="file" name="filename"><br>
<input type="submit" name="Submit" value="Submit Filename To Pop-up" onClick="doit();">
</form>
</body></html>
<?
	include "../../module/class/class.Msg.php";
	include "../../module/class/class.DbCon.php";
?>

<link type='text/css' rel='stylesheet' href='./print.css'>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script language="javascript" type="text/javascript">

function printPage() {
	if(window.print){
		agree = confirm('���� �������� ����Ͻðڽ��ϱ�?');
		if (agree) window.print();
	}
}

</script> 

<body onload='printPage();'>

<style type="text/css" media="print">
@page {
    size: auto;  /* auto is the initial value */
    margin: 0;  /* this affects the margin in the printer settings */
}
</style>


<!--<div id="wrap" style="page:a4sheet;page-break-after:always;">-->
<div id="wrap">

	<?
		include 'print_ok.php';
	?>

</div>

<!--

<div onclick="javascript:printPage(uid)" style='width:200px;height:50px;line-height:50px;text-align:center;margin:50px auto;background:#4d56c3;color:#ffffff;font-size:18px;font-weight:bold;cursor:pointer;margin-bottom:0'>�μ�</div>
<br>
<div style='text-align:Center;'>
	�� �ͽ��÷η����� ��Ȥ������ �μⰡ �ȵǽô� �е��� Chrome ���� �μ����ֽñ� �ٶ��ϴ�.
</div>
-->
<br><br>

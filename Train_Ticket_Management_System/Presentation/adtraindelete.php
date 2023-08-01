<?php 
	
        require_once('../Management/header.php');
        require_once('../Model/admindata.php');
        $trainNum = $_REQUEST['trainNum'];
        $data = adminviewbytNum($trainNum);
	

?>

<html>
<head>
	<title>Remove Train</title>
    <link rel="stylesheet" type="text/css" href="../Asset/Admin.css">
</head>
<body>

		<form align = "center" action="../Management/removeTrainController.php" method="post" enctype="">
			<fieldset>
				<legend>delete train data</legend>
				<table>
				

					<tr>
						<td>trainNum</td>
						<td><input type="text" name="trainNum" value="<?=$data['trainNum']?>"></td>
					</tr>
					
					<tr>
						<td>trainRoute</td>
						<td><input type="text" name="trainRoute" value="<?=$data['trainRoute']?>"></td>
					</tr>
					<tr>
						<td>trainType</td>
						<td><input type="text" name="trainType" value="<?=$data['trainType']?>"></td>
					</tr>
					<tr>
						<td>trainDriverName</td>
						<td><input type="text" name="trainDriverName" value="<?=$data['trainDriverName']?>"></td>
					</tr>

					<tr>
						<td>
						<input type="hidden" name="trainNum" value="<?=$trainNum?>"> 
						<input type="submit" name="submit" value="Delete"> 
                    </td>
					</tr>
				</table>
			</fieldset>
		</form>
</body>
</html>
<?php
include 'config.php';
// Update
try {
$edit_END = @$_POST['edit_END'];
$edit_DEZ = @$_POST['edit_DEZ'];
$edit_TYP = @$_POST['edit_TYP'];
$edit_DTF = @$_POST['edit_DTF'];
$edit_SRC = @$_POST['edit_SRC'];
$edit_CRT = @$_POST['edit_CRT'];
$edit_TRG = @$_POST['edit_TRG'];
$edit_DSC = @$_POST['edit_DSC'];
$edit_EXC = @$_POST['edit_EXC'];
$edit_MES = @$_POST['edit_MES'];
$edit_DTE = @$_POST['edit_DTE'];
$get_id = @$_GET['ID'];
if (isset($_POST['edit-submit'])) {
	$sqll = "UPDATE INC SET END=?, DEZ=?, TYP=?, DTF=?, SRC=?, CRT=?, TRG=?, DSC=?, EXC=?, MES=?, DTE=? WHERE ID=?";
	$querys = $pdo->prepare($sqll);
	$querys->execute([$edit_END, $edit_DEZ, $edit_TYP, $edit_DTF, $edit_SRC, $edit_CRT, $edit_TRG, $edit_DSC, $edit_EXC, $edit_MES, $edit_DTE, $get_id]);
	header('Location: '. $_SERVER['HTTP_REFERER']);
}
}catch (e) {
   alert( "Обнаружен пиздец" );
}
?>

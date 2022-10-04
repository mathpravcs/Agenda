<?php include ("../../config/config.php");?>
<?php include (DIRREQ."lib/html/header.php");?>
<?php
$date=new \DateTime($_GET['date'],new \DateTimeZone('America/Sao_Paulo'));
?>

<form name="formAdd" id ="formAdd" method="post" action="<?php echo DIRPAGE.'controller/ControllerAdd.php';?>">
Data: <input type="date" name="date" id="date" value="<?php echo $date->format("Y-m-d");?>"><br>
Hora: <input type="time" name="time" id="time" value="<?php echo $date->format("H:i");?>"><br>
Aula: <input type="text" name="title" id="title" ><br>
Professor: <input type="text" name="description" id="descripition" ><br>
Quanto tempo dispoe para o treino:
<select name="horasAtendimento" id="horasAtendimento">
<option value="">Selecione</option>
<option value="1">1H</option>
<option value="2">2H</option>
<option value="3">3H</option>
</select><br>
<input type="submit" value="Marcar Treino">
</form>

<?php include (DIRREQ."lib/html/footer.php");?>
<?php require_once(PATH_VIEWS.'header.php'); ?>

<!--  Zone message d'alerte -->
<?php require_once(PATH_VIEWS.'alert.php');?>

<!--  Début de la page -->
<div class = "col-md-10 col-sm-12 col-xs-12">

<?php
if (!isset($alert)) { // S'il n'y a pas eu d'erreurs
?>

<form class="centre" method="get" action="informatique/dev-php">

<!-- Affichage du tableau -->
<!-- div class="col-md-6 col-sm-6 col-xs-12" -->
<div class="col-md-6 col-sm-6 col-xs-12" >
	<table class="table table-bordered">
		<tr class="color">
			<th> Item 1 </th>
            <th> Item 2 </th>
            <th> Addition</th>
            <th> Paire / Impaire </th>
		</tr>
		<tr>
            <td name="c1"> <?php echo $c1 ?>  </td>
			<td name="v1"> <?php echo $v1?> </td>
            <td name="a1"><?php echo $res1 ?></td>
            <td> <?php echo $m1 ?> </td>
		</tr>
		<tr>
            <td><?php echo $c2 ?> </td>
			<td> <?php echo $v2 ?> </td>
            <td name="a2"> <?php echo $res2 ?> </td>
            <td> <?php echo $m2 ?>  </td>
		</tr>
        <tr>
            <td> <?php echo $c3 ?></td>
            <td> <?php echo $v3 ?> </td>
			<td name="a3"> <?php echo $res3 ?> </td>
            <td> <?php echo $m3 ?>  </td>
		</tr>
	</table>
	</div>
</form>
	
<?php  }?>

<!--  Fin de la page -->


<!--  Pied de page -->
<?php require_once(PATH_VIEWS.'footer.php'); ?>
	
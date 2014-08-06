<?php
/* @var $this MonitoringController */
/* @var $data Monitoring */
?>

<h1>Relatório do Pedido: #<?php echo $model->requestDescription; ?></h1>
<br />
<br />

<div class="row-fluid">
	
<div class="span3">
<h3><?php echo CHtml::encode("Quantidade de Entrada Inicial"); ?>:</h3>
	<p class="lead"><?php echo $model->seam_quantity_input." unidades"; ?></p>
<br />
</div>

<div class="span3">
<h3><?php echo CHtml::encode("Quantidade de Saída Final"); ?>:</h3>
<p class="lead"><?php echo $model->needlework_quantity_output." unidades"; ?></p>
<br />
</div>

<div class="span3">
<h3><?php 
$quantPercaTotal = $model->seam_quantity_input - $model->needlework_quantity_output;
echo "Quantidade Total de Percas (Unidades): ";?></h3>
<p class="lead"><?php
echo $quantPercaTotal." unidades"; ?></p>

</div>
<div class="span3">
<h3><?php
if ($quantPercaTotal !=0 and $model->seam_quantity_input !=0)
{ 
$percentagemPercaTotal = ($quantPercaTotal/$model->seam_quantity_input)*100;
}
else
{
	$percentagemPercaTotal = 0;

}
echo "Quantidade Total de Percas (Porcentagem): ";?></h3>
<p class="lead"><?php
echo round($percentagemPercaTotal,2)."%"; ?></p>

</div>

</div>
<div class="row-fluid">
	<div class="span3">

<h3><?php 
$quantCustoTotal = $model->seam_cost + $model->wash_cost+ $model->apply_button_cost+ $model->needlework_quantity_output;
echo "Quantidade Total de Custo:";?></h3>
<p class="lead"><?php
echo "R$ ".$quantCustoTotal; ?></p>
</div>

	
<div class="span3">

<h3>
	<?php 
		$percaSeam = $model->seam_quantity_input - $model->seam_quantity_output;
		if($model->seam_quantity_input!= 0 and $percaSeam !=0)
		{
			$percaPorcetagemSeam = ($percaSeam/$model->seam_quantity_input)*100;
		}
		else
		{
			$percaPorcetagemSeam = 0;
		}




		$percaWash = $model->wash_quantity_input - $model->wash_quantity_output;
		if($model->wash_quantity_input!= 0 and $percaWash !=0)
		{
			$percaPorcetagemWash = ($percaWash/$model->wash_quantity_input)*100;
		}
		else
		{
			$percaPorcetagemWash = 0;
		}



		$percaApplyButton = $model->apply_button_quantity_input - $model->apply_button_quantity_output;
		if($model->apply_button_quantity_input!= 0 and $percaApplyButton !=0)
		{
			$percaPorcetagemApplyButton = ($percaApplyButton/$model->apply_button_quantity_input)*100;
		}
		else
		{
			$percaPorcetagemApplyButton = 0;
		}
		

		$percaNeedlework = $model->needlework_quantity_input - $model->needlework_quantity_output;
		if($model->needlework_quantity_input!= 0 and $percaNeedlework !=0)
		{
			$percaPorcetagemNeedlework = ($percaNeedlework/$model->needlework_quantity_input)*100;
		}
		else
		{
			$percaPorcetagemNeedlework = 0;
		}
		

		$maior = array("nome"=>$model->seam_service_provider,"quant"=>$percaSeam,"porcentagem"=>$percaPorcetagemSeam);
		if($percaWash > $maior["quant"])
		{
			$maior["nome"] = $model->wash_service_provider;
			$maior["quant"] = $percaWash;
			$maior["porcentagem"] = $percaPorcetagemWash;
		}

		else if($percaApplyButton > $maior["quant"])
		{
			$maior["nome"] = $model->apply_button_service_provider;
			$maior["quant"] = $percaApplyButton;
			$maior["porcentagem"] = $percaPorcetagemApplyButton;
		}

		else
		{
			$maior["nome"] = $model->needlework_service_provider;
			$maior["quant"] = $percaNeedlework;
			$maior["porcentagem"] = $percaPorcetagemNeedlework;

		}
		echo "Pior Prestador de Serviço: ";?></h3>
		<p class="lead">
			<?php 
			echo $maior["nome"];
			echo "<br/>";
			?>
		</p>

	</div>
	<div class="span3">
		<h3>
			<?php		
				echo "Unidades Perdidas por ".$maior["nome"].":";
			?>
		</h3>
		<p class="lead">
			<?php
				echo $maior["quant"]." unidades";
				echo "<br />";
			?>
		</p>
	</div>
	<div class="span3">
		<h3>
			<?php		
				echo "Porcentagem das Perdas de ".$maior["nome"].":";
			?>
		</h3>
		<p class="lead">
			<?php
				echo round($maior["porcentagem"],2).'%';
			?>
		</p>  
	</div>
</div>
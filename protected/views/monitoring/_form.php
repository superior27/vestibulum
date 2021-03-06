<?php
/* @var $this MonitoringController */
/* @var $model Monitoring */
/* @var $form CActiveForm */
?>

<div class="form">

	<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'monitoring-form',
// Please note: When you enable ajax validation, make sure the corresponding
// controller action is handling ajax validation correctly.
// There is a call to performAjaxValidation() commented in generated controller code.
// See class documentation of CActiveForm for details on this.
		'enableAjaxValidation'=>false,
		)); ?>

		<p class="note">Os campos com <span class="required">*</span> são obrigatórios.</p>

		<?php echo $form->errorSummary($model); ?>

		<div class="tabbable"> <!-- Only required for left/right tabs -->

			<ul class="nav nav-tabs">

				<li class="active"><a href="#tab1" data-toggle="tab">Pedido</a></li>
				<li><a href="#tab2" data-toggle="tab">Corte</a></li>
				<li><a href="#tab3" data-toggle="tab">Separação</a></li>
				<li><a href="#tab4" data-toggle="tab">Bordado</a></li>
				<li><a href="#tab5" data-toggle="tab">Costura</a></li>
				<li><a href="#tab6" data-toggle="tab">Travetto</a></li>
				<li><a href="#tab7" data-toggle="tab">Lavagem</a></li>
				<li><a href="#tab8" data-toggle="tab">Expedição</a></li>
			</ul>

			<div class="tab-content">
				<div class="tab-pane active" id="tab1">
					<div class="row-fluid">

						<div class="span4">						

							<?php echo $form->labelEx($model,'request_id'); ?>
							<?php
							echo CHtml::activeDropDownList(
								$model, 'request_id', 
								CHtml::listData(Request::model()->findAll(), 'id', 'description'),
								array('template'=>'<li>{input} {label}</li>','separator'=>'',)
								);
								?>
							</div>


							<div class="span4">
								<?php echo $form->labelEx($model,'production_order'); ?>
								<?php echo $form->textField($model,'production_order'); ?>
								<?php echo $form->error($model,'production_order'); ?>
							</div>

							<div class="span4">
								<?php echo $form->labelEx($model,'record_number'); ?>
								<?php echo $form->textField($model,'record_number'); ?>
								<?php echo $form->error($model,'record_number'); ?>
							</div>
						</div>

						<br/>
						<div class="row-fluid">
							<div class="span4">
								<?php echo $form->labelEx($model,'reference'); ?>
								<?php echo $form->textField($model,'reference',array('size'=>45,'maxlength'=>45)); ?>
								<?php echo $form->error($model,'reference'); ?>
							</div>

							<div class="span4">
								<?php echo $form->labelEx($model,'client'); ?>
								<?php echo $form->textField($model,'client'); ?>
								<?php echo $form->error($model,'client'); ?>
							</div>

							<div class="span4">
								<?php echo $form->labelEx($model,'client_cnpj'); ?>
								<?php echo $form->textField($model,'client_cnpj'); ?>
								<?php echo $form->error($model,'client_cnpj'); ?>
							</div>
						</div>
						<br/>


						<div class="row-fluid">
							<div class="span4">
								<?php echo $form->labelEx($model,'quantity_36'); ?>
								<?php echo $form->textField($model,'quantity_36'); ?>
								<?php echo $form->error($model,'quantity_36'); ?>
							</div>

							<div class="span4">
								<?php echo $form->labelEx($model,'quantity_38'); ?>
								<?php echo $form->textField($model,'quantity_38'); ?>
								<?php echo $form->error($model,'quantity_38'); ?>
							</div>

							<div class="span4">
								<?php echo $form->labelEx($model,'quantity_40'); ?>
								<?php echo $form->textField($model,'quantity_40'); ?>
								<?php echo $form->error($model,'quantity_40'); ?>
							</div>
						</div>
						<br/>
						<div class="row-fluid">

							<div class="span4">
								<?php echo $form->labelEx($model,'quantity_42'); ?>
								<?php echo $form->textField($model,'quantity_42'); ?>
								<?php echo $form->error($model,'quantity_42'); ?>
							</div>

							<div class="span4">
								<?php echo $form->labelEx($model,'quantity_44'); ?>
								<?php echo $form->textField($model,'quantity_44'); ?>
								<?php echo $form->error($model,'quantity_44'); ?>
							</div>
						</div>



					</div>

					<div class="tab-pane" id="tab2">

						<div class="row-fluid">
							<div class="span4">
								<?php echo $form->labelEx($model,'cut_provider_id'); ?>
								<?php
								echo CHtml::activeDropDownList(
									$model, 'cut_provider_id', 
									CHtml::listData(Provider::model()->findAll(), 'id', 'name'),
									array('template'=>'<li>{input} {label}</li>','separator'=>'',)
									);
									?>
								</div>


						<div class="span4">
							<?php echo $form->labelEx($model,'cut_quantity_input'); ?>
							<?php echo $form->textField($model,'cut_quantity_input'); ?>
							<?php echo $form->error($model,'cut_quantity_input'); ?>
						</div>

						<div class="span4">
							<?php echo $form->labelEx($model,'cut_quantity_output'); ?>
							<?php echo $form->textField($model,'cut_quantity_output'); ?>
							<?php echo $form->error($model,'cut_quantity_output'); ?>
						</div>
					</div>
<br/>

						<div class="row-fluid">
							<div class="span4">
								<?php echo $form->labelEx($model,'cut_date_input'); ?>
								<?php echo $form->dateField($model,'cut_date_input'); ?>
								<?php echo $form->error($model,'cut_date_input'); ?>
							</div>

							<div class="span4">
								<?php echo $form->labelEx($model,'cut_date_output'); ?>
								<?php echo $form->dateField($model,'cut_date_output'); ?>
								<?php echo $form->error($model,'cut_date_output'); ?>
							</div>

							

							<div class="span4">
								<?php echo $form->labelEx($model,'cut_cost'); ?>
								<?php echo $form->textField($model,'cut_cost'); ?>
								<?php echo $form->error($model,'cut_cost'); ?>
							</div>
						</div>



						</div>

						<div class="tab-pane" id="tab3">

							<div class="row-fluid">
								<div class="span4">
									<?php echo $form->labelEx($model,'separation_provider_id'); ?>
									<?php
									echo CHtml::activeDropDownList(
										$model, 'separation_provider_id', 
										CHtml::listData(Provider::model()->findAll(), 'id', 'name'),
										array('template'=>'<li>{input} {label}</li>','separator'=>'',)
										);
										?>
									</div>
							

								<div class="span4">
									<?php echo $form->labelEx($model,'separation_quantity_input'); ?>
									<?php echo $form->textField($model,'separation_quantity_input'); ?>
									<?php echo $form->error($model,'separation_quantity_input'); ?>
								</div>

								<div class="span4">
									<?php echo $form->labelEx($model,'separation_quantity_output'); ?>
									<?php echo $form->textField($model,'separation_quantity_output'); ?>
									<?php echo $form->error($model,'separation_quantity_output'); ?>
								</div>
							</div>
							<br/>

							<div class="row-fluid">
								<div class="span4">
									<?php echo $form->labelEx($model,'separation_date_input'); ?>
									<?php echo $form->dateField($model,'separation_date_input'); ?>
									<?php echo $form->error($model,'separation_date_input'); ?>
								</div>

								<div class="span4">
									<?php echo $form->labelEx($model,'separation_date_output'); ?>
									<?php echo $form->dateField($model,'separation_date_output'); ?>
									<?php echo $form->error($model,'separation_date_output'); ?>
								</div>

							
								<div class="span4">
									<?php echo $form->labelEx($model,'separation_cost'); ?>
									<?php echo $form->textField($model,'separation_cost'); ?>
									<?php echo $form->error($model,'separation_cost'); ?>
								</div>
							</div>

							</div>

							<div class="tab-pane" id="tab4">
								

								<div class="row-fluid">
									<div class="span4">
									<?php echo $form->labelEx($model,'needlework_provider_id'); ?>
									<?php
									echo CHtml::activeDropDownList(
										$model, 'needlework_provider_id', 
										CHtml::listData(Provider::model()->findAll(), 'id', 'name'),
										array('template'=>'<li>{input} {label}</li>','separator'=>'',)
										);
										?>
									</div>
									<div class="span4">
										<?php echo $form->labelEx($model,'needlework_quantity_input'); ?>
										<?php echo $form->textField($model,'needlework_quantity_input'); ?>
										<?php echo $form->error($model,'needlework_quantity_input'); ?>
									</div>

									<div class="span4">
										<?php echo $form->labelEx($model,'needlework_quantity_output'); ?>
										<?php echo $form->textField($model,'needlework_quantity_output'); ?>
										<?php echo $form->error($model,'needlework_quantity_output'); ?>
									</div>
									
								</div>
								<br/>
								<div class="row-fluid">
									<div class="span4">
										<?php echo $form->labelEx($model,'needlework_date_input'); ?>
										<?php echo $form->dateField($model,'needlework_date_input'); ?>
										<?php echo $form->error($model,'needlework_date_input'); ?>
									</div>

									<div class="span4">
										<?php echo $form->labelEx($model,'needlework_date_output'); ?>
										<?php echo $form->dateField($model,'needlework_date_output'); ?>
										<?php echo $form->error($model,'needlework_date_output'); ?>
									</div>

									<div class="span4">
										<?php echo $form->labelEx($model,'needlework_cost'); ?>
										<?php echo $form->textField($model,'needlework_cost'); ?>
										<?php echo $form->error($model,'needlework_cost'); ?>
									</div>

								
								</div>

								</div>

								<div class="tab-pane" id="tab5">
									
									<div class="row-fluid">
										<div class="span4">
										<?php echo $form->labelEx($model,'seam_provider_id'); ?>
										<?php
										echo CHtml::activeDropDownList(
											$model, 'seam_provider_id', 
											CHtml::listData(Provider::model()->findAll(), 'id', 'name'),
											array('template'=>'<li>{input} {label}</li>','separator'=>'',)
											);
											?>
										</div>

										<div class="span4">
										<?php echo $form->labelEx($model,'seam_quantity_input'); ?>
										<?php echo $form->textField($model,'seam_quantity_input'); ?>
										<?php echo $form->error($model,'seam_quantity_input'); ?>
									</div>

									<div class="span4">
										<?php echo $form->labelEx($model,'seam_quantity_output'); ?>
										<?php echo $form->textField($model,'seam_quantity_output'); ?>
										<?php echo $form->error($model,'seam_quantity_output'); ?>
									</div>
								</div>
								<br/>

									<div class="row-fluid">
										<div class="span4">
											<?php echo $form->labelEx($model,'seam_date_input'); ?>
											<?php echo $form->dateField($model,'seam_date_input'); ?>
											<?php echo $form->error($model,'seam_date_input'); ?>
										</div>

										<div class="span4">
											<?php echo $form->labelEx($model,'seam_date_output'); ?>
											<?php echo $form->dateField($model,'seam_date_output'); ?>
											<?php echo $form->error($model,'seam_date_output'); ?>
										</div>

										<div class="span4">
												<?php echo $form->labelEx($model,'seam_cost'); ?>
												<?php echo $form->textField($model,'seam_cost'); ?>
												<?php echo $form->error($model,'seam_cost'); ?>
										</div>
									</div>								

									</div>

									<div class="tab-pane" id="tab6">

										<div class="row-fluid">
											<div class="span4">
												<?php echo $form->labelEx($model,'apply_button_provider_id'); ?>
												<?php
												echo CHtml::activeDropDownList(
													$model, 'apply_button_provider_id', 
													CHtml::listData(Provider::model()->findAll(), 'id', 'name'),
													array('template'=>'<li>{input} {label}</li>','separator'=>'',)
													);
													?>
												</div>

											<div class="span4">
												<?php echo $form->labelEx($model,'apply_button_quantity_input'); ?>
												<?php echo $form->textField($model,'apply_button_quantity_input'); ?>
												<?php echo $form->error($model,'apply_button_quantity_input'); ?>
											</div>

											<div class="span4">
												<?php echo $form->labelEx($model,'apply_button_quantity_output'); ?>
												<?php echo $form->textField($model,'apply_button_quantity_output'); ?>
												<?php echo $form->error($model,'apply_button_quantity_output'); ?>
											</div>
										</div>
										<br/>

										<div class="row-fluid">

											<div class="span4">
												<?php echo $form->labelEx($model,'apply_button_date_input'); ?>
												<?php echo $form->dateField($model,'apply_button_date_input'); ?>
												<?php echo $form->error($model,'apply_button_date_input'); ?>
											</div>

											<div class="span4">
												<?php echo $form->labelEx($model,'apply_button_date_output'); ?>
												<?php echo $form->dateField($model,'apply_button_date_output'); ?>
												<?php echo $form->error($model,'apply_button_date_output'); ?>
											</div>
											<div class="span4">
													<?php echo $form->labelEx($model,'apply_button_cost'); ?>
													<?php echo $form->textField($model,'apply_button_cost'); ?>
													<?php echo $form->error($model,'apply_button_cost'); ?>
											</div>
										</div>
										</div>

										<div class="tab-pane" id="tab7">

											<div class="row-fluid">
												<div class="span3">
													<?php echo $form->labelEx($model,'wash_provider_id'); ?>
													<?php
													echo CHtml::activeDropDownList(
														$model, 'wash_provider_id', 
														CHtml::listData(Provider::model()->findAll(), 'id', 'name'),
														array('template'=>'<li>{input} {label}</li>','separator'=>'',)
														);
														?>
													</div>
											
												<div class="span3">
													<?php echo $form->labelEx($model,'wash_type_washing'); ?>
													<?php echo $form->textField($model,'wash_type_washing',array('size'=>60,'maxlength'=>255)); ?>
													<?php echo $form->error($model,'wash_type_washing'); ?>
												</div>

												<div class="span3">
													<?php echo $form->labelEx($model,'wash_differential'); ?>
													<?php echo $form->textField($model,'wash_differential',array('size'=>60,'maxlength'=>255)); ?>
													<?php echo $form->error($model,'wash_differential'); ?>
												</div>

												<div class="span3">
													<?php echo $form->labelEx($model,'wash_cost'); ?>
													<?php echo $form->textField($model,'wash_cost'); ?>
													<?php echo $form->error($model,'wash_cost'); ?>
												</div>
											</div>
											<br/>											
											
											<div class="row-fluid">
												<div class="span3">
													<?php echo $form->labelEx($model,'wash_quantity_input'); ?>
													<?php echo $form->textField($model,'wash_quantity_input'); ?>
													<?php echo $form->error($model,'wash_quantity_input'); ?>
												</div>

												<div class="span3">
													<?php echo $form->labelEx($model,'wash_quantity_output'); ?>
													<?php echo $form->textField($model,'wash_quantity_output'); ?>
													<?php echo $form->error($model,'wash_quantity_output'); ?>
												</div>	

												<div class="span3">
													<?php echo $form->labelEx($model,'wash_date_input'); ?>
													<?php echo $form->dateField($model,'wash_date_input'); ?>
													<?php echo $form->error($model,'wash_date_input'); ?>
												</div>

												<div class="span3">
													<?php echo $form->labelEx($model,'wash_date_output'); ?>
													<?php echo $form->dateField($model,'wash_date_output'); ?>
													<?php echo $form->error($model,'wash_date_output'); ?>
												</div>
											</div>											

											</div>

											<div class="tab-pane" id="tab8">

											<div class="row-fluid">
													<div class="span3">
													<?php echo $form->labelEx($model,'expedition_provider_id'); ?>
													<?php
													echo CHtml::activeDropDownList(
														$model, 'expedition_provider_id', 
														CHtml::listData(Provider::model()->findAll(), 'id', 'name'),
														array('template'=>'<li>{input} {label}</li>','separator'=>'',)
														);
														?>
													</div>

													<div class="span3">
														<?php echo $form->labelEx($model,'expedition_quantity_input'); ?>
														<?php echo $form->textField($model,'expedition_quantity_input'); ?>
														<?php echo $form->error($model,'expedition_quantity_input'); ?>
													</div>

													<div class="span3">
														<?php echo $form->labelEx($model,'expedition_quantity_output'); ?>
														<?php echo $form->textField($model,'expedition_quantity_output'); ?>
														<?php echo $form->error($model,'expedition_quantity_output'); ?>
													</div>

													<div class="span3">
														<?php echo $form->labelEx($model,'expedition_defects'); ?>
														<?php echo $form->textField($model,'expedition_defects'); ?>
														<?php echo $form->error($model,'expedition_defects'); ?>
													</div>												

													
												</div>	
												<br/>										

												<div class="row-fluid">
													

													<div class="span3">
														<?php echo $form->labelEx($model,'expedition_date_input'); ?>
														<?php echo $form->dateField($model,'expedition_date_input'); ?>
														<?php echo $form->error($model,'expedition_date_input'); ?>
													</div>

													<div class="span3">
														<?php echo $form->labelEx($model,'expedition_date_output'); ?>
														<?php echo $form->dateField($model,'expedition_date_output'); ?>
														<?php echo $form->error($model,'expedition_date_output'); ?>
													</div>
													<div class="span3">
														<?php echo $form->labelEx($model,'expedition_cost'); ?>
														<?php echo $form->textField($model,'expedition_cost'); ?>
														<?php echo $form->error($model,'expedition_cost'); ?>
													</div>
												</div>
												




												</div>



												<div class="tab-pane" id="tab9">
													<p>Olá, estou na seção 9</p>
												</div>



											</div>

										</div>








										<br/>


										<div class="row-fluid">
											<?php $this->widget('bootstrap.widgets.TbButton', array(
												'buttonType'=>'submit',
												'type'=>'primary',
												'label'=>'Cadastrar',
												'size'=>'large',
												)); ?>
											</div>

											<?php $this->endWidget(); ?>

</div><!-- form -->
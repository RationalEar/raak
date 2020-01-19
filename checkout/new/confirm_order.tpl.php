<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<div class="order-stages">
	<ol class="breadcrumb">
		<li style="display:block;">
			<h4 class="panel-title">
				<span class="fa fa-check-circle green"></span>
				<span class="accordion-toggle light">Customer Information</span>
				<span class="accordion-toggle light pull-right">
					<?php 
						$a = array( 'class'=>"invarseColor pull-right", 'rel'=>"tooltip", 'data-placment'=>"top", 
							'data-title'=>"EDIT", 'style'=>"margin-right:0px; color:#333; font-size:10px;" );
						echo anchor( 'checkout/regress/2', '<i class="glyphicon glyphicon-pencil"></i>', $a );
					?>
				</span>
			</h4>
		</li>
	</ol>
	<ol class="breadcrumb">
		<li style="display:block;">
			<h4 class="panel-title">
				<span class="fa fa-check-circle green"></span>
				<span class="accordion-toggle light">Delivery Method</span>
				<span class="accordion-toggle light pull-right">
					<?php 
						$a = array( 'class'=>"invarseColor pull-right", 'rel'=>"tooltip", 'data-placment'=>"top", 
							'data-title'=>"EDIT", 'style'=>"margin-right:0px; color:#333; font-size:10px;" );
						echo anchor( 'checkout/regress/4', '<i class="glyphicon glyphicon-pencil"></i>', $a );
					?>
				</span>
			</h4>
		</li>
	</ol>
	<ol class="breadcrumb">
		<li>
			<h4 class="panel-title">
				<span class="fa fa-dot-circle-o gold"></span>
				<span class="accordion-toggle">
					Confirm Order
				</span>
			</h4>
		</li>
	</ol>
	
	
	<div class="col-sm-10 col-sm-offset-1">
		<?php $this->load->view($theme.'/checkout/cart.tpl.php');?>
	</div>
	<!-- col-sm-10 cart.tpl -->

</div>
<!-- order-stages -->

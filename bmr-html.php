<?php
if (basename($_SERVER['PHP_SELF']) == basename(__FILE__)) 
{ 
die('Direct Access not permitted...'); 
}


$bmr_boxHtml = '<style>
	.bmi-calculator {
		width:100%;
		display; block;
		clear:both;
	}
	.bmi-calculator iframe {
		border:0;
		width:100%;
		min-height:800px;
		height:100%;
	}

</style>
<div class="bmi-calculator">
	<iframe src="https://www.calculators.tech/widget/bmrcalculator?wordpress=true"></iframe>
</div>
';
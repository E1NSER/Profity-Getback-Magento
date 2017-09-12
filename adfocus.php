<!-- Getback -->
<script async src="https://www.getback.ch/app/tracking/GETBACK_ID"></script>

<!-- Profity -->
<?php
	$sOrderId	= Mage::getSingleton('checkout/session')->getLastOrderId();
	$oOrder		= Mage::getModel('sales/order')->load($sOrderId);
	
	$oOrder->getGrandTotal();		// Total
	$oOrder->getShippingAmount();		// Shipping
	$oOrder->getShippingTaxAmount();	// Shipping Tax
	
	$totalNoShipping = $oOrder->getGrandTotal() - $oOrder->getShippingAmount() - $oOrder->getShippingTaxAmount();
?>	
<img src="https://www.profity.ch/imp/?s=PROFITY_ID&amp;b=6&amp;lp=1&amp;ordervalue=<?= $totalNoShipping ?>&amp;ordernumber=<?= $this->escapeHtml($this->getOrderId()); ?>&amp;vouchercode=<?= $oOrder->coupon_code; ?>" style="display: none"/>

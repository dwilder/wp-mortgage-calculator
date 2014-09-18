function isNumber(n) {
  return !isNaN(parseFloat(n)) && isFinite(n);
}

// Create a function to process the form.
function RMCCalculate() {

	var payments = 300;
	var ta = 0, dp = 0, ir = 5, ap = 25, pp = 12;
	
	var rmcForm = document.forms['lidd_rmc_form'];
	var ta = document.getElementById( 'lidd_rmc_total_amount' );
	var dp = document.getElementById( 'lidd_rmc_down_payment' );
	var ir = document.getElementById( 'lidd_rmc_interest_rate' );
	var ap = document.getElementById( 'lidd_rmc_ammortization' );
	var pp = document.getElementById( 'lidd_rmc_payment_period' );
	
	var tav = ta.value;
	
	//if ( isNumber(ta.value) && ta.value >= 0 ) {
		
		//} 
	
	// Get all the field values
	var ta = getElem( 'lidd_rmc_total_amount' ).val();
	//ta = ta.value;
	//var dp = getElem( 'lidd_rmc_down_payment' ).value;
	//var ir = getElem( 'lidd_rmc_interest_rate' ).value;
	//var ap = getElem( 'lidd_rmc_ammortization' ).value;
	//var pp = getElem( 'lidd_rmc_payment_period' ).value;
	
	//payments += ta;
	
	var results = document.getElementById( 'lidd_rmc_results' );
	results.innerHTML = 'Payments:<br />$' + payments;

	return false;
}

function initRMC() {
	// Watch for form submission events.
	document.getElementById( 'lidd_rmc_form' ).onsubmit = RMCCalculate;
}

window.onload = initRMC;
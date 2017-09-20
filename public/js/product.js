
$('#size').on('change', function(){
	var id = $(this).val();
	axios.get('/api/store/variants', {
	    params: {
	      id:id
	    }
  	})
  	.then(function (response) {
    	insertPrice(response.data.price);
    	insertQuantityArray(response.data.quantity);
 	})
  	.catch(function (error) {
    	console.log(error);
    	$('#productPrice').html('<mark>' + error.response.data.errorMessage + '</mark>');
    	insertQuantityArray(null);
  	});
});

function insertPrice(price) {
	$('#productPrice').html(price);
}

function insertQuantityArray(quantity) {
	if(!quantity) {
		$('#variantData').hide();
		$('#addToCart').hide();
		return;
	}

	var options = '';

	for (var prop in quantity) {

        if(!quantity.hasOwnProperty(prop)) continue;

        options += '<option value="'+ prop +'">'+quantity[prop]+'</option>';
    }

    $('#quantity').html(options);
}

$( '#addToCart' ).click(function() {
  $( 'form' ).submit();
});
$('.deleteButton').on('click', function(){
	var rowId = $(this).data('row-id');
	console.log(rowId);
	axios.get('/api/cart/delete', {
	    params: {
	      rowId:rowId
	    }
  	})
  	.then(function (response) {
    	window.location.reload();
 	})
  	.catch(function (error) {
    	console.log(error);
  	});
});

$('#checkout').on('click', function(){
	var appUrl = $(this).data('app-url');
	axios.get('/api/order/create', {
  	})
  	.then(function (response) {
  		console.log(response.data.orderId);
  		console.log(window.location.protocol);
    	window.location.href = window.location.protocol + '//' + appUrl+'/checkout/shipping-address/'+response.data.orderId;
 	})
  	.catch(function (error) {
    	console.log(error);
  	});
});
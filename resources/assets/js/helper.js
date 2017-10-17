$('#cancel-order').on('click', function(e){
	
	var orderId = $(this).data('order-id');

	axios.post('/api/order/delete', {
	    orderId: orderId
	  })
	  .then(function (response) {
	    
	  })
	  .catch(function (error) {
	   
	  });
});
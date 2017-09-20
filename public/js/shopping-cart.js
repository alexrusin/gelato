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
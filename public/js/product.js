$(document).ready(function() {
    
    $('#gallery img').each(function(i) {
      var imgFile = $(this).attr('src');
      var preloadImage = new Image();
      var imgExt = /(\.\w{3,4}$)/;
   
        
    }); // end each
    
    $('#gallery a').click(function(evt) {
      //don't follow link
       evt.preventDefault();
       //get path to new image
       var imgPath = $(this).attr('href');
       //get reference to old image
       var oldImage = $('#photo img');
       $('#gallery a').addClass('image-not-selected');
       $(this).addClass('image-selected');
       $(this).removeClass('image-not-selected');

         //create HTML for new image
         var newImage = $('<img src="' + imgPath +'">');
         //make new image invisible
         newImage.hide();
         //add to the #photo div
         $('#photo').prepend(newImage);
         //fade in new image
         newImage.fadeIn(1000);
         
         //fade out old image and remove from DOM
         oldImage.fadeOut(1000,function(){
           $(this).remove();
          });    
    }); // end click
      
    $('#gallery a:first').click();
    
}); // end ready


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
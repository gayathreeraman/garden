$(function(){

	var source=$('#template-imagelist').html();

	var template = Handlebars.compile(source);


	$.get("/api/item/category/tree", function(data){

		 	console.log(data);

		 // For each tree ....
	 		for(var i=0; i< data.length;i++){
		 	
		 	item = data[i];

		 	var bindData = template(item);
		  	$('.stencils.groups').append(bindData);

			}


	 	})


	$('#tree_button').on('click',function(){
		var siblings = $(this).siblings();

		siblings.each(function(){
			$(this).removeClass('selected');
		})
    	$(this).addClass('selected');

	});
	$('#bush_button').on('click',function(){
		var siblings = $(this).siblings();

		siblings.each(function(){
			$(this).removeClass('selected');
		})
    	$(this).addClass('selected');

	});
	$('#grass_button').on('click',function(){
		var siblings = $(this).siblings();

		siblings.each(function(){
			$(this).removeClass('selected');
		})
    	$(this).addClass('selected');

	});
	$('#paver_button').on('click',function(){
		var siblings = $(this).siblings();

		siblings.each(function(){
			$(this).removeClass('selected');
		})
    	$(this).addClass('selected');

	});
	$('#flower_button').on('click',function(){
		var siblings = $(this).siblings();

		siblings.each(function(){
			$(this).removeClass('selected');
		})
    	$(this).addClass('selected');

	});



	var dragEl = null;

	jQuery(".stencils").on("dragstart", ".drag-item", function(event){
		event.stopPropagation();
		console.log("hello");
		dragEl = $(this).clone()


	});

	$('.target').on('dragstart', '.drag-item',function(event){
		event.stopPropagation();
		console.log("hello2");
		dragEl = $(this)
	});


	$('.target').on('dragstart','.drag-item',function(event){
		event.stopPropagation();

		console.log("ready to get out");
		dragtrashEl = $(this);

	});



	$('.target').on('dragenter',function(event){

		event.preventDefault();
		event.stopPropagation();

	});


	$('.trashLayout').on('dragenter',function(event){

		event.preventDefault();
		event.stopPropagation();

	});


	$('.target').on('dragover',function(event){

		event.preventDefault();
		event.stopPropagation();

	});
	$('.trashLayout').on('dragover',function(event){

		event.preventDefault();
		event.stopPropagation();

	});


	$('.target').on('drop',function(event){

		var thisLeft = ($(this).offset().left)
		//var thisTop = $(this).offset().top + $(dragEl).outerHeight()
		var thisTop = $(this).offset().top + 35
		$('.target').append(dragEl)

		dragEl.css({
			position: 'absolute',
	     	//top: event.originalEvent.clientY - $(dragEl).outerHeight() / 2 ,
	     	top: (event.originalEvent.pageY - thisTop),
	     	left: event.originalEvent.clientX - ($(dragEl).outerWidth() / 2 ) - thisLeft
	    })

	});

	$('.trashLayout').on('drop',function(event){

	 	console.log("trashit");
	 	$(dragtrashEl).remove();

	  });


	 $('#clearbutton').on('click',function(event){

	  	console.log("clear");
	 	$('.target').children().remove();

	  });



 

	// $('#btnSave').click(function(){
	// 	//var clonedImage =[];
 //        var clonedImage = $(".target").children('.drag-item');
 //        //var searchEles = $("drag-item");

 //        for(var i = 0; i < clonedImage.length; i++) {

	//         var control = clonedImage[i];
           
	// 		var xPos = control.style.left;
 //        	var yPos = control.style.top;

 //            //return {xPos,Ypos}
 //            console.log("xPos :" + xPos);
 //        	console.log("yPos :" + yPos);
	// 	}
        
 //    });

// $('#btnSave').on('click', function(){

// 	data = $(".gardensubtitle").val();

// 	console.log(data);
   	
//    	$.post("/api/garden/layout_name", function(data){

   		
//    	})

// });

	

	

	$('#btnSave').click(function(){
		var data = {
			gardenName: $(".gardensubtitle").val()
		};

		if (garden_id){
			data.garden_id = garden_id;
		}

		$.ajax({
	    	url: '/api/garden/layout_name',
	    	type:"POST",
	    	data: data
	    })
	    .done(function(response) {

    		garden_id = response.gardenId;

			console.log( "success. This is my GardenID" + response.gardenId );

			console.log("Sending garden items...");
			
			//set variable to get all the children of target
			//var garden_id = response.gardenId;
			// var coordinate_x = $('.drag-item').(function() $(this).css('left')
			var items = $('.target').children();
			
			items.each(function(){
				var x = $(this).css('left');
				var y = $(this).css('top');
				var itemid = $(this).children('img').attr('itemid');
				//get item id
				//get whatever else you need
				var data = {
					garden_id: garden_id,
					x: x,
					y: y,
					item_id: itemid
				};
			
				$.ajax({
					url: '/api/garden/save_item',
	    			type:"POST",
	    			data: data
	    		})
				.done(function(response){
					console.log(data); 
					console.log('Item Saved' + response);
				})
				.fail(function(response) {
					console.log( "error" + response );
				});	

			});

		})	
		.fail(function() {
			console.log( "error" );
		});	
	});






   
    



	

	$('#tree_button').on('click', function(){

		$('.stencils').html("");

	 	$.get("/api/item/category/tree", function(data){

		 	console.log(data);

		 // For each tree ....
	 		for(var i=0; i< data.length;i++){
		 	
		 	item = data[i];

		 	var bindData = template(item);

		  	$('.stencils').append(bindData);

			}


	 	})
	});

	$('#bush_button').on('click', function(){
		
	$('.stencils').html("");

	 	$.get("/api/item/category/bush", function(data){

		 	console.log(data);
		 
	 		for(var i=0; i< data.length;i++){
		 	
		 	item = data[i];

		 	var bindData = template(item);

		  	$('.stencils').append(bindData);

			}


		})
	});

	$('#flower_button').on('click', function(){

		$('.stencils').html("");

	 	$.get("/api/item/category/flower", function(data){

		 	console.log(data);

	 		for(var i=0; i< data.length;i++){
		 	
		 	item = data[i];

		 	var bindData = template(item);

		  	$('.stencils').append(bindData);

			}


	 	})
	});

	$('#paver_button').on('click', function(){

	$('.stencils').html("");

	 	$.get("/api/item/category/paver", function(data){

		 	console.log(data);
		 
	 		for(var i=0; i< data.length;i++){
		 	
		 	item = data[i];

		 	var bindData = template(item);

		  	$('.stencils').append(bindData);

			}


	 	})
	 });

	$('#grass_button').on('click', function(){

	$('.stencils').html("");




	 	$.get("/api/item/category/grass", function(data){

		 	console.log(data);

	 		for(var i=0; i< data.length;i++){
		 	
		 	item = data[i];

		 	var bindData = template(item);

		  	$('.stencils').append(bindData);

			}


	 	})
	 });

	$("#printbutton").live("click", function () {
            var divContents = $("#dvContainer").html();
            var 
             printWindow = 
             window.open('', '', 'height=800,width=1000');
            printWindow.document.write('<html><head><title>DIV Contents</title>');
            //printWindow.document.write('</head><body >');
            printWindow.document.write(divContents);
            printWindow.document.write('</body></html>');
        	//printWindow.document.close();
            printWindow.print();
        });









		// $('#btnSave').click(function(){
		// 	$('.lightbox').toggleClass('lb-open');


		// });


		// $('#login').click(function(){
		// 	$('.lightbox').toggleClass('lb-open');


		// });



});
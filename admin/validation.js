			function checktitle() {
				jQuery.ajax({
					url: "checktitle.php",
					data: 'title=' + $("#title").val(),
					type: "POST",
					success: function(data) {
						$("#titlemsg").html(data);
					}


				});

			}
		
			function checkcity() {
				jQuery.ajax({
					url: "checkcity.php",
					data: 'city=' + $("#city").val(),
					type: "POST",
					success: function(data) {
						$("#citymsg").html(data);
					}


				});

			}



			function checkprice() {
				jQuery.ajax({
					url: "checkprice.php",
					data: 'price=' + $("#price").val(),
					type: "POST",
					success: function(data) {
						$("#pricemsg").html(data);
					}


				});

			}
			function checkrooms() {
				jQuery.ajax({
					url: "checkrooms.php",
					data: 'noOfRooms=' + $("#noOfRooms").val(),
					type: "POST",
					success: function(data) {
						$("#roomsmsg").html(data);
					}


				});

			}

			function checkbaths() {
				jQuery.ajax({
					url: "checkbaths.php",
					data: 'noOfBathrooms=' + $("#noOfBathrooms").val(),
					type: "POST",
					success: function(data) {
						$("#bathsmsg").html(data);
					}


				});

			}

			function checkarea() {
				jQuery.ajax({
					url: "checkarea.php",
					data: 'area=' + $("#area").val(),
					type: "POST",
					success: function(data) {
						$("#areamsg").html(data);
					}


				});

			}
			function update() {
				if(document.getElementById(areamsg).value=='Valid' && document.getElementById(titlemsg).value=='Valid'  && document.getElementById(roomsmsg).value=='Valid' && document.getElementById(bathsmsg).value=='Valid' && document.getElementById(pricemsg).value=='Valid' && document.getElementById(citymsg).value=='Valid' )
				{

				jQuery.ajax({
					url: "updateprop.php",
					data: {area: $("#area").val(),
							noOfBathrooms: $("#noOfBathrooms").val(), 
							noOfRooms: $("#noOfRooms").val(),
							price: $("#price").val(),
							title: $("#title").val(),
							},
					type: "POST",
					success: function(data) {
						
					}


				});

				}
				
			}
			

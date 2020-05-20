
function delete_prop(ID,ownerid){
	jQuery.ajax({
                    type: 'post',
                    url: 'deletemypropAjax_admin.php',
                        data:{
							propID:ID,ownerID:ownerid,
							delete_prop:'delete_prop',
                             },
                    success: function (data) {
			            $("#result").html(data);
		             }
		
                });
	
}

function edit_prop(ID,ownerid){
	jQuery.ajax({
                    type: 'post',
                    url: 'editmypropAjax_admin.php',
                        data:{
							propID:ID,ownerID:ownerid,
                            edit_prop:'edit_prop', },
                    success: function (data) {
			            $("#result1").html(data);
		             }
		
                });
}
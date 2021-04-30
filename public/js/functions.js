		function mobile(id){ 
	 
			    $.ajax({
				    url: '/mobile/details/'+id,
				    type: 'get', 
				    success: function(response){ 
				    	  
				            $("#detailsmodalbody").html(response);
				    },
				    error: function (jqXHR, textStatus, errorThrown) {
				          
				             console.log(jqXHR);
				             console.log(textStatus);
				             console.log(errorThrown);    
				        }
				});
	 
		}
		
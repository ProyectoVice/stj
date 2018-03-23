
			//Selects Anidados de maestria_area-maestria
			  //Area de maestria			 
			  $("#maestria_area").change(event => {
			  	console.log("dfghj");			    	
			  //Usaremos la ruta que creamos para los selects anidados en "Tutor"
			  		$.get(`/maar/${event.target.value}`,function(res,sta){
			  		$("#maestria_u").empty();
			  //console.log(res);
			  		$("#maestria_u").append(`<option value=''>Maestria</option>`);
			  		res.forEach(element => {
			  		$("#maestria_u").append(`<option value=${element.id}>${element.maestria}</option>`);
			  		});
			 	 });
			  });

			//Selects Anidados de departamentos-prov y Dist
			  //Lugar de nacimiento
			$("#departamento").change(event => {
			    	console.log("dfghj");
			      //Usaremos la ruta que creamos para los selects anidados en "Tutor"
			      $.get(`/prov/${event.target.value}`,function(res,sta){
			        $("#provincia_nac").empty();
			        //console.log(res);
			        $("#provincia_nac").append(`<option value=''>Provincia</option>`);
			        res.forEach(element => {
			          $("#provincia_nac").append(`<option value=${element.id}>${element.provincia}</option>`);
			        });
			      });
			    });
			    $("#provincia_nac").change(event => {
			      $.get(`/dist/${event.target.value}`,function(res,sta){
			        $("#distrito_nac").empty();
			        //console.log(res);
			        $("#distrito_nac").append(`<option value=''>Distrito</option>`);
			        res.forEach(element => {
			          $("#distrito_nac").append(`<option value=${element.id}>${element.distrito}</option>`);
			        });
			      });
			    });			 
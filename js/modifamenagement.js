window.addEventListener('load', function (e)
{
	
	// 1. Récupérer le select (rajouter une classe ou un identifiant pour le récupérer correctement)
	var elements= document.getElementById('select_amenagements');

	var row= document.getElementById('row2');



	// 2. Ajouter un écouteur d'événement (change) sur le select
	elements.addEventListener('change', function (e)
	{
		var IDopt=elements.querySelector('[value="'+elements.value+'"]');
		
		var displayedOption= document.createElement('div');
		displayedOption.className='col-lg-4 col-md-6 mb-4';
	
		// Displayed label for picked option
		var option_txt=document.createElement('div');
		option_txt.className='card-body';
		option_txt.textContent=IDopt.textContent;
		
		// Div containing picked option infos (h-100)
		var option_content=document.createElement('div');
		option_content.className='card h-100';
		option_content.appendChild(option_txt);
		
		displayedOption.appendChild(option_content);
		
		var option_footer=document.createElement('div');
		option_footer.className='card-footer';
		
		option_content.appendChild(option_footer);
		
		var deleteOptionBtn=document.createElement('button');
		deleteOptionBtn.textContent='X';
		deleteOptionBtn.id=elements.value;
		
		option_footer.appendChild(deleteOptionBtn);

	
		
		var hidden_input=document.createElement('input');
		hidden_input.type='hidden';
		hidden_input.name='amenagements[]';
		hidden_input.value=elements.value;
		elements.appendChild(hidden_input);
	
		
		elements.removeChild(IDopt);
		
		// Remove option from displayed picked options
		deleteOptionBtn.addEventListener('click', function (e)
		{
				// Re-insert previously removed option
			elements.appendChild(IDopt);
			row.removeChild(displayedOption);
			elements.removeChild(hidden_input);
	
			
		});

		elements.value = '';

		IDopt.selected=false;
		
		row.appendChild(displayedOption);
	});


});

var ingredient = '<div class="form-control">'
+'<input type="text" placeholder="Ingredient..." name="ingredients[]">'
+'<button class="button rmvBtn">Remove</button>'
+'</div>'
+'</div>';

var step = '<div class="form-control">'
+'<input type="text" placeholder="Step..." name="steps[]">'
+'<button class="button rmvBtn">Remove</button>'
+'</div>'
+'</div>';

$('#ingredientBtn').click(function(e) {
	$('#ingredients-form').append(ingredient);
	e.preventDefault();
});

$('#stepBtn').click(function(e) {
	$('#steps-form').append(step);
	e.preventDefault();
});

$('#ingredients-form, #steps-form').click(function(e){
	if(e.target.nodeName === "BUTTON") {
		e.target.parentNode.remove();
		e.preventDefault();
	}
});

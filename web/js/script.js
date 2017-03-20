/**
 * Created by WebTech on 3/15/2017.
 */
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
	modal.style.display = "block";
};

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
	modal.style.display = "none";
};

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
	if (event.target == modal) {
		modal.style.display = "none";
	}
};

$('.tab-switch a').on('click',function (e) {
	$('.tab-switch a').removeClass() ;
	$(this).addClass('active');
	if(e.target.title == 'company'){
			$('.company_form').show();
			$('.user_form').hide();
	}else {
			$('.company_form').hide();
			$('.user_form').show();
	}
});

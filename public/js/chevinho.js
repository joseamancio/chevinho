$(document).ready(function () {
	$('.number').on('click', function () {
		$(this).toggleClass('active');
	});

	$('#showModal').on('click', function () {
		var elm = document.getElementsByClassName('active');
		if(elm.length === 0) {
			$('#alert-number').modal('show');
		} else {
			var parent = document.getElementById("body-form");
			for(var i = 0; i < elm.length; i++) {
				console.log(elm[i].innerText);
				var input = document.createElement("div");
				input.className = 'show-number';
				input.innerHTML = elm[i].innerText;
				parent.appendChild(input);
			}
			
			$('#concluir-cadastro').modal('show');
		}
	});
});

function addElements() {

	var names = []
	var elm = document.getElementsByClassName('active');
	for(var i = 0; i < elm.length; i++) {
		names.push(elm[i].id);
	}

	names.join();

	document.getElementById('numbers').value = names;
}

$('#filter-disponivel').on('click', function () {
	var reserved = document.getElementsByClassName('reserved');
	console.log(reserved);
	for(var i = 0; i < reserved.length; i++) {
		if(reserved[i].style.display == 'inline-table') {
          reserved[i].style.display = 'none';
		}
       else {
          reserved[i].style.display = 'inline-table';
       }
	}
});


function reserved() {
	document.getElementsByClassName('active')[0].style.visibility = 'hidden';
	document.getElementsByClassName('done')[0].style.visibility = 'hidden';
}

function done() {
	document.getElementsByClassName('reserved')[0].style.visibility = 'hidden';
	document.getElementsByClassName('active')[0].style.visibility = 'hidden';
}
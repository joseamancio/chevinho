$(document).ready(function () {
	$('.number-disponivel').on('click', function () {
		$(this).toggleClass('number-active');
	});

	$('#showModal').on('click', function () {
		var elm = document.getElementsByClassName('number-active');
		if(elm.length === 0) {
			$('#alert-number').modal('show');
		} else {
			var parent = document.getElementById("body-form");
			for(var i = 0; i < elm.length; i++) {
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
	var elm = document.getElementsByClassName('number-active');
	for(var i = 0; i < elm.length; i++) {
		names.push(elm[i].id);
	}

	names.join();

	document.getElementById('numbers').value = names;
}

$('#filter-disponivel').on('click', function () {
	var reserved = document.getElementsByClassName('reserved');
	for(var i = 0; i < reserved.length; i++) {
		console.log(reserved[i].style.display == 'inline-table')
		if(reserved[i].style.display == 'inline-table') {
          reserved[i].style.display = 'none';
		}
       else {
          reserved[i].style.display = 'inline-table';
       }
	}

	var done = document.getElementsByClassName('done');
	for(var i = 0; i < done.length; i++) {
		console.log(done[i].style.display == 'inline-table')
		if(done[i].style.display == 'inline-table') {
          done[i].style.display = 'none';
		}
       else {
          done[i].style.display = 'inline-table';
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
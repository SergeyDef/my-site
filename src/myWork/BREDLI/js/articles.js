"use strict"

const panels_offer = document.getElementsByClassName('panels_offer');
var look_artic = document.getElementsByClassName('look_artic');
var headpiece = document.getElementsByClassName('headpiece');
var offer_text = document.getElementsByClassName('offer_text');


function look() {
	var block = this;

	block.classList.remove("grid_4", "offer");
	block.classList.add("grid_12", "full_text", "offer");

	// look_artic.forEach(function (elem) {
	// 	elem.style.display = "inline-block";
	// });
	// for (var i = 0; i < look_artic.length; i++) {
	// 	look_artic[i].style.display = "inline-block";
	// }

	 for (var i = 0; i < panels_offer.length; i++) {
			if (block != panels_offer[i]) {
				panels_offer[i].style.display = "none";
			}
		}

	// for (var i = 0; i < offer_text.length; i++) {
	// 	offer_text[i].style.display = "block";
	// }
}

for (var i = 0; i < panels_offer.length; i++) {
	panels_offer[i].addEventListener("click", look);
}

function not_looks() {
 	var block = this.parentNode;

 	for (var i = 0; i < headpiece.length; i++) {
		headpiece[i].style.display = "block";
		}

	block.classList.remove("grid_12");
	block.classList.remove("full_text");
	block.classList.add("grid_4");
	block.classList.add("offer");


	for (var i = 0; i < panels_offer.length; i++) {
			if (block != panels_offer[i]) {
				panels_offer[i].style.display = "block";
			}
		}

	// for (var i = 0; i < look_artic.length; i++) {
	// 		look_artic[i].style.display = "none";
	// }
	// for (var i = 0; i < offer_text.length; i++) {
	// 	offer_text[i].style.display = "none";
	// }
	console.log(block);
}

for (var i = 0; i < look_artic.length; i++) {
	look_artic[i].addEventListener("click", not_looks);
}
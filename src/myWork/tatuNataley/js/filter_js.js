"use strict"

const btn_info = document.getElementsByClassName('btn-info');
const container = document.getElementById('Container');
const container_li = container.getElementsByTagName('li');

var a = "вам";

var z = ["яблоко", "Ленин", "Привет"];


function choose() {
	const elem = this.innerHTML;

	for (var i = 0; i < container_li.length; i++) {
		const date = container_li[i].dataset.date;

		function all_work() {
			container_li[i].classList.remove("hide_block");
		}
		function tattoo() {
			if (date == 20140502200348) {
				container_li[i].classList.remove("hide_block");
			} else {
				container_li[i].classList.add("hide_block");
			}
		}
		function sketches() {
			if (date == 20140502201415) {
				container_li[i].classList.remove("hide_block");
			} else {
				container_li[i].classList.add("hide_block");
			}
		}
		function piercing() {
			if (date == 20140502200543) {
				container_li[i].classList.remove("hide_block");
			} else {
				container_li[i].classList.add("hide_block");
			}
		}
		if (elem == "Тату"){
			tattoo();
		} else if (elem == "Эскизы") {
			sketches();
		} else if (elem == "Пирсинг") {
			piercing();
		} else if (elem == "Все работы") {
			all_work();
		}
		// container_li[i].classList.contains("");
	}

	// z.forEach(function (item, i, arr) {
	// 	alert("элемент № " + item);
	// });
}
for (var i = 0; i < btn_info.length; i++) {
	btn_info[i].addEventListener("click", choose);
}
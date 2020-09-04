"use strict"

const article = document.getElementsByTagName('article');
const img = article.getElementsByTagName('img');
const a = article.getElementsByTagName('a');

function look() {
    for (var i = 0;  i < img.length; i++) {
    alert(img);
  }
}

for (var i = 0;  i < article.length; i++) {
  article[i].addEventListener('click', look);
}

// mod_img
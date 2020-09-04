"use strict"

   /* слайдер предложений */

var width = 200; // ширина изображения
var count = 1; // количество изображений
var car = document.getElementById('car1');
var list = car.querySelector('ul');
var listElems = car.querySelectorAll('li');
var position = 0; // текущий сдвиг влево

    car.querySelector('.prev').onclick = function() {
      // сдвиг влево
      // последнее передвижение влево может быть не на 3, а на 2 или 1 элемент
      position = Math.min(position + width * count, 0);
      list.style.marginLeft = position + 'px';
    };

    car.querySelector('.next').onclick = function() {
      // сдвиг вправо
      // последнее передвижение вправо может быть не на 3, а на 2 или 1 элемент

      position = Math.max(position - width * count, -width * (listElems.length - count));

      list.style.marginLeft = position + 'px';
    };

function menuOpen() {
  var menuIcon = document.getElementById('menuIcon');
  var mmen = document.getElementById('mmen');
  var dag = document.getElementById('deleteMenu');

  menuIcon.onclick = function () {
    mmen.style.display = "block";
    dag.style.display = "block";
  }
}

function deletMen() {
  var dagger = document.getElementById('dagger');
  var mmen = document.getElementById('mmen');
  var deleteMenu = document.getElementById('deleteMenu');
  
  dagger.onclick = function () {
    mmen.style.display = "none";
    deleteMenu.style.display = "none";
  }
}

function hid() {
  var hidOffers = document.getElementById('hidOffers');
  var hidSpan = document.getElementById('hidSpan');
  
    hidOffers.style.display = "block";
}

   /* сортировка домов по стоимости */

function fun() {
  var rtl = document.getElementById('rtl').value;
  var rtr = document.getElementById('rtr').value;
  var minCost = document.getElementById('minCost');
  var manCost = document.getElementById('manCost');
  
  minCost.value=rtl;
  manCost.value=rtr;
}

function sortHoum() {
  var minCost = document.getElementById('minCost').value;
  var manCost = document.getElementById('manCost').value;
  
  var costes = document.getElementsByClassName('sortHoum');

  for (var i = 0; i < costes.length; i++) {
    if (costes[i].getAttribute('value') >= minCost && costes[i].getAttribute('value') <= manCost) {
      costes[i].style.display = "block";
    } else {
      costes[i].style.display = "none";
    }
  }
}
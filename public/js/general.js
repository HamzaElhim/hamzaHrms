"use strict";
// ja for navbar

// nav bar movments
let $arrow = document.querySelectorAll(".arrow");
let $arr_left = document.querySelector(".arr_left");
let $arr_right = document.querySelector(".arr_right");
let $navbar = document.querySelector(".navbar");
let $container = document.querySelector(".container");

$arr_left.addEventListener("click", function () {
  $arr_right.classList.toggle("hiden");
  $arr_left.classList.toggle("hiden");
  $container.classList.toggle("expend");

  $navbar.style.transform = "translateX(-220px)";
});

$arr_right.addEventListener("click", function () {
  $arr_left.classList.toggle("hiden");
  $arr_right.classList.toggle("hiden");
  $container.classList.toggle("expend");
  $navbar.style.transform = "translateX(0)";
});

// js for add page

let $cdd = document.querySelector(".cdd");
let $cdi = document.querySelector(".cdi");
let $contract = document.querySelectorAll(".contract");

$cdd.addEventListener("click", function () {
  $contract.forEach(function ($cnt) {
    $cnt.classList.remove("hidden");
  });
});

$cdi.addEventListener("click", function () {
  $contract.forEach(function ($cnt) {
    $cnt.classList.add("hidden");
  });
});

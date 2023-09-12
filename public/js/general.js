"use strict";
// ja for navbar

// nav bar movments
// let $arrow = document.querySelectorAll(".arrow");
// let $arr_left = document.querySelector(".arr_left");
// let $arr_right = document.querySelector(".arr_right");
// let $navbar = document.querySelector(".navbar");
// let $container = document.querySelector(".container");

// $arr_left.addEventListener("click", function () {
//   $arr_right.classList.toggle("hiden");
//   $arr_left.classList.toggle("hiden");
//   $container.classList.toggle("expend");

//   $navbar.style.transform = "translateX(-220px)";
// });

// $arr_right.addEventListener("click", function () {
//   $arr_left.classList.toggle("hiden");
//   $arr_right.classList.toggle("hiden");
//   $container.classList.toggle("expend");
//   $navbar.style.transform = "translateX(0)";
// });

// js for add page

let $cnt_group = document.querySelector(".cnt-group");
let $contract_type = document.getElementById("contract_type");

$contract_type?.addEventListener("click", function () {
  if ($contract_type.value == "cdd") {
    $cnt_group.classList.remove("hiden");
  }
  if ($contract_type.value == "cdi") {
    $cnt_group.classList.add("hiden");
  }
});

// for the flash message to desapear

setTimeout(function () {
  document.querySelector(".flash_div")?.classList.add("hide");
}, 3000);

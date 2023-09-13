"use strict";
let links_ctr = document.getElementById("myTab");
let links = document.querySelectorAll(".nav-link");
let tabs = document.querySelectorAll(".tab-pane");

let hamza = "hamza";

links_ctr.addEventListener("click", function (e) {
  links.forEach(function (link) {
    link.classList.remove("active");
  });
  tabs.forEach(function (tab) {
    tab.classList.remove("active");
  });

  let $elm = e.target;
  let $elmID = $elm.id;
  let $page = "";
  $elm.classList.add("active");
  $elm.style.transition = "all 0.3s";
  document.getElementById(`${$elmID}-div`).classList.add("active");
  if ($elmID == "key-tab") {
    $page = 3;
  }
  if ($elmID == "pro-tab") {
    $page = 2;
  }
  if ($elmID == "per-tab") {
    $page = 1;
  }

  document.querySelector(
    ".edit-btn"
  ).href = `http://localhost/hamzaHrms/public/admins/add/${$page}`;
});

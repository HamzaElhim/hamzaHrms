"use strict";
let myerror = document.querySelector(".errorDprt");
let myInputs = document.querySelectorAll(".add-department-form input");
let mybutton = document.querySelector(".add-department-section");

if (myerror != null) {
  myInputs.forEach((input) => {
    input.style.border = "1px solid red";
  });
  let mypara = document.createElement("p");
  mypara.className = "errorDpt";
  mypara.appendChild(
    document.createTextNode(
      "Department already exist or the head isn't employee"
    )
  );
  mybutton.appendChild(mypara);
}

let $edit_dept = document.querySelector(".edit_dept");
let $edit_btn = document.querySelectorAll(".edit_btn");
let $main_container = document.querySelector(".main-container");
let $hide = document.querySelector(".hide");
let $icon = document.querySelector(".icon");

$edit_btn.forEach(function ($edit) {
  $edit.addEventListener("click", function (e) {
    $edit_dept.classList.remove("hiden");
    $main_container.classList.add("opacity");

    $hide.value = e.target.id;
  });
});

$icon.addEventListener("click", function () {
  $edit_dept.classList.add("hiden");
  $main_container.classList.remove("opacity");
});

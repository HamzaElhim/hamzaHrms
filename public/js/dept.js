let myerror = document.querySelector(".errorDprt");
let myInputs = document.querySelectorAll(".add-department-form input");
let mybutton = document.querySelector(".add-department-section");

if (myerror != null) {
  console.log("not exist");
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

let orderBtn = document.querySelectorAll(".btn-success");
let dialogBox = document.querySelector("#bookInfo");
let closeBtn = document.querySelector(".wrong_btn");

orderBtn.forEach((btn) => {
  btn.addEventListener("click", function (e) {
    e.preventDefault();
    dialogBox.showModal();
  });
});

closeBtn.addEventListener("click", function () {
  dialogBox.close();
});

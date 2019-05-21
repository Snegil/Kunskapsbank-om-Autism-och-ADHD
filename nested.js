var toggler = document.getElementsByClassName("caret");
var i;

for (i = 0; i < toggler.length; i++) {
  toggler[i].addEventListener("click", function() {
    this.parentElement.querySelector(".Nested").classList.toggle("NestActive");
    this.classList.toggle("caret-down");
  });
}
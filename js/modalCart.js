var btn_show = document.querySelector("#btn__show--cart")
var modal = document.querySelector("#myModal")
var remove_modal = document.querySelector("#close_modal")

btn_show.onclick = function (e) {
  e.preventDefault();
  modal.style.display = 'block'
}
remove_modal.onclick = function () {
  modal.style.display = 'none'
}
window.onclick = function (e) {
  if (e.target == modal) {
    modal.style.display = 'none'
  }

}



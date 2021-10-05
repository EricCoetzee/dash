// Toggle Buton
let toggle = document.querySelector('.topbar--toggle');
let navigator = document.querySelector('.navigation');
let main = document.querySelector('.main');
toggle.onclick = function () {
    navigator.classList.toggle('active');
    main.classList.toggle('active');
}
// Add hovered class in selected list div
let list = document.querySelectorAll('.list__item');
function activeLink() {
    list.forEach((item) =>
        item.classList.remove('hovered'));
    this.classList.add('hovered')
}
list.forEach((item) =>
    item.addEventListener('mouseover', activeLink));
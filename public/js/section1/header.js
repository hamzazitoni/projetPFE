const selectElement = (e) => document.querySelector(e);
const selectElements = (e) => document.querySelectorAll(e);
let choice;

selectElement('.burger').onclick = function() {
    selectElement('.left-menu').classList.toggle("collapsed");
    selectElement('.main-page').classList.toggle("coll");
}
let cellsIds = {
    1: 2,
    3: 4,
    5: 6,
    7: 8
}

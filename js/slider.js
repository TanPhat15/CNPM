let arr_hinh = [
    "./img/img-slider/slide_index_1.png",
    "./img/img-slider/slide_index_2.png",
    "./img/img-slider/slide_index_3.png",
    "./img/img-slider/slide_index_4.png",
    "./img/img-slider/slide_index_5.png",
];

var index = 0;
setInterval(next, 5000); //set thoi gian chay lai ham

function next() {
    index++;
    if (index >= arr_hinh.length) index = 0;

    var show = document.getElementById("slide_img");
    if (show != null && arr_hinh[index] != null) show.src = arr_hinh[index];
}

function prev() {
    index--;
    if (index < 0) index = arr_hinh.length - 1;

    var show = document.getElementById("slide_img");
    if (show != null && arr_hinh[index] != null) show.src = arr_hinh[index];
}

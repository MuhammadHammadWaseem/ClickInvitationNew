const readMoreBtn12 = document.querySelector(".read-more-btn12");
const text12 = document.querySelector(".text12");
readMoreBtn12.addEventListener("click", (e) => {
    text12.classList.toggle("show-more");
    if (readMoreBtn12.innerText === "Read More...") {
        readMoreBtn12.innerText = "Read Less";
    } else {
        readMoreBtn12.innerText = "Read More...";
    }
});

const readMoreBtn13 = document.querySelector(".read-more-btn13");
const text13 = document.querySelector(".text13");
readMoreBtn13.addEventListener("click", (e) => {
    text13.classList.toggle("show-more");
    if (readMoreBtn13.innerText === "Read More...") {
        readMoreBtn13.innerText = "Read Less";
    } else {
        readMoreBtn13.innerText = "Read More...";
    }
});



//sliders
var slideIndex = [1, 1, 1, 1, 1, 1, 1, 1, 1];
var slideId = ["mySlides1", "mySlides2", "mySlides3", "mySlides4", "mySlides5", "mySlides6", "mySlides7", "mySlides8", "mySlides9"];

// Call showDivs for all slideId arrays
showDivs(1, 0);
showDivs(1, 1);
showDivs(1, 2);
showDivs(1, 3);
showDivs(1, 4);
showDivs(1, 5);
showDivs(1, 6);
showDivs(1, 7);
showDivs(1, 8);

function plusDivs(n, no) {
  showDivs(slideIndex[no] += n, no);
}

function showDivs(n, no) {
  var i;
  var x = document.getElementsByClassName(slideId[no]);
  if (n > x.length) {
    slideIndex[no] = 1;
  }
  if (n < 1) {
    slideIndex[no] = x.length;
  }
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  x[slideIndex[no] - 1].style.display = "block";
};
var images = ["img/test1.jpg", "img/test2.jpg", "img/test3.jpg", "img/test4.jpg", "img/test5.jpg", "img/vrep.png", "img/future.jpg", "img/programmer.png", "img/html.jpg"];
var slides = document.getElementById("slides");
var slidefader = document.getElementById("slidefader");
var slidelabel = document.getElementById("slideshow-label");
slides.setAttribute("src",images[0]);
var currentImg = 0;
var advance = setInterval(function(){advanceSlides()}, 5000);
var continueTimeout;
slidefader.setAttribute("src",images[1]);
slidelabel.innerHTML = "1 / " + images.length;
function advanceSlides(){
	currentImg++;
	slidelabel.innerHTML = (currentImg%images.length+1) + " / " + images.length;
	slidefader.setAttribute("src",images[(currentImg)%images.length]);
	slides.style.transition = "1s";
	slides.style.opacity = "0";
	setTimeout(function(){swapSlides()}, 1000);
}

function swapSlides(){
	slides.setAttribute("src",images[currentImg%images.length]);
	slides.style.transition = "0s";
	slides.style.opacity = "1";
}

document.getElementById("slideshow-left-arrow").addEventListener("click", function(){
	clearTimeout(continueTimeout);
	currentImg = currentImg + images.length - 1;
	slidelabel.innerHTML = (currentImg%images.length+1) + " / " + images.length;
	slides.setAttribute("src",images[currentImg%images.length]);
	clearTimeout(advance);
	continueTimeout = setTimeout(function(){continueSlides()}, 10000);
});

document.getElementById("slideshow-right-arrow").addEventListener("click", function(){
	clearTimeout(continueTimeout);
	currentImg++;
	slidelabel.innerHTML = (currentImg%images.length+1) + " / " + images.length;
	slides.setAttribute("src",images[currentImg%images.length]);
	clearTimeout(advance);
	continueTimeout = setTimeout(function(){continueSlides()}, 10000);
});

function continueSlides(){
	advance = setInterval(function(){advanceSlides()}, 5000);
}

Number.prototype.clamp = function(min, max) {
	return Math.min(Math.max(this, min), max);
};

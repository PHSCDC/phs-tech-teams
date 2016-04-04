var images = ["img/1.png", "img/2.png", "img/3.png", "img/4.png", "img/5.png", "img/6.png", "img/7.png", "img/8.png", "img/9.png", "img/10.png", "img/11.png"];
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

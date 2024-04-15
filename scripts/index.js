import $ from "jquery";
import "owl.carousel/dist/assets/owl.carousel.css";
import "owl.carousel";
import "../styles/index.scss";
import "./modules/animation/animations.js";
import "./modules/animation/anime.js";
import "./modules/slick-config/product-slider";
import "./modules/scrool-up-display-menu";
import "./modules/slider-next";
import "./modules/config/fancyapps";
import "../slick/slick.min.js";
import "./modules/slick-config/slick";
import Search from "./modules/Search";

var search = new Search();

var isMenuOpen = false; // Initially, the menu is closed

function toggleMenu() {
	isMenuOpen = !isMenuOpen; // Toggle the value of isMenuOpen

	// If the menu is open, add the 'open' class to the button
	// If the menu is closed, remove the 'open' class from the button
	if (isMenuOpen) {
		button.classList.add("open");
		mobileList.classList.add("visible"); // Show the list
	} else {
		button.classList.remove("open");
		mobileList.classList.remove("visible"); // Hide the list
	}
}

var button = document.getElementById("wk-hamburger");
var mobileList = document.querySelector(".header-wk__list--mobile"); // Get the mobile list

// Add click event listener to the button
button.addEventListener("click", toggleMenu);

// ===================

const words = [
	"Do básico ao avançado...",
	"Presencial ou online.",
	"A melhor escola para sua profissionalização.",
];
let i = 0;
let timer;

function typingEffect() {
	let word = words[i].split("");
	var loopTyping = function () {
		if (word.length > 0) {
			document.getElementById("word").innerHTML += word.shift();
		} else {
			// Add a delay before starting the deleting effect
			setTimeout(deletingEffect, 3000); // 1000 milliseconds = 1 second
			return false;
		}
		timer = setTimeout(loopTyping, 90);
	};
	loopTyping();
}

function deletingEffect() {
	let word = words[i].split("");
	var loopDeleting = function () {
		if (word.length > 0) {
			word.pop();
			document.getElementById("word").innerHTML = word.join("");
		} else {
			if (words.length > i + 1) {
				i++;
			} else {
				i = 0;
			}
			// Add a delay before starting the typing effect
			setTimeout(typingEffect, 1000); // 1000 milliseconds = 1 second
			return false;
		}
		timer = setTimeout(loopDeleting, 15);
	};
	loopDeleting();
}

typingEffect();

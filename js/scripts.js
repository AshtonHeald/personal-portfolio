const menuBtn = document.querySelector("#menu-toggle");
const element = document.querySelector("#toggle");
const html = document.querySelector("#html");
// const style = getComputedStyle(element);
function overflow(f) {
	// to check css style
	if (getComputedStyle(element).display === "flex") {
		html.style.overflowY = "hidden";
	} else {
		html.style.overflowY = "unset";
	}
}
menuBtn.addEventListener("change", overflow);
function toggle() {
	menuBtn.checked = false;
	html.style.overflowY = "unset";
}
// ===========================================================================
// Theme Switch
// ===========================================================================
// Get the theme toggle input
const themeToggle = document.querySelector(
	'.theme-switch-wrapper input[type="checkbox"]'
);
let lightThemeText = document.getElementById("light-theme-icon");
let darkThemeText = document.getElementById("dark-theme-icon");
// Get Dark Preference
const prefersDarkScheme = window.matchMedia("(prefers-color-scheme: dark)");
//==========================================================================================
// Get the current theme from local storage
const currentTheme = localStorage.getItem("theme");
// If the current local storage item can be found
if (currentTheme) {
	// Set the body data-theme attribute to match the local storage item
	document.documentElement.setAttribute("data-theme", currentTheme);
	// If the current theme is dark, check the theme toggle
	if (currentTheme === "dark") {
		themeToggle.checked = true;
		lightThemeText.classList.toggle("disabled");
		darkThemeText.classList.toggle("disabled");
	}
}
//==========================================================================================
// Function that will switch the theme based on the if the theme toggle is checked or not
function switchTheme(e) {
	lightThemeText.classList.toggle("disabled");
	darkThemeText.classList.toggle("disabled");
	//==============================================
	if (e.target.checked) {
		document.documentElement.setAttribute("data-theme", "dark");
		localStorage.setItem("theme", "dark");
	} else {
		document.documentElement.setAttribute("data-theme", "light");
		localStorage.setItem("theme", "light");
	}

	//==============================================
}
//==========================================================================================
// Add an event listener to the theme toggle, which will switch the theme
themeToggle.addEventListener("change", switchTheme, false);

// ==================================================
// Projects Slider
// ==================================================
var projectGlide = new Glide("#project-glide", {
	type: "slider",
	autoplay: 5000,
	gap: 30,
	hoverpause: true,
	perView: 2,
	breakpoints: {
		767.99: {
			perView: 1,
		},
	},
});
projectGlide.mount();
// Project Slider Settings
var project1 = new Glide("#project1", {
	type: "slider",
	autoplay: 5000,
	gap: 30,
	hoverpause: true,
	perView: 1,
	breakpoints: {
		1023.99: {
			perView: 2,
		},
	},
});
// ==================================================
// Modals
// ==================================================
// Get the modal
const modalparent = document.getElementsByClassName("modal_container");
// Get the button that opens the modal
const modal_btn_multi = document.getElementsByClassName("open_modal");
// Get the <span> element that closes the modal
const span_close_multi = document.getElementsByClassName("close_modal");

let mq = window.matchMedia("(min-width: 1599.99px)");

for (i = 0; i < modal_btn_multi.length; i++) {
	modal_btn_multi[i].onclick = function () {
		let ElementIndex = this.getAttribute("data-index");
		modalparent[ElementIndex].style.display = "grid";
		if (mq.matches) {
			// If media query matches
			document.getElementById("site-container").style.overflowY =
				"hidden";
		} else {
			document.body.style.overflowY = "hidden";
		}
		// !Eventualy change these to single function
		// Project Sliders
		project1.mount();
	};
	// When the user clicks on <span> (x), close the modal
	span_close_multi[i].onclick = function () {
		let ElementIndex = this.getAttribute("data-index");
		modalparent[ElementIndex].style.display = "none";
		if (mq.matches) {
			// If media query matches
			document.getElementById("site-container").style.overflowY = "unset";
		} else {
			document.body.style.overflowY = "unset";
		}
	};
}
window.onclick = function (event) {
	if (event.target === modalparent[event.target.getAttribute("data-index")]) {
		modalparent[event.target.getAttribute("data-index")].style.display =
			"none";
		if (mq.matches) {
			// If media query matches
			document.getElementById("site-container").style.overflowY = "unset";
		} else {
			document.body.style.overflowY = "unset";
		}
	}
};

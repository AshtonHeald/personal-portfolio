<<<<<<< HEAD
// ===== Nav Link Toggle =====
const menuBtn = document.querySelector("#menuBtn");
const navLink = document.querySelectorAll(".nav-link");
const numLink = navLink.length;

for (var i = 0; i < numLink; i++) {
	navLink[i].addEventListener("click", toggle);
}

=======
const menuBtn = document.querySelector("#menu-toggle");
const element = document.querySelector("#toggle");
const html = document.querySelector("#html");

function overflow() {
	html.style.overflowY = getComputedStyle(element).display === "flex" ? "hidden" : "unset";
}

menuBtn.addEventListener("change", overflow);

>>>>>>> working
function toggle() {
	menuBtn.checked = false;
}

<<<<<<< HEAD
// ===== Canvas Toggle =====
const canvasToggle = document.getElementById("canvasToggle");

canvasToggle.addEventListener("click", showHide);

function showHide(e) {
	if (e.target.type !== "checkbox") {
		return;
	}

	var b = document.getElementById("snow");

	if (e.target.checked) {
		b.style.opacity = "0";
	} else {
		b.style.opacity = "1";
	}
}

canvasToggle.addEventListener("click", pullChain);

const chain = document.getElementById("chain");

function pullChain() {
	chain.style.animation = "pull 1s ease";
	setTimeout(myTimeout, 1000);

	function myTimeout() {
		chain.style.animation = "none";
	}
}
=======
var projectGlide = new Glide("#projectGlide", {
	type: "slider",
	autoplay: 5000,
	gap: 30,
	hoverpause: true,
	perView: 2,
	breakpoints: {
		767: {
			perView: 1,
		},
	},
});
projectGlide.mount();
>>>>>>> working

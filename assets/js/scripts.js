// ===== Nav Link Toggle =====
const menuBtn = document.querySelector("#menuBtn");
const navLink = document.querySelectorAll(".nav-link");
const numLink = navLink.length;

for (var i = 0; i < numLink; i++) {
	navLink[i].addEventListener("click", toggle);
}

function toggle() {
	menuBtn.checked = false;
}

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

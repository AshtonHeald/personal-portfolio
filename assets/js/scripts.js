// === Menu Toggle ======

// === Canvas Toggle ======
document.getElementById("canvasToggle").addEventListener("click", showHide);

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

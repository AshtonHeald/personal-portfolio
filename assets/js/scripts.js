// === Menu Toggle ======
/*
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
*/
// === Canvas Toggle ======
document.getElementById("test").addEventListener("click", showHide);

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

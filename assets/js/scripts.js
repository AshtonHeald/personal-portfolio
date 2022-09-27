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
// ==================================================
// Projects Slider
// ==================================================
var projectGlide = new Glide("#project-glide", {
	type: "slider",
	autoplay: 5000,
	gap: 30,
	hoverpause: true,
	perView: 1,
	breakpoints: {},
});
projectGlide.mount();

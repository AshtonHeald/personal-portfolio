const menuBtn = document.querySelector("#menu-toggle");
const element = document.querySelector("#toggle");
const html = document.querySelector("#html");

function overflow() {
	html.style.overflowY = getComputedStyle(element).display === "flex" ? "hidden" : "unset";
}

menuBtn.addEventListener("change", overflow);

function toggle() {
	menuBtn.checked = false;
	html.style.overflowY = "unset";
}

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

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

// Loop allows for multiple modals if needed
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

const modalparent = document.getElementsByClassName("modal_container");
const modal_btn_multi = document.getElementsByClassName("open_modal");
const span_close_multi = document.getElementsByClassName("close_modal");

let mq = window.matchMedia("(min-width: 1599.99px)");

for (i = 0; i < modal_btn_multi.length; i++) {
	modal_btn_multi[i].onclick = function () {
		let ElementIndex = this.getAttribute("data-index");
		modalparent[ElementIndex].style.display = "grid";
		if (mq.matches) {
			document.getElementById("site-container").style.overflowY = "hidden";
		} else {
			document.body.style.overflowY = "hidden";
		}
	};
	span_close_multi[i].onclick = function () {
		let ElementIndex = this.getAttribute("data-index");
		modalparent[ElementIndex].style.display = "none";
		if (mq.matches) {
			document.getElementById("site-container").style.overflowY = "unset";
		} else {
			document.body.style.overflowY = "unset";
		}
	};
}
window.onclick = function (event) {
	if (event.target === modalparent[event.target.getAttribute("data-index")]) {
		modalparent[event.target.getAttribute("data-index")].style.display = "none";
		if (mq.matches) {
			document.getElementById("site-container").style.overflowY = "unset";
		} else {
			document.body.style.overflowY = "unset";
		}
	}
};

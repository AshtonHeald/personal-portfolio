const modals = document.querySelectorAll(".modal_container");
const openBtns = document.querySelectorAll(".open_modal");
const closeBtns = document.querySelectorAll(".close_modal");
const mq = window.matchMedia("(min-width: 1599.99px)");

openBtns.forEach((btn, index) => {
	btn.addEventListener("click", () => {
		modals[index].style.display = "grid";
		mq.matches ? (document.getElementById("site-container").style.overflowY = "hidden") : (document.body.style.overflowY = "hidden");
	});
});

closeBtns.forEach((btn, index) => {
	btn.addEventListener("click", () => {
		modals[index].style.display = "none";
		mq.matches ? (document.getElementById("site-container").style.overflowY = "unset") : (document.body.style.overflowY = "unset");
	});
});

window.addEventListener("click", event => {
	const targetModal = modals[event.target.getAttribute("data-index")];
	if (event.target === targetModal) {
		targetModal.style.display = "none";
		mq.matches ? (document.getElementById("site-container").style.overflowY = "unset") : (document.body.style.overflowY = "unset");
	}
});

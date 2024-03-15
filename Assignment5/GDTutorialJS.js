var contain = document.querySelectorAll(".collaps");

contain.forEach(function(btn)) {
}


btn.addEventListener("click", function() {
	var content = this.nextElementSibling;
	if (content.style.display === "none") {
		content.style.display = "block";
	} else {
		content.style.display = "none";
	}
});
});
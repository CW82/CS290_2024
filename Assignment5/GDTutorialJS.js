//queryselectorall selects all the elements with the class 'collaps' and made them a variable called collapsbtn (collaps buttons) and makes them inso a node list
var collapsBtns = document.querySelectorAll(".collaps");
collapsBtns.forEach(function(btn) { //this iterates over the node list and now each element is called button
	btn.addEventListener("click", function() { //this is executed for each (^^foreachmethod above lol) and it 'listens' for a click and when it is, does the code inside of it's brackets
		var content = this.nextElementSibling; //button gets clicked, hidden content gets shown essentially
		if (content.style.display === "none") {
			content.style.display = "block";
		} else {
			content.style.display = "none";
		}
	});
});
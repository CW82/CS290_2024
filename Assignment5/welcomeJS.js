//another func with no prarameter, whoops, will do one with parametrs later
function addtolist() {
	//just to make sure it's actually registering the button press
	console.log("Add button pressed")
	//makes a varible called watchlist and it promps the user for input to add to a list
	var watchlst = prompt("Enter the show/movies to be watched: ");
	
	/*if the user inputed smt 'watchlst' then get the unordered list (the unordered list has an id of 'tbw')
	then make a varible called 'appending' because it's going to make a list element and appened it to 'tbw'
	then it 'appends' whatever the user typed in */
	if (watchlst) {
		var uorlist = document.getElementById("tbw");
		var appending = document.createElement("li");
		appending.textContent = watchlst;
		uorlist.appendChild(appending);
	}
}

/*gets the element w/the id 'add' (the button) and when it's clicked, run the func from above, so add to the list*/
document.getElementById("add").addEventListener("click", addtolist);

// const lstofcoolshows = []
//was going to show an array, but just want to get this turned in now :(
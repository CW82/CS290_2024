//function called 'signing in', no parameters
function signingin() {
	//for me to make sure the button was actually doing smt when i pressed it (it wasn't at first lol)
	console.log("Button Pressed")
	// gets the #inputs id with text type and then gets the value that was entered, same w/password
    const email = document.querySelector("#inputs input[type='text']").value;
    const password = document.querySelector("#inputs input[type='password']").value;

	/*if the email and password are the same as the one lsited below, when u hit the
	button, it'll take u to the homepage*/
	if (email == "example@example.com" && password == "123456789"){
        window.location.href = "welcomeHTML.html";
	} else { //if what u entered aren;t what's above, u get an alert that says this
		alert("You entered the email or password WRONG (⊙ˍ⊙)")
	}
}

/* this is the event listener and it get's the element with the ID 'sign in button'
and basically 'listens' for a button click and when it 'hears' it, it runs the function
signingin*/
document.getElementById("signinbutton").addEventListener("click", signingin);



/*the window.location.href i had to look up to figure out how to use, but basically
windows.location is for getting the current adress of the page and then the .href
returns that adress, but i gave it the value of the address of 'welcome.html' so it
basically changes the current address to the one I want it to go to when u essentially 
'login'. There was probably a better way to do it, I just didn't figure it out lol*/

/* Note for me: The 'const email and password' are 'locally scoped' because they can 
only be used inside that function.*/
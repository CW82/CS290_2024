var countdown = new Date ("Feb 16, 2025 8:00:00").getTime(); //var called countdown set to next years con time, milliseconds

const x = setInterval(function() {

  const now = new Date().getTime();
  
  const distance = countdown - now; //calcuates time betwen set date and now
  
  const d = Math.floor(distance / (1000 * 60 * 60 * 24));
  const h = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  const m = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  const s = Math.floor((distance % (1000 * 60)) / 1000);
  
  document.getElementById("countdown").innerHTML = "Countdown to C3 GameCon 2025: " + d + "D " + h + "H "
  + m + "M " + s + "S ";
  
  if (distance < 0) {
	  clearInterval(x);
	  document.getElementById("countdown").innerHTML = "EXPIRED";
  }
  }, 1000);
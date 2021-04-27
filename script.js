
//to display navigation bar with items on screen resize
const toggleButton = document.getElementsByClassName('toggle-button')[0]
const navbarLinks = document.getElementsByClassName('navbar-link')[0]

toggleButton.addEventListener('click',function() 
{
    navbarLinks.classList.toggle('active')
});

//on clicking send message button in contact form it displays "success".
function sendmessage_contact() {
    document.getElementById("demo").innerHTML = "SUCCESS";
  }

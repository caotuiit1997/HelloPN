// Create tab menu Event, Debate, Q and A and post
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();


// Create count down event
// Set the date we're counting down to
var countDownDate = new Date("Jul 26, 2018 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();

  // Find the distance between now an the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in an element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is finished, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);

// Create form for debate and QA
$('#people-entry').magicSuggest({
  data: [
    {name: 'Jimmy Hoffa'},
    {name: 'Elvis Presley'},
    {name: 'DB Cooper'},
    {name: 'Marylin Monroe'}
  ]
})

$('.post-form').on('click', '.open-overlay', function(e) {
  e.preventDefault()
  $($(this).data('target'))
    .removeClass('closed')
    .addClass('open')
  $('.post-form-backdrop')
    .removeClass('closed')
})
$('.post-form').on('click', '.post-form-overlay .close', function() {
  $(this).parents('.post-form-overlay')
    .addClass('closed')
    .removeClass('open')
  $('.post-form-backdrop')
    .addClass('closed')
})
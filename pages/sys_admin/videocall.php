<br><br>

<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- my css file-->
  <script src='https://meet.jit.si/external_api.js'></script>
</head>

<body>
    <div class="thebody text-center">
        <nav class="navbar navbar-dark" style="background-color:white;">
            <span class="navbar-brand" style="font-size: 40px; color:Black;">Video Calling</span>
        

                <div class="container align-items-center " style="margin-top: 5%;">
                   <button id="start" class="btn btn-light btn-lg" type="button"><b>Start Meeting</b></button> <br><br>
                </div>

                      <div id="jitsi-container" class="container align-items-center"></div><br><br><br>
    </div>
</nav>



<script>
    var button = document.querySelector('#start');
    var container = document.querySelector('#jitsi-container');
    var api = null;

    button.addEventListener('click', () => {
        var possible = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        var stringLength = 30;

        function pickRandom() {
        return possible[Math.floor(Math.random() * possible.length)];
        }

    var randomString = Array.apply(null, Array(stringLength)).map(pickRandom).join('');

        var domain = "meet.jit.si";
        var options = {
            "roomName": randomString,
            "parentNode": container,
            "width": 600,
            "height": 600,
        };
        api = new JitsiMeetExternalAPI(domain, options);
    });

</script>


<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>
</html>


<!--css-->
<style>
.btn:hover {
	background-color: black;
	color:white;
	border: 2px solid rgba(214, 169, 245,0.8);
}

.btn{
	color:  black; 
	background-color: white;
	font-size:25px;
	box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}
    </style>
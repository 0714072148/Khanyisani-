    function contactUs(){
    var contact_window = window.open("contact.html" , "Popup" , "toolbar=no , width=516px  , heigth=422.75px");
    };

    function greet(){
        var name = prompt("This page asks for your name...");
        document.getElementById('welcome').innerHTML= "Welcome " + name + "!"; 
    }

    function LogIN(){
        var x = document.getElementById("login"); x.style.display = "block";
        var y = document.getElementById("home"); y.style.display = "none";
        var z = document.getElementById("sign-up"); z.style.display = "none";
        var w = document.getElementById("loggedIn"); w.style.display = "none";
    }
    
    function SignIN(){
        var x = document.getElementById("sign-up"); x.style.display = "block";
        var y = document.getElementById("home"); y.style.display = "none";
        var z = document.getElementById("login"); z.style.display = "none";
        var w = document.getElementById("loggedIn"); w.style.display = "none";
    }
    function hide3(){
        var w = document.getElementById('loggedIn'); w.style.display = 'block';
        var x = document.getElementById('sign-up'); x.style.display = 'none';
        var y = document.getElementById('home'); y.style.display = 'none';
        var z = document.getElementById('login'); z.style.display = 'none';
    }
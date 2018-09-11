//($(window).load(function(){
     //$('.loader').fadeOut(10000000000000);
//})); 

//function onSubmit(token) {
        // document.getElementById("demo-form").submit();
       //}






window.onscroll = function () {headerMovement()};

function headerMovement() {
      if (document.body.scrollTop > 25 || document.documentElement.scrollTop > 25) {
        document.getElementById('trevor').className = 'gone';
    } else {
        document.getElementById('trevor').className = 'here';
    }
}

function skillsSchool() {
    document.getElementById("sidenavS").classList.toggle("showS");
}

function skillsPort() {
    document.getElementById("sidenavP").classList.toggle("showP");
}


function skillsPhoto() {
    document.getElementById("sidenavPhoto").classList.toggle("showPhoto");
}

function cancel(){
    window.close();
}



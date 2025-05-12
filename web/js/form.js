window.onload = () => {



    document.getElementById("login").onchange = function(event) {

        console.log(document.getElementById("login").value);

        document.getElementById("login").classList.add("is-valid");
        document.getElementById("password").classList.add("is-invalid");



        //is-valid

    };





  };
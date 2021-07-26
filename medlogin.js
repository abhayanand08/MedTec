const signUpbtn = document.getElementById('signUp');
    const signInbtn = document.getElementById('signIn');
    const main = document.getElementById('main');
    
    signUpbtn.addEventListener('click' , () => {
        
        main.classList.add("right-panel-active");
    });
    signInbtn.addEventListener('click' , () => {
        
        main.classList.remove("right-panel-active");
    });
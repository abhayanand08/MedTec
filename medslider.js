const slider = document.querySelector('.slide_right')
document.querySelector('.toggle').onclick = function(){
    this.classList.toggle('active');
    slider.classList.toggle('active');
}
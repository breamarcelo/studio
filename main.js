let imgItem = document.querySelectorAll('img.gallery-item');
imgItem.forEach(myFunc);

function myFunc(x) {
    x.addEventListener('click', function(){
        document.getElementById('modalImg').src = this.src;
        document.getElementById('modal').style.display = 'flex';
    });
}

function closeFunc() {
    document.getElementById('modal').style.display = 'none';
}
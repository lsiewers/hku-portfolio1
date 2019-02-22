function nextSlide() {
  const slides = document.querySelectorAll('.slider ul li.slide');
  let active = document.querySelector('.active-slide').innerHTML;
  
  if (active < slides.length) {
    active++
    
    slides.forEach(a => a.classList.contains('is--active') ? a.classList.replace('is--active', 'not--active') : null);
    slides[active - 1].classList.replace('not--active', 'is--active');
    document.querySelector('.active-slide').innerHTML = active;
  }
}

function previousSlide() {
  const slides = document.querySelectorAll('.slider ul li.slide');
  let active = document.querySelector('.active-slide').innerHTML;
  
  if (active > 1) {
    active--
    
    slides.forEach(a => a.classList.contains('is--active') ? a.classList.replace('is--active', 'not--active') : null);
    slides[active - 1].classList.replace('not--active', 'is--active');
    document.querySelector('.active-slide').innerHTML = active;
  }
}
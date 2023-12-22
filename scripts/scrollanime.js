const observed = new IntersectionObserver((addMyEnteries) => {
  addMyEnteries.forEach((addMyEntry) => {
      //console.log(entry);
    if(addMyEntry.isIntersecting) {
      addMyEntry.target.classList.add('showed');
    }else{
      addMyEntry.target.classList.remove('showed');
    }
  
  });
});

  const animeElement = document.querySelectorAll('.fade-in');
  animeElement.forEach((et) => observed.observe(et));
  
const obs = new IntersectionObserver((addEnteries) => {
  addEnteries.forEach((addEntry) => {
      //console.log(entry);
    if(addEntry.isIntersecting) {
      addEntry.target.classList.add('shows');
    }else{
      addEntry.target.classList.remove('shows');
    }
  
  });
});

  const slideElement = document.querySelectorAll('.slide');
  slideElement.forEach((el) => obs.observe(el));
  

 
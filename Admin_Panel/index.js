function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
  }
  
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
  }
  const active = window.location.pathname;
const navLinks = document.querySelectorAll('div a').forEach(link => {
    if(link.href.includes(`${active}`))
    {
        link.classList.add('active');
    }
})
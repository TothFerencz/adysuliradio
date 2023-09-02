const tabs = document.querySelectorAll('.header-nav-tab');
const highlight = document.querySelector('.highlight');
const mobileNavBarIcon = document.getElementById("mobile-nav-bar-icon");
const headerNavList = document.getElementById("header-nav-list");
const firstTab = tabs[0];
var icon =document.getElementById("mode-change");

// a kiemelo helyzetenek kiszamitasa
const left = firstTab.offsetLeft;
const width = firstTab.offsetWidth;

// a kiemelo alapertelmezett pozicioja
highlight.style.left = `${left}px`;
highlight.style.width = `${width}px`;

tabs.forEach(tab => {
  tab.addEventListener('click', function() {
    // a kivalasztott lap indexenek lekerdezese
    const index = this.dataset.index;
    
    //  kiemelo helyzetenek kiszamitasa
    const left = this.offsetLeft;
    const width = this.offsetWidth;
    
    // frissiti a kiemlo helyzetet
    highlight.style.left = `${left}px`;
    highlight.style.width = `${width}px`;
    
    // aktiv hozzaadasa
    tabs.forEach(tab => tab.classList.remove('active'));
    this.classList.add('active');
  });
});


icon.onclick = function(){
    document.body.classList.toggle("dark-theme");
    if(icon.className=="fa-solid fa-moon"){
        icon.className="fa-solid fa-sun"; 
    }else{
        icon.className="fa-solid fa-moon"; 
    }
}

mobileNavBarIcon.onclick = function() {
  if(mobileNavBarIcon.className=="fa-solid fa-bars"){
    mobileNavBarIcon.className="fa-solid fa-close";
    headerNavList.style.display = "flex";
    headerNavList.style.transform = "translateX(0)";
  }else{
    headerNavList.style.display = "none";
    mobileNavBarIcon.className="fa-solid fa-bars";
    headerNavList.style.transform = "translateX(200%)";
  }

}
function stageContent(content) {
  $("#content").html(content);
};
            
            
function evaluateHash() {

  if(location.hash == "#menu1") {
    $.get("body1.php", stageContent);
    setNavBarActives("menu1");
  }
  else if (location.hash == "#menu2") {
    $.get("body2.html", stageContent);
    setNavBarActives("menu2");
  }
  else if (location.hash == "#menu3"){
    $.get("body3.html", stageContent);
    setNavBarActives("menu3");
  }
  else {
    $.get("home.html", stageContent);
    setNavBarActives("home");
  }
};

function setNavBarActives(id) {
  if(id=="menu1")
  {
    document.getElementById(id).className="active";
    document.getElementById("menu2").className="inactive";
    document.getElementById("menu3").className="inactive";
    document.getElementById("home").className="inactive";
  }
  else if (id=="menu2")
  {
    document.getElementById(id).className="active";
    document.getElementById("menu1").className="inactive";
    document.getElementById("menu3").className="inactive";
    document.getElementById("home").className="inactive";
  }
  else if (id=="menu3")
  {
    document.getElementById(id).className="active";
    document.getElementById("menu2").className="inactive";
    document.getElementById("menu1").className="inactive";
    document.getElementById("home").className="inactive";
  }
  else
  {
    document.getElementById(id).className="active";
    document.getElementById("menu2").className="inactive";
    document.getElementById("menu3").className="inactive";
    document.getElementById("menu1").className="inactive";
  }
}
            
$(function(){
  evaluateHash();
  window.onhashchange = evaluateHash;
});

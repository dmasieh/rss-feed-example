/*function showRSS(str) {
  if (str.length==0) { 
    document.getElementById("rssFeed").innerHTML="";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("rssFeed").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","feed.php?q="+str,true);
  xmlhttp.send();
}


function showRSS(str) {
  //if (str.length==0) { 
  //  document.getElementById("rssFeed").innerHTML="";
  //  return;
  //}
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("rssFeed").innerHTML = this.responseText;
    }
  };
  xmlhttp.open("GET","feed.php?q=",true);
  xmlhttp.send();
}
*/



function showQuoteSite(str) {
  if (str.length == 0) {
    document.getElementById("showRss").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("showRss").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "search.php?q="+str, true);
    xmlhttp.send();
  }
}

$(document).ready(function(){
  $('.materialboxed').materialbox();
});
       
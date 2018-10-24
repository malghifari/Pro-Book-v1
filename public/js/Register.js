function getXmlHttpRequest( ) {
  var xmlHttpObj;
  if (window.XMLHttpRequest) {
    xmlHttpObj = new XMLHttpRequest( );
  } else {
    try {
      xmlHttpObj = new ActiveXObject("Msxml2.XMLHTTP");
    } catch (e) {
      try {
        xmlHttpObj = new
        ActiveXObject("Microsoft.XMLHTTP");
      } catch (e) {
        xmlHttpObj = false;
      }
    }
  }
  return xmlHttpObj;
}

function elementOnChange(element) {
  xmlhttp = getXmlHttpRequest();
  var query = element.id + '=' + element.value;
  var url = 'http://localhost/WBD1/tugasbesar1_2018' + '/Controller/RegisterController.php?' + query;
  xmlhttp.open('GET', url, true);
  xmlhttp.onreadystatechange = usernameRSC;
  xmlhttp.send(null);    
}

function usernameRSC() {
  document.querySelector('.status-username').innerHTML = xmlhttp.responseText;
}

var username = document.querySelector('#username');
username.onchange = function() {
  if (username.value.length > 20) {
    document.querySelector('.status-username').innerHTML = "Max character: 20";
    return;
  }
  elementOnChange(username);
}

var email = document.querySelector('#email');
email.onchange = function() {
  var re = /[A-Z0-9._%+-]+@[A-Z0-9.-]+.[A-Z]{2,4}/igm;
  if (re.test(String(email.value))) {
    document.querySelector('.status-email').innerHTML = "Email not valid";
    return;
  }
  elementOnChange(email);
}
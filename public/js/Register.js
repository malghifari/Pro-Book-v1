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
  console.log(url);
  xmlhttp.open('GET', url, true);
  xmlhttp.onreadystatechange = usernameRSC;
  xmlhttp.send(null);    
}

function usernameRSC() {
  document.querySelector('.status-username').innerHTML = xmlhttp.responseText;
}

var username = document.querySelector('#username');
username.onchange = function() {
  elementOnChange(username);
}


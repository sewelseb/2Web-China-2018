<script>
    
    var xhr = new XMLHttpRequest(); // and not  getXMLHttpRequest
    xhr.onreadystatechange =function(){
        console.log(xhr.readyState);
        if(xhr.readyState == 4) {
            if(xhr.status == 200) {
                console.log(xhr.responseText);
            }
            else {
                console.log(xhr.status);
            }
        }
  }

    
    xhr.open('GET', 'getSeb.php');
    xhr.send(null);
</script>
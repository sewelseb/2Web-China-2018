function languageChoice(language) {
    console.log(language);
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange =function(){
        console.log(xhr.readyState);
        if(xhr.readyState == 4) {
            if(xhr.status == 200) {
                alert(xhr.responseText);
            }
            else {
                alert(xhr.status);
            }
        }
    }
    xhr.open("GET", "response.php?language="+language);
    xhr.send();
    
}
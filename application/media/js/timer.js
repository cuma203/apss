window.addEventListener("load", function(){ 
    setInterval(function(){ 
        var date = new Date();
        var y = date.getFullYear();
        var m = date.getMonth()+1;
        var d = date.getDate();
        
        if(d<10) {
            d='0'+d
        } 

        if(m<10) {
            m='0'+m
        } 
        document.getElementById("timeData").innerHTML = y+'-'+m+'-' +d+ '&nbsp;&nbsp;&nbsp;' + date.toLocaleTimeString();
    }, 1000);
    
});

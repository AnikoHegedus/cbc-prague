if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(location) {
        console.log(location);
    }, function(error) {
        console.error(error);
    });
}

window.addEventListener("load", function(){
    if(navigatior.geolocation){
        navigatior.geolocation.getCurrentPosition(function(location){
            console.log(location);
        }, function(error){
            console.error(error);
        });
    }
})
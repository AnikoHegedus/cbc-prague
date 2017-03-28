$("#like-this").click(function(){

        $.ajax({
            "url" : "/api/like.php",
            "method" : "post",
            "data" : {
                "id" : 1,
            }
        }).done(function(data){
            alert("Success!");
        }).fail(function(){
            alert("Something went wrong, come back in a minute or two.");
        })
});

$("#clickable").mouseenter(function(){
    console.log("over");
}).mouseleave(function(){
    console.log("out");
});
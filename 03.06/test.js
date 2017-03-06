$(document).ready(function() {
    $("#done_tasks").append($('.done'));
});

$(document).ready(function() {
    $.ajax({
            "url" : "http://classes.codingbootcamp.cz/assets/classes/tests/4/response.php",
            "method" : "post",
            "dataType": "json",
        }).done(function(data){
            console.log(data);
        }).fail(function(){
            alert("Something went wrong, come back in a minute or two.");
        }).always(function(){
            $("#spinner").addClass("hidden");
        });

});

$(document).ready(function(){
    // add fade-in/out effect to search bar
    $("#searchInput").click(function(){
        $("#searchInput").hide();
        $("#searchbox").fadeIn("slow");

    });
    $("#close-search").click(function(){
        $("#searchbox").hide();
        $("#searchInput").fadeIn("slow");
    });
    // add active class to main menu navigation bar
    $("#myNavbar li").on("click", function() {
        $("#myNavbar li").removeClass("active");
        $(this).addClass("active");
    });
    
    // Get the modal
    var modal = document.getElementById('id01');
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
    }


});

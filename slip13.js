$(document).ready(function(){
    // Attach an event listener to the name input field
    $('#name').on('input', function(){
        // Get the name entered by the user
        var name = $(this).val();
        // Send an AJAX request to the server
        $.ajax({
            url: 'slip13.php',
            type: 'POST',
            data: {name: name},
            success: function(response){
                // Update the response div with the server's response
                $('#response').html(response);
            }
        });
    });
});

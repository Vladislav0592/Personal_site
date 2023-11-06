$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$('#sendReview').on('click', function (event) {
    event.preventDefault();
 alert('sdsafda')
});






function sendForm() {
    let review = $('#review').val();
    $.ajax({
        url: "/reviews/submit",
        type: "POST",
        data: {
            review: review,
        },
        success: function () {
            review = $('#review').val('');
            review.after('<span class="success">Message sent!</span>');
        },
    });
}

/*
$(".wrong").remove();
$(".success").remove();

if (review.length <= 4) {
    $('#review').after('<span class="wrong">The message must contain at least 4 characters and no more than 500</span>');
}
else {
    sendForm()
}*/

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$('#sendReview').on('click', function (event) {
    event.preventDefault();
    let review = $('#review').val();
    $(".wrong").remove();
    $(".success").remove();

    if (review.length > 500) {
        $('#form').after('<span class="wrong">The message must contain no more than 500 characters</span>');
    }
    if (review.length <= 4) {
        $('#form').after('<span class="wrong">The message must contain at least 4 characters.</span>');
    }
    else {  $('#form').after('<span class="success">Message send!</span>');
        sendFormReview()
    }
});

function sendFormReview() {
    let review = $('#review').val();
    $.ajax({
        url: "reviews/submit",
        type: "POST",
        data: {
            review: review,
        },
        success: function () {
            review = $('#review').val('');
        },
    });
}

$('#sendContact').on('click', function (event) {
    event.preventDefault();
    const name = $('#name').val();
    const contacts = $('#contacts').val();
    const message = $('#message').val();
    $(".wrong").remove();
    $(".success").remove();

    if (name.length <= 1) {
        $('#name').after('<span class="wrong">The "Name" field must contain at least 2 characters.</span>');
    }
    if (name.length > 20) {
        $('#name').after('<span class="wrong">The "Name" field must contain at no more than 20 characters.</span>');
    }
    if (contacts.length <= 5) {
        $('#contacts').after('<span class="wrong">The "Contacts" field must contain at least 5 characters.</span>');
    }
    if (contacts.length >20) {
        $('#contacts').after('<span class="wrong">The "Contacts" field must contain at no more than 20 characters. </span>');
    }
    if (message.length >1000) {
        $('#message').after('<span class="wrong">The "Message" field must contain at no more than 1000 characters.</span>');
    }
    if (message.length <= 5) {
        $('#message').after('<span class="wrong">The "Message" field must contain at least 6 characters.</span>');
    }
    else {
        $('#formContacts').after('<span class="success">Message send!</span>');
        sendFormContacts()
    }
});
function sendFormContacts() {
    let name = $('#name').val();
    let contacts = $('#contacts').val();
    let message = $('#message').val();
    $.ajax({
        url: "contacts/submit",
        type: "POST",
        data: {
            name: name,
            contacts: contacts,
            message: message,
        },
        success: function () {
            name = $('#name').val('');
            contacts = $('#contacts').val('');
            message = $('#message').val('');
        },
    });
}

Fancybox.bind('[data-fancybox="gallery"]', {

});

$('#right').on('click', function (){

})

$('#left').on('click', function (){

})

$(document).on('click', '.pagination a', function (e) {
    e.preventDefault();
    var page = ($(this).attr('href').split('page='))[1];
    getAuthors(page);
});
function getAuthors(page) {
    $.ajax({
        url: '/ajax/authors?page=' + page
    }).done(function (data) {
        $('.content').html(data);
    });
}

$('.request').on('click', function (e) {

    $("#myID").val($(this).val());
});


$('#form').on('submit', function (e) {
    e.preventDefault();
    var formData = $('#form').serializeArray();
    var author = $('#author').serializeArray();
    formData.push(author);
    var form = $(this);
    var field = [];
    var res = false;
    form.find('input[data-validate]').each(function () {
        field.push('input[data-validate]');
        var value = $(this).val();
        var line = $(this).closest('.some-form__line');

        if (!value) {
            line.addClass('some-form__line-required');
            setTimeout(function () {
                line.removeClass('some-form__line-required')
            }, 1000);
            event.preventDefault();
            res = false;
        } else {
            res = true;
        }

    });

    if (res) {
        $.ajax({
            type: 'POST',
            url: '/sendmail',
            data: formData,
            success: function (result) {
                $('.btn-secondary').click();
            }
        });
    }
});




// $(document).on('click','#modal-add-book', function(e){
//     e.preventDefault();
//     validate();
// })

// function validate() {
//     var name = document.getElementById('user-name');
//     var email = document.getElementById('user-email');
//     if (!name.value) {
//         name.style.border = "1px solid red";
//         return false;
//     }
//     if (!email.value) {
//         email.style.border = "1px solid red";
//         return false;
//     }

//     return true;
// }
// var book = {};
// $(document).ready(function () {
//     $('#modal-add-book').on('click', addBook);
// });

// function addBook() {
//     var formData = $('form').serializeArray();
//     console.log(formData);
//     var arr = [];
//     for (key in formData){
//         arr[formData[key]['name']] = formData[key]['value'];
//     }
//     console.log(arr);
// }

// $(document).on('click', '.request', function (e) {
//     e.preventDefault();
//     getRequest();
// })

// function getRequest(){
//     alert();

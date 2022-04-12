$(document).ready(function () {

    var timer;
    var timeout = 3000; // timeout
    $('#make,#model,#year').keyup(function(){
        // if on focus  clear the time
        if(timer)
        {
            clearTimeout(timer);
        }

        timer = setTimeout(saveData,timeout);
    });

    $('#next').click(function () {
        saveData()
    })
});

function saveData() {

    var make = $('#make').val();
    var model = $('#model').val();
    var year = $('#year').val();
    var date_created = new Date();

    if(make != '')
    {
        var token = $('meta[name="csrf-token"]').attr('content');
        console.log(token);
        $.ajax({
            url: "/car",
            type: 'post',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: {make:make,model:model,year:year,date_created: date_created},
            success: function (data) {
                console.log(data);
            }
        });
    }


}


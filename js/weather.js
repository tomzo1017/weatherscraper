$('form').on('submit', function (e) {
    e.preventDefault();


    const data = $('#city').val();
    const dataToSend = '?city=' + data;
    
      $.ajax({
        type: "POST",
        url: 'functions/weatherfunc.php',
        data: dataToSend,
        async: true,
        success: function (data) {
            var str = data.split("&");
            $("#success").text(str[0]);
        }
      })
    })
    

    


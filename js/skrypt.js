$(function() {
        $("#wyslij").click(function() {
            var email = $('#email').val();
            var imie = $('#imie').val();
            var nazwisko = $('#nazwisko').val();
            var pesel = $('#pesel').val();
            var telefon = $('#telefon').val();
            var adres = $('#adres').val();
            var kod_pocztowy = $('#kod_pocztowy').val();
            var miasto = $('#miasto').val();
            var dane = email + imie + nazwisko + pesel + telefon + adres + kod_pocztowy + miasto;

    $.ajax({
      type: 'POST',
      url: 'skrypt.php'
      data: dane,
      success: function(data){
        if( data == '0')
          alert('Błędnie wprowadzone dane');
        else {
          window.location = window.location;
        }
      }
    })
        });
    });

var giveaway = {

  init: function() {
      console.log('Giveaway Init');
      this.counter();
  },

  counter: function() {
        
    var end = new Date('10/18/2023 10:1 AM');
    var _second = 1000;
    var _minute = _second * 60;
    var _hour = _minute * 60;
    var _day = _hour * 24;
    var timer;

    function showRemaining() {
        var now = new Date();
        var distance = end - now;
        if (distance < 0) {

            clearInterval(timer);
            document.getElementById('countdown').innerHTML = 'EXPIRED!';

            return;
        }
        var days = Math.floor(distance / _day);
        var hours = Math.floor((distance % _day) / _hour);
        var minutes = Math.floor((distance % _hour) / _minute);
        var seconds = Math.floor((distance % _minute) / _second);

        if (seconds < 10) {
          seconds = "0" + seconds;
        }

        document.getElementById('countdownDays').innerHTML = days;
        document.getElementById('countdownHours').innerHTML = hours;
        document.getElementById('countdownMinutes').innerHTML = minutes;
        document.getElementById('countdownSeconds').innerHTML = seconds;
    }

    timer = setInterval(showRemaining, 1000);
    
  }
}

giveaway.init();
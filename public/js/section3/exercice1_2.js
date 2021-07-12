$(".slider-range1").slider({
    min: 0,
    max: 1439,
    step: 15,
    values: [0],
    slide: function (e, ui) {
        var hours = Math.floor(ui.values[0] / 60);
        var minutes = ui.values[0] - (hours * 60);

        if (hours.length == 1) hours = '0' + hours;
        if (minutes.length == 1) minutes = '0' + minutes;
        if (minutes == 0) minutes = '00';
        if (hours >= 12) {
            if (hours == 0) {
                hours = hours;
                minutes = minutes + " Heures";
            } else {
                hours = hours - 0;
                minutes = minutes + " Heures";
            }
        } else {
            hours = hours;
            minutes = minutes + " Heures";
        }
        if (hours == 24) {
            hours = 0;
            minutes = minutes;
        }

        $('.slider-time1').html(hours + ':' + minutes);
    
    }
});
///////////////////////////////////////////////////////////////////
$(".slider-range2").slider({
    min: 0,
    max: 1439,
    step: 15,
    values: [0],
    slide: function (e, ui) {
        var hours = Math.floor(ui.values[0] / 60);
        var minutes = ui.values[0] - (hours * 60);

        if (hours.length == 1) hours = '0' + hours;
        if (minutes.length == 1) minutes = '0' + minutes;
        if (minutes == 0) minutes = '00';
        if (hours >= 12) {
            if (hours == 0) {
                hours = hours;
                minutes = minutes + " Heures";
            } else {
                hours = hours - 0;
                minutes = minutes + " Heures";
            }
        } else {
            hours = hours;
            minutes = minutes + " Heures";
        }
        if (hours == 24) {
            hours = 0;
            minutes = minutes;
        }

        $('.slider-time2').html(hours + ':' + minutes);
    
    }
});

$(".slider-range3").slider({
    min: 0,
    max:  1439,
    step: 15,
    values: [0],
    slide: function (e, ui) {
        var hours = Math.floor(ui.values[0] / 60);
        var minutes = ui.values[0] - (hours * 60);

        if (hours.length == 1) hours = '0' + hours;
        if (minutes.length == 1) minutes = '0' + minutes;
        if (minutes == 0) minutes = '00';
        if (hours >= 12) {
            if (hours == 0) {
                hours = hours;
                minutes = minutes + " Heures";
            } else {
                hours = hours - 0;
                minutes = minutes + " Heures";
            }
        } else {
            hours = hours;
            minutes = minutes + " Heures";
        }
        if (hours == 24) {
            hours = 0;
            minutes = minutes;
        }

        $('.slider-time3').html(hours + ':' + minutes);

    }
});
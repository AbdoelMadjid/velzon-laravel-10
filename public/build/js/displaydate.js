(function () {
    "use strict";

    function toHijriah(date) {
        var array_month = ["Muharram", "Safar", "Rabiul Awwal", "Rabiul Akhir", "Jumadil Awwal", "Jumadil Akhir", "Rajab", "Sya'ban", "Ramadhan", "Syawwal", "Zulqaidah", "Zulhijjah"];

        var day = date.getDate();
        var month = date.getMonth() + 1; // Month is 0-indexed
        var year = date.getFullYear();

        if ((year > 1582) || ((year == 1582) && (month > 10)) || ((year == 1582) && (month == 10) && (day > 14))) {
            var jd = Math.floor((1461 * (year + 4800 + Math.floor((month - 14) / 12))) / 4) +
                Math.floor((367 * (month - 2 - 12 * (Math.floor((month - 14) / 12)))) / 12) -
                Math.floor((3 * (Math.floor((year + 4900 + Math.floor((month - 14) / 12)) / 100))) / 4) +
                day - 32075;
        } else {
            var jd = 367 * year - Math.floor((7 * (year + 5001 + Math.floor((month - 9) / 7))) / 4) +
                Math.floor((275 * month) / 9) + day + 1729777;
        }

        var wd = jd % 7;
        var l = jd - 1948440 + 10632;
        var n = Math.floor((l - 1) / 10631);
        l = l - 10631 * n + 354;
        var z = Math.floor((10985 - l) / 5316) * Math.floor((50 * l) / 17719) +
                Math.floor(l / 5670) * Math.floor((43 * l) / 15238);
        l = l - Math.floor((30 - z) / 15) * Math.floor((17719 * z) / 50) -
                Math.floor(z / 16) * Math.floor((15238 * z) / 43) + 29;
        var m = Math.floor((24 * l) / 709);
        var d = l - Math.floor((709 * m) / 24);
        var y = 30 * n + z - 30;
        var g = m - 1;

        return d + " " + array_month[g] + " " + y + " H";
    }

    function renderDateTime() {
        var mydate = new Date();
        var days = ["<font color='red'>Minggu</font>", "Senin", "Selasa", "Rabu", "Kamis", "<font color='#1f9d81'><b>Jum'at</b></font>", "Sabtu"];
        var months = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];

        var day = mydate.getDay();
        var month = mydate.getMonth();
        var daym = mydate.getDate();
        var year = mydate.getFullYear();
        var hours = mydate.getHours();
        var minutes = mydate.getMinutes();
        var seconds = mydate.getSeconds();

        if (minutes < 10) minutes = "0" + minutes;
        if (seconds < 10) seconds = "0" + seconds;

        var hijriDate = toHijriah(mydate);
        var formattedDate = days[day] + ", " + daym + " " + months[month] + " " + year + " M";
        var timeString = hours + ":" + minutes + ":" + seconds;

        // Update date and time displays separately
        var dateDisplayElements = document.querySelectorAll("#date-display");
        var timeDisplayElements = document.querySelectorAll("#time-display");

        dateDisplayElements.forEach(function(element) {
            element.innerHTML = formattedDate + " (" + hijriDate + ")";
        });

        timeDisplayElements.forEach(function(element) {
            element.innerHTML = timeString;
        });
    }

    // Call renderDateTime every second
    setInterval(renderDateTime, 1000);

    // Initial call to display date and time immediately
    document.addEventListener('DOMContentLoaded', function() {
        renderDateTime();
    });
})();

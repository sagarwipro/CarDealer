var weekday = new Array(7);
weekday[0] = "Sunday";
weekday[1] = "Monday";
weekday[2] = "Tuesday";
weekday[3] = "Wednesday";
weekday[4] = "Thursday";
weekday[5] = "Friday";
weekday[6] = "Saturday";
let clock = () => {
    let date = new Date();
    let hrs = date.getHours();
    let mins = date.getMinutes();
    let secs = date.getSeconds();
    let period = "AM";
    if (hrs == 0) {
        hrs = 12;
    } else if (hrs >= 12) {
        hrs = hrs - 12;
        if (period == "PM") {
            period = "AM";
        } else
            period = "PM";
    }
    hrs = hrs < 10 ? "0" + hrs : hrs;
    mins = mins < 10 ? "0" + mins : mins;
    secs = secs < 10 ? "0" + secs : secs;
    let n = date.getDay();
    let z = date.getTimezoneOffset();

    let time = "UTC ";
    time += `${z}:${weekday[n]}:${hrs}:${mins}:${secs}:${period}`;

    document.getElementById('datetime').innerText = time;
    setTimeout(clock, 1000);
};

clock();
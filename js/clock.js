function updateClock() {
    var currentTime = new Date();
    var hours = currentTime.getHours();
    var minutes = currentTime.getMinutes();
    var day = currentTime.getDate();
    var month = currentTime.getMonth(); // Months are zero-based
    var year = currentTime.getFullYear();
    var dayOfWeek = currentTime.getDay(); // 0 is Sunday, 1 is Monday, etc.

    // Array of month names
    var monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];

    // Array of day names
    var dayNames = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];

    // Determine AM or PM
    var meridiem = (hours < 12) ? "AM" : "PM";

    // Convert to 12-hour format
    hours = (hours % 12) || 12;

    // Add leading zeros if needed
    hours = (hours < 10) ? "0" + hours : hours;
    minutes = (minutes < 10) ? "0" + minutes : minutes;

    var timeString = hours + ":" + minutes + " " + meridiem;
    var dateString = dayNames[dayOfWeek] + " " + monthNames[month] + " " + day;

    document.getElementById("current-time").innerHTML = dateString + "&nbsp;&nbsp;" + timeString;
}

// Update the clock immediately and then every minute
updateClock();
setInterval(updateClock, 60000); // Update every minute

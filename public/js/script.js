let lastScrollTop = 0;
const topBar = document.getElementById('topBar');
let hideTimeout;

function getFormattedDate(date) {
    const day = date.getDate();
    const month = date.toLocaleString('default', { month: 'long' });
    const year = date.getFullYear();

    // Get the appropriate suffix for the day
    let daySuffix;
    if (day >= 11 && day <= 13) {
        daySuffix = 'th';
    } else {
        switch (day % 10) {
            case 1: daySuffix = 'st'; break;
            case 2: daySuffix = 'nd'; break;
            case 3: daySuffix = 'rd'; break;
            default: daySuffix = 'th';
        }
    }

    return `${day}${daySuffix} ${month}, ${year}`;
}
function updateClock() {
    let now = new Date();
    let hours = now.getHours();
    let minutes = now.getMinutes();
    let seconds = now.getSeconds();
    const formattedDate = getFormattedDate(now);
    console.log(seconds);

    hours = hours < 10 ? '0' + hours : hours;
    minutes = minutes < 10 ? '0' + minutes : minutes;
    seconds = seconds < 10 ? '0' + seconds : seconds;

    let timeString = hours + ':' + minutes + ':' + seconds;
    document.getElementById('time').innerText = timeString;
    document.getElementById('date').innerText = formattedDate;
}






function getFormattedDate(date) {
    const day = date.getDate();
    const month = date.toLocaleString('default', { month: 'long' });
    const year = date.getFullYear();

    // Get the appropriate suffix for the day
    let daySuffix;
    if (day >= 11 && day <= 13) {
        daySuffix = 'th';
    } else {
        switch (day % 10) {
            case 1: daySuffix = 'st'; break;
            case 2: daySuffix = 'nd'; break;
            case 3: daySuffix = 'rd'; break;
            default: daySuffix = 'th';
        }
    }

    return `${day}${daySuffix} ${month}, ${year}`;
}
function updateClock() {
    let now = new Date();
    let hours = now.getHours();
    let minutes = now.getMinutes();
    let seconds = now.getSeconds();
    const formattedDate = getFormattedDate(now);
    console.log(seconds);

    hours = hours < 10 ? '0' + hours : hours;
    minutes = minutes < 10 ? '0' + minutes : minutes;
    seconds = seconds < 10 ? '0' + seconds : seconds;

    let timeString = hours + ':' + minutes + ':' + seconds;
    document.getElementById('time').innerText = timeString;
    document.getElementById('date').innerText = formattedDate;
}



document.addEventListener('DOMContentLoaded', function() {
    window.addEventListener('scroll', function() {
        console.log('hello');
        let scrollTop = window.scrollY || document.documentElement.scrollTop;
        if (scrollTop > lastScrollTop) {
            // Scrolling down
            document.getElementById('topBar').classList.remove('hidden');
        } else {
            // Scrolling up
            document.getElementById('topBar').classList.add('hidden');
        }
        lastScrollTop = scrollTop <= 0 ? 0 : scrollTop; // For Mobile or negative scrolling
    });
});
  

// Update the clock every second
setInterval(updateClock, 1000);


// Initial call to display the clock immediately
updateClock();

var timeleft = 10;
var downloadTimer = setInterval(function(){
timeleft--;
document.getElementById("countdowntimer").textContent = timeleft;
if(timeleft <= 0){
    window.location.href = "https://secure4.store.apple.com/fr/shop/signIn?c=aHR0cHM6Ly93d3cuYXBwbGUuY29tL2ZyL3wxYW9zNTA0YmM4OTZiZTkwYTBhNjc4MjVkODc3OTUzNDJhM2RkN2Y4NjNiYw&r=SCDHYHP7CY4H9XK2H&s=aHR0cHM6Ly93d3cuYXBwbGUuY29tL2ZyL3wxYW9zNTA0YmM4OTZiZTkwYTBhNjc4MjVkODc3OTUzNDJhM2RkN2Y4NjNiYw";

}
if(timeleft <= 0)
    clearInterval(downloadTimer);

},1000);
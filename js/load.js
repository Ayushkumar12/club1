// document.onreadystatechange = function() {
//     if (document.readyState !== "complete") {
//         document.querySelector("body").style.visibility = "hidden";
//         document.querySelector("#loader").style.visibility = "visible";
//     } else {
//         setTimeout("animationend",function() {
//             document.getElementById("loader").style.display = "none";
//             document.body.style.visibility = "visible";
//         }, 5000);      
//     }
// };
// document.addEventListener("DOMContentLoaded", function() {
//     setTimeout(function() {
//         document.getElementById("loader").classList.add("fade-out");
//         setTimeout(function() {
//             document.getElementById("loader").style.display = "none";
//             document.body.style.visibility = "visible";
//         }, 2000);
//     }, 5000);
// });
document.addEventListener("DOMContentLoaded", function () {
    const loader = document.getElementById("loader");
  
    loader.addEventListener("animationend", function () {
      loader.style.display = "none";
      document.body.style.visibility = "visible";
    });
});
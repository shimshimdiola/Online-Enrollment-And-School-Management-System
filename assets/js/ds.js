// function obfuscateCode() {
//   function obfuscateCode() {
//     document.documentElement.innerHTML = document.documentElement.innerHTML.replace(
//       /./g,
//       function (s) {
//         return "&#" + s.charCodeAt(0) + ";";
//       }
//     );
//   }

//   setInterval(function () {
//     obfuscateCode();
//   }, 100);

// }

// setTimeout(function () {
//   obfuscateCode();
// }, 10);

window.addEventListener("devtoolschange", function (e) {
  alert("Developer tools are not allowed!");
});
window.addEventListener("contextmenu", function (e) {
  e.preventDefault();
});

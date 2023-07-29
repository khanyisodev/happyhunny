// search-script.js
document.addEventListener("DOMContentLoaded", function () {
  // Function to get URL parameter by name
  function getURLParameter(name) {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(name);
  }

  // Get the value of the "s" parameter from the URL
  const searchTerm = getURLParameter('s');

  // Update the content of the span element with the searched term
  const spanElement = document.getElementById('searched-term');
  spanElement.textContent = searchTerm;
});

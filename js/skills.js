var lang = {
  "html": "100%",
  "css": "80%",
  "javascript": "70%",
  "php": "80%",
};

var multiply = 4;

$.each(lang, function (language, percent) {

  var delay = 700;

  setTimeout(function () {
    $('#' + language + '-percent').html(percent);
  }, delay * multiply);

  multiply++;

});
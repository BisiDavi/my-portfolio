const lang = {
  "html": "100%",
  "css": "80%",
  "javascript": "70%",
  "php": "80%",
};

const multiply = 2;

each(lang, function (language, percent) {

  var delay = 100;

  setTimeout(function () {
    $('#' + language + '-percent').html(percent);
  }, delay * multiply);

  multiply++;

});
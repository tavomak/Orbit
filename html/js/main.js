(function() {
  var root;

  root = typeof exports !== "undefined" && exports !== null ? exports : this;

  root.show_alert = function() {
    return alert("Hello! I am an alert box!");
  };

}).call(this);


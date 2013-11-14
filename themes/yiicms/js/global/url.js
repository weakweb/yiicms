/**
  * @version 0.2
  * @Author Boris.Huai
  * All the AJAX URL defined here.
  */
define(function () {
  var mode = 'prod'; //another mode value is 'prod'
  var modes = {
    prod: {
    },
    dev: {
    }
  };

  // Use this method to write code easily~~
  var _get = function(key) {
    return basePath + modes[mode][key];
  };

  return {
  };
});


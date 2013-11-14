(function() {
  require.config({
    paths: {
      'jquery': 'lib/jquery.min',
      'underscore': 'lib/underscore',
      'mustache': 'lib/mustache',
      'controller': 'controller/controller',
      'bootstrap': 'lib/bootstrap',
      'message': 'util/message',
      'dialog': 'util/dialog',
      'util': 'util/util',
      'base': 'global/base'
    },
    shim: {
    'underscore': {
      exports: '_'
    },
    'mustache': {
      exports: 'mustache'
    },
    'bootstrap': {
      deps: ['jquery'],
    },
    'controller': {
      deps: ['jquery', 'mustache', 'underscore']
    },
    'base': {
      deps: ['controller']
    }
  }
  });

  require(['jquery', 'underscore'], function($, _) {
    $(function() {
      // load module for each page
      var dataStart = $('script[data-main][data-start]').attr('data-start') || '';
      var startModules = dataStart.split(',');

      _.each(startModules, function(module) {
        require([module], function(moduleObj) {
          if (moduleObj && moduleObj.init) {
            moduleObj.init();
          }
        });
      });
    });
  });
})();
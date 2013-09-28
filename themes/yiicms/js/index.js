require.config({
  paths: {
    'jquery': 'lib/jquery.min',
    'underscore': 'lib/underscore.min',
    'mustache': 'lib/mustache',
    'controller': 'controller/controller',
    'base': 'global/base'
  },
 shim: {
  'underscore': {
    exports: 'underscore'
  },
  'mustache': {
    exports: 'mustache'
  },
  'controller': {
    deps:['jquery', 'mustache', 'underscore']
  },
  'base': {
    deps:['controller']
  }
  }
});
require (['base'], function (base) {
  //Call back function
  console.log('Init Successful!');
});
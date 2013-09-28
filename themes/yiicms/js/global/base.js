/**
 * base.js
 */
cms.enumeration = {};
cms.enumeration.language = {
  ZH: 'zh_cn',
  EN: 'en'
};

//constants
cms.constants = cms.constants || {};

//config
cms.config = {
  gdMode: 'dev',//
  isOffline: function () {
    return cms.config.gdMode === 'dev';
  }
};

cms.URL = function () {
  var modes = {
    prod: {
      
    },
    dev: {
      
    }
  };
  var _modeName = cms.config.gdMode || 'dev';
  var _mode = modes[_modeName];

  return {
    
  };
}();

//execute the entry of the project when document ready
$(function() {
  cms.controller.mainModule.initModules();
});
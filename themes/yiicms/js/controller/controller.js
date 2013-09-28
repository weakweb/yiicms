/**
 * Controllers
 */
var cms = cms || {};
cms.controller = cms.controller || {};

/**
 * the entry of the project
 */
cms.controller.mainModule = function () {
  return {
    /**
     * Inits all the modules. It will invoke all the init method in the modules
     */
    initModules: function () {
      _.each(cms.controller, function (controller, name) {
        if (controller.init && (typeof controller.init === 'function')) {
          controller.init();
        }
      });
    }
  };
}();
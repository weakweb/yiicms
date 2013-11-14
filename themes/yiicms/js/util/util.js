define(['underscore'], function(_) {
  return {
    objectListToString: function(list, key) {
      var data = '';
      _.each(list, function(item) {
        data += item[key] + ',';
      });
      return data.slice(0, -1);
    },
  };
});
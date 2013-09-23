// usage: log('inside coolFunc', this, arguments);
// paulirish.com/2009/log-a-lightweight-wrapper-for-consolelog/
window.log = function f(){ log.history = log.history || []; log.history.push(arguments); if(this.console) { var args = arguments, newarr; args.callee = args.callee.caller; newarr = [].slice.call(args); if (typeof console.log === 'object') log.apply.call(console.log, console, newarr); else console.log.apply(console, newarr);}};

// make it safe to use console.log always
(function(a){function b(){}for(var c="assert,count,debug,dir,dirxml,error,exception,group,groupCollapsed,groupEnd,info,log,markTimeline,profile,profileEnd,time,timeEnd,trace,warn".split(","),d;!!(d=c.pop());){a[d]=a[d]||b;}})
(function(){try{console.log();return window.console;}catch(a){return (window.console={});}}());


// place any jQuery/helper plugins in here, instead of separate, slower script files.

var storage = {

  // set the data in localStorage
  set: function(key, value, expiry) {

    if (expiry === undefined) expiry = 0;

    // so that we can add expiry, unfortunately this isn't supported by default
    var obj = {
      value: value,
      expires: expiry + new Date().getTime()
    };

    if (expiry === 0) {
      obj.expires = 0;
    }

    // if not supported or not using
    if (!JSON || typeof window.localStorage != "object") {
      // boo!
      return false;

    }

    // set the data...
    window.localStorage[key] = JSON.stringify(obj);

  },

  append: function(key, value) {
    var data = storage.get(key);
    if (!data) {
      data = [];
    }
    data.push(value);
    storage.set(key, data);
  },

  // get from local storage
  get: function(key) {

    // check browser support
    if (typeof localStorage != "object") {

      // fail
      return false;
    }

    // retreive the data from the localStorage
    var data = localStorage.getItem(key);

    // if nothing found
    if (!data) {

      // fail
      return false;
    }

    if (!JSON) return false;

    if (JSON == undefined) return false;

    // data is stored as JSON string
    var object = JSON.parse(data),
        now = new Date().getTime().toString();

    // check expires
    if (now > object.expires && object.expires !== 0) {

      // fail
      return false;
    }

    // return data
    return object.value;

  }
};
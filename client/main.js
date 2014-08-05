Router.addRoute('/result/:id', function(id) {
  console.log(id);
});

Router.resource("birthday");

Router.resource('name');

App.initialize();
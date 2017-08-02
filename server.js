var express = require('express');
var app = express();

// set the port of our application
// process.env.PORT lets the port be set by Heroku
var port = process.env.PORT || 8000;

if (process.env.NODE_ENV === 'production') {
  // statically serve client build
  app.use(express.static(__dirname + '/client/build'));
}

// test endpoint to confirm that requests are
// proxied from the development server
app.get('/api/hello', (req, res) => {
  res.send({ api: 'works' });
});

app.listen(port, function() {
  console.log('Our app is running on http://localhost:' + port);
});

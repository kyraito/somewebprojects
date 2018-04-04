var http = require('http');

var serv = http.createServer(function(req, res) {


	res.writeHead(200);
	res.end('Salut tout le monde !');


});


serv.listen(8080);

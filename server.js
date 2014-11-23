var conf = require('./conf');
var app = require('http').createServer(handler);
var io = require('socket.io')(app);
var fs = require('fs');

console.log(conf);

app.listen(conf.port);

function handler (req, res) {
	res.writeHead(200);
	res.end(data);
}

io.on('connection', function (socket) {
	console.log('on');
	console.log(socket.nsp)
	console.log(socket.id);
	socket.on('disconnect', function(a){
		console.log('off');
		console.log(socket.id);
	});
	socket.on('csrf', function(data){
		console.log(data);
	});
});
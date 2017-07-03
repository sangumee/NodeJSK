// Module Extract
var http=require('http');

// Cereate Webserver And Execute
http.createServer(function(request,response){
  response.writeHead(200, { 'Content-Type': 'text/html;charset=UTF-8'});
  response.end('<h1>Hello World 상구미</h1>');
}).listen(50000,function(){
  console.log("Server Running at 175.124.249.135:50000");
});

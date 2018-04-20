var mysql = require('mysql');

var con = mysql.createConnection({
  host: "local",
  user: "service'@'",
  password: "Cricket22!",
  database: "darts",

});

con.connect(function(err) {
  if (err) throw err;
  con.query("SELECT * FROM person",function (err, result, fields) {
    if (err) throw err;
    console.log(result);
  });
  console.log("Connected!");
});
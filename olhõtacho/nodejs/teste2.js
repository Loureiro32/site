var mysql = required ('mysql');

var con = mysql.createConnection({
  host: "Mysql80",
  user: "root",
  password: "loureiro123"
});

con.connect(function(err) {
  if (err) throw err;
  console.log("Connected!");
});
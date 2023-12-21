const express = require('express');
const cookieParser = require("cookie-parser");
const sessions = require('express-session');
const http = require('http');
var parseUrl = require('body-parser');
const app = express();

var mysql = require('mysql');

let encodeUrl = parseUrl.urlencoded({ extended: false });

var connection = mysql.createConnection({
 host: 'localhost',
 user: 'root',
 password: 'Vampir_9449',
 database: 'MakeAppointment'
});

const pool = mysql.createPool(connection);

module.exports = pool;

app.get('/', (req, res) => {
 res.sendFile(__dirname + '/reg.html');
})
app.post('/register', encodeUrl, (req, res) => {
   var fullName = req.body.fullName;
   var email = req.body.email;
   var password = req.body.password;
   connection.connect(function(err) {
       if (err){
           console.log(err);
           res.status(500).send('Ошибка подключения к базе данных');
           return;
       };
       connection.query(`SELECT * FROM Users WHERE Email = '${email}'`, function(err, result){
           if(err){
               console.log(err);
               res.status(500).send('Ошибка запроса к базе данных');
               return;
           };

           if(Object.keys(result).length > 0){
               res.status(400).send('Пользователь с таким email уже зарегистрирован');
           }else{
               function UsersPage(){
                   req.session.Users = {
                       Full_name: fullName,
                       Email: email,
                       PasswordUs: password
                   };
               }
               var sql = `INSERT INTO Users (Full_name, Email, Password) VALUES ('${fullName}', '${email}', '${password}')`;
               connection.query(sql, function (err, result) {
                   if (err){
                       console.log(err);
                       res.status(500).send('Ошибка добавления пользователя в базу данных');
                       return;
                   }else{
                       UsersPage();
                       res.redirect('/index.html');
                   };
               });
           }

       });
   });
   
});

app.listen(4000, ()=>{
    console.log("Server running on port 4000");
});


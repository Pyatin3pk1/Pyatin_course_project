var mysql = require('mysql');

var connection = mysql.createConnection({
 host: 'localhost',
 user: 'root',
 password: 'password',
 database: 'my_db'
});

connection.connect(function(err) {
 if (err) {
    console.error('Error connecting: ' + err.stack);
    return;
 }
 console.log('Connected as id ' + connection.threadId);
});

function authenticate(email, password, callback) {
 connection.query('SELECT * FROM users WHERE email = ? AND password = ?', [email, password], function(err, results) {
    if (err) {
      callback(false, { message: 'There was a problem with the authentication process.' });
    } else {
      if (results.length > 0) {
        callback(true, results[0]);
      } else {
        callback(false, { message: 'The email or password is incorrect.' });
      }
    }
 });
}

// Usage:
authenticate('test@test.com', 'password', function(authenticated, user) {
 if (authenticated) {
    console.log('User is authenticated: ', user);
 } else {
    console.log('Authentication failed: ', user.message);
 }
});
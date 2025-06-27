const express = require('express');
const mysql = require('mysql2');
const cors = require('cors');

const app = express();
app.use(cors());

const pool = mysql.createPool({
  host: 'mysql', 
  user: 'root',
  password: 'password',
  database: 'team5docker',
});

app.get('/pets', (req, res) => {
  pool.query('SELECT * FROM team5', (error, results) => {
    if (error) {
      console.error('Error fetching data:', error.message);
      return res.status(500).json({ error: 'Failed to fetch data' });
    }
    res.json(results);
  });
});

app.listen(3000, '0.0.0.0', () => {
  console.log('Node.js API listening on port 3000');
});

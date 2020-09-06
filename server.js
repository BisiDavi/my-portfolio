const express = require('express');
const path = require('path')
const myRoutes = require('./src/routes/routes')
// const dotenv = require('dotenv');

const app = express();

// dotenv.config();

app.use(express.static(__dirname + "/src/"));
const viewsDir = path.resolve(__dirname, 'src/views');
app.set('views', viewsDir);
app.set('view engine', 'ejs');

app.use(express.urlencoded({extended:true}))

app.use(myRoutes)

const port = 3000;

app.listen(port, ()=>{
    console.log(`Server is running on Port ${port}`)
})
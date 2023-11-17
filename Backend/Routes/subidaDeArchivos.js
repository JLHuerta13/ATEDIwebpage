const express = require('express')
const subidaDeArchivos = express.Router();
const db = require('../config/database');
//debug
subidaDeArchivos.get("/", async(req,res,next)=>{
 res.status(201).json({code:201,message:"pagina accedida"});
});

module.exports = subidaDeArchivos;
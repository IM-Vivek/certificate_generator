const express=require('express');
const app=express();
const sql=require('mysql');
var temp=sql.createConnection(
    {
      host:'localhost',
      user:'root',
      password:'',
      database:'certificate_generator'
    }
);
temp.connect(function(err)
{
    if(err) console.log(err)
    else console.log("connected!!")
});
module.exports=temp;
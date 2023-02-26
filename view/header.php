<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đồ Án Tốt Nghiệp</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="boxcenter">
        <div class="row mb header">
            <h1> Chào Mừng Quý Khách</h1>
        </div>
        <div class="row mb menu">
            <ul>
                <li><a href="index.php">Trang Chủ</a></li>
                <li><a href="index.php?act=gioithieu">Giới Thiệu</a></li>
                <li><a href="index.php?act=lienhe">Liên Hệ</a></li>
                <li><a href="index.php?act=gopy">Góp Ý</a></li>
                <li><a href="index.php?act=hoidap">Hỏi Đáp</a></li>
            </ul>
        </div>

<style>
    *{
    box-sizing: border-box;
    font-family: sans-serif;
    font-size:  0.7vw;
}
.boxcenter {
    width: 60%;
    margin:  0 auto;
}

.row{
    float: left;
    width: 100%;
}
.mb{
    margin-bottom: 20px;
}
.mb10{
    margin-bottom: 10px;
}
.mr{
    margin-right: 2%;
}
.demo{
    background-color: antiquewhite;
    min-height: 100px;
}
.header{
    background-color: aquamarine;
    border: 1px #090 solid;
    color: blue;
    border-radius: 5px;
}
.footer{
    background-color: aquamarine;
    border: 1px #090 solid;
    font-size: 0.8vw;
    color: blue;
    border-radius: 5px;
    padding: 20px;
}
.header h1{
    margin: 20px;
    font-size: 1.2vw;
}
.menu{
    background-color: red;
    color: #ccc;
    border-radius: 5px;
}
.menu ul{
    padding: 0px 10px;
}
.menu ul li{
    list-style-type: none;
    display: inline;
    padding: 0px 15px;
}
.menu ul li a{
    color: #CCC;
    text-decoration: none;
    transition: 0.5s;
}
.menu ul li a:hover{
    color: white;
    font-size: 0.8vw;
}


.boxtitle{
    padding: 10px;
    background-color: #EEE;
    border: 1px #CCC solid;
    color: #333;
    border-top-right-radius: 5px;
    border-top-left-radius: 5px;
}

.boxcontent{
    border-left: 1px #CCC solid;
    border-right: 1px #CCC solid;
    border-bottom: 1px #CCC solid;
    border-top-right-radius: 5px;
    border-top-left-radius: 5px;
    min-height: 200px;
    padding: 20px;
}
.boxcontent2{
    border-left: 1px #CCC solid;
    border-right: 1px #CCC solid;
    min-height: 200px;
    background-color: #EEE;
}
.boxfooter{
    padding: 10px;
    background-color: #EEE;
    border-top-right-radius: 5px;
    border-top-left-radius: 5px;
    border: 1px #CCC solid;
}
.boxtrai{
    float: left;
    width: 74%;
}
.boxphai{
    float: left;
    width: 24%;
}
.banner{
    min-height: 300px;
    width: 100%;
    text-align: center;
}
.banner img{
    height: 300px;
}
.boxsp{
    float: left;
    width: 31%;
    min-height: 300px;
    border: 1px #EEE solid;
    border-radius: 5px;
    margin-bottom: 20px;
}
.boxsp .img{
    min-height: 230px;
    text-align: center;
}
.img img {
    height: 220px;
}

/* box tai khoan*/

.formtaikhoan{
    line-height: 150%;
}
.formtaikhoan input[type="text"],
.formtaikhoan input[type="password"],
.frmcontent input[type="text"]{
    width: 100%;
    border: 1px #CCC solid;
    padding: 10px;
    border-radius: 5px;
}
.formtaikhoan input[type="checkbox"] {
    border-radius: 5px;
}
.formtaikhoan input[type="submit"],
.frmcontent input[type="submit"],
.frmcontent input[type="reset"],
.frmcontent input[type="button"] {
    border-radius: 5px;
    padding: 5px 10px;
    background-color: red;
    border: 1px #CCC solid;
}
.formtaikhoan input[type="submit"]:hover, 
.frmcontent input[type="submit"]:hover,
.frmcontent input[type="reset"]:hover,
.frmcontent input[type="button"]:hover {
    background-color: #CCC;
}
.formtaikhoan li a{
    color: teal;
    text-decoration: none;
}
.formtaikhoan li a:hover{
    color: #090;
    text-decoration: underline;
}

/* Menu Dọc*/
.menudoc ul{
    margin: 0;
    padding: 0;
    list-style-type: none;
}
.menudoc ul li{
    background-color: #FFF;
    padding: 10px 20px;
    border-bottom: 1px #CCC solid;
}
.menudoc ul li a{
    color: #666;
    text-decoration: none;
}
.menudoc ul li:hover{
    background-color: #CCC;
}
.searbox input[type="text"]{
    width: 100%;
    padding: 5px 10px;
    background-color: #FFF;
    border: 1px #CCC solid;
    border-radius: 5px;
}


/* ADMIN Giao Diện*/

.headeradmin{
    background-color: rgb(192, 238, 236);
    border: 1px #CCC solid;
    color: #666;
    border-radius: 5px;
    padding: 0px 20px;
}
.headeradmin h1{
    color: #333;
    font-size: 2vw;
}
.frmtitle{
    background-color: #EEE;
    border: 1px #CCC solid;
    color: #666;
    border-radius: 5px;
    padding: 0px 20px;
}
.frmcontent {
    padding: 20px 0px;
} 
.frmdsloai table{
    width: 100%;
    border-collapse: collapse;
}
.frmdsloai table th:nth-child(1){
    width: 10%;
    padding: 20px;
    background-color: #CCC;
}
.frmdsloai table th:nth-child(2){
    width: 30%;
    background-color: #CCC;
}
.frmdsloai table th:nth-child(3){
    width: 40%;
    background-color: #CCC;
}
.frmdsloai table th:nth-child(4){
    width: 20%;
    background-color: #CCC;
}
.frmdsloai table td{
    padding: 10px 20px;
    border: 1px #CCC solid;
}
</style>
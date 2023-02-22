 <style>
.buttonl{    
  background-color: #F3F4F6;
  border: none;
  color: black;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: block;
  font-weight: bold;
  font-size: 16px;
  margin: 2px 4px;
  opacity: 0.7;
  border-radius: 8px;
  transition: all 0.5s;
  cursor: pointer;
  top: 70px;
  right: 15px;
    margin-bottom: 4px;
}

.buttonl:hover {
    opacity: 10;
}
.buttonl span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.buttonl span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.buttonl:hover span {
  padding-right: 40px;
}

.buttonl:hover span:after {
  opacity: 1;
  right: 0;
}

     
.buttonr{    
  background-color: #8B0000;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: right;
  text-decoration: none;
  display: block;
  font-weight: bold;
  font-size: 16px;
  margin-left: 5px;
  opacity: 0.7;
  border-radius: 8px;
  transition: all 0.5s;
  cursor: pointer;
  top: 70px;
  right: 15px;
  float: right;
  content: "";
  margin-bottom: 4px;
    

}

.buttonr:hover {
    opacity: 10;
}
.buttonr span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.buttonr span:after {
  content: '\00ab';
  position: absolute;
  opacity: 0;
  top: 0;
  left: -10px;
  transition: 0.5s;
}

.buttonr:hover span {
  padding-left: 40px;
}

.buttonr:hover span:after {
  opacity: 1;
  left: 0;
}


</style>
       
       
       
       
       <div class="buttons">
        
            <div class ="row">
    <div class ="col-md-3">
    <h4 class="l">Cateva lectii introductive:</h4>
    
 <form action="numbers.php">
    <button class ="buttonl" ><span>Numbers</span></button>
</form>
<form action="initials.php">
    <button class= "buttonl" ><span>Initials</span></button>
</form>
<form action="finals.php">
    <button class="buttonl" ><span>Finals</span></button>
</form>
    </div>
       
       
        <div class ="col-md-7">
                   
        </div>
        
        
        <div class="col-md-2">
<form action="index.php">
    <button class="buttonr" ><span>Home</span></button>
</form>

<form action="contact.php">
    <button class="buttonr" ><span>Contact</span></button>
</form>

<form action="aboutus.php">
    <button class="buttonr" ><span>About us</span></button>
</form>
                </div>
            </div>
        </div>
 

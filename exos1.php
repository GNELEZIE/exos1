<?php
$bdd= new PDO('mysql:host=localhost; dbname=exos', 'root','');
$error1= $error2=$error3=$error4="";
$send =true;
if(isset($_POST['send'])){
   
   
    $nom = attention($_POST['nom']);
    $prenom = attention($_POST['prenom']);
    $email = attention($_POST['email']);
     $inser = $bdd->prepare('INSERT INTO essai(nom,prenom,email) VALUES(?,?,?)');    
     $inser ->execute(array($nom,$prenom,$email));
    header('Location:merci.php');
   
   } 

    


function attention($info){
    $info = trim($info);
    $info = htmlspecialchars($info);
    $info = stripcslashes($info);
    return $info;
}

?>




<!DOCTYPE html>
<html lang="fr">
<head>
<title>MOIS JAVASCRIPT</title>
</head>
    <body>
        <form method="POST" action="">
        <fieldset>
            
         <legend><h1>FORMULAIRE</h1></legend>   
            
            <p style="color:red;background:orange;"><?php echo $error4; ?></p>
            <label for="nom">Nom:</label>
            <input type="text"  name="nom" id="nom" placeholder="Entrer gentiment votre nom svp!!!!" 
                   
                   required pattern="[a-Z-A-z]{5,15}"> <p style="color:red;background:orange;"><?php echo $error3; ?></p><br> <br> <br> <br>
            
 
           <label for="prenom">Preom:</label> 
            <input type="text"  name="prenom" id="prenom" placeholder="Entrer gentiment votre prenom svp!!!!" required pattern="[a-Z-A-z]{5,15}"><p style="color:red;background:orange;"><?php echo $error2; ?> </p><br> <br> <br> <br>
                     
           <label for="email">Email:</label> 
            <input type="text"  name="email" id="email" placeholder="Entrer gentiment votre email svp!!!!" required pattern="[a-Z-A-z]{5,50}">
            <p style="color:red;background:orange;"><?php echo $error1; ?></p><br> <br>
            <input type="submit"   value="ENREGISTRER!" id="send" name="send">
            
        </fieldset>
        </form>
        </div>
    
<script>
    
$(document).ready(function() {
 
		$('#success').hide();
		 $('#load').hide();
 
		$('#envoimess').submit(function(){
 
			valid =true;
 
			if($('#nom').val()==''){
        $('#nom').prev('.error').fadeIn(1000).text('Indiquez votre nom');
        valid = false;
      }
      else{
        $('#nom').prev('.error').slideUp();
      }
 
		 if(!$('#email').val().match(/^[a-z0-9._-]+@[a-z0-9.-]{2,}[.][a-z]{2,3}$/)){
        $('#email').prev('.error').fadeIn(1000).text('Email invalide');
        valid = false;
      }
 
      else{
        $('#email').prev('.error').slideUp()
      }
 
			if($('#message').val()==''){
        $('#message').prev('.error').fadeIn(1000).text('Indiquez votre message');
        valid = false;
      }
      else{
        $('#message').prev('.error').slideUp();
      }
 
			 if(valid==true)
      {
        var nom = $('#nom').val();
        var email = $('#email').val();
        var message = $('#message').val();
        var dataString = 'nom='+nom+'&email='+email+'&message='+message;
 
        $.ajax({
          type: 'POST',
          url: 'merci.php',
          data: dataString,
 
          beforeSend: function()
          {
            $('#load').fadeIn();
          },
 
          success: function()
          {
            $('#load').fadeOut();
            $('#form').slideUp();
            $('#success').slideDown();
            $('#success').text('Formulaire OK');
          }
        });
      }
 
			return false;
 
		});
});
    
    
    
    
    
    
    
    
    
</script>
    
    
    <style>
        
            
    body{
        background: #47287a;
    }
        
        form{
            background-color:#922e4a;
            height: 500px;
            width: 500px;
            margin-top: 32px;
            margin-left: 500px;
       
            border-radius: 10px;
              color: #fff;
                        

            
        } 
        
        input[type='submit']{
            float: right;
            background: green;
            border-radius: 10px;
            color: #fff;
            font-size: 30px;
        }

    

        
input:invalid {
    border-color: red;
        border: 2px solid red;
      
}
        
input,
input:valid {
    border-color: green;
     border: 2px solid green;
}
        label{
            color: #fff;
            font-weight: bold;
        }  
        
     #marque table tr .td1 p{
    animation: Test 0.3s infinite;
}
@keyframes Test{
    0%{opacity: 1;
    color:red;
    font-size: 30px;
}
    50%{opacity: 0;
        color:orange;
    }
    100%{opacity: 1;
        color:white; 
    }
}   
        
        
        
        
        
        
        
        
        
        
    </style>
    
    </body>
</html>
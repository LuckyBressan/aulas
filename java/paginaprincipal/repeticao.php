<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
        document.write("<ol>");
        for(x = 1; x<=10; x++){
            document.write("<li>X é igual a "+x)
        }
        document.write("</ol>");
        document.write("<hr>");
        document.write("<ol>");
        for(x = 10; x>=1; x--){
            document.write("<li>X é igual a "+x)
        }
        document.write("</ol>");
        document.write("<hr>");
        document.write("<ol>");
        for(x = 0; x<=100; x=x+10 ){
            document.write("<li style=\"color:rgb("+100+","+(50-x)+","+(150-x)+");\">X é igual a "+x)
        }
        document.write("</ol>");
        
    </script>
    <title>Document</title>
</head>
<body>
    
</body>
</html>
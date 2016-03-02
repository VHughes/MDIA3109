<!DOCTYPE html>
<html>
    <head>
        <title>All images</title>
    </head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <body>
        
    </body>
   <!-- <div id="div" style="position: relative; width: 400px; height: 100px; border: 1px solid black;">
    <div id="center" style="width: 90%; margin: 0 auto; text-align: center">
        <h2 id="title1">Ford F150</h2>
        <button id="go" class="button">Select</button>
    </div>
</div>
    <div id="div" style="position: relative; width: 400px; height: 100px; border: 1px solid black;">
    <div id="center" style="width: 90%; margin: 0 auto; text-align: center">
        <h2 id="title">Toyota Long-Box</h2>
        <button id="add" class="button">Select</button>
    </div>
</div>
    <div id="div" style="position: relative; width: 400px; height: 100px; border: 1px solid black;">
    <div id="center" style="width: 90%; margin: 0 auto; text-align: center">
        <h2 id="title">GMC Sierra - 4WD</h2>
        <button id="add" class="button">Select</button><br><Br><br>
        <button id="newpost">Create New Post Here</button>
    </div>
</div>
    -->

    <script>
        $(document).ready(function(){
            
    
            
           $.ajax({
               url:"../controller/item.php",
               type:"POST",
               dataType:"JSON",
               data: {
                   method: "read",
                   
                   
               },
               success:function(resp){
                    console.log(resp);
                      //get name
                   
                   for(i=0;i<resp.length;i++){
                       var div = document.createElement("div");
                       div.style.width = "300px";
                       div.style.height = "200px";
                       div.style.border = "solid";
                       document.body.appendChild(div);
                       
                       var butt = document.createElement("button");
                       butt.innerHTML = "Edit This Posting";
                       
                       
                       var title = document.createElement("h3");
                       title.innerHTML = "Title: "+resp[i].title;
                       var desc = document.createElement("p");
                       desc.innerHTML = "Description: "+resp[i].description;
                       
                       var img = document.createElement("img");
                       img.style.width = "75px";
                       img.style.height = "75px";
                       img.src = "Image: </br>"+resp[i].img;
                       
                       div.appendChild(title);
                       div.appendChild(desc);
                       div.appendChild(img);
                       div.appendChild(butt);
                       
                   }

                   
               }
                   
           
           })
           
      
        
        });
    </script>
    
    
    
    </body>
</html>
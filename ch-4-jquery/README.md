# Ch. 4 jQuery

___

## Lecture 126 Introducing jQuery UI

*Visit jQuery site for codes

*Either save the file and use as source, or copy url from website.


    <script type="text/javascript" src="file-name"></script>
    
    <script type="text/javascript" src="url"</script>
    
___

## Lecture 128 Online hosted libraries

*Google jQuery ui cdn
*Google Hosted Libraries

___

## Lecture 131 Droppables

*Drop function takes 2 arguments

    $("#target").droppable({
               drop: function(ui, event) {
                   $("#target").css("background-color", "grey");
               }
            });
            
            
___

##Lecture 133: Accordion and Sortables

*requires stylesheet

    -  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/
        libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
        
    *Accordion: splits and compresses content of div
    
       $("#divId").accordion();
       $(".divClass").accordion();






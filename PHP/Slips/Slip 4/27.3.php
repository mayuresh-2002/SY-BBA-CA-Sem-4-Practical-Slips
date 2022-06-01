<html>
<body>
          <script type="text/javascript">
          function show_confirm()
          {
                var r=confirm("Press a button !");
                 if(r==true)
                 {
                        ver i;
                         var game = new Array();
                          game[0]="Car ";
                     game[1]="GTA";
                          game[2]="cricket";
                          for(i=0;i<game.length;i++)
                              {
                                       document.write(game[i]+"<br/>");
                               }
                    }
                 else
                    {
                          alert("Cancel game cannot be displayed !");
                    }
                }
       </script>
    </head>S
 <boody>
          <input type="button" onclick="show_confirm()" value="List of game"/>
 </body>
</html>                         
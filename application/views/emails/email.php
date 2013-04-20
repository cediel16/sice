<!DOCTYPE html>
<html>
    <head>
        <style>
            html,body{
                margin: 0px;
                padding: 0px;
                font-family: Arial;
            }

            .container{
                border:1px solid red;
                margin: auto;
                width: 600px;
                font-size:12px;
            }
            
            .logo{
                background:url('<?php echo $url_logo ?>') no-repeat center;
                width:80px;
                height:80px;
                
            }
            .institution_name{
                font-size:16px;
                font-weight:bold;
            }
            
        </style>
        <title><?php echo $titulo ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <div class="container">
            <div class="header">
                <table width="100%" border="1">
                    <tr>
                        <td width="5%"><div class="logo"></div></td>
                        <td align="center"><div class="institution_name"><?php echo $nombre_institucion ?></div></td>
                    </tr>
                </table>
                
            </div>
            <div class="content">
                Contenido
            </div>
            <div class="footer">
                Pie
            </div>
        </div>
    </body>
</html>

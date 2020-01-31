<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div class="main-header">
        <h1 class="main-header">Travis Jones' Homepage</h1>
        <?php
            var xmlHttp;
            function srvTime(){
                try {
                    //FF, Opera, Safari, Chrome
                    xmlHttp = new XMLHttpRequest();
                }
                catch (err1) {
                    //IE
                    try {
                        xmlHttp = new ActiveXObject('Msxml2.XMLHTTP');
                    }
                    catch (err2) {
                        try {
                            xmlHttp = new ActiveXObject('Microsoft.XMLHTTP');
                        }
                        catch (eerr3) {
                            //AJAX not supported, use CPU time.
                            alert("AJAX not supported");
                        }
                    }
                }
                xmlHttp.open('HEAD',window.location.href.toString(),false);
                xmlHttp.setRequestHeader("Content-Type", "text/html");
                xmlHttp.send('');
                return xmlHttp.getResponseHeader("Date");
            }
            
            var st = srvTime();
            var date = new Date(st);
        ?>
    </div>
    <ul>
        <li><button onclick="window.location.href = '../hello.html';">Week 1</button></li>
        <li><button onclick="window.location.href = '#';">Week 2</button></li>
        <li><button onclick="window.location.href = '#';">Week 3</button></li>
        <li><button onclick="window.location.href = '#';">Week 4</button></li>
        <li><button onclick="window.location.href = '#';">Week 5</button></li>
        <li><button onclick="window.location.href = '#';">Week 6</button></li>
        <li><button onclick="window.location.href = '#';">Week 7</button></li>
        <li><button onclick="window.location.href = '#';">Week 8</button></li>
        <li><button onclick="window.location.href = '#';">Week 9</button></li>
        <li><button onclick="window.location.href = '#';">Week 10</button></li>
        <li><button onclick="window.location.href = '#';">Week 11</button></li>
        <li><button onclick="window.location.href = '#';">Week 12</button></li>
        <li><button onclick="window.location.href = '#';">Week 13</button></li>
        <li><button onclick="window.location.href = '#';">Week 14</button></li>
    </ul>
</body>
</html>
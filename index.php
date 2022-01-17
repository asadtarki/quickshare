<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuickShare</title>
    
    <link rel="stylesheet" href="app.css">
</head>
<body>
    
    <header>
        <nav>
            <ul>
                <li class="logo" id="logo">QuickShare </li>
            </ul>
            <div class="cursor" id="cursor"></div>
        </nav>
    </header>
    <main>
        <div class="form-container" id="form">
            <form action="" method="">
                <h3>Upload files</h3>
                <div class="inputblock" id="ib0">
                    <input type="file" class="file"/>
                </div>
                <div class="inputblock">
                    
                    <input type="text" placeholder="   " name="title" class="title" id="title" >
                    <label  class="mylabel">title</label>
                </div>

                <div class="inputblock ib2" id="ib2">
                    
                    <textarea class="message" placeholder="  "></textarea>
                    <label  class="mylabel">message</label>
                </div>
                <div class="inputblock ib3" id="ib3">
                    
                    <input type="submit" value="generate link" id="linkbutton"/>
                </div>
               
            </form>
        </div>
    </main>
</body>
<script src="script.js"></script>
</html>
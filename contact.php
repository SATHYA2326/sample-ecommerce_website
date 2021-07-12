<!doctype html>
<html>
    <head>
         
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <link rel="stylesheet" href="ecss.css">
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
         
         
        <title>
          E-Commerce website
        </title>
    </head>
    <body>
        
        <?php
        include 'header.php';
        ?>
        <div class=" container-fluid">
            <div class="row">
                <div class="col-md-8 ">
                    <h3 class="text-left"> Contact us.....</h3>
                    <p class="text-justify">  The body of the essay supports the main points presented in the thesis. Each point is
            developed by one or more paragraphs and supported with specific details. These
            details can include support from research and experiences, depending on the
            assignment. In addition to this support, the author’s own analysis and discussion of the topic ties ideas
            together and draws conclusions that support the thesis. Refer to “Parts of a Paragraph” below for
            further information on writing effective body paragraphs.
            TransitionsTransitions connect paragraphs to each other and to the thesis. They are used within and between
            paragraphs to help the paper flow from one topic to the next. These transitions can be one or two words
            (“first,” “next,” “in addition,” etc.) or one or two sentences that bring the reader to the next main point.
            The topic sentence of a paragraph often serves as a transition. (See the Transitions handout for further
            information.)</p>
            
                </div>
                <div class="col-md-4">
                    <br>
                    <img  class="thumbnail"src="images/21.jpg" width="70%" height="40%">
                </div>
              
            
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <form role="form">
                                <h3> Contact us</h3>
                                <label>
                                    Name:</label>
                                <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name" name="Name" required="true">
                                </div>
                                <label>
                                    Email:</label>
                                 <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name" name="Name" required="true">
                                </div>
                                <label>Messages:
                                </label>
                                <div class="form-group">
                                    <textarea   input type="messages" class="form-control" placeholder="message" name="messages" required="true">
                                    
                                </textarea>
                                </div>
                        </div>
                        <div class="col-md-6 address">
                            <h3> Company information:</h3>
                            <h4>
                                Address:
                            </h4>
                            <p>Pagalahalli, Tamil Nadu 636807</p>
                            <h4> working hours:</h4>
                            <p> 
                                Open ⋅ Closes 11:30PM</p>
                            <h4>Contact num:</h4><a href="+094433 55967">
                                Phone: 094433 55967</a>
                            
                        </div>
                     
                    </div>
                </div>
            </div>
        </div>
        <div class="p"></div>
        <?php
        include 'footer.php';
        ?>
    </body>
</html>
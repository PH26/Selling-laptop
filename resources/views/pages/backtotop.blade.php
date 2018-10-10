
 <style>
   #myBtn {
              display: none;
              position: fixed;
              bottom: 20px;
              right: 30px;
              z-index: 99;
              font-size: 18px;
              border: none;
              outline: none;
              background-color: red;
              color: white;
              cursor: pointer;
              padding: 5px;
              margin-right: 10px; 
              border-radius: 4px;
              width: 30px;
              float: right;
         }

        #myBtn:hover {
            background-color: #555;
    
        .caption a:hover{
            text-decoration: none;
            color: #288ad6;
        }
 </style>
    <button onclick="topFunction()" id="myBtn" class=" fa fa-angle-up" title="Go to top"></button>
                    <script>
                    // When the user scrolls down 20px from the top of the document, show the button
                    window.onscroll = function() {scrollFunction()};

                    function scrollFunction() {
                        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                            document.getElementById("myBtn").style.display = "block";
                        } else {
                            document.getElementById("myBtn").style.display = "none";
                        }
                    }

                    // When the user clicks on the button, scroll to the top of the document
                    function topFunction() {
                        document.body.scrollTop = 0;
                        document.documentElement.scrollTop = 0;
                    }
                    </script>
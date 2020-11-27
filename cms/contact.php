 <?php  include "includes/header.php"; ?>


    <!-- Navigation -->
    
    <?php  include "includes/navigation.php"; ?>

        <div class="container" id="tag-line">
            <h3>Please get in touch</h3>
        </div>

        <div class="container" id="contact-form">

            <form action="/cms/assets/php/mail.php" method="post">
                <noscript>
                    <p><input type="hidden" name="nojs" id="nojs" /></p>
                </noscript>
                <input type="text" name="name" class="form-control" id="name" placeholder="Name" /><br />
                <input type="text" name="email" class="form-control" id="email" placeholder="email" /><br />

                <textarea rows="5" name="comments" class="form-control" id="comments" placeholder="Comments"
                    required></textarea>
                </p>
                <p>


                  
                    <br>
                    <button type="submit" class="btn btn-secondary center-block"><i
                            class="fas fa-paper-plane"></i>&nbsp;Send
                            Message </button>
        </div>
        </div>
        </p>

        </form>
        </div>
        </div>
        </div>
    </section>

    <!----------- Optional JavaScript ----------->
    <!----------- jQuery first, then Popper.js, then Bootstrap JS ----------->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
 <script>
     //Get the button
     var mybutton = document.getElementById("myBtn");

     // When the user scrolls down 20px from the top of the document, show the button
     window.onscroll = function () {
         scrollFunction()
     };

     function scrollFunction() {
         if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
             mybutton.style.display = "block";
         } else {
             mybutton.style.display = "none";
         }
     }

     // When the user clicks on the button, scroll to the top of the document
     function topFunction() {
         document.body.scrollTop = 0;
         document.documentElement.scrollTop = 0;
     }
 </script>

</body>

</html>
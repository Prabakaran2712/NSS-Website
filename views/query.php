<div class="query-section">
    <h2 class="query-heading">Contact Us</h2>
    <form method="post" class="query-form">
        <div class="col-sm-4">
            <label for = "name" class="query-label">Name</label>
        </div>
        <div class="col-sm-8">
            <input type="text" name="name" id="name" placeholder="Your Name" required>
        </div>
        <div class="row"></div>
       <div class="col-sm-4">
            <label for ="message" class="query-label">Query</label>
       </div>
       <div class="col-sm-8">
            <textarea name="message" id="message" placeholder="Your message" required></textarea>
       </div>
        <div class="row"></div>
       <div class="col-sm-4">
                        &nbsp;
       </div>
       <div class="col-sm-8">
            <input type="submit" onclick="send()">
       </div>
   </form>
</div>
<script type="text/javascript">
    function send() {
        var name = document.getElementById("name").value;
        var message = document.getElementById("message").value;
        var res = name.replace(" ","").localeCompare("");
        var res1 = message.replace(" ","").localeCompare("");
        if (res!=0) {
                if (res1!=0) {
                    var mes = message.concat(" by ",name);
                    Email.send({
                        Host: "smtp.gmail.com",
                        Username : "nssmit2019@gmail.com",
                        Password : "bharath@1510",
                        To : "bmkvs541@gmail.com",
                        From : "nssmit2019@gmail.com",
                        Subject : "Query",
                        Body : mes
                    })
                    .then(
                        alert("mail sent successfully")
                    );
                }
                else{
                    alert("Please fill query and click Submit");
                }
            }
        else{
            alert("Please fill your name");
        }
    }
</script>

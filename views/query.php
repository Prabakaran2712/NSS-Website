<div class="container" id="contact">
    <h1 class="display-4 mt-5">Contact Us</h1>
    <form class="form-body mb-5" id="contactForm">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="emailField" placeholder="name@example.com" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Message</label>
            <textarea required placeholder="Your message..." class="form-control" id="messageField" rows="3"></textarea>
        </div>
        <div class="row justify-content-center text-center">
            <div class="alert alert-success col-10" role="alert" id="success-message">
                Your message was received <i class="bi bi-emoji-laughing"></i>
            </div>
        </div>
        <div class="row justify-content-center text-center">
            <div class="alert alert-danger col-10" role="alert" id="error-message">
                Something went wrong <i class="bi bi-exclamation-circle"></i>
            </div>
        </div>
        <div class="mb-3 submit">
            <button class="btn accent-bg-color text-light">
                <i class="bi bi-envelope-check pe-2"></i>
                Submit
            </button>
        </div>
    </form>    
</div>

<script>
    $('#contactForm').submit(e=>{
        e.preventDefault();
        const emailField = $('#emailField');
        const messageField = $('#messageField');
        $.ajax({
        type: "POST",
        url: "log.php",
        data: {
            type: 'contact',
            email: emailField.val(),
            message: messageField.val()
        }
        })
        .done(() => {
            $('#success-message').css({'display': "block"});
            emailField.val('');
            messageField.val('');
        })
        .fail(() => $('#error-message').css({'display': "block"}))
    })
</script>


<style>
    .form-body{
        max-width: 500px;
        margin: 10px auto;
        background-color: white;
        padding: 20px 30px;
        border-radius: 15px;
        box-shadow: 3px 3px 10px 7px #eee;
    }
    .form-body label{
        color: #303983;
    }
    .form-body .submit{
        text-align: center;
    }
    #success-message{
        display: none;
    }
    #error-message{
        display: none;
    }    
</style>
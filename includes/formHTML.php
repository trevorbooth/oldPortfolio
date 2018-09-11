         <h3>Tell me about your project.</h3>
           <?php if ($missing || $errors) { ?>
            <p></p>
         <?php } ?>
<form method="post" action="#contactBlock"> 
    <p>
                <label for="name">
               <?php if ($missing && in_array('name', $missing)) { ?>
                <span class="warning name">What's your name?</span>
                <?php } ?>
               </label>
               <input name="name" id="name" type="text" placeholder="Name">
    </p>
    <p>
               <label></label>
               <input name="phone" id="phone1" type="tel" placeholder="Phone">
    </p>
    <p>
               <label><?php if ($missing && in_array('email', $missing)) { ?>
               <span class="warning email1">Please enter a valid email.</span>
               <?php } ?></label>
               <input name="email" id="email1" type="text" placeholder="Email">
    </p>
    <p>
                <label for="comments"><?php if ($missing && in_array('comments', $missing)) { ?>
                <span class="warning comments">Tell me what you're interested in.</span>
                <?php } ?></label>
                <textarea name="comments" id="comments" placeholder="How can I help you?"></textarea>
    </p>
    <p>      
                <input id="formBTN" name="send" type="submit" value="Get in Contact">
    </p>  
</form>   

<?php if(get_plugin_options('contact_plugin_active')): ?>

<div id='form_success' style = 'background: green; color: $fff'></div>
<div id='form_error' style = 'background: red; color: #fff'></div>


<form id='enquiry_form'>
    
    <?php
    //wp_nonce_field track bots that try to submit form for spaming. In this case we are passing it specific for rest endpoints
    wp_nonce_field('wp_rest')
    
    ?>
    
    <label>Email</label>
    <input type='text' name='email'/><br/>
    <label>Name</label>
    <input type='text' name='name'/><br/>
    <label>Phone</label>
    <input type='text' name='phone'/><br/>
    <label>Message</label>
    <textarea type='text' name='message'></textarea><br/>
    <button type='submit' id='submit'>Submit form</button>
</form>

<script>

    jQuery(document).ready(function($){
        $("#enquiry_form").submit(function(event){
            event.preventDefault();
          
            var form = $(this);

            console.log(form.serialize());

            $.ajax({
                type: 'POST',
                url: "<?php echo get_rest_url(null, 'v1/contact-form/submit'); ?>",
                data: form.serialize(),
                success: function(){
                    form.hide();
                    $('#form_success').html('Your message was sent').fadein();
                },
                error: function(){
                    form.hide();
                    $('#form_error').html('There was error submitting your form').fadein();
                }
            })
        });
    });

    // const btn = document.querySelector('#enquiry_form');

    // btn.addEventListener('click', (e) => {
    //     e.preventDefault();
    //     // alert('sasa')
    // })
    
</script>

<?php else: ?>

    This form is not active at all!    

<?php endif; ?>
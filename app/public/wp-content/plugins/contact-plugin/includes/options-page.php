<?php
    use Carbon_Fields\Container;
    use Carbon_Fields\Field;


    add_action('after_setup_theme', 'load_carbon_fields');
    add_action('carbon_fields_register_fields', 'create_options_page');

    function load_carbon_fields(){
        \Carbon_Fields\Carbon_Fields::boot();
    }

    function create_options_page(){
        Container::make( 'theme_options', __( 'Theme Options' ) )
        ->add_fields( array(
            Field::make( 'checkbox', 'contact_plugin_active', __( 'Is Active' ) )
            ->set_option_value( 'yes' ),
            Field::make( 'text', 'contact_plugin_recipients', __( 'Recipent Email' ) )->set_attribute('placeholder','eg. your@email.com')
            ->set_help_text('The email that is form submitted to!'),
            Field::make( 'textarea', 'contact_plugin_message', __( 'Confirmation message' ) )->set_attribute('placeholder','Enter confirmation message')
            ->set_help_text('Type the message you want the submitter to recive'),
    ) );
    }
?>
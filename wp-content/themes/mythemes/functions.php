<?php
    //wpのデフォルトのjQuery削除
    function delete_jquery(){
        if(!is_admin()){
            wp_deregister_script('jquery');
        }
    }
    add_action('init' , 'delete_jquery');
?>
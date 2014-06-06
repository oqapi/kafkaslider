<?php 
    if($_POST['snslider_hidden'] == 'Y') {
        //Form data sent
        $title = $_POST['snslider_title'];
        update_option('snslider_title', $title);
        $base_color = $_POST['snslider_base_color'];
        
        update_option('snslider_base_color', $base_color);
        ?>
        <div class="updated"><p><strong>Instellingen opgeslagen</strong></p></div>
        <?php
    } else {
        //Normal page display
        $title = get_option('snslider_title');
        $base_color = get_option('snslider_base_color','#81CFF4');
    }
?>
<div  class="wrap">
    <h2>Slimmernetwerk</h2>
    <form name="snslider_form" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
        <input type="hidden" name="snslider_hidden" value="Y">
        <h4>Instellingen</h4>
        <p>Titel: <input type="text" name="snslider_title" value="<?php echo $title; ?>" size="20"></p>
     

        <p><label title="Basis kleur" for="base_color">Selecteer een basis kleur</label></p>
        <p><input type="text" id="base_color" name="snslider_base_color" value="<?php echo $base_color ?>" class="snslider-color-picker" /></p>


        <p class="submit">
        <input type="submit" name="Submit" value="Opslaan" />
        </p>
    </form>     
</div>

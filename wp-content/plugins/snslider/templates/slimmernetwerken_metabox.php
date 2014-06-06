<table> 
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="quote">Quote</label>
        </th>
        <td>
            <textarea id="quote" name="quote"><?php echo @get_post_meta($post->ID, 'quote', true); ?></textarea>
        </td>
    </tr>                
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="jaar">Jaar</label>
        </th>
        <td>
            <input type="text" id="jaar" name="jaar" class="numeric" value="<?php echo @get_post_meta($post->ID, 'jaar', true); ?>" />
        </td>
    </tr>
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="opdrachtgever">Opdrachtgever</label>
        </th>
        <td>
            <input type="text" id="opdrachtgever" name="opdrachtgever" value="<?php echo @get_post_meta($post->ID, 'opdrachtgever', true); ?>" />
        </td>
    </tr>                
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="trekker">Trekker</label>
        </th>
        <td>
            <input type="text" id="trekker" name="trekker" value="<?php echo @get_post_meta($post->ID, 'trekker', true); ?>" />
        </td>
    </tr>                
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="fase_verbreden">Fase Verbreden</label>
        </th>
        <td>
            <textarea id="fase_verbreden" name="fase_verbreden"><?php echo @get_post_meta($post->ID, 'fase_verbreden', true); ?></textarea>
        </td>
    </tr>                
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="fase_evalueren">Fase Evalueren</label>
        </th>
        <td>
            <textarea id="fase_evalueren" name="fase_evalueren"><?php echo @get_post_meta($post->ID, 'fase_evalueren', true); ?></textarea>
        </td>
    </tr>                
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="fase_experimenteren">Fase Experimenteren</label>
        </th>
        <td>
            <textarea id="fase_experimenteren" name="fase_experimenteren"><?php echo @get_post_meta($post->ID, 'fase_experimenteren', true); ?></textarea>
        </td>
    </tr>                
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="fase_adopteren">Fase Adopteren</label>
        </th>
        <td>
            <textarea id="fase_adopteren" name="fase_adopteren"><?php echo @get_post_meta($post->ID, 'fase_adopteren', true); ?></textarea>
        </td>
    </tr>                
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="fase_schetsen">Fase Schetsen</label>
        </th>
        <td>
            <textarea id="fase_schetsen" name="fase_schetsen"><?php echo @get_post_meta($post->ID, 'fase_schetsen', true); ?></textarea>
        </td>
    </tr>                
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="fase_initieren">Fase Initi&euml;ren</label>
        </th>
        <td>
            <textarea id="fase_initieren" name="fase_initieren"><?php echo @get_post_meta($post->ID, 'fase_initieren', true); ?></textarea>
        </td>
    </tr>                
</table>

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
            <label for="fase">Fase</label>
        </th>
        <td>
            <select id="fase" name="fase">
                <option selected=selected clue="<?php echo @get_post_meta($post->ID, 'fase', true); ?>"><?php echo @get_post_meta($post->ID, 'fase', true); ?></option>
                <option value="verbreden">verbreden</option>
                <option value="evalueren">evalueren</option>
                <option value="experimenteren">experimenteren</option>
                <option value="adopteren">adopteren</option>
                <option value="schetsen">schetsen</option>
                <option value="initi&euml;ren">initi&euml;ren</option>
            </select>
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
</table>
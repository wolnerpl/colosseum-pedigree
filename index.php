<?php 
/* 
Plugin Name: Colosseum Pedigree
Plugin URI: https://github.com/wolnerpl/colosseum-pedigree
Description: Plugin that adds a pedigree field for dogs.
Version: 1.0 
Author: Jacek Wolner
Author URI: https://github.com/wolnerpl
*/

function dog_pedigree_meta_box() {
    add_meta_box(
        'dog_pedigree_meta_box',
        __('Pedigree', 'textdomain'),
        'render_dog_pedigree_meta_box',
        'dogs',
        'normal',
        'low'
    );
}
add_action('add_meta_boxes', 'dog_pedigree_meta_box');

function render_dog_pedigree_meta_box($post) {
    $ancestors = [];
    for ($i = 1;$i<=30;$i++) {
        $ancestor[$i] = get_post_meta($post->ID, 'dog_ancestor_'.$i, true);
    }
    $ancestors_achievements = [];
    for ($i = 1;$i<=30;$i++) {
        $ancestors_achievements[$i] = get_post_meta($post->ID, 'dog_ancestor_achievements_'.$i, true);
    }
    wp_nonce_field('save_dog_pedigree_meta_box', 'dog_pedigree_meta_box_nonce');

    ?>
        <div class="table-responsive">
            <table class="table table-bordered table-pedigree" data-position="left">
                <tbody>
                <tr>
                    <td rowspan="16" class="ancestor_1">
                        <input type="text" class="form-control" id="dog_ancestor_achievements_1" name="dog_ancestor_achievements_1" value="<?php echo esc_attr($ancestors_achievements[1]); ?>" size="25" placeholder="Achievements">
                        <input type="text" class="form-control" id="dog_ancestor_1" name="dog_ancestor_1" value="<?php echo esc_attr($ancestor[1]); ?>" size="25" placeholder="Ancestor">
                    </td>
                    <td rowspan="8" class="ancestor_3">
                        <input type="text" class="form-control" id="dog_ancestor_achievements_3" name="dog_ancestor_achievements_3" value="<?php echo esc_attr($ancestors_achievements[3]); ?>" size="25" placeholder="Achievements">
                        <input type="text" class="form-control" id="dog_ancestor_3" name="dog_ancestor_3" value="<?php echo esc_attr($ancestor[3]); ?>" size="25" placeholder="Ancestor">
                    </td>
                    <td rowspan="4" class="ancestor_7">
                        <input type="text" class="form-control" id="dog_ancestor_achievements_7" name="dog_ancestor_achievements_7" value="<?php echo esc_attr($ancestors_achievements[7]); ?>" size="25" placeholder="Achievements">
                        <input type="text" class="form-control" id="dog_ancestor_7" name="dog_ancestor_7" value="<?php echo esc_attr($ancestor[7]); ?>" size="25" placeholder="Ancestor">
                    </td>
                    <td rowspan="2" class="ancestor_15">
                        <input type="text" class="form-control" id="dog_ancestor_achievements_15" name="dog_ancestor_achievements_15" value="<?php echo esc_attr($ancestors_achievements[15]); ?>" size="25" placeholder="Achievements">
                        <input type="text" class="form-control" id="dog_ancestor_15" name="dog_ancestor_15" value="<?php echo esc_attr($ancestor[15]); ?>" size="25" placeholder="Ancestor">
                    </td>
                </tr>
                <tr></tr>
                <tr>
                    <td rowspan="2" class="ancestor_16">
                        <input type="text" class="form-control" id="dog_ancestor_achievements_16" name="dog_ancestor_achievements_16" value="<?php echo esc_attr($ancestors_achievements[16]); ?>" size="25" placeholder="Achievements">
                        <input type="text" class="form-control" id="dog_ancestor_16" name="dog_ancestor_16" value="<?php echo esc_attr($ancestor[16]); ?>" size="25" placeholder="Ancestor">
                    </td>
                </tr>
                <tr></tr>
                <tr>
                    <td rowspan="4" class="ancestor_8">
                        <input type="text" class="form-control" id="dog_ancestor_achievements_8" name="dog_ancestor_achievements_8" value="<?php echo esc_attr($ancestors_achievements[8]); ?>" size="25" placeholder="Achievements">
                        <input type="text" class="form-control" id="dog_ancestor_8" name="dog_ancestor_8" value="<?php echo esc_attr($ancestor[8]); ?>" size="25" placeholder="Ancestor">
                    </td>
                    <td rowspan="2" class="ancestor_17">
                        <input type="text" class="form-control" id="dog_ancestor_achievements_17" name="dog_ancestor_achievements_17" value="<?php echo esc_attr($ancestors_achievements[17]); ?>" size="25" placeholder="Achievements">
                        <input type="text" class="form-control" id="dog_ancestor_17" name="dog_ancestor_17" value="<?php echo esc_attr($ancestor[17]); ?>" size="25" placeholder="Ancestor">
                    </td>
                </tr>
                <tr></tr>
                <tr>
                    <td rowspan="2" class="ancestor_18">
                        <input type="text" class="form-control" id="dog_ancestor_achievements_18" name="dog_ancestor_achievements_18" value="<?php echo esc_attr($ancestors_achievements[18]); ?>" size="25" placeholder="Achievements">
                        <input type="text" class="form-control" id="dog_ancestor_18" name="dog_ancestor_18" value="<?php echo esc_attr($ancestor[18]); ?>" size="25" placeholder="Ancestor">
                    </td>
                </tr>
                <tr></tr>
                <tr>
                    <td rowspan="8" class="ancestor_4">
                        <input type="text" class="form-control" id="dog_ancestor_achievements_4" name="dog_ancestor_achievements_4" value="<?php echo esc_attr($ancestors_achievements[4]); ?>" size="25" placeholder="Achievements">
                        <input type="text" class="form-control" id="dog_ancestor_4" name="dog_ancestor_4" value="<?php echo esc_attr($ancestor[4]); ?>" size="25" placeholder="Ancestor">
                    </td>
                    <td rowspan="4" class="ancestor_9">
                        <input type="text" class="form-control" id="dog_ancestor_achievements_9" name="dog_ancestor_achievements_9" value="<?php echo esc_attr($ancestors_achievements[9]); ?>" size="25" placeholder="Achievements">
                        <input type="text" class="form-control" id="dog_ancestor_9" name="dog_ancestor_9" value="<?php echo esc_attr($ancestor[9]); ?>" size="25" placeholder="Ancestor">
                    </td>
                    <td rowspan="2" class="ancestor_19">
                        <input type="text" class="form-control" id="dog_ancestor_achievements_19" name="dog_ancestor_achievements_19" value="<?php echo esc_attr($ancestors_achievements[19]); ?>" size="25" placeholder="Achievements">
                        <input type="text" class="form-control" id="dog_ancestor_19" name="dog_ancestor_19" value="<?php echo esc_attr($ancestor[19]); ?>" size="25" placeholder="Ancestor">
                    </td>
                </tr>
                <tr></tr>
                <tr>
                    <td rowspan="2" class="ancestor_20">
                        <input type="text" class="form-control" id="dog_ancestor_achievements_20" name="dog_ancestor_achievements_20" value="<?php echo esc_attr($ancestors_achievements[20]); ?>" size="25" placeholder="Achievements">
                        <input type="text" class="form-control" id="dog_ancestor_20" name="dog_ancestor_20" value="<?php echo esc_attr($ancestor[20]); ?>" size="25" placeholder="Ancestor">
                    </td>
                </tr>
                <tr></tr>
                <tr>
                    <td rowspan="4" class="ancestor_10">
                        <input type="text" class="form-control" id="dog_ancestor_achievements_10" name="dog_ancestor_achievements_10" value="<?php echo esc_attr($ancestors_achievements[10]); ?>" size="25" placeholder="Achievements">
                        <input type="text" class="form-control" id="dog_ancestor_10" name="dog_ancestor_10" value="<?php echo esc_attr($ancestor[10]); ?>" size="25" placeholder="Ancestor">
                    </td>
                    <td rowspan="2" class="ancestor_21">
                        <input type="text" class="form-control" id="dog_ancestor_achievements_21" name="dog_ancestor_achievements_21" value="<?php echo esc_attr($ancestors_achievements[21]); ?>" size="25" placeholder="Achievements">
                        <input type="text" class="form-control" id="dog_ancestor_21" name="dog_ancestor_21" value="<?php echo esc_attr($ancestor[21]); ?>" size="25" placeholder="Ancestor">
                    </td>
                </tr>
                <tr></tr>
                <tr>
                    <td rowspan="2" class="ancestor_22">
                        <input type="text" class="form-control" id="dog_ancestor_achievements_22" name="dog_ancestor_achievements_22" value="<?php echo esc_attr($ancestors_achievements[22]); ?>" size="25" placeholder="Achievements">
                        <input type="text" class="form-control" id="dog_ancestor_22" name="dog_ancestor_22" value="<?php echo esc_attr($ancestor[22]); ?>" size="25" placeholder="Ancestor">
                    </td>
                </tr>
                <tr></tr>
                <tr>
                    <td rowspan="16" class="ancestor_2">
                        <input type="text" class="form-control" id="dog_ancestor_achievements_2" name="dog_ancestor_achievements_2" value="<?php echo esc_attr($ancestors_achievements[2]); ?>" size="25" placeholder="Achievements">
                        <input type="text" class="form-control" id="dog_ancestor_2" name="dog_ancestor_2" value="<?php echo esc_attr($ancestor[2]); ?>" size="25" placeholder="Ancestor">
                    </td>
                    <td rowspan="8" class="ancestor_5">
                        <input type="text" class="form-control" id="dog_ancestor_achievements_5" name="dog_ancestor_achievements_5" value="<?php echo esc_attr($ancestors_achievements[5]); ?>" size="25" placeholder="Achievements">
                        <input type="text" class="form-control" id="dog_ancestor_5" name="dog_ancestor_5" value="<?php echo esc_attr($ancestor[5]); ?>" size="25" placeholder="Ancestor">
                    </td>
                    <td rowspan="4" class="ancestor_11">
                        <input type="text" class="form-control" id="dog_ancestor_achievements_11" name="dog_ancestor_achievements_11" value="<?php echo esc_attr($ancestors_achievements[11]); ?>" size="25" placeholder="Achievements">
                        <input type="text" class="form-control" id="dog_ancestor_11" name="dog_ancestor_11" value="<?php echo esc_attr($ancestor[11]); ?>" size="25" placeholder="Ancestor">
                    </td>
                    <td rowspan="2" class="ancestor_23">
                        <input type="text" class="form-control" id="dog_ancestor_achievements_23" name="dog_ancestor_achievements_23" value="<?php echo esc_attr($ancestors_achievements[23]); ?>" size="25" placeholder="Achievements">
                        <input type="text" class="form-control" id="dog_ancestor_23" name="dog_ancestor_23" value="<?php echo esc_attr($ancestor[23]); ?>" size="25" placeholder="Ancestor">
                    </td>
                </tr>
                <tr></tr>
                <tr>
                    <td rowspan="2" class="ancestor_24">
                        <input type="text" class="form-control" id="dog_ancestor_achievements_24" name="dog_ancestor_achievements_24" value="<?php echo esc_attr($ancestors_achievements[24]); ?>" size="25" placeholder="Achievements">
                        <input type="text" class="form-control" id="dog_ancestor_24" name="dog_ancestor_24" value="<?php echo esc_attr($ancestor[24]); ?>" size="25" placeholder="Ancestor">
                    </td>
                </tr>
                <tr></tr>
                <tr>
                    <td rowspan="4" class="ancestor_12">
                        <input type="text" class="form-control" id="dog_ancestor_achievements_12" name="dog_ancestor_achievements_12" value="<?php echo esc_attr($ancestors_achievements[12]); ?>" size="25" placeholder="Achievements">
                        <input type="text" class="form-control" id="dog_ancestor_12" name="dog_ancestor_12" value="<?php echo esc_attr($ancestor[12]); ?>" size="25" placeholder="Ancestor">
                    </td>
                    <td rowspan="2" class="ancestor_25">
                        <input type="text" class="form-control" id="dog_ancestor_achievements_25" name="dog_ancestor_achievements_25" value="<?php echo esc_attr($ancestors_achievements[25]); ?>" size="25" placeholder="Achievements">
                        <input type="text" class="form-control" id="dog_ancestor_25" name="dog_ancestor_25" value="<?php echo esc_attr($ancestor[25]); ?>" size="25" placeholder="Ancestor">
                    </td>
                </tr>
                <tr></tr>
                <tr>
                    <td rowspan="2" class="ancestor_26">
                        <input type="text" class="form-control" id="dog_ancestor_achievements_26" name="dog_ancestor_achievements_26" value="<?php echo esc_attr($ancestors_achievements[26]); ?>" size="25" placeholder="Achievements">
                        <input type="text" class="form-control" id="dog_ancestor_26" name="dog_ancestor_26" value="<?php echo esc_attr($ancestor[26]); ?>" size="25" placeholder="Ancestor">
                    </td>
                </tr>
                <tr></tr>
                <tr>
                    <td rowspan="8" class="ancestor_6">
                        <input type="text" class="form-control" id="dog_ancestor_achievements_6" name="dog_ancestor_achievements_6" value="<?php echo esc_attr($ancestors_achievements[6]); ?>" size="25" placeholder="Achievements">
                        <input type="text" class="form-control" id="dog_ancestor_6" name="dog_ancestor_6" value="<?php echo esc_attr($ancestor[6]); ?>" size="25" placeholder="Ancestor">
                    </td>
                    <td rowspan="4" class="ancestor_13">
                        <input type="text" class="form-control" id="dog_ancestor_achievements_13" name="dog_ancestor_achievements_13" value="<?php echo esc_attr($ancestors_achievements[13]); ?>" size="25" placeholder="Achievements">
                        <input type="text" class="form-control" id="dog_ancestor_13" name="dog_ancestor_13" value="<?php echo esc_attr($ancestor[13]); ?>" size="25" placeholder="Ancestor">
                    </td>
                    <td rowspan="2" class="ancestor_27">
                        <input type="text" class="form-control" id="dog_ancestor_achievements_27" name="dog_ancestor_achievements_27" value="<?php echo esc_attr($ancestors_achievements[27]); ?>" size="25" placeholder="Achievements">
                        <input type="text" class="form-control" id="dog_ancestor_27" name="dog_ancestor_27" value="<?php echo esc_attr($ancestor[27]); ?>" size="25" placeholder="Ancestor">
                    </td>
                </tr>
                <tr></tr>
                <tr>
                    <td rowspan="2" class="ancestor_28">
                        <input type="text" class="form-control" id="dog_ancestor_achievements_28" name="dog_ancestor_achievements_28" value="<?php echo esc_attr($ancestors_achievements[28]); ?>" size="25" placeholder="Achievements">
                        <input type="text" class="form-control" id="dog_ancestor_28" name="dog_ancestor_28" value="<?php echo esc_attr($ancestor[28]); ?>" size="25" placeholder="Ancestor">
                    </td>
                </tr>
                <tr></tr>
                <tr>
                    <td rowspan="4" class="ancestor_14">
                        <input type="text" class="form-control" id="dog_ancestor_achievements_14" name="dog_ancestor_achievements_14" value="<?php echo esc_attr($ancestors_achievements[14]); ?>" size="25" placeholder="Achievements">
                        <input type="text" class="form-control" id="dog_ancestor_14" name="dog_ancestor_14" value="<?php echo esc_attr($ancestor[14]); ?>" size="25" placeholder="Ancestor">
                    </td>
                    <td rowspan="2" class="ancestor_29">
                        <input type="text" class="form-control" id="dog_ancestor_achievements_29" name="dog_ancestor_achievements_29" value="<?php echo esc_attr($ancestors_achievements[29]); ?>" size="25" placeholder="Achievements">
                        <input type="text" class="form-control" id="dog_ancestor_29" name="dog_ancestor_29" value="<?php echo esc_attr($ancestor[29]); ?>" size="25" placeholder="Ancestor">
                     </td>
                </tr>
                <tr></tr>
                <tr>
                    <td rowspan="2" class="ancestor_30">
                        <input type="text" class="form-control" id="dog_ancestor_achievements_30" name="dog_ancestor_achievements_30" value="<?php echo esc_attr($ancestors_achievements[30]); ?>" size="25" placeholder="Achievements">
                        <input type="text" class="form-control" id="dog_ancestor_30" name="dog_ancestor_30" value="<?php echo esc_attr($ancestor[30]); ?>" size="25" placeholder="Ancestor">
                    </td>
                </tr>
                <tr></tr>
                </tbody>
            </table>
        </div>
    <?php
}

function save_dog_pedigree_meta_box($post_id) {
    if (!isset($_POST['dog_pedigree_meta_box_nonce'])) {
        return;
    }
    if (!wp_verify_nonce($_POST['dog_pedigree_meta_box_nonce'], 'save_dog_pedigree_meta_box')) {
        return;
    }
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    for ($i = 1;$i<=30;$i++) {
        if (isset($_POST['dog_ancestor_'.$i])) {
            update_post_meta($post_id, 'dog_ancestor_'.$i, sanitize_text_field($_POST['dog_ancestor_'.$i]));
        }
    }
    for ($i = 1;$i<=30;$i++) {
        if (isset($_POST['dog_ancestor_achievements_'.$i])) {
            update_post_meta($post_id, 'dog_ancestor_achievements_'.$i, sanitize_text_field($_POST['dog_ancestor_achievements_'.$i]));
        }
    }
}
add_action('save_post', 'save_dog_pedigree_meta_box');
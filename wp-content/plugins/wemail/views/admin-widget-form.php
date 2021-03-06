<p>
    <label>
        <?php _e( 'Title', 'wemail' ); ?>:
        <input type="text" class="widefat" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo esc_attr( $title ); ?>">
    </label>
</p>

<p>
    <label>
        <?php _e( 'Select a Form', 'wemail' ); ?>:
        <select class="widefat" name="<?php echo $this->get_field_name( 'form' ); ?>">
            <?php foreach ( $forms as $form ): ?>
                <option
                    value="<?php echo $form['id']; ?>"
                    <?php echo $selected === $form['id'] ? 'selected' : ''; ?>
                ><?php echo $form['name']; ?></option>
            <?php endforeach; ?>
        </select>
    </label>
</p>

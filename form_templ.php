<form action="" method="POST" class="subscribe-form">
    <div class="subscribe-form-row">
        <label>
            <input type="email" name="email" class="subscribe-form-field" required>
        </label>
        <button type="submit"
                class="subscribe-form-button"><?php echo esc_html( 'Subscribe', 'subscribe' ); ?></button>
    </div>
    <div class="subscribe-form-message" style="display: none"></div>
</form>
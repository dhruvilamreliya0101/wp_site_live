<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( 'You are not allowed to call this page directly.' );
}

$selected_currency  = ! empty( $settings->currency ) ? strtoupper( $settings->currency ) : 'USD';
$thousand_separator = ! empty( $settings->thousand_separator ) ? $settings->thousand_separator : $currencies[ $selected_currency ]['thousand_separator'];
$decimal_separator  = ! empty( $settings->decimal_separator ) ? $settings->decimal_separator : $currencies[ $selected_currency ]['decimal_separator'];
$decimals           = ! empty( $settings->decimals ) ? $settings->decimals : $currencies[ $selected_currency ]['decimals'];

?>
<p class="frm_grid_container">
	<label for="frm_currency" class="frm4 frm_form_field frm_help">
		<?php
		esc_html_e( 'Currency', 'formidable' );
		FrmAppHelper::tooltip_icon( __( 'Select the currency to be used by Formidable globally.', 'formidable' ) );
		?>
	</label>

	<span class="frm8">
		<select id="frm_currency" name="frm_currency" class="frm_form_field">
			<?php
			foreach ( $currencies as $code => $currency ) {
				FrmHtmlHelper::echo_dropdown_option(
					$currency['name'] . ' (' . $code . ')',
					$selected_currency === strtoupper( $code ),
					array(
						'value' => $code,
					)
				);
			}
			?>
		</select>

		<span class="frm_grid_container frm-mt-sm">
			<label class="frm4 frm_form_field frm_primary_label">
				<input type="text" value="<?php echo esc_attr( $thousand_separator ); ?>" id="frm_thousand_separator" name="frm_thousand_separator" />
				<?php esc_html_e( 'Thousand separator', 'formidable-pro' ); ?>
			</label>

			<label class="frm_form_field frm4 frm_primary_label">
				<input type="text" value="<?php echo esc_attr( $decimal_separator ); ?>" id="frm_decimal_separator" name="frm_decimal_separator" />
				<?php esc_html_e( 'Decimal separator', 'formidable-pro' ); ?>
			</label>

			<label class="frm_form_field frm4 frm_primary_label">
				<select id="frm_decimals" name="frm_decimals">
					<option value="0" <?php selected( $decimals, 0 ); ?>>0</option>
					<option value="2" <?php selected( $decimals, 2 ); ?>>2</option>
				</select>
				<?php esc_html_e( 'Decimals', 'formidable-pro' ); ?>
			</label>
		</span>
	</span>
</p>

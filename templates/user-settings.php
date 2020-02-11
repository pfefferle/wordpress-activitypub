<h2><?php \esc_html_e( 'Fediverse', 'activitypub' ); ?></h2>

<?php
$user = wp_get_current_user();
\Activitypub\get_identifier_settings( $user->ID );
?>

<table class="form-table" role="presentation">
	<tbody>
		<tr>
			<th scope="row">
				<label><?php \esc_html_e( 'Profile fields', 'activitypub' ); ?></label>
			</th>
			<td>
				<fieldset>
				<p class="description"><?php \esc_attr_e( 'You can have up to 4 items displayed as a table on your profile.', 'activitypub' ); ?></p>
					<p>
						<label for="activitypub_profile_fields_0_name"><input id="activitypub_profile_fields_0_name" name="activitypub_profile_fields[0][name]" class="regular-text" type="text" placeholder="<?php \esc_attr_e( 'Label', 'activitypub' ); ?>" value="<?php ?>" /></label>
						<label for="activitypub_profile_fields_0_value"><input id="activitypub_profile_fields_0_value" name="activitypub_profile_fields[0][value]" class="regular-text" type="text" placeholder="<?php \esc_attr_e( 'Content', 'activitypub' ); ?>" /></label>
					</p>
					<p>
						<label for="activitypub_profile_fields_1_name"><input id="activitypub_profile_fields_1_name" name="activitypub_profile_fields[1][name]" class="regular-text" type="text" placeholder="<?php \esc_attr_e( 'Label', 'activitypub' ); ?>" /></label>
						<label for="activitypub_profile_fields_1_value"><input id="activitypub_profile_fields_1_value" name="activitypub_profile_fields[1][value]" class="regular-text" type="text" placeholder="<?php \esc_attr_e( 'Content', 'activitypub' ); ?>" /></label>
					</p>
					<p>
						<label for="activitypub_profile_fields_2_name"><input id="activitypub_profile_fields_2_name" name="activitypub_profile_fields[2][name]" class="regular-text" type="text" placeholder="<?php \esc_attr_e( 'Label', 'activitypub' ); ?>" /></label>
						<label for="activitypub_profile_fields_2_value"><input id="activitypub_profile_fields_2_value" name="activitypub_profile_fields[2][value]" class="regular-text" type="text" placeholder="<?php \esc_attr_e( 'Content', 'activitypub' ); ?>" /></label>
					</p>
					<p>
						<label for="activitypub_profile_fields_3_name"><input id="activitypub_profile_fields_3_name" name="activitypub_profile_fields[3][name]" class="regular-text" type="text" placeholder="<?php \esc_attr_e( 'Label', 'activitypub' ); ?>" /></label>
						<label for="activitypub_profile_fields_3_value"><input id="activitypub_profile_fields_3_name" name="activitypub_profile_fields[3][value]" class="regular-text" type="text" placeholder="<?php \esc_attr_e( 'Content', 'activitypub' ); ?>" /></label>
					</p>
				</fieldset>
			</td>
		</tr>
	</tbody>
</table>

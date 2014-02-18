<?php

/**
 * @file
 * Hook documentation for the Entity reference autofill module.
 */

/**
 * Alter the form state before rendering an autofill field.
 *
 * @param array &$form_state
 *   The current form state for the entity form.
 * @param array $context
 *   Field context variables.
 *   - field_name: The name of the field about to be populated.
 *   - field_type: The type of the field.
 *   - items: The $items belonging to field_name in the
 *     referenced entity.
 *   - langcode: The $langcode.
 *   - reference_field_name: The name of the entityreference
 *     autofill-enabled field that called this autofill request.
 */
function hook_entityreference_autofill_fill_items_alter(&$form_state, $context) {
  // Add addressfield support to module.
  if ($context['field_type'] == 'addressfield') {

    // Get instance data of autofill-enabled entityreference field.
    $instance = $form_state['field'][$context['reference_field_name']][$context['langcode']]['instance'];

    // Generate element key for addressfield form state.
    // @see addressfield_field_widget_form()
    $element_key_parts = array(
      $instance['entity_type'],
      $instance['bundle'],
      $context['field_name'],
      $context['langcode'],
    );
    $element_key_base = implode('|', $element_key_parts);

    // Ádd form_state data for each addressfield value
    // from referenced entity.
    foreach ($context['items'] as $delta => $item) {
      $element_key = $element_key_base . '|' . $delta;
      // Add item to addressfield form_state.
      $form_state['addressfield'][$element_key] = $item;
    }

  }
}

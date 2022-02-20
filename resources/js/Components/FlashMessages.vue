<template>
  <Alert v-if="$page.props.flash.success" type="success" class="mb-4">
    {{ $page.props.flash.success }}
  </Alert>
  <Alert v-if="$page.props.flash.error" type="error" class="mb-4">
    {{ $page.props.flash.error }}
  </Alert>
</template>

<script>
import Alert from "./Alert.vue";

export default {
  components: { Alert },
};
</script>

<template>
  <div class="border px-4 py-3 rounded" :class="classes">
    <slot></slot>
  </div>
</template>

<script>
import { computed } from "vue";

export default {
  props: {
    type: {
      type: String,
      default: "info",
    },
  },

  setup(props) {
    const classes = computed(() => {
      switch (props.type) {
        case "success":
          return "bg-green-100 border-green-400 text-green-700";
        case "error":
          return "bg-red-100 border-red-400 text-red-700";
        case "warning":
          return "bg-yellow-100 border-yellow-400 text-yellow-700";
        default:
          return "bg-blue-100 border-blue-400 text-blue-700";
      }
    });

    return { classes };
  },
};
</script>

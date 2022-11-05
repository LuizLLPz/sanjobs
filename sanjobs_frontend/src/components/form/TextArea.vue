<template>
  <div class="input_main">
    <span class="input_main__label">{{ label }}</span>
    <textarea class="input_main__data text_area__data" v-bind:placeholder="placeholder"
               @change="$emit('update:modelValue', $event.target.value)"></textarea>
    <span class="input_main__error hidden">{{ error }}</span>
  </div>
</template>

<script>
export default {
  name: "TextArea",
  props: {
    label: String,
    placeholder: String,
    error: String,
    modelValue: String
  },
}
</script>

<style scoped>
.text_area__data {
  height: 50px;
}


.text_area__data::placeholder { font-size: 12px; }
</style>
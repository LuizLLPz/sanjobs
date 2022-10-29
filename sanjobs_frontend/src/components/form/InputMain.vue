<template>
  <div class="input_main">
    <span>{{ label }}</span>
    <input v-bind:type="type" v-bind:placeholder="placeholder"
           @change="(e) => emitParent(e)">
    <span class="hidden">lifting state{{ error }}</span>
  </div>
</template>

<script>
export default {
  name: "InputMain.vue",
  props: {
    label: String,
    type: String,
    placeholder: String,
    error: String,
    model: String
  },
  methods: {
    emitParent(e) {
      this.$emit('update', e.target.value);
    }
  },
}
</script>

<style scoped>
.hidden {
  display: none;
}
</style>
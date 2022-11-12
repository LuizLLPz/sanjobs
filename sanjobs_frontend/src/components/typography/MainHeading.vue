<template>
  <div class="main-heading">
   {{ text }}
  </div>
</template>

<script>
export default {
  props: {
    text: String,
    size: String,
  }
}
</script>

<style scoped>

.main-heading {
  color: var(--color-primary);
  font-family: Montserrat;
  font-size: v-bind("size ? size: '32px'");
  font-weight: 900;
}
</style>
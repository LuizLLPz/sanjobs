<template>
  <div class="main-heading">
   {{ text }}
  </div>
</template>

<script>
export default {
  props: {
    text: String
  }
}
</script>

<style scoped>

.main-heading {
  color: var(--color-primary);
  font-family: Montserrat;
  font-size: 32px;
  font-weight: 900;
}
</style>
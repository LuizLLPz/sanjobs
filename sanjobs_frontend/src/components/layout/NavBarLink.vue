<template>
  <div class="navbar__link">
    <div class="navbar__link__image fa-solid" :class=" faIcon "></div>
    <a href="" class="navbar__link__anchor">{{ name }}</a>
  </div>

</template>

<script>
export default {
  props: {
    name: String,
    faIcon: String,
  }
}
</script>

<style scoped>

.navbar__link {
  width: 1fr;
  display: flex;
  flex-direction: column;
  gap: 2px;
}
.navbar__link__image, .navbar__link__anchor {
  align-self: center;
  color: var(--color-secondary)
}

.navbar__link__image { font-size: 32px; }

.navbar__link__anchor {
  text-decoration: none;
  font: normal normal bold 12px Inter;
}

</style>
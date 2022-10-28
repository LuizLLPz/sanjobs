<template>
  <router-link v-bind:to="vlink" class="navbar__link">
    <div class="navbar__link__image fa-solid" :class=" faIcon "></div>
    <a href="" class="navbar__link__anchor">{{ name }}</a>
  </router-link>

</template>

<script>
export default {
  props: {
    vlink: String,
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
  text-decoration: none;
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
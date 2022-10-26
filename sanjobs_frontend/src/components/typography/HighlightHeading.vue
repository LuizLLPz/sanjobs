<template>
  <div class="main-heading">
    {{ text }} <span class="highlight_heading">
    {{ highlight }}
  </span>
  </div>
</template>

<script>
export default {
  name: "HighlightHeading",
  props: {
    text: String,
    highlight: String
  }
}
</script>

<style scoped>

.main_heading { color: var(--color-primary); }


.highlight_heading { color: var(--color-highlight) }


.main-heading, highlight-heading {
  font-family: Montserrat;
  font-size: 15px;
  font-weight: 900;
}

</style>
<template>
  <button>
    <slot></slot>
  </button>
</template>

<script>
export default {
  name: "ButtonMain",
  props: {
    label: String
  }
}
</script>

<style scoped>
  button {
    display: flex;
    justify-content: center;
    align-items: center;
    height: v-bind('h ? h : "30px"');
    width: v-bind('w ? w : "125px"');
    color: var(--color-secondary);
    background-color: var(--color-primary);
    border: none;
    padding: 10px;
    border-radius: v-bind('br ? br : "14px"');
    margin: 5px;
  }
</style>
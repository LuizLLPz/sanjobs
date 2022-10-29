<template>
  <div class="input_main">
    <span class="input_main__label">{{ label }}</span>
    <input class="input_main__data" v-bind:type="type" v-bind:placeholder="placeholder"
           @change="(e) => emitParent(e)">
    <span class="input_main__error hidden">lifting state{{ error }}</span>
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
.input_main {
  width: 80%;
  margin-bottom: 10px;
  display: flex;
  flex-direction: column;
}

.input_main__label {
  font: normal normal bold 12px Inter;
  color: var(--color-primary);
  margin-bottom: 5px;
}

.input_main__data {
  height: 25px;
  border: 1px solid #020738;
  border-radius: 8px;
}



</style>
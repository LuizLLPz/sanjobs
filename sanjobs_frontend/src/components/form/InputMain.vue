<template>
  <div class="input_main">
    <span class="input_main__label">{{ label }}</span>
    <input class="input_main__data" v-bind:type="type" v-bind:placeholder="placeholder"
           @change="$emit('update:modelValue', $event.target.value)">
    <span class="input_main__error hidden">{{ error }}</span>
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
    modelValue: String
  },
}
</script>

<style>
.hidden {
  display: none;
}


.input_main {
  width: 95%;
  margin-bottom: 10px;
  display: flex;
  flex-direction: column;
}


.input_main__label {
  font: normal normal bold 12px Inter;
  color: var(--color-primary);
  margin-bottom: 10px;
}


.input_main__data {
  height: 25px;
  border: 1px solid #020738;
  border-radius: 8px;
}


</style>
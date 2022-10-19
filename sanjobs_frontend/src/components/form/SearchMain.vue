<template>
  <form class="search_form">
    <input type="search" class="search_form__text" v-model="searchEntry">
    <button class="search_form__submit" @click="submitSearch(searchEntry)">
      <span class="search_form__logo fa-solid fa-magnifying-glass"></span>
    </button>
  </form>
</template>

<script>
export default {
  methods: {
    submitSearch(searchEntry) {
        console.log(searchEntry);
    }
  }
}
</script>

<style scoped>
.search_form { display: flex; }


.search_form__text, .search_form__submit {
  height: 25px;
  border: 0;
}


.search_form {
  width: 240px;
}


.search_form__text {
  background-color: var(--color-form);
}


.search_form__submit {
  background-color: var(--color-highlight);
  width: 30px;
}


.search_form__logo { color: white; }
</style>
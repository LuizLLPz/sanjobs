<template>
  <div class="navbar">
    <div class="navbar__search">
      <SearchMain/>
    </div>
    <div class="navbar__link_container">
      <NavBarLink vlink="/" name="Main" fa-icon="fa-house"/>
      <NavBarLink vlink="/vagas" name="Vagas" fa-icon="fa-suitcase"/>
      <NavBarLink vlink="/empresas" name="Empresas" fa-icon="fa-building-columns"/>
      <NavBarLink vlink="/curriculo" name="Currículo" fa-icon="fa-file-lines"/>
      <NavBarLink vlink="/mensagens" name="Mensagens" fa-icon="fa-envelope"/>
    </div>
  </div>
</template>

<script>
import NavBarLink from "@/components/layout/NavBarLink";
import SearchMain from "@/components/form/SearchMain";
export default {
  name: 'NavBar',
  methods: {
    
  },
  components: {
    SearchMain,
    NavBarLink
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

.navbar, .navbar__search { display: flex; }

.navbar__search, .navbar__link_container { background-color: inherit }

.navbar {
  width: 100%;
  display: flex;
  background-color: var(--color-primary);
}


.navbar__search {
  height: 45px;
  align-items: center;
  padding-left: 40%;
}


.navbar__link_container {
  display: grid;
  padding-top: 5px;
  grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
  position: fixed;
  height: 65px;
  width: 100%;
  bottom: 0;
}

</style>

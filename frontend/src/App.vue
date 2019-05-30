<template>
  <div id="app">
    <div id="nav">
      <Nav />
      <!-- <Footer/> -->
    </div>
    <router-view/>
  </div>
</template>
<script>
// @ is an alias to /src
import Nav from '@/components/Nav.vue'
// import Footer from '@/components/Nav.vue'

export default {
  name: 'home',
  components: {
    Nav,
    // Footer
  }
}
</script>
<style lang="less">
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}
#nav {
  padding: 30px;
  a {
    font-weight: bold;
    color: #2c3e50;
    &.router-link-exact-active {
      color: #42b983;
    }
  }
}
</style>

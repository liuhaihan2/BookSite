<template>
  <div id="app">
    <div id="nav">
      <Nav />
    </div>
    <div></div>
    <router-view/>
    <Footer />
  </div>
</template>
<script>
// @ is an alias to /src
import Nav from '@/components/Nav.vue'
import Footer from '@/components/Footer.vue'

export default {
  name: 'home',
  components: {
    Nav,
    Footer
  }
}
</script>
<style lang="less">
body {
   min-width:1000px; /* suppose you want minimun width of 1000px */
   width: auto !important;  /* Firefox will set width as auto */
}
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}
#nav {
    padding: 30px;
    position: fixed;
    top: 0;
    width: 100%;
    height: 85px;
    min-width: 650px;
    z-index: 11;
    background: #fafafa;
    -webkit-transform: translateZ(0);
    border-top: 5px solid #9e3c3d;
    border-bottom: 3px solid #ebe3db;
    transform: translateZ(0);
    a {
        font-weight: bold;
        color: #2c3e50;
        &.router-link-exact-active {
        color: #d2b487;
        }
    }
}
</style>

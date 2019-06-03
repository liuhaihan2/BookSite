<template>
  <div class="nav">
    <a-menu
        v-model="current"
        mode="horizontal"
    >
        <a-menu-item key="home">
            <router-link to="/home">首页</router-link>
        </a-menu-item>
        <a-menu-item key="rank">
            <router-link to="/rank">排行</router-link>
        </a-menu-item>
        <a-sub-menu>
            <span slot="title" class="submenu-title-wrapper">分类</span>
            <a-menu-item-group>
                <!-- 这里应该是从后台得到的数据遍历出来的  暂时先用一些假的 -->
                <a-menu-item key="setting:1"><router-link to="/category">文学</router-link></a-menu-item>
                <a-menu-item key="setting:2"><router-link to="/category">小说</router-link></a-menu-item>
                <a-menu-item key="setting:3"><router-link to="/category">教育</router-link></a-menu-item>
            </a-menu-item-group>
        </a-sub-menu>
        <a-menu-item key="personal">
            <router-link to="/personal">个人中心</router-link>
        </a-menu-item>
        <!-- <a-menu-link><a-icon type="logout" />登出</a-menu-link> -->
        <a-menu-item key="logout">
            <a-icon type="logout" />登出
        </a-menu-item>
        <a-menu-item key="login">
            <router-link to="/login"><a-icon type="login" />登录</router-link>
        </a-menu-item>
        <a-menu-item key="registe">
            <router-link to="/registe"><a-icon type="cloud" />注册</router-link>
        </a-menu-item>
    </a-menu>
  </div>
</template>

<script>
export default {
  name: 'Nav',
  data() {
      return {
          current: ['home'],
      }
  },
  props: {
    msg: String
  }
}
</script>

<style scoped lang="less">
h3 {
  margin: 40px 0 0;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}
a {
  color: #42b983;
}
.ant-menu-horizontal {
    border: 0;
}
#nav {
    border:1px solid blueviolet;
    padding: 30px;
    position: fixed;
    top: 0;
    width: 100%;
    height: 80px;
    min-width: 650px;
    z-index: 11;
    background: #fafafa;
    -webkit-transform: translateZ(0);
    transform: translateZ(0);
}
// .nav {
//     border: 1px solid black;
//     position: fixed;
//     top: 0;
//     width: 100%;
//     height: 80px;
//     min-width: 650px;
//     z-index: 11;
//     background: #fafafa;
//     -webkit-transform: translateZ(0);
//     transform: translateZ(0);
// }
</style>

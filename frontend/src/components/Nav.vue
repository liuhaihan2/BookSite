<template>
  <div class="nav">
    <div class="logo">
      <div>
        <img src="../assets/image/logo.png" alt="logo">
      </div>
      <h1>拾·书</h1>
    </div>
    <div class="search">
      <a-input-search style="width: 200px"/>
    </div>
    <div class="nav-menu">
      <a-menu v-model="current" mode="horizontal">
        <a-menu-item key="home">
          <router-link to="/">首页</router-link>
        </a-menu-item>
        <a-menu-item key="rank">
          <router-link to="/rank">排行</router-link>
        </a-menu-item>
        <a-sub-menu>
          <span slot="title" class="submenu-title-wrapper" style="font-weight: bold">分类</span>
          <a-menu-item-group>
            <!-- 这里应该是从后台得到的数据遍历出来的  暂时先用一些假的 -->
            <a-menu-item key="setting:1">
              <router-link to="/category">文学</router-link>
            </a-menu-item>
            <a-menu-item key="setting:2">
              <router-link to="/category">小说</router-link>
            </a-menu-item>
            <a-menu-item key="setting:3">
              <router-link to="/category">教育</router-link>
            </a-menu-item>
          </a-menu-item-group>
        </a-sub-menu>
        <a-menu-item key="personal">
          <router-link to="/personal">个人中心</router-link>
        </a-menu-item>
        <a-menu-item key="logout" v-if="logged">
          <a-icon type="logout"/>登出
        </a-menu-item>
        <a-menu-item key="login">
          <router-link to="/login">
            <a-icon type="login"/>登录
          </router-link>
        </a-menu-item>
        <a-menu-item key="registe">
          <router-link to="/registe">
            <a-icon type="cloud"/>注册
          </router-link>
        </a-menu-item>
      </a-menu>
    </div>
  </div>
</template>

<script>
export default {
  name: "Nav",
  data() {
    return {
      current: ["home"],
      logged: false
    };
  },
  props: {
    msg: String
  }
};
</script>

<style scoped lang="less">
.ant-menu-horizontal {
  border: 0;
}
// logo
.logo {
  position: absolute;
  top: 5px;
  left: 15px;
  display: flex;
  img {
    width: 80px;
    height: 55px;
  }
  h1 {
    margin-top: 15px;
    color: #928787;
  }
  h1::first-letter {
    // font-size: 200%;
    color: #9e3c3d;
  }
}
//serch
.search {
  width: 20%;
  margin-left: 150px;
}
// menu
.ant-menu-horizontal {
  position: absolute;
  top: 22px;
  right: 45px;
}
.ant-input {
}
</style>

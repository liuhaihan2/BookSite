<template>
  <div class="home">
    <!-- 一共分为五个部分 -->
    <!-- 轮播 -->
    <div class="carousel">
      <img src="../assets/image/img1.png" alt="carousel">
      <Carousel/>
    </div>
    <!-- 每日推荐 书 -->
    <div class="today-books">
      <img src="../assets/image/home-img2.png" alt="carousel">
      <div class="book-container">
        <BookCard />
        <BookCard />
      </div>
    </div>
    <!-- 每日推荐 书单 -->
    <div class="today-booklists">
      <div class="booklist-container">
        <div class="booklist-wrapper">
          <!-- <router-link to="/booklistdetail">
            <img src="../assets/image/todaybooklist.png" alt>
          </router-link> -->
          <ListCard />
          <ListCard />
        </div>
      </div>
    </div>
    <!-- 广告活动 -->
    <div class="ad">
      <img src="../assets/image/ad.png" alt>
    </div>
    <!-- 每日推荐 读后感 -->
    <div class="appreciation">
      <img src="../assets/image/best-appreciation.png" alt>
    </div>
  </div>
</template>

<script>
    // @ is an alias to /src
    //format code shift option + f
    import {
        mapGetters,
        mapActions
    } from "vuex";
    import Carousel from "../components/Carousel";
    import BookCard from "../components/BookCard";
    import ListCard from "../components/ListCard.vue";

    export default {
        name: "home",
        data: () => {
            return {
                books: [{
                    name: '',
                    title: '',
                    author: '',
                    image: '', //封皮
                    summary: '', //摘要  一句话
                    introduction: '', //简介  书的基本内容

                }]
            };
        },
        computed: {
            ...mapGetters(["todayBooks"])
        },
        components: {
            Carousel,
            BookCard,
            ListCard
        },
        mounted() {
            this.getTodayBooks().then(() => {
                this.books = this.todayBooks.slice(0);
                // eslint-disable-next-line
                console.log("books", this.books);
            });
        },
        methods: {
            ...mapActions(["getTodayBooks"])
        }
    };
</script>
<style lang="less" scoped>
    img {
        width: 100%;
        height: 100%;
    }

    .carousel {
        margin-top: 80px;
    }

    .today-books {
        .book-container {
            background: url("../assets/image/todayBooks-bg.png") repeat-y;
            background-size: 100% auto;
            display: flex;
            padding: 50px;
        }
    }
</style>

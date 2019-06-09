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
        <BookCard />
        <BookCard />
        <BookCard />
        <BookCard />
      </div>
    </div>
    <!-- 每日推荐 书单 -->
    <div class="today-booklists">
      <div class="booklist-container">
        <div class="booklist-wrapper">
          <ListCard />
          <ListCard />
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
    <div class="best-appreciation">
      <img src="../assets/image/best-appreciation.png" alt>
      <div class="appre-container">
          <div class="book">
              <img src="../assets/image/book1.png" width="50px" height="80px" alt="">
          </div>
          <div class="appre-introducation">
              <h2 class="title" color="#d09d4e">鉴赏标题</h2>
              <span color="#6b5e49">关于《多对多》的鉴赏</span>
              <span color="#6b5e49">作者昵称</span>
              <p class="appre-content">
                水电费水电费第三方决胜巅峰绝对是顶顶顶顶顶顶顶顶水电费第三方防守打法辅导费水电费第三方d
                范德萨发的发水电费可是对方上岛咖啡萨芬的最后是三个点
              </p>
              <a-button>更多</a-button>
          </div>
      </div>
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
            flex-wrap: wrap;
            justify-content: center;
            background-color: #fefff9;
        }
    }

    .today-booklists {
        .booklist-wrapper {
            display: flex;
            width: 90%;
            margin: 10px auto;
        }
    }

    .best-appreciation {
        position: relative;
        .appre-container {
            background-image: url("../assets/image/appreBg.png");
            background-size: 100% 100%;
            position: absolute;
            margin: auto;
            top: 60px;
            left: 0px;
            right: 0px;
            height: 240px;
            width: 45%;
            z-index: 2;
            display: table;
        }
    }

    .best-appreciation {
        .appre-container {
            display: flex;
            padding: 30px;
            padding-left: 70px;
            .book {
                flex-basis: 20%;
                overflow: hidden;
                box-shadow: 0 0.1875rem 1.5rem rgba(0, 0, 0, 0.2);
            }
            .appre-introducation {
                padding: 20px;
                margin-left: 20px;
                flex-basis: 75%;
                text-align: left;
                span {
                    color: #6b5e49
                }
                .appre-content {
                    margin-top: 10px;
                    display: -webkit-box;
                    -webkit-box-orient: vertical;
                    -webkit-line-clamp: 2;
                    overflow: hidden;
                }
                button {
                    float: right;
                }
            }
        }
    }
</style>

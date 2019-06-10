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
        <BookCard  v-for="(item, index) in books" :key="index" :data="item" :index="index"/>
      </div>
    </div>
    <!-- 每日推荐 书单 -->
    <div class="today-booklists">
      <div class="booklist-container">
        <div class="booklist-wrapper">
            <ListCard v-for="(item, index) in lists" :key="index" :data="item" />
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
              <h2 class="title" color="#d09d4e">{{ appreciation.appre_title }}</h2>
              <span color="#6b5e49">{{ appreciation.author }}</span>
              <p class="appre-content">{{ appreciation.summary }}</p>
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
                    book_name: '',
                    author: '',
                    img_url: '',
                    summary: '', //摘要  一句话
                    introduction: '', //简介  书的基本内容

                }],
                lists: [{
                    list_name: '',
                    description: '',
                    theme_img: ''
                }],
                appreciation: {
                    appre_title: '',
                    author: '',
                    summary: ''
                }
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
            // this.getTodayBooks().then(() => {
            //     this.books = this.todayBooks.slice(0)
            //         // eslint-disable-next-line
            //     console.log("books", this.books)
            // })
            this.mockTodayBooks() //fetch mock books 6
            this.mockTodayLists() //fetch mock lists 4
            this.mockTodayAppre() //fetch mock appreciation 1
        },
        methods: {
            ...mapActions(["getTodayBooks"]),
            mockTodayBooks: function() {
                fetch('/mockBooks')
                    .then((res) => {
                        return res.json()
                    })
                    .then((res) => {
                        this.books = res.data
                    })
            },
            mockTodayLists: function() {
                fetch('/mockLists')
                    .then((res) => {
                        return res.json()
                    })
                    .then((res) => {
                        this.lists = res.data
                    })
            },
            mockTodayAppre: function() {
                fetch('/mockAppre')
                    .then((res) => {
                        return res.json()
                    })
                    .then((res) => {
                        this.appreciation = res
                    })
            }
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
<template>
  <div class="book-detail">
    <div class="book-cover">
        <div class="left">
            <img src="../assets/image/book1.png" alt="">
        </div>
        <div class="right">
            <div class="book-info">
                <!-- 名字作者多少人收藏 -->
                <h1>书籍名称</h1>
                <span class="key">作者：</span><span class="value">得到</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <span class="key">收藏数：</span><span class="value">22</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <span class="key">鉴赏数：</span><span class="value">33</span>
            </div>
            <div class="book-info">
                <span class="key">全文阅读时间:</span><span class="value">10h</span><br /><br />
                <span>收藏</span><a-icon type="heart" style="margin-left: 5px;" class="value"/>
                <a-button style="margin-left: 40px;">加入购物车</a-button>
            </div>
            <div class="book-info">
                <p>水电费会计师对方水电费阿斯蒂芬阿斯蒂芬阿斯蒂芬阿斯顿发生大是大非水电费水电费sdf
                    阿萨德反倒是发送到发送到发斯大大胜多负少大是大非阿斯顿发斯蒂芬阿斯顿发斯蒂芬阿斯蒂芬阿斯蒂芬阿斯蒂芬水电费是大非是打发斯蒂芬阿斯顿发送到发生的发生的发送到发送到发水电费dfasdfd水电费第三方的大师的法定多少发的所发生的发的蒂芬爱迪生法师打发第三方阿达地方 发送到发发送到发水电费
                </p>
            </div>
        </div>
    </div>
    <div class="book-comment">
        <MyComment />
        <Comments />
    </div>
  </div>
</template>
<script>
    import MyComment from "../components/MyComment.vue";
    import Comments from "../components/Comments.vue";
    export default {
        data() {
            return {
                formLayout: 'horizontal',
                form: this.$form.createForm(this),
            };
        },
        components: {
            MyComment,
            Comments
        },
        methods: {
            handleSubmit(e) {
                e.preventDefault();
                this.form.validateFields((err, values) => {
                    if (!err) {
                        console.log('Received values of form: ', values);
                    }
                });
            },
            handleSelectChange(value) {
                console.log(value);
                this.form.setFieldsValue({
                    note: `Hi, ${value === 'male' ? 'man' : 'lady'}!`,
                });
            },
        },
    };
</script>
<style lang="less" scoped>
    .book-detail {
        background-color: #f2eae6;
        padding: 80px;
        .book-cover {
            width: 85%;
            margin: 30px auto 0px auto;
            height: 400px;
            background-color: #fff;
            display: flex;
            box-shadow: 0 0.1875rem 1.5rem rgba(0, 0, 0, 0.2);
            .left {
                position: relative;
                flex-basis: 30%;
                border: 1px solid #f2eae6;
                img {
                    width: 60%;
                    height: 64%;
                    position: absolute;
                    top: 0px;
                    right: 0px;
                    left: 0px;
                    margin: auto;
                    bottom: 0px;
                    box-shadow: 1px 5px 5px rgba(0, 0, 0, 0.5);
                }
            }
            .right {
                flex-basis: 70%;
                text-align: left;
                .book-info {
                    padding: 30px;
                    border-top: 1px solid #f2eae6;
                    p {
                        display: -webkit-box;
                        -webkit-box-orient: vertical;
                        -webkit-line-clamp: 3;
                        overflow: hidden;
                        color: #adadad;
                    }
                    .key {
                        color: #adadad
                    }
                    .value {
                        color: rgb(157, 59, 60)
                    }
                }
            }
        }
    }

    .book-comment {
        background-color: #fff;
        padding: 20px 80px;
        width: 80%;
        margin: 30px auto;
        text-align: left;
    }
</style>

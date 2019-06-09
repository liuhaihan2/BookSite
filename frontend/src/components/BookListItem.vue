<template>
    <div class="book-item">
        <div class="left">
            <Card data-image="https://images.unsplash.com/photo-1479660656269-197ebb83b540?dpr=2&auto=compress,format&fit=crop&w=1199&h=798&q=80&cs=tinysrgb&crop=">
                <h1 slot="header">Canyons</h1>
                <p slot="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </Card>
        </div>
        <div class="right">
            <h1 style="color:#9d3b3c">书名</h1>
            <p style="color: #adadad">
                是否是打发第三方第三方第三方第三方阿斯蒂芬水电费阿斯蒂芬阿斯蒂芬sdf
                水电费大师傅阿斯顿发送到发送到发送到发是打发斯蒂芬
                阿萨德发送到发胜多负少的发生地方阿斯顿发水电费阿斯顿发阿斯顿发
                阿萨德发送到发水电费阿斯顿发阿斯顿发水电费阿斯顿发
                书单发的发的
            </p>
            <div style="text-align: right">
                    <span>收藏</span><a-icon type="heart" style="color:#9d3b3c;margin-left:5px"/>
                    <a-button style="margin-left: 30px;" ><router-link to='/bookdetail' >更多</router-link></a-button>
            </div>
        </div>
    </div>
</template>
<style lang="less" scoped>
    .book-item {
        width: 100%;
        height: 350px;
        display: flex;
        padding: 50px;
        border-bottom: 2px solid #f2eae6;
        .left {
            flex-basis: 20%;
        }
        .right {
            flex-basis: 80%;
            text-align: left;
            padding: 20px;
            h1,
            p,
            div {
                margin-bottom: 30px;
            }
        }
    }
</style>
<script>
    import Card from '../components/Card.vue'
    export default {
        components: {
            Card
        },
    }
</script>

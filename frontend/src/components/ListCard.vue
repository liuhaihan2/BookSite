<template>
    <!-- <div class="card">
        <a href="#" title="悬停的文字">
            <img src="../assets/image/booklistbg1.png" style="border-radius:50%;"/>
        </a>
    </div> -->
    <div class="content">
        <div class="dashboard">
            <div class="cube slideTextUp">
                <a href="#">
                    <img src="../assets/image/booklistbg1.png" style="border-radius:50%;width: 250px; height: 250px;"/>
                </a>
                <div class="bg1">
                </div>
                <div>
                    <h3>{{ data.list_title }}</h3>
                    <p>{{ data.description }}</p>
                    <a-button>
                        <router-link to="/booklistdetail">进入</router-link>
                    </a-button>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        name: "ListCard",
        data() {
            return {};
        },
        props: {
            data: Object
        }
    }
</script>
<style lang="less" scoped>
    /* .card {
        a:hover img {
            filter: alpha(Opacity=80);
            -moz-opacity: 0.5;
            opacity: 0.5;
            transition: all 0.5s ease-out;
        }
    } */
    
    * {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
    }
    
    html {
        height: 100%;
        width: 100%;
    }
    
    a {
        text-decoration: inherit
    }
    
    h1 {
        text-align: center;
        color: #666;
        text-shadow: 1px 1px 0px #FFF;
        margin: 50px 0px 0px 0px
    }
    
    p {
        color: #fff;
    }
    
    .clearfix {
        clear: both;
    }
    
    .content {
        width: 100%;
        height: auto;
        overflow: hidden;
    }
    
    .dashboard {
        max-width: 1080px;
        margin: 90px auto;
    }
    
    .cube {
        position: relative;
        width: 250px;
        height: 250px;
        background: #FF8C94;
        /* float: left; */
        margin: 10px 10px 80px 10px;
        overflow: hidden;
        border-radius: 50%;
        display: inline-block;
    }
    
    .cube div {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        width: 100%;
        height: 100%;
        display: table;
        -webkit-transition: all .3s ease;
        transition: all .3s ease;
        border-radius: 50%;
    }
    
    .bg1 {
        background-image: url("http://www.outil-hydraulique.com/img/1.jpg");
        background-size: cover;
        background-size: 250px auto;
        border-radius: 50%;
    }
    /* ---------- ANIMATION -------------------------*/
    
    .slideTextUp div {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        width: 100%;
        height: 100%;
        text-align: center;
        display: table;
        -webkit-transition: all .3s ease;
        transition: all .3s ease;
        padding: 15px;
        border-radius: 50%;
    }
    
    .slideTextUp div:nth-child(3) {
        top: 100%;
        padding: 40px;
    }
    
    .slideTextUp:hover div {
        -webkit-transform: translateY(-100%);
        -ms-transform: translateY(-100%);
        transform: translateY(-100%);
    }
    
    .slideTextUp:hover a img {
        filter: alpha(Opacity=80);
        -moz-opacity: 0.5;
        opacity: 0.5;
        transition: all 0.5s ease-out;
    }
</style>
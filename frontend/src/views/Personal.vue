<template>
  <div class="personal-center">
    <h1>This is the personal page</h1>
    <div style="background-color: #ffffff; padding:40px;">
        <div class="container">
            <div class="profile">
                <div class="left">
                    <div class="top">
                        <img src="../assets/image/logo.png" alt="">
                        <h1 style="line-height: 105px; padding-left: 20px;">用户昵称</h1>
                    </div>
                    <div class="bottom">
                        <a-list
                            :grid="{ gutter: 16, column: 4 }"
                            :dataSource="data"
                        >
                            <a-list-item slot="renderItem" slot-scope="item, index" :key="index">
                                <!-- <a-card :title="item.title">
                                    <span style="color:#d3b68a">10</span>
                                </a-card> -->
                                <a-card>
                                    <h4 style="color: #9d3b3c;">{{item.title}}</h4>
                                    <span style="color:#d3b68a">10</span>
                                </a-card>
                            </a-list-item>
                        </a-list>
                    </div>
                </div>
                <div class="right">
                    <div class="icon-right-wrapper">
                        <div><a-icon type="plus-circle" class="add-icon"/></div>
                        <span>新建</span>
                    </div>
                    <div class="icon-left-wrapper">
                        <div><a-icon type="setting" class="setting-icon"/></div>
                        <span>设置</span>
                    </div>
                </div>
            </div>
            <div class="manage">
                <a-tabs defaultActiveKey="1" @change="callback" style="text-align: left">
                    <a-tab-pane tab="关注用户" key="1">
                        <FollowerList />
                    </a-tab-pane>
                    <a-tab-pane tab="粉丝用户" key="2">
                        <FolloweredList />
                    </a-tab-pane>
                    <a-tab-pane tab="收藏书籍" key="3">
                        <FavoriteBooks />
                    </a-tab-pane>
                    <a-tab-pane tab="收藏书单" key="4" forceRender>
                        <FavoriteBookLists />
                    </a-tab-pane>
                    <a-tab-pane tab="收藏鉴赏" key="5">
                        <FavoriteAppre />
                    </a-tab-pane>
                    <a-tab-pane tab="原创鉴赏" key="6">
                        <PersonAppre />
                    </a-tab-pane>
                </a-tabs>
            </div>
        </div>
    </div>
  </div>
</template>
<script>
    import FollowerList from '../components/FollowerList.vue'
    import FolloweredList from '../components/FolloweredList.vue'
    import FavoriteBooks from '../components/FavoriteBooks'
    import FavoriteBookLists from '../components/FavoriteBookLists.vue'
    import FavoriteAppre from '../components/FavoriteAppre.vue'
    import PersonAppre from '../components/PersonAppre.vue'
    const data = [{
        title: '关注',
    }, {
        title: '粉丝',
    }, {
        title: '原创鉴赏',
    }, {
        title: '所有收藏',
    }, ]
    export default {
        data() {
            return {
                data,
            }
        },
        methods: {
            callback(key) {
                console.log(key)
            },
        },
        components: {
            FollowerList,
            FolloweredList,
            FavoriteBooks,
            FavoriteBookLists,
            FavoriteAppre,
            PersonAppre
        },
    }
</script>
<style lang="less" scoped>
    .container {
        margin-top: 70px;
        margin-left: 50px;
        border-top: 2px dotted #f2eae6;
        border-left: 2px dotted #f2eae6;
        border-radius: 25px;
        .profile {
            display: flex;
            .left {
                flex-basis: 50%;
                .top {
                    display: flex;
                    text-align: left;
                    padding-top: 70px;
                    padding-left: 70px;
                    img {
                        height: 100px;
                        width: 100px;
                        border-radius: 50%;
                    }
                }
                .bottom {
                    padding-left: 70px;
                    padding-top: 20px;
                    .ant-card {
                        background-color: #fff;
                        color: rgb(157, 59, 60) !important;
                    }
                }
            }
            .right {
                flex-basis: 50%;
                color: #d3b68a;
                display: flex;
                justify-content: flex-end;
                .icon-right-wrapper,
                .icon-left-wrapper {
                    margin-top: 215px;
                    margin-right: 100px;
                    height: 86px;
                    cursor: pointer;
                    span {
                        color: #d3b68a;
                        margin-top: 5px;
                        display: block;
                    }
                }
                .add-icon,
                .setting-icon {
                    font-size: 60px;
                }
                .icon-right-wrapper:hover .add-icon,
                .icon-right-wrapper:hover span {
                    color: #9d3b3c;
                    transition: all .5s ease;
                    -webkit-transition: all 0.5s ease;
                }
                .icon-left-wrapper:hover .setting-icon,
                .icon-left-wrapper:hover span {
                    color: #9d3b3c;
                    transition: all .5s ease;
                    -webkit-transition: all 0.5s ease;
                }
            }
        }
        .manage {
            margin: 70px;
        }
    }
</style>

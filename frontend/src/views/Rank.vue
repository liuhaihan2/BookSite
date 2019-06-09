<template>
  <div class="rank">
    <h1>This is the rank page</h1>
    <div style="background-color: #f2eae6; padding: 50px">
        <!-- <img src="../assets/image/rankpage.png" alt="" width='95%'> -->
        <div class="first-part">
            <div class="favorite-rank">
                <h2>收藏排行</h2>
                <a-list
                    bordered
                    :dataSource="data"
                >
                    <a-list-item slot="renderItem" slot-scope="item, index" :key="index">{{item}}</a-list-item>
                    <div slot="footer" style="text-align: right">>>更多</div>
                </a-list>
            </div>
            <div class="appre-rank">
                <h2 style="border-left: 4px solid #f9c43b;">鉴赏排行</h2>
                <a-list
                    bordered
                    :dataSource="data"
                >
                    <a-list-item slot="renderItem" slot-scope="item, index" :key="index">{{item}}</a-list-item>
                    <div slot="footer" style="text-align: right">>>更多</div>
                </a-list>
            </div>
        </div>
    </div>
  </div>
</template>
<script>
    const data = [
        '1. Racing car sprays burning fuel into crowd.',
        '2. Japanese princess to wed commoner.',
        '3. Australian walks 100km after outback crash.',
        '4. Man charged over missing wedding girl.',
        '5. Los Angeles battles huge wildfires.',
        '6. Racing car sprays burning fuel into crowd.',
        '7. Japanese princess to wed commoner.',
        '8. Australian walks 100km after outback crash.',
        '9. Man charged over missing wedding girl.',
        '10. Los Angeles battles huge wildfires.',
    ]

    export default {
        data() {
            return {
                data,
            }
        },
    }
</script>
<style lang="less" scoped>
    .rank {
        .first-part {
            width: 60%;
            /* height: 600px; */
            background-color: #fff;
            margin: 20px auto 0 auto;
            display: flex;
        }
        .favorite-rank,
        .appre-rank {
            border: 1px solid #f2eae6;
            flex-basis: 50%;
            h2 {
                border-left: 4px solid #ef6351;
                text-align: left;
                margin: 10px;
                padding-left: 10px;
            }
        }
        .ant-list {
            width: 80%;
            border-color: #f2eae6;
            margin: 50px auto;
        }
    }
</style>

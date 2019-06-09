<template>
    <div class="category" style="background-color: #f2eae6;">
        <div class="filter">
                <span style="float: left;line-height: 33px;color: rgb(208, 178, 131);">排序:&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <a-radio-group defaultValue="a" buttonStyle="solid">
                    <a-radio-button value="a">收藏</a-radio-button>
                    <a-radio-button value="b">鉴赏</a-radio-button>
                    <a-radio-button value="c">评论</a-radio-button>
                </a-radio-group>
                <div style="clear:both;margin-top: 10px"></div>
                <span style="float: left;line-height: 33px;color: rgb(208, 178, 131);">标签:&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <a-radio-group defaultValue="a" buttonStyle="solid">
                    <a-radio-button value="a">收藏</a-radio-button>
                    <a-radio-button value="b">鉴赏</a-radio-button>
                    <a-radio-button value="c">评论</a-radio-button>
                </a-radio-group>
        </div>
        <div class="result">
            <div style="display: flex">
                <a-card
                    style="width: 150px; margin: 20px;"
                >
                    <img src="https://os.alipayobjects.com/rmsportal/QBnOOoLaAfKPirc.png" slot="cover">
                    <a-card-meta title="书名">
                        <span slot="description">书籍介绍</span>
                    </a-card-meta>
                </a-card>
                <a-card
                    style="width: 150px; margin: 20px;"
                >
                    <img src="https://os.alipayobjects.com/rmsportal/QBnOOoLaAfKPirc.png" slot="cover">
                    <a-card-meta title="书名">
                        <span slot="description">书籍介绍</span>
                    </a-card-meta>
                </a-card>
                <a-card
                    style="width: 150px; margin: 20px;"
                >
                    <img src="https://os.alipayobjects.com/rmsportal/QBnOOoLaAfKPirc.png" slot="cover">
                    <a-card-meta title="书名">
                        <span slot="description">书籍介绍</span>
                    </a-card-meta>
                </a-card>
            </div>
        </div>
    </div>
</template>
<script>
</script>
<style lang="less" scoped>
    .category {
        margin-top: 50px;
        padding: 60px;
    }

    .filter {
        width: 80%;
        height: 120px;
        background-color: #fff;
        padding: 20px;
        margin: 0px auto;
        text-align: left;
        box-shadow: 0 0.1875rem 1.5rem rgba(0, 0, 0, 0.2);
        border-radius: 9px;
    }

    .result {
        width: 75%;
        background-color: #fff;
        margin: 0px auto;
        height: 500px;
        margin-top: 20px;
        padding: 20px;
    }

    .ant-radio-group {
        float: left;
    }

    .ant-card:hover {
        box-shadow: 0 0.1875rem 1.5rem rgba(0, 0, 0, 0.2);
    }
</style>

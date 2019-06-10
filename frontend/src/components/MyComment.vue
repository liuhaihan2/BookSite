<template>
    <div class="edit-area">
        <a-list
        v-if="comments.length"
        :dataSource="comments"
        :header="`${comments.length} ${comments.length > 1 ? 'replies' : 'reply'}`"
        itemLayout="horizontal"
        >
        <a-list-item slot="renderItem" slot-scope="item">
            <a-comment
            :author="item.author"
            :avatar="item.avatar"
            :content="item.content"
            :datetime="item.datetime"
            >
            </a-comment>
        </a-list-item>
        </a-list>
        <a-comment>
        <a-avatar
            slot="avatar"
            src="https://zos.alipayobjects.com/rmsportal/ODTLcjxAfvqbxHnVXCYX.png"
            alt="Han Solo"
        />
        <div slot="content">
            <a-form-item>
            <a-textarea :rows="4" @change="handleChange" :value="value" ></a-textarea>
            </a-form-item>
            <a-form-item>
            <a-button
                htmlType="submit"
                :loading="submitting"
                @click="handleSubmit"
                type="primary"
            >
                提交评论
            </a-button>
            </a-form-item>
        </div>
        </a-comment>
    </div>
</template>
<script>
    import moment from 'moment'
    export default {
        data() {
            return {
                comments: [],
                submitting: false,
                value: '',
                moment,
            }
        },
        methods: {
            handleSubmit() {
                if (!this.value) {
                    return;
                }

                this.submitting = true

                setTimeout(() => {
                    this.submitting = false
                    this.comments = [{
                            author: 'Han Solo',
                            avatar: 'https://zos.alipayobjects.com/rmsportal/ODTLcjxAfvqbxHnVXCYX.png',
                            content: this.value,
                            datetime: moment().fromNow(),
                        },
                        ...this.comments,
                    ]
                    this.value = ''
                }, 1000)
            },
            handleChange(e) {
                this.value = e.target.value
            }
        },
    }
</script>
<style lang="less" scoped>
    .edit-area {
        width: 85%;
        margin: 0px auto;
    }
</style>

<template>
    <div class="list-detail" style="background-color: #f2eae6; padding-top: 50px">
        <div class="list">
            <BookListItem />
            <BookListItem />
        </div>
    </div>
</template>
<script>
    import BookListItem from '../components/BookListItem.vue'
    export default {
        data() {
            return {
                formLayout: 'horizontal',
                form: this.$form.createForm(this),
            };
        },
        components: {
            BookListItem
        },
        methods: {
            handleSubmit(e) {
                e.preventDefault();
                this.form.validateFields((err, values) => {
                    if (!err) {
                        // eslint-disable-next-line
                        console.log('Received values of form: ', values);
                    }
                });
            },
            handleSelectChange(value) {
                // eslint-disable-next-line
                console.log(value);
                this.form.setFieldsValue({
                    note: `Hi, ${value === 'male' ? 'man' : 'lady'}!`,
                });
            },
        },
    };
</script>
<style lang="less" scoped>
    .list {
        width: 80%;
        background-color: #fff;
        margin: 80px auto 0px auto;
    }
</style>

<template>
        <div id="my-editor">
            <div class="container">
                <ckeditor :editor="editor" v-model="editorData" :config="editorConfig">
                </ckeditor>
            </div>
            <a-button style="margin-top: 50px;">提交</a-button>
        </div>
    </template>

<script>
    import ClassicEditor from '@ckeditor/ckeditor5-build-classic';

    export default {
        name: 'editor',
        data() {
            return {
                editor: ClassicEditor,
                editorData: '<p>写下你的感想吧！</p>',
                editorConfig: {
                    replace: {
                        height: "400px"
                    }
                }
            };
        }
    }
</script>
<style lang="less">
    .ck-editor__editable_inline {
        min-height: 400px !important;
    }

    #my-editor {
        padding: 80px;
        background-color: #f2eae6;
    }

    .container {
        width: 80%;
        margin: 20px auto 0px auto;
        text-align: left;
        display: block;
    }
</style>

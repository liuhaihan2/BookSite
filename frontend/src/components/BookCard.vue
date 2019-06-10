<template>
    <div id="container">
        <div id="blog-card">
            <a class="card-link" href="#">
                <article class="blog-card">
                    <router-link to="/bookdetail">
                        <img class="post-image" src='../assets/image/BOOK-1.png' v-if="index === 0"/>
                        <img class="post-image" src='../assets/image/BOOK-2.png' v-if="index === 1"/>
                        <img class="post-image" src='../assets/image/BOOK-3.png' v-if="index === 2"/>
                        <img class="post-image" src='../assets/image/BOOK-4.png' v-if="index === 3"/>
                        <img class="post-image" src='../assets/image/BOOK-5.png' v-if="index === 4"/>
                        <img class="post-image" src='../assets/image/BOOK-6.png' v-if="index === 5"/>
                    </router-link>
                    <div class="article-details">
                        <span class="post-category" style="display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 1;overflow: hidden;">{{ data.summary }}</span>
                        <h3 class="post-title">{{ data.book_name }}</h3>
                        <p class="post-description" style="display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 2;overflow: hidden;">{{ data.introduction }}</p>
                        <p class="post-author">By {{ data.author }}</p>
                    </div>
                </article>
            </a>
        </div>
    </div>

</template>

<script>
    export default {
        name: "BookCard",
        data() {
            return {
                img: [
                    '/img/BOOK-1.cd82760a.png',
                    '/img/BOOK-2.fc94c94a.png',
                    '/img/BOOK-3.658f2a51.png',
                    '/img/BOOK-4.f07c9778.png',
                    'http://book.img.ireader.com/idc_1/m_1,w_300,h_400/08c0f360/group61/M00/9C/7A/CmQUOVycjHiEHEavAAAAAAqB0h8765287492.jpg?v=zzHQJdFa&t=CmQUOVycjHg.'
                ]
            };
        },
        props: {
            data: Object,
            index: Number
        }
    };
</script>

<style lang="scss" rel="stylesheet/scss" scoped>
    @import url('https://fonts.googleapis.com/css?family=Roboto:400,700');
    $bg: #eedfcc;
    $text: #777;
    $black: #121212;
    $white: #fff;
    $red: #e04f62;
    $border: #ebebeb;
    $shadow: rgba(0,
    0,
    0,
    0.2);
    @mixin transition($args...) {
        transition: $args;
    }
    
    * {
        box-sizing: border-box;
        &::before,
        &::after {
            box-sizing: border-box;
        }
    }
    
    body {
        display: flex;
        font-family: 'Roboto', sans-serif;
        font-weight: 400;
        color: $text;
        background: $bg;
        font-size: 0.9375rem;
        min-height: 100vh;
        margin: 0;
        line-height: 1.6;
        align-items: center;
        justify-content: center;
        text-rendering: optimizeLegibility;
    }
    
    #container {
        width: 28rem;
        height: 13.625rem;
        margin: 15px;
    }
    
    .blog-card {
        display: flex;
        flex-direction: row;
        background: $white;
        /* box-shadow: 0 0.1875rem 1.5rem $shadow; */
        border-radius: 0.375rem;
        overflow: hidden;
    }
    
    .blog-card:hover {
        box-shadow: 0 0.1875rem 1.5rem $shadow;
        transition: all .5s ease;
    }
    
    .card-link {
        position: relative;
        display: block;
        color: inherit;
        text-decoration: none;
        &:hover .post-title {
            @include transition(color 0.3s ease);
            color: $red;
        }
        &:hover .post-image {
            @include transition(opacity 0.3s ease);
            opacity: 0.9;
        }
    }
    
    .post-image {
        @include transition(opacity 0.3s ease);
        display: block;
        width: 100%;
        object-fit: cover;
    }
    
    .article-details {
        padding: 1.5rem;
        text-align: left;
    }
    
    .post-category {
        display: inline-block;
        text-transform: uppercase;
        font-size: 0.75rem;
        font-weight: 700;
        line-height: 2;
        letter-spacing: 0.0625rem;
        margin: 0 0 0.75rem 0;
        padding: 0 0 0.25rem 0;
        border-bottom: 0.125rem solid $border;
    }
    
    .post-title {
        @include transition(color 0.3s ease);
        font-size: 1.125rem;
        line-height: 1.4;
        color: $black;
        font-weight: 700;
        margin: 0 0 0.5rem 0;
    }
    
    .post-author {
        font-size: 0.875rem;
        line-height: 1;
        margin: 1.125rem 0 0 0;
        padding: 1.125rem 0 0 0;
        border-top: 0.0625rem solid $border;
    }
    
    @media (max-width: 40rem) {
        #container {
            width: 18rem;
            height: 27.25rem;
        }
        .blog-card {
            flex-wrap: wrap;
        }
    }
    
    @supports (display: grid) {
        body {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            grid-gap: 0.625rem;
            grid-template-areas: ". main main ." ". main main .";
        }
        #container {
            grid-area: main;
            align-self: center;
            justify-self: center;
        }
        .post-image {
            height: 100%;
        }
        .blog-card {
            display: grid;
            grid-template-columns: 1fr 2fr;
            grid-template-rows: 1fr;
        }
        @media (max-width: 40rem) {
            .blog-card {
                grid-template-columns: auto;
                grid-template-rows: 12rem 1fr;
            }
        }
    }
</style>
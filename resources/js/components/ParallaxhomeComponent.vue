<template>
    <div>
        <div style="background-color: #fff; height: 100vh;">
            <h1 style="margin-top: 0; padding-top: 20px;">Scroll down ⬇</h1>
        </div>
        <div style="position: relative; z-index: 9999; background-color: #fff;">
            <h1 style="margin:0;">Parallax Effect</h1>
            <parallax parallaxClass="is-parallax" :parallax="true" speedFactor="0.15" :direction="up">
                <img :src="'images/pexels-photo-241307.jpeg'" alt="hola">
            </parallax>
        </div>
        <div style="background-color: #fff; height: 50vh;"></div>
        <h1>Parallax fixed position </h1>

        <div style="position: relative;">
            <parallax :fixed="true">
                <img :src="'images/placebg.jpg'">
            </parallax>
        </div>

        <div style="background-color: #fff; height: 100vh;"></div>
    </div>
</template>

<script>
    import Parallax from 'vue-parallaxy'

    export default {
        name: 'app',
        components: {
            Parallax
        }
    }
</script>

<style>
    body {
        margin: 0;
    }
    #app {
        font-family: 'Avenir', Helvetica, Arial, sans-serif;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        text-align: center;
        color: #2c3e50;
        position: relative;
    }
</style>
